<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'duration',
        'cursera_url',
        'presentaciones_url',
        'grabaciones_url',

    ]; 
}