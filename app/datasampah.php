<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class DataSampah extends Model
{
    protected $table ="datasampah";
    protected $fillable = [
    	'nama', 'kategori','hargakilo','keterangan'
    ];
}