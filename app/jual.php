<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class jual extends Model
{
    protected $table ="jual";
    protected $fillable = [
    	'beratsampah', 'jumlah'
    ];
}