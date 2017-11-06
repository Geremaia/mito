<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // get all the nerds
        $products = Product::all();

        // load the view and pass the nerds
        return View::make('products.index')
            ->with('products', $products);
    }
}