@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    Liste des étudiants
                </div>
                <div class="card-body">
                    @isset($etudients)
                        <table>
                            <thead>
                                <th>Nom</th>
                                <th>Courriel</th>
                                <th>Téléphone</th>
                                <th></th>
                            </thead>
                        @forelse($etudients as $etudient)
                            <tr class="border-bottom">
                                <td>{{ $etudient->nom }}</td>
                                <td>{{ $etudient->email }}</td>
                                <td>{{ $etudient->phone }}</td>
                                <td><a href="{{ route('etudient.show', $etudient->id) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @empty
                            <p>Aucune article de blog trouvée</p>
                        @endforelse
</table>
                    @else
                    @endisset
                </div>
                <div class="card-footer d-inline-flex justify-content-between align-items-center">
                    {{ $etudients }}
                    <a href="{{ route('etudient.create') }}" class="btn btn-success">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection