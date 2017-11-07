<?php

namespace App\Http\Controllers;

use App\Models\Category as Product;

use Illuminate\Http\Request;



class CategoryController extends Controller{
    
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
        $categories = Product::all();
        return view('categories.index')->with('categories', $categories);
    }

    public function create(){
        // load the create form (app/views/nerds/create.blade.php)
        return view('categories.create');
    }
    
    public function store(){
        $nome  = $_POST['name'];
    
        $c = new Category;
        $c->name = $nome;
        $c->save(); 

        if($p->save()) {
            $_SESSION['msg'] = "Categoria cadastrada com sucesso";
            header('Location: /categories');
            exit();
        } else {
            $_SESSION['error'] = "Ocorreu um erro ao cadastrar a categoria, verifique os dados novamente.";
            return include('../resources/views/categories/new.blade.php');
        }   
    }

    public function show($id){
        //
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('categories.edit',compact('category'));
    }

    public function update(CategoryRequest $request, $id){
        $category = Category::findOrFail($id);
        $category->name        = $request->name;
        $category->save();
        return redirect()->route('cagegory.index')->with('message', 'Category updated successfully!');
    }

    public function destroy($id){
        $cagegory = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('Category.index')->with('alert-success','Category hasbeen deleted!');
    }
}