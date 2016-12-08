@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h3>Editar livro</h3>

        {!! Form::model($livros,[
             'route' =>['livros.update', 'livros' => $livros->id
             ],'class' => 'form', 'method' => 'PUT']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('subtitle', 'sub titulo') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Preço') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar livro', ['class' => 'btn btn-primary']) !!}
            <a href="{{route('livros.index')}}" class="btn btn-primary">Cancelar</a>
        </div>
        {!! form::close() !!}
    </div>
</div>
@endsection