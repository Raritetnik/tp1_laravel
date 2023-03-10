@extends('layouts.app')
@section('title', 'Affichage')
@section('content')
<div class="container">
    <div class="row header justify-content-center">
            @if(session('success'))
                <div class="alert alert-success alert-dismissable fade show" role='alert'>
                    <strong>{{ session('success') }}</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label="Close"></button>
                </div>
            @endif
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
        @isset($etudient)
            <div class="card">
                <div class="card-header">
                    Étudiant: #{{ $etudient->id }}
                </div>
                <div class="card-body">
                    <p style="text-align: justify">Nom: {{ $etudient->nom }}</p>
                    <p style="text-align: justify">Adresse: {{ $etudient->adresse }}</p>
                    <p style="text-align: justify">Téléphone: {{ $etudient->phone }}</p>
                    <p style="text-align: justify">Courriel: {{ $etudient->email }}</p>
                    <p style="text-align: justify">Ville: {{ $etudient->ville_nom }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-middle">
                    <a href="{{ route('etudient.index') }}" class="btn btn-primary btn-lg">Retour</a>
                    <a href="{{route('etudient.edit', $etudient->id)}}" class="btn btn-success btn-lg">Mettre à jour</a>
                    <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Effacer</button>
                </div>
            </div>
        @else
        @endisset
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer le post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Vous voulez vraiment supprimer le post?</p>
        <p>Nom: <b>{{ $etudient->nom }}</b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <form action="{{ route('etudient.delete', $etudient->id) }}" method="post">
                @csrf
                @method('delete')
                <input type='submit' class="btn btn-danger" value='Supprimer'/>
            </form>
      </div>
    </div>
  </div>
</div>
@endsection

