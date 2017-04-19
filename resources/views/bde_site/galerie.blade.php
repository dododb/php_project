@extends('layouts.app')

@section('content')
    <div class="galeriePhoto">
        <table class="galerieTab">
            <tr class="lineGalerie">
                <?php $i = 1; ?>
                @foreach ($object->elements as $line)
                        <td class="cellGalerie">
                            <a href="galerie/{{$line->id}}">
                                <img src="{{'/php_project/public/images/'. $line->image}}" class="imgGallerie">
                            </a>
                        </td>

                    <?php $i++; ?>
                    @if($i%4-1 == 0)
                            </tr>
                            <tr class="lineGalerie">
                    @endif
                @endforeach
                </tr>
        </table>
    </div>
@endsection