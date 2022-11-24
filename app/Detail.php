<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Detail extends Model
{
    protected $table ="detail_transaksi";
    protected $primaryKey="id_detail";
    protected $fillable = ['id_detail','id_sampah',' id_warga','total','gambar','total_jumlah','id_satuan ','id_transaksi'];
    
    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }

    public function sampah()
    {
        return $this->belongsTo(Sampah::class);
    }
    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
    public function Transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
    
}

   