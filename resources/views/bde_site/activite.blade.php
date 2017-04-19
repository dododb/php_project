@extends('layouts.app')

@section('content')
    <div class="produitPresentation">
        <table class="produitTable">
            <tr>
                <td rowspan="5" id="produitImgCell"><img src="{{ $object->pathImg }}"></td>
            </tr>
            <tr>
                <td id="produitTitreCell">
                    <h2>{{ $object->titre }}</h2>
                </td>
            </tr>
            <tr>
                <td id="produitDescCell">{{ $object->descriptionRapide }}</td>
            </tr>
            <tr>
                <td id="produitPrixCell">{{ $object->prix }}€</td>
            </tr>
            <tr>
                <td id="produitAcheCell"><a href="">Acheter</a></td>
            </tr>
        </table>
    </div>
    <div class="DescriptionComplete">
        <p>{!! $object->descriptionLongue !!}</p>
    </div>

    <div class="DescriptionComplete">
        <form method="post" action="{{route('home')}}">
            <select name="nom" size="1">
                <option>lundi
                <option>mardi
                <option>mercredi
                <option>jeudi
                <option>vendredi
            </select>
            <input type="submit" value="Voter/s'inscire"/>
            </option>
        </form>
    </div>


    <div class="DescriptionComplete">
        <div style="width: 860px; height: 450px;">{!! Mapper::render() !!}</div>
    </div>

    <a href="{{$object->idObject . '\galerie'}}"><div class="galleriProduit">Galerie</div></a>
    @permission('admin')
    @if(isset($success))
        <div class="alert alert-success"> {{$success}} </div>
    @endif
    {!! Form::open(['action'=>'ImageController@store', 'files'=>true]) !!}



    <div class="form-group">
        {!! Form::label('image', 'Choose an image') !!}
        {!! Form::file('image') !!}
        {!! Form::hidden('activite_id', $object->idObject) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', array( 'class'=>'btn btn-danger form-control' )) !!}
    </div>

    {!! Form::close() !!}
    <div class="alert-warning">
        @foreach( $errors->all() as $error )
            <br> {{ $error }}
        @endforeach
    </div>

        <div class="galleriProduit">
            <form method="post" action="{{$object->idObject . '/delete'}}">
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                <input type="submit" name="deleteActivite" value="Supprimer">
            </form>
        </div>
    @endpermission
@endsection