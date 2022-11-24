<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    protected $table ="satuan";
    protected $primaryKey="id_satuan";
    protected $fillable = [
        'id_satuan','satuan'

    ];
    
    public function Detail()
    {
        return $this->hasMany(Detail::class);
    }
}
