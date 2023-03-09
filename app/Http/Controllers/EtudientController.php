<?php

namespace App\Http\Controllers;

use App\Models\Etudient;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtudientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudients = Etudient::select()
                ->paginate(20);
        return view('etudient.index', ['etudients' => $etudients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('etudient.create', ['villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudient = Etudient::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville
        ]);

        return redirect(route('etudient.show', $etudient->id));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Etudient $etudient)
    {
        $etudient['ville_nom'] = Ville::find($etudient['ville_id'])['nom'];
        return view('etudient.show', ['etudient' => $etudient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudient $etudient)
    {
        $villes = Ville::all();
        return view('etudient.edit', ['etudient' => $etudient, 'villes' => $villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudient $etudient)
    {
        $etudient->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville
        ]);
        return redirect(route('etudient.show', $etudient->id))->withSuccess('Étudiant mis à jour avec success.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudient $etudient)
    {
        $etudient->delete();
        return redirect(route('etudient.index'));
    }
}
