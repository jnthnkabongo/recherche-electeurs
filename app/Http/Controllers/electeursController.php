<?php

namespace App\Http\Controllers;

use App\Http\Requests\rechercher;
use App\Models\electeurs;
use Illuminate\Http\Request;

class electeursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = 0;
        $results = [];
        return view('pages.index', compact('result', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       // $results = [];
        if ($request->numero_national) {
            $results = electeurs::where('numero_national','LIKE','%'.$request->numero_national.'%')->get();
        }
        //Rechercher avec le champ nom
        if ($request->nom) {
            $results = electeurs::where('nom','LIKE','%'.$request->nom.'%')->get();
        }
        //Recherche avec le champ postnom
        if ($request->postnom) {
            $results = electeurs::where('postnom','LIKE','%'.$request->postnom.'%')->get();
        }
        //Recherche avec le champ prenom
        if ($request->prenom) {
            $results = electeurs::where('prenom','LIKE','%'.$request->prenom.'%')->get();
        }
        //Recherche avec les champs nom et postnom

        //Recherche avec les champs nom et prenom
        if ($request->nom != 0 AND $request->prenom !=0 ) {
            $results = electeurs::where('nom','LIKE','%'.$request->nom.'%')
            ->where('prenom','LIKE', '%'.$request->prenom.'%')->get();
        }
        //Recherche avec les trois champs nom,postnom,prenom
        if ($request->nom != 0 AND $request->prenom !=0 AND $request->postnom !=0) {
            $results = electeurs::where('nom','LIKE','%'.$request->nom.'%')
            ->where('postnom','LIKE', '%'.$request->postnom.'%')
            ->where('prenom','LIKE', '%'.$request->prenom.'%')->get();
        }
        return view('pages.index', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
