@extends('layouts.app')
@section('title', 'Create')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form action="" method="post">
                    @csrf
                    @method('PUT')
                        <div class="card-header">
                            Formulaire
                        </div>
                        <div class="card-body">
                        <div class="control-grup col-12">
                                    <label for="nom">Nom complet</label>
                                    <input type="text" id="nom" name="nom" class="form-control"
                                    value="{{ $etudient->nom }}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" id="adresse" name="adresse" class="form-control"
                                    value="{{ $etudient->adresse }}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                    value="{{ $etudient->phone }}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="email">Courriel</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                    value="{{ $etudient->email }}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="date_naissance">Date de naissance</label>
                                    <input type="date" id="date_naissance" name="date_naissance" class="form-control" value="{{ $etudient->date_naissance }}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="ville">Date de naissance</label>
                                    <select id="ville" name="ville" class="form-control">
                                        @foreach ($villes as $ville)
                                        <option value="{{ $ville->id }}"
                                        {{ ($etudient->ville_id == $ville->id) ? "selected" : '' }}
                                        >{{ $ville->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('etudient.index') }}" class="btn btn-primary">Retour</a>
                            <input type="submit" class="btn btn-success" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div><!--/container-->

@endsection