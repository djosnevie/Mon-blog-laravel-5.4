<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\product;
use App\productPhoto;

class ProductsController extends Controller
{
    public function uploadForm(){

    	return view('upload.form');
    }

    public function uploadSubmit(UploadRequest $request){
        
        #$path = Storage::putFile('photos', $request->file('photos'));
        #Storage::putFile('photos', new File(asset('img')));
        #dd($file->originalName());
		/*$product = Product::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->storeAs('photos', $request->id);
            ProductPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }*/
        /*$photos = time().'-'.$request->photos->getClientOriginalName();
        $nom = $request->photos->storeAs('yasika', $photos);
        $product = Product::create([
                'name'=> $request->name,
                'img'=> $request->photos->getClientOriginalName()

            ]);*/

        $data = $request->all();
        if(isset($data['photos'])){
            $nom = time().'-'.$request->photos->getClientOriginalName();
            Product::create([
                'name'=>$request->name,
                'img'=>$nom

            ]);
            $request->photos->storeAs('yasika', $nom);
        }

        return 'cava :)';

    }
}
