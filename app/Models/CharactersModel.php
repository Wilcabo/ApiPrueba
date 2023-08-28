<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CharactersModel extends Model
{
    protected $table = 'characters'; // Nombre de la tabla en la base de datos
    public $timestamps = false;
    protected $fillable = ['id','name','status','species','type','gender','origin','url','created'];
}
