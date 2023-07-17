<?php

namespace App\View\Components;

use App\Models\Competencia;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        
        $competencias = Competencia::all(); 
        // [
        //     [
        //         "title" => "Competencias TI"
        //     ],
        // ];

        return view('components.card', [
            'competencias' => $competencias,
        ]);
    }
}
