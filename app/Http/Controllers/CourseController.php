<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{
    public function courses($id)
    {
        // Find the specific Competencia by its ID
        $competencia = Competencia::findOrFail($id);

        // Pass the $competencia variable to the view
        return view('courses', compact('competencia'));
    }
}
