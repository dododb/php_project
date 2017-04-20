@extends('layouts.app')


@section('content')
    <?php

        echo '<div class="DescriptionComplete">';
        echo '<h2>' . DB::table('activite')->select('nom_activite')->where('id', $idObject)->first()->nom_activite . ' - Votes</h2><br><br>';
        $votes = DB::table('tranche_horaire')->join('vote', 'vote.horaire_id', '=', 'tranche_horaire.id')->join('users', 'users.id', '=', 'vote.user_id')->select('*')->where('activite_id', $idObject)->get();
        foreach ($votes as $vote)
        {
            echo $vote->horaire . ' - ' . $vote->nom . ' ' . $vote->prenom;
        }
        echo '</div>';

    echo '<div class="DescriptionComplete">';
    echo '<h2>' . DB::table('activite')->select('nom_activite')->where('id', $idObject)->first()->nom_activite . ' - Inscrits</h2><br><br>';
    $incrits = DB::table('inscrit')->join('activite', 'activite.id', '=', 'inscrit.activite_id')->join('users', 'users.id', '=', 'inscrit.user_id')->select('*')->where('activite_id', $idObject)->get();
    foreach ($incrits as $incrit)
    {
        echo $incrit->nom . ' ' . $incrit->prenom;
    }
    echo '</div>';

    ?>
@endsection


