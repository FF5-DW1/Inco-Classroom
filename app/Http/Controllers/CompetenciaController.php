<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;



class CompetenciaController extends Controller
{
    use Notifiable;

    public function index()
    {
        $user = Auth::user();
    
        // Retrieve competencias for the logged-in user
        $competencias = $user->competencias;

        // If the user is a teacher, you can also retrieve other competencias
        $otherCompetencias = $user->isTeacher() ? Competencia::all() : [];
    
        return view('home', compact('competencias', 'otherCompetencias'));
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
            'image_url' => 'nullable|url',
        ]);

        // Save the data
        // Competencia::create($validated);
        $competencia = Competencia::create([
            'title' => $request ->title, 
            'slug' => $slug, 
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
            'image_url' => 'nullable|url',
        ]);

        // Find the specific Competencia by ID
        $competencia = Competencia::findOrFail($id);

            // Update the data
            $competencia->update($validated);

            // Return view in case of success
            return redirect("/home");
        }

        public function destroy($id)
        {
            // Find the specific Competencia by its ID
            $competencia = Competencia::findOrFail($id);
            $competencia->delete(); 
        
            return redirect('/home')->with("competencias", $competencia);
        }

        public function show($slug, Competencia $competencia)
        {
            $competencia = Competencia::where('slug', $slug)->first();
        
            if (!$competencia) {
                return abort(404);
            }
        
            // dd($curso); // Debugging output
        
            return view('courses', [
                "competencia" => $competencia,
            ]);
        }
        
}
