<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TestController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::where('featured', true)->take(8)->inRandomOrder()->get();
        $products = Product::where('featured', true)->take(8)->inRandomOrder()->get();
        return view('test-product')->with('products', $products);
    }
}
