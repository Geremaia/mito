<?php

namespace App\Http\Controllers;

use App\Models\Product as Product;

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
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    public function create(){
        // load the create form (app/views/nerds/create.blade.php)
        return view('products.create');
    }
    
    public function store(){
        $nome  = $_POST['name'];
        $valor = $_POST['valor'];
    
        $p = new Product;
        $p->name = $nome;
        $p->valor = $valor;
        $p->save(); 

        if($p->save()) {
            $_SESSION['msg'] = "Produto cadastrado com sucesso";
            header('Location: /products');
            exit();
        } else {
            $_SESSION['error'] = "Ocorreu um erro ao cadastrar o produto, verifique os dados novamente.";
            return include('../resources/views/products/new.blade.php');
        }   
    }

    public function show($id){
        //
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    public function update(ProductRequest $request, $id){
        $product = Product::findOrFail($id);
        $product->name        = $request->name;
        $product->valor       = $request->valor;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Product updated successfully!');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('alert-success','Product hasbeen deleted!');
    }
}