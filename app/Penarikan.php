<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penarikan extends Model
{
    protected $table ="penarikan";
    protected $primaryKey="id_penarikan";
    protected $fillable = [
        'id_penarikan'
    ];
}
