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
        $products = ProductController::all();

        // load the view and pass the nerds
        return View::make('products.index')
            ->with('products', $products);
    }
    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('products.create');
    }
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'nome'       => 'required',
            'valor'      => 'required|valor',
        );
        $validator = Validator::make(Input::all(), $rules);
    }
}