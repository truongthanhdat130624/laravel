<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index ()
    {
        return view('frontend.product');
    }
    public function Product_detail ()
    {
        return view('frontend.product_detail');
    }
}
