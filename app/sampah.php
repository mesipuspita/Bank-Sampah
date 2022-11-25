<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Sampah extends Model
{
    protected $table ="sampah";
    protected $primaryKey="id_sampah";
    protected $fillable = [
    	'id_sampah','id_detail','nama_sampah', 'jenis_sampah','harga','keterangan','id_satuan'
    ];
    public function Detail()
    {
        return $this->hasMany(Detail::class);
    }
}