<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Resource;
use App\UploadedPath\UploadResource;

class ResourceController extends Controller
{

    public function addPhoto(Request $request, $id){

        $product = Product::find($id);
        

        $resources = $this->validate(request(), [
            'image' => 'required'
        ]);



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $resource['img_path'] = UploadResource::getUniqueName($file); // получение уникального имени файла
            $file->move(public_path() . '/img/product-foto-main', $resource['img_path']);
        }

        $pathToPreview = UploadResource::pathToPreview($resource, $product); //Создание и запись первью загружаемого фото

        if($pathToPreview){
            //получение данных для записи в БД
            $resources['img_path'] = $resource['img_path'];
            $resources['img_preview_H300_path'] = $pathToPreview['img_preview_H300_path'];
            $resources['img_preview_H320_path'] = $pathToPreview['img_preview_H320_path'];
            $resources['img_preview_H570_path'] = $pathToPreview['img_preview_H570_path'];
            $resources['product_id'] = $product->id;
        }

        if ($resources) {
            Resource::create($resources);// Запись в БД данных о созданном первью

            return back()->with('success', 'Фото товара добавлено');
        }
        return back()->with('error', 'error');
    }

    public function destroy(Request $request, $id){

        $product = Product::find($id);

        $this->validate(request(), [
            "delete" => "required"
        ]);

        $resourcesId = $request->get('delete');
        foreach ($resourcesId as $value) {
            $resources = Resource::where('id', $value)->first();

            $resources->delete();

            $oldPicture = $resources->img_path;
            $oldPreviewH300 = $resources->img_preview_H300_path;
            $oldPreviewH320 = $resources->img_preview_H320_path;
            $oldPreviewH570 = $resources->img_preview_H570_path;
            if ($oldPicture && $oldPreviewH300 && $oldPreviewH320 && $oldPreviewH570) {
                unlink(public_path() . '/img/product-foto-main/' . $oldPicture); //удаляем старую картинку товара
                unlink(public_path() . '/img/product/preview/' . $product->short_name  .
                    '/225x300/' . $oldPreviewH300); //удаляем старую картинку товара
                unlink(public_path() . '/img/product/preview/' . $product->short_name .
                    '/230x320/' . $oldPreviewH320); //удаляем старую картинку товара
                unlink(public_path() . '/img/product/preview/' . $product->short_name .
                    '/405x570/' . $oldPreviewH570); //удаляем старую картинку товара
            }
        }
        return back()->with('success', 'Фото товара удалено');
    }
}
