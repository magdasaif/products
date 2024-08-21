<?php

namespace Magdasaif\Products\app\http\controllers; 

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function test(){
        return 'hello';
    }
}
