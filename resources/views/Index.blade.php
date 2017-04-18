@extends('layouts.app')

@section('content')
    <div class="container">
        {{$object->echoObject()}}
    </div>

@endsection