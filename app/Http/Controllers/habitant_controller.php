<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\habitant;
use App\Models\ville;

class habitant_controller extends Controller
{
    public function index(){
        $habitant = habitant::all();
        return view('habitant.index',compact('habitant'));
    }

    public function create(){
        $villes = ville::all();
        return view('habitant.create',compact('villes'));
    }

    public function store(){
        $validateData = request()->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'cin' => 'required|min:3',
            'ville_id' => 'required|min:3',
            'photo' => 'photo|max:1999',
        ]);

        $habitant = new habitant();
        $habitant->nom = request('nom');
        $habitant->prenom = request('prenom');
        $habitant->cin = request('cin');
        $habitant->ville_id = request('ville_id');
        $habitant->photo = request('photo');
        if (request('photo')) {
            $habitant->photo = request('photo')->store('images', 'public');
        }
        $habitant->save();

    }

    public function edit($id){
        $habitant = habitant::find($id);
        return view('habitant.edit',compact('habitant'));
    }

    public function update($id){
        $validateData = request()->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'cin' => 'required|min:3',
            'ville_id' => 'required|min:3',
            'photo' => 'photo|max:1999',
        ]);
        $habitant = habitant::find($id);
        $habitant->nom = request('nom');
        $habitant->prenom = request('prenom');
        $habitant->cin = request('cin');
        $habitant->ville_id = request('ville_id');
        $habitant->photo = request('photo');
        if (request('photo')) {
            $habitant->photo = request('photo')->store('images', 'public');
        }
        $habitant->save();
    }

    public function destroy($id){
        $habitant = habitant::find($id);
        $habitant->delete();
        return redirect('habitant.index');
    }
}
