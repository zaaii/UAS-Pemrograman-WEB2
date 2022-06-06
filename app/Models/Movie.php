<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{   
    use HasFactory;
    protected $table = 'movie';
    protected $primaryKey = 'id';
    protected $fillable = ['original_title', 'overview', 'poster_path','backdrop_path', 'release_date', 'video', 'length', 'genre', 'quality', 'category'];
}
