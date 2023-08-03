<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table ="petugasjemput";
    protected $primaryKey="id_petugas";
    protected $fillable = [
    	'id_petugas','detail_id','nama_petugas','nohp','alamat_petugas'
    ];
}

