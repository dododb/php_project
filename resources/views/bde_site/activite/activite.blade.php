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
        @if(DB::table('tranche_horaire')->select('id')->where('activite_id', $object->idObject)->first() != null)
            <?php $list = DB::table('tranche_horaire')->select('id', 'horaire', 'activite_id')->where('activite_id', $object->idObject)->get();?>

            @if(DB::table('tranche_horaire')->join('vote', 'vote.horaire_id', '=', 'tranche_horaire.id')->select('activite_id')->where('user_id', Auth::user()->id)->where('activite_id', $object->idObject)->first() == null)
                <form method="post" action="{{$object->idObject .'/voter'}}">
                    {!! Form::token() !!}
                    <select name="id" size="1">

                        @foreach ($list as $vote)
                            <option value="{{$vote->id}}"> {{$vote->horaire}};
                        @endforeach



                    </select>
                    <input type="submit" value="Voter"/>
                    </option>
                </form>
            @else
                Horraire voté : {{DB::table('tranche_horaire')->join('vote', 'vote.horaire_id', '=', 'tranche_horaire.id')->select('tranche_horaire.horaire')->where('user_id', Auth::user()->id)->where('activite_id', $object->idObject)->first()->horaire}}
            @endif
        @endif
    </div>

    @if(!Auth::guest())
        @if(DB::table('inscrit')->where('activite_id', $object->idObject)->where('user_id', Auth::user()->id)->first() == null)
        <div class="galleriProduit">
            <form method="post" action="{{$object->idObject .'/inscription'}}">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <input type="hidden" name="supprimer" value="activite">
                <input type="submit" name="inscription" value="S'inscrire">
            </form>
        </div>
        @else
            <div class="galleriProduit">
                <form method="post" action="{{$object->idObject .'/desinscription'}}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <input type="hidden" name="supprimer" value="activite">
                    <input type="submit" name="desinscription" value="Se désinscrire">
                </form>
            </div>
        @endif
    @endif
    <div class="DescriptionComplete">
        <div style="width: 860px; height: 450px;">{!! Mapper::render() !!}</div>
    </div>

    <a href="{{$object->idObject . '\galerie'}}"><div class="galleriProduit">Galerie</div></a>
    <a href="{{$object->idObject . '\inscrits'}}"><div class="galleriProduit">Inscrits</div></a>

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
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" name="deleteActivite" value="Supprimer">
            </form>
        </div>
    @endpermission
@endsection