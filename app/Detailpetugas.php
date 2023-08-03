<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailpetugas extends Model
{
    protected $table ="detailjemput";
    protected $primaryKey="detail_id";
    protected $fillable = [
    	'detail_id','id_petugas','id_cabang','hari','tanggal'
    ];
}
