<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class locationModel extends Model
{
    protected $table = 'locations'; // Nombre de la tabla en la base de datos
    public $timestamps = false;
    protected $fillable = ['id','name','type','dimension','residents','url','created'];
}
