<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table ="wargas";
    protected $fillable = [
        'id_warga','nokk',  'nik','statuspengguna','nama_warga' ,'gender' , 'tgllahir','notelepon','agama' ,'pendidikan' , 'pekerjaan','statustinggal' 

    ];
    public function Detail()
    {
        return $this->hasMany(Detail::class);
    }
}
