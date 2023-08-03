<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table ="wargas";
    protected $primarykey ="id_warga";
    protected $fillable = [
        'id_warga','id','id_cabang','nokk','nik','nama_warga','tgllahir','notelepon','statustinggal' 

    ];
    
}
