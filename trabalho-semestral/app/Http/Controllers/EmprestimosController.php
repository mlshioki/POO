<?php

namespace App\Http\Controllers;

use App\Models\Emprestimos;
use Illuminate\Http\Request;

class EmprestimosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('emprestimo.emprestimos')->with('emprestimos', Emprestimos::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emprestimo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Emprestimos::create($request->all());
        return redirect(route('emprestimo.emprestimos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprestimos  $emprestimos
     * @return \Illuminate\Http\Response
     */
    public function show(Emprestimos $emprestimos)
    {
        return view('emprestimo.showEmprestimo')->with('emprestimo', $emprestimos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emprestimos  $emprestimos
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprestimos $emprestimos)
    {
        return view('emprestimo.edit')->with('emprestimo', $emprestimos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emprestimos  $emprestimos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprestimos $emprestimos)
    {
        $emprestimos->update($request->all());
        session()->flash('success', 'O empréstimo foi atualizado com sucesso!');
        return redirect(route('emprestimo.emprestimos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emprestimos  $emprestimos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprestimos $emprestimos)
    {
        $emprestimos->delete();
        session()->flash('success', 'O empréstimo '. $emprestimos->nome . ' foi apagado com sucesso!');
        return redirect(route('emprestimo.emprestimos'));
    }
}
