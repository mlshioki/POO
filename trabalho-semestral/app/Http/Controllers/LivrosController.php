<?php

namespace App\Http\Controllers;

use App\Models\Emprestimos;
use App\Models\Livros;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LivrosController extends Controller
{

    public function index(){
        return view('index')->with('livros', Livros::all());

    }

    public function create(){
        return view('livro.create')->with(['categories' => Category::all(), 'livros' => Livros::all()]);
    }

    public function store(Request $request){
        if($request->image){
            $image =  $request->file('image')->store('livro');
            $image = "storage/".$image;
        }else{
            $image = "storage/livro/imagempadrao.jpg";
        }

        $livro = Livros::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' =>$image
        ]);

        $livro->tags()->sync($request->tags);

        return redirect(route('livro.index'));
    }

    public function update(Request $request, Livros $livro){
        if($request->image){
            $image =  $request->file('image')->store('livro');
            $image = "storage/".$image;
            if($livro->image != "storage/livro/imagempadrao.jpg")
            Storage::delete(str_replace('storage/', '',$livro->image));
        }else{
            $image = $livro->image;
        }
        $livro->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' =>$image
        ]);

        $livro->tags()->sync($request->tags);

        session()->flash('success', 'O livro foi atualizado com sucesso!');
        return redirect(route('livro.index'));
    }

    public function edit(Livros $livro){
        return view('livro.edit')->with(['livros'=> $livro, 'categories'=>Category::all(), 'tags' => Tag::all()]);
    }

    public function allLivros(){
        return view('livro.allLivros')->with('livros', Livros::all());
    }

    public function show(Livros $livro){
        return view('livro.showLivro')->with(['livro' => $livro, 'category' => Category::all(), 'outros_livros' => Livros::all()]);
    }

    public function destroy(Livros $livro){
        $livro->delete();
        session()->flash('success', 'O livro foi apagado com sucesso!');
        return redirect(route('livro.index'));
    }

    public function trash(){
        return view('livro.trash')->with('products', Livros::onlyTrashed()->get());
    }

    public function restoreLivro($id){
        $livro = Livros::onlyTrashed()->where('id', $id)->firstOrFail();
        $livro->restore();
        return redirect(route('livro.trash'));
    }
}
