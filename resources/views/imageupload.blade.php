
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
    <h1 class="well well-lg">Enregistrer une image</h1>
    <div class="container">
@if(isset($success))
    <div class="alert alert-success"> {{$success}} </div>
@endif
{!! Form::open(['action'=>'ImageController@store', 'files'=>true]) !!}



<div class="form-group">
    {!! Form::label('image', 'Choose an image') !!}
    {!! Form::file('image') !!}
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
</div>
</body>
</html>
