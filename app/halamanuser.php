<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class halamanuser extends Model
{
    protected $table ="transaksi";
    protected $primaryKey="id_transaksi";
    protected $fillable = [
        'id_transaksi','jumlah','jenis_sampah','status','id_warga','tgltransaksi'

    ];
    public function Detail()
    {
        return $this->hasMany(Detail::class);
    }
}

