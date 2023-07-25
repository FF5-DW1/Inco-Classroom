<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CursoController extends Controller
{
    public function create()
    {
        return view('create.cursoNew');
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->title, '-'); 

        $exists = Curso::where('slug', $slug)->first(); 

        if($exists){
            return redirect()->route('courses')->withErrors(['title' => 'Ese titulo ya existe']); 
        }
        // dd($slug); 

        // validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'nullable|url',
            'coursera_url' => 'nullable|url',
            'presentaciones_url' => 'nullable|url',
            'grabaciones_url' => 'nullable|url',

        ]);

        // Save the data
        // Competencia::create($validated);
        $curso = Curso::create([
            'title' => $request ->title, 
            'slug' => $slug, 
        ]); 

        // Return view in case of success
        return redirect("/cursos");
    }

    public function edit($id)
    {
        // Find the specific Competencia by its ID
        $curso = Curso::findOrFail($id);
    
        // Pass the $competencia variable to the view
        return view('create.cursoEdit', compact('curso'));
    }
    

    public function update(Request $request, $id)
    {
        // Validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'nullable|url',
            'coursera_url' => 'nullable|url',
            'presentaciones_url' => 'nullable|url',
            'grabaciones_url' => 'nullable|url',
        ]);

        // Find the specific Competencia by ID
        $curso = Curso::findOrFail($id);

            // Update the data
            $curso->update($validated);

            // Return view in case of success
            return redirect("/cursos");
        }

        public function destroy($id)
        {
            // Find the specific Curso by its ID
            $curso = Curso::findOrFail($id);
            $curso->delete(); 
    
            return redirect('/cursos')->with("success", "Curso deleted successfully.");
        }
    
        public function show(Request $request, $slug)
        {
            $curso = Curso::where('slug', $slug)->first();
    
            if (!$curso) {
                return abort(404);
            }

            return view('curso.show', [
                "curso" => $curso,
            ]);
        }
        
}