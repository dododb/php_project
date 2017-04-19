@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'ProduitController@store', 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('Titre', 'Titre produit') !!}
        {!! Form::text('article') !!}
    </div>

    <div class="form-group">
        {!! Form::label('prix', 'choisissez un prix') !!}
        {!! Form::number('prix') !!}
    </div>

    <div class="form-group">
        {!! Form::label('description courte', 'description courte') !!}
        {!! Form::text('description_courte') !!}
    </div>

    <div class="form-group">
        {!! Form::label('description longue', 'description longue') !!}
        {!! Form::text('description_longue') !!}
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Choisissez une image') !!}
        {!! Form::file('image') !!}
    </div>

    <div class="form-modoButtun">
        {!! Form::submit('Save', array( 'class'=>'btn btn-danger form-control' )) !!}
    </div>

    {!! Form::close() !!}

@endsection