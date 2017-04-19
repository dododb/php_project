@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'ActiviteController@store', 'files'=>true]) !!}

    <h2>Titre activité</h2>
    {!! Form::text('nom_activite') !!}

    <h2>Prix</h2>
    {!! Form::number('prix') !!}

    <h2>Description courte<br></h2>
    <input name="description_courte" type="text" maxlength="100" id="commentairesArea">

    <h2>Description détaille<br></h2>
    <input name="description_longue" type="text" id="commentairesArea">

    <h2>Adresse<br></h2>
    <input name="adresse" type="text" id="commentairesArea">

    <h2>Choisissez une image<br></h2>
    <input name="photo_activite" type="file" id="commentairesArea">


    <div class="form-modoButtun">
        {!! Form::submit('Envoyer', array( 'class'=>'btn btn-danger form-control' )) !!}
    </div>

    {!! Form::close() !!}

@endsection