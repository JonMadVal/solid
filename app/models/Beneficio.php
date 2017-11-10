<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    protected $table = 'beneficios';
    public $timestamps = false;
    protected $primaryKey = 'idbeneficio';
    protected $fillable = [
        'beneficio',
        'valorbeneficio'
    ];


}
