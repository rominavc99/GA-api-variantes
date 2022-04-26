<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variante;

class VariantesController extends Controller
{
    public function create () {
        return view ('variantes.create');
    }

    public function store (Request $request) {

        $nuevaVariante = new Variante();
        $nuevaVariante->lineage = $request->input('lineage');
        $nuevaVariante->common_countries = $request->input('common_countries');
        $nuevaVariante->earliest_date = $request->input('earliest_date');
        $nuevaVariante->designed_number = $request->input('designed_number');
        $nuevaVariante->assigned_number = $request->input('assigned_number');
        $nuevaVariante->description = $request->input('description');
        $nuevaVariante->who_name = $request->input('who_name');

        if($request->file('evidence')){

            $path_evidence = $request->file('evidence')->store('public/evidences');

            if($path_evidence) {
    
                //$nuevaVariante->evidence = $path_evidence;
                $nuevaVariante-> evidence = $request->file('evidence')->hashName();
            }

        }



        if( $nuevaVariante->save()) {
            return redirect()->route ('variantes.create');
        }
        return redirect()->route('variantes.create');
    }
}
