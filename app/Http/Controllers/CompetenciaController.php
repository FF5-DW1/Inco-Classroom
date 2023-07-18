<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompetenciaController extends Controller
{
    public function index()
    {
        $competencias = Competencia::all();
        // $competencias = [
        //     [
        //         "id" => "1",
        //         "title" => "BlaBlablawooow",
        //     ],
        // ]; 
        return view('home', [
            "competencias" => $competencias,
        ]); 
        // return view('index', compact('competencias'));
    }


    public function create()
    {
        return view('create.competenciaNew');
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->title, '-'); 

        $exists = Competencia::where('slug', $slug)->first(); 

        if($exists){
            return redirect()->route('home')->withErrors(['title' => 'Ese titulo ya existe']); 
        }
        // dd($slug); 

        // validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url',
        ]);

        // Save the data
        // Competencia::create($validated);
        $competencia = Competencia::create([
            'title' => $request ->title, 
            'slug' => $slug, 
            'description' => $request ->description, 
        ]); 

        // Return view in case of success
        return redirect("/home");
    }

    public function edit($id)
    {
        // Find the specific Competencia by its ID
        $competencia = Competencia::findOrFail($id);
    
        // Pass the $competencia variable to the view
        return view('create.competenciaEdit', compact('competencia'));
    }
    

    public function update(Request $request, $id)
    {
        // Validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url',
        ]);

        // Find the specific Competencia by ID
        $competencia = Competencia::findOrFail($id);

            // Update the data
            $competencia->update($validated);

            // Return view in case of success
            return redirect("/home");
        }

        // public function show($id)
        // {
        //     // Find the specific Competencia by its ID
        //     $competencia = Competencia::findOrFail($id);
        
        //     return view('courses', [
        //         "competencia" => $competencia, 
        //     ]);
        // }

        public function destroy($id)
        {
            // Find the specific Competencia by its ID
            $competencia = Competencia::findOrFail($id);
            $competencia->delete(); 
        
            return redirect('/home')->with("competencias", $competencia);
        }

        public function show(Request $request, $slug) {
            $competencia = Competencia::where('slug', $slug)->first();
        
            if (!$competencia) {
                return abort(404);
            }

            // dd($competencia); 
        
            return view('courses', [
                "competencia" => $competencia,
            ]);
        }
        
}
