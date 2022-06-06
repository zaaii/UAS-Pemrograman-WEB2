<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $table = 'actor';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'gender', 'born_date', 'age', 'video', 'from'];

    public function Movie()
    {
        return $this->has('App\Models\Movie', 'movie_id', 'actor_id');
    }
}
