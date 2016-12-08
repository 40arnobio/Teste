@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h3>Novo livro</h3>

        {!! Form::open(['route' => 'livros.store', 'class' => 'form']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('subtitle', 'Sub titulo') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Preço') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar livros', ['class' => 'btn btn-primary']) !!} |
            <a href="{{route('livros.index')}}" class="btn btn-primary">Cancelar</a>
        </div>
        {!! form::close() !!}
    </div>
</div>
@endsection