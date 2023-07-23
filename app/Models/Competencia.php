<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug', 
        'description',
        'image_url',
    ];

    public function courses()
    {
        return $this->hasMany(Curso::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(User::class);
    }
    public function students()
    {
        return $this->belongsToMany(User::class);
    }
    public function studentCount()
    {
        return $this->students()->count();
    }
}