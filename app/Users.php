<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table ="users";
    protected $primarykey ="id";
    protected $fillable = [
    	'id','id_warga','roleid', 'name','email','password'
    ];
}
