<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EpisodesModel extends Model
{
    protected $table = 'episodes'; // Nombre de la tabla en la base de datos
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'air_date', 'episode', 'characters', 'url', 'created'];
}
