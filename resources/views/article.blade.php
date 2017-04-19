@extends('layouts.app')

@section('content')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Inscription à la lettre d'information</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'storeArticle']) !!}
                <div class="form-group {!! $errors->has('article') ? 'has-error' : '' !!}">
                    {!! Form::email('article', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre article')) !!}
                    {!! $errors->first('article', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection