@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'ProduitController@store', 'files'=>true]) !!}

    <h2>Titre article</h2>
    {!! Form::text('article') !!}

    <h2>Prix</h2>
    {!! Form::number('prix') !!}

    <h2>Description courte<br></h2>
    <input name="description_courte" type="text" maxlength="100" id="commentairesArea">

    <h2>Description détaillé<br></h2>
    <input name="description_longue" type="text" id="commentairesArea">

    <h2>Choisissez une image<br></h2>
    {!! Form::file('image') !!}

    <div class="form-modoButtun">
        {!! Form::submit('Envoyer', array( 'class'=>'btn btn-danger form-control' )) !!}
    </div>

    {!! Form::close() !!}

@endsection