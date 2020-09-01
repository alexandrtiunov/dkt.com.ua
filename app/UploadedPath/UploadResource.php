<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 22.06.2018
 * Time: 10:05
 */

namespace App\UploadedPath;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\UploadedFile;



class UploadResource
{

    public static function getUniqueName(UploadedFile $file)
    {
        return $newname = date('Y-m-d') . '_' . time() . '_' . str_replace(" ", "_", $file->getClientOriginalName());
    }
    /*
     * Get path to upload file
     *
     * @return string
     */
    public static function pathToPreview($resource, $product){

        $pathToPreview = [];

        // первью размером 230х320

        $img = Image::make(public_path() . '/img/product-foto-main/' . $resource['img_path'])->resize(null, 320, function ($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $width = $img->width();
        if($width > 230){
            $img->crop(230, 320);
        }
        $img->basename = $img->filename . '_W-230_' . 'H-320' . '.jpg';
        $pathToPreview ['img_preview_H320_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['short_name'] . '/' . '230x320');
        if (!file_exists(public_path('/img/product/preview/' . $productPathPreview))) {
            mkdir(public_path('/img/product/preview/' . $productPathPreview), 755, true);
        }
        $img->save(public_path('/img/product/preview/' . $productPathPreview . '/' . $img->basename));

        // первью размером 225х300

        $img = Image::make(public_path() . '/img/product-foto-main/' . $resource['img_path'])->resize(null, 300, function ($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $width = $img->width();
        if($width > 225){
            $img->crop(225, 300);
        }
        $img->basename = $img->filename . '_W-225_' . ' H-300' . '.jpg';
        $pathToPreview ['img_preview_H300_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['short_name'] . '/' . '225x300');
        if (!file_exists(public_path('/img/product/preview/' . $productPathPreview))) {
            mkdir(public_path('/img/product/preview/' . $productPathPreview), 755, true);
        }
        $img->save(public_path('/img/product/preview/' . $productPathPreview . '/' . $img->basename));

        // первью размером 405х570

        $img = Image::make(public_path() . '/img/product-foto-main/' . $resource['img_path'])->resize(null, 570, function ($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $width = $img->width();
        if($width > 405){
            $img->crop(405, 570);
        }
        $img->basename = $img->filename . '_W-405_' . ' H-570' . '.jpg';
        $pathToPreview ['img_preview_H570_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['short_name'] . '/' . '405x570');
        if (!file_exists(public_path('/img/product/preview/' . $productPathPreview))) {
            mkdir(public_path('/img/product/preview/' . $productPathPreview), 755, true);
        }
        $img->save(public_path('/img/product/preview/' . $productPathPreview . '/' . $img->basename));

        return $pathToPreview;
    }
}