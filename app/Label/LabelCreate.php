<?php

namespace App\Label;

use ZipArchive;

class LabelCreate
{

    public function create ($path, $name, $code){

        $zip = new ZipArchive();

        $zipName = $code . '.zip';
//        dd($zipName);
        copy($path . $code . '.docx', $path .$zipName);

        // Open the document
        $zip->open($path . $zipName);
        $content = $zip->getFromIndex( 3);
        $p = strpos($content, '<w:t>NAME</w:t>');
        $p1 = strpos($content, '<w:t>CODE</w:t>');
        if ($p===false || $p1 === false) exit("Tag <w:t>NAME</w:t> not found in document.");

        $zip->extractTo($path  . $code);

        $zip->close();
        unlink($path . $zipName);

        file_get_contents($path . '/' . $code . '/word/document.xml');
        $content = str_replace('<w:t>NAME</w:t>', '<w:t>'.$name.'</w:t>', $content);
        $content = str_replace('<w:t>CODE</w:t>', '<w:t>'.$code.'</w:t>', $content);
        file_put_contents($path . $code . '/word/document.xml', $content, LOCK_EX);

        $pathdir = $path . $code; // путь к папке, файлы которой будем архивировать

        $zip = new ZipArchive();
        $nameArhive = $code . '.zip'; //название архива
        if ($zip -> open($path . $nameArhive, ZipArchive::CREATE) === TRUE){ // создаем архив, если все прошло удачно продолжаем
            $dir = opendir($pathdir); // открываем папку с файлами

            while( $file = readdir($dir)){ // перебираем все файлы из нашей папки

                // проверяем файл ли мы взяли из папки
                if (is_file($pathdir . '/' . $file)){
                    $zip -> addFile($pathdir . '/' . $file, $file); // и архивируем
                    echo("Заархивирован: " . $pathdir . '/' . $file) , '<br/>';
                }

                // проверяем файл или папка?
                if (is_dir($pathdir . '/' . $file)){ // если папка
                    $zip -> addEmptyDir($file); // создаем папку с именем
                    $inDir = opendir($pathdir . '/' . $file); // открываем папку

                    while ($fileDir = readdir($inDir)){ // читаем файлы в папке

                        if (is_file($pathdir . '/' . $file . '/' . $fileDir)){ //если файл? Архивируем
                            $zip -> addFile($pathdir . '/' . $file . '/' . $fileDir, $file . '/' . $fileDir); // и архивируем
                            echo("Заархивирован: " . $pathdir . '/' . $file . '/' . $fileDir) , '<br/>';
                        }
                    }

                }
//                if(is_dir($file)){
////                    if ($file == "." || $file == ".."){
////
////                    }
//                }
                dump($file);
            }
        $zip -> close(); // закрываем архив.
        }else{
            die ('Произошла ошибка при создании архива');
        }


        // Add the text at the end
//        $content = str_replace('<w:t>NAME</w:t>', '<w:t>'.$name.'</w:t>', $content);
//        $content = str_replace('<w:t>CODE</w:t>', '<w:t>'.$code.'</w:t>', $content);

//        $zip->addFromString($path . $zipName . '/word/document.xml', $content);
//        $zip->renameIndex(3, $content);

        copy($path . $nameArhive, $path . $code . '.doc');
        unlink($path . $nameArhive);


        // Save as a new file
//        $zip->Flush(TBSZIP_FILE, 'new.docx');
    }

}
?>