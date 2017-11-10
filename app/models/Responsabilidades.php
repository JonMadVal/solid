<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Responsabilidades extends Model
{
    protected $table = 'responsabilidades';
    public $timestamps = false;
    protected $primaryKey = 'idresponsabilidad';
    protected $fillable = [
        'idresponsabilidad',
        'responsabilidad',
        'descripcion'
    ];
}
