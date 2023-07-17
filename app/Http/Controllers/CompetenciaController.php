<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    public function create() { 
        return view('create.competenciaNew'); 
    }

    public function store(Request $request) { 
        //validate data
        $validated = $request ->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url',
        ]); 
        // dd ($validated); 
        //save the data
        Competencia::create($validated); 
        //return view in case of success
        return redirect("/home");
    }

    public function edit() { 
        //read the project from the db
        return view('create.competenciaEdit'); 
    }

    public function update(Request $request) { 
        //validate data
        $validated = $request ->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'nullable|url',
        ]); 
        // dd ($validated); 
        //save the data

        //return view in case of success
        return redirect("/home");
    }
}
