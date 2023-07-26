<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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

            $curso = $modulo->curso; 

            // Redirect to the competencia.show route with the slug parameter
            return redirect()->route('curso.show', ['slug' => $curso->slug]);
        }

        public function destroy($id)
        {
            // Find the specific Competencia by its ID
            $modulo = Modulo::findOrFail($id);
            $modulo->delete(); 
        
            return back()->with("success", "Curso deleted successfully.");
        }
}
