<?php

namespace Loja\Http\Controllers;
use Loja\Livros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Para paginação troque o "Category::all" pro "Category::query()->paginate(5)". "simplePaginate" outra opção*/
        $livros = Livros::query()->paginate(5);
        //dd($categories);Mostra todas a informações sobre infomações das tabelas.
        return view('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Livros::create($request->all());
        return redirect()->route('livros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!($livros = Livros::find($id))){
            throw new ModelNotFoundException('Livros não foi encontrado!');
        }
        return view('livros.edit', compact('livros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!($livros = Livros::find($id))){
            throw new ModelNotFoundException('livros não foi encontrado!');
        }
        $data = $request->all();
        $livros->fill($data);
        $livros->save();
        return redirect()->route('livros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livros $livro)
    {
        $livro->delete();
        return redirect()->route('livros.index');
    }
}



