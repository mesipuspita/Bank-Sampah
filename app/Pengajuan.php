<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table ="pengajuanperubahan";
    protected $fillable = [
        'id_pengajuan_harga','jenis_sampah', 'tanggal_pengajuan','harga_pengajuan' ,'status_pengajuan'  
    ];
}
