<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $timestamps = false;
    protected $table = 'roles'; // ← agrega esto

    protected $fillable = ['nombre'];
}
