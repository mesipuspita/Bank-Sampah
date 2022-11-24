<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trans extends Model
{
    protected $table ="transaksi";
    protected $fillable = [
        'id_transaksi','user_id','jenis_sampah','tgltransaksi','status','bukti'

    ];
}
