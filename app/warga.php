<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table ="wargas";
    protected $primarykey ="id_warga";
    protected $fillable = [
        'id_warga','id','nokk',  'nik','statuspengguna','nama_warga' ,'gender' , 'tgllahir','notelepon','agama' ,'pendidikan' , 'pekerjaan','statustinggal' 

    ];
    
}
