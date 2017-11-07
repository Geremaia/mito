<?php

namespace App\Http\Controllers;

use App\Models\Product as Product;
use DB;

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
        return view('products.show');
    }

    public function edit(){
        $id = $_GET['id'];
        $nome  = isset($_GET['product_name']) ? $_GET['product_name'] : '';
        $valor = isset($_GET['product_value']) ? $_GET['product_value'] : '';
        
        // Aqui vai toda a consulta com o banco de dados
        return include('../resources/views/products/show.blade.php');
    }

    public function editconfirm(){
        $id  = $_POST['product_id'];
        $nome = $_POST['product_name'];
        $valor = $_POST['product_value'];
        DB::table('products')
            ->where('id', $id)
            ->update(['nome' => $nome]);
        DB::table('products')
            ->where('id', $id)
            ->update(['valor' => $valor]);
            header('Location: /admin/products');
            exit();
    }

    public function delete(){
        return include('../resources/views/products/delete.blade.php');
    }

    public function deleteconfirm(){
        $id  = $_POST['product_id'];
        DB::table('products')
            ->where('id', '=', $id)
            ->delete();
            header('Location: /admin/products');
            exit();
    }
}