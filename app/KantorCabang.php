<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KantorCabang extends Model
{
    protected $table ="kantorcabang";
    protected $primaryKey="id_cabang";
    protected $fillable = [
    	'id_cabang','id_warga','nama_bs','alamatbs','ket'
    ];
}
