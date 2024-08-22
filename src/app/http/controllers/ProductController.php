<?php

namespace Magdasaif\Products\app\http\controllers; 

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    //==================================================================
    public function test(){
        return view('products::test-view');//products is the name of namespace in loadViewsFrom fun 
    }
    //==================================================================
    public function storeImage(Request $request){
        // return $request->all();

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $image_path=$request->image->storeAs('images', $imageName);//storage/app/images
        // dd($image_path);
        return redirect()->route('fetch_images');

    }
    //==================================================================
    public function fetchImage(){
        // return 'ffffffffff';
        // return asset('storage/'.$image_path);

        $files = File::files(storage_path('images'));
        $images = [];

        foreach ($files as $file) {
            $images[] = $file->getRelativePathname();
        }

        return $images;
    }
    //==================================================================

}
