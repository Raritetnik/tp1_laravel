@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<div class="container">
    <div class="row hello">
        <div class="col-12 text-center pt-5">
            <div class="display-1 my-5">
                {{ config('app.name') }}
            </div>
        </div>
    </div>
    <p><a href="{{ route('etudient.index') }}">Cliquer ici pour continuer</a></p>
</div>
@endsection