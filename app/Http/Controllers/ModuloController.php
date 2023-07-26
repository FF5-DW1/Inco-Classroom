<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function create()
    {
        return view('create.moduloNew');
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->title, '-'); 

        $exists = Modulo::where('slug', $slug)->first(); 

        if($exists){
            return redirect()->route('course')->withErrors(['title' => 'Ese titulo ya existe']); 
        }
        // dd($slug); 

        // validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Save the data
        // Competencia::create($validated);
        $modulo = Modulo::create([
            'title' => $request ->title, 
            'slug' => $slug, 
        ]); 

        // Return view in case of success
        return redirect("/course");
    }

    public function edit($id)
    {
        // Find the specific Competencia by its ID
        $modulo = Modulo::findOrFail($id);
    
        // Pass the $competencia variable to the view
        return view('create.moduloEdit', compact('modulo'));
    }
    

    public function update(Request $request, $id)
    {
        // Validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Find the specific Competencia by ID
        $modulo = Modulo::findOrFail($id);

            // Update the data
            $modulo->update($validated);

            // Return view in case of success
            return redirect("/course");
        }

        public function destroy($id)
        {
            // Find the specific Competencia by its ID
            $modulo = Modulo::findOrFail($id);
            $modulo->delete(); 
        
            return redirect('/course')->with("modulos", $modulo);
        }


        // public function show($slug, Modulo $modulo)
        // {
        //     $modulo = Modulo::where('slug', $slug)->first();
        
        //     if (!$modulo) {
        //         return abort(404);
        //     }
        
        //     // dd($curso); // Debugging output
        
        //     return view('', [
        //         // "curso" => $curso,
        //         "modulo" => $modulo,
        //     ]);
        // }
        
}
