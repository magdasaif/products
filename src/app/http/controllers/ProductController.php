<?php

namespace Magdasaif\Products\app\http\controllers; 

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Magdasaif\Products\app\http\requests\ProductRequest;

class ProductController extends Controller
{
    //==================================================================
    public function test(){
        return view('products::test-view');//products is the name of namespace in loadViewsFrom fun 
    }
    //==================================================================
    public function storeImage(ProductRequest $request){
        // return $request->all();

        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,gif|max:2048',
        // ]);
        //==================================================================
        // $imageName = time().'.'.$request->image->getClientOriginalExtension();
        // $image_path=$request->image->storeAs('images', $imageName);//storage/app/images
        //==================================================================
        // $path = $request->file('image');
        // $file = $path->hashName();
        // // Storage::disk('images')->put($path, Image::make($file)->encode('jpg', 50));
        // Storage::disk('images')->put($path,$path);

        //==================================================================
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            
            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });
            
            $img->stream(); // <-- Key point
            
            //dd();
            // Storage::disk('images')->put('images/1/smalls'.'/'.$fileName, $img, 'public');
            Storage::disk('product-images')->put($fileName, $img, 'public');
        }
        //==================================================================
        // dd($image_path);
        return redirect()->route('fetch_images');

    }
    //==================================================================
    public function fetchImage(){
        // return asset('storage/'.$image_path);
        $imgs = [];
        $files = File::files(storage_path('app/public/product-images'));
        foreach ($files as $file) {
            $imgs[]= '<img src="'.asset('storage/product-images/'.$file->getRelativePathname()).'">';
        }
        return $imgs;
    }
    //==================================================================

}
