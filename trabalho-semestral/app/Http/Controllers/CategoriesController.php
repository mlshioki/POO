<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
        return view('category.index')->with('categories', Category::all());
    }

    public function create(){

        return view('category.create');

    }

    public function store(Request $request){
        Category::create($request->all());
        session()->flash('success', 'Categoria cadastrada com sucesso!');
        return redirect(route('category.index'));
    }

    public function destroy(Category $category){
        $category->delete();
        session()->flash('success', 'Categoria apagada com sucesso!');
        return redirect(route('category.index'));
    }

    public function edit(Category $category){
        return view('category.edit')->with('category', $category);
    }

    public function update(Request $request, Category $category){
        $category->update($request->all());
        session()->flash('success', 'O livro foi atualizado com sucesso!');
        return redirect(route('category.index'));
    }

}
