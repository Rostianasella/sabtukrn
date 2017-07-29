<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    //
    protected $table = 'anaks';
    protected $fillable = ['nama','orangtua_id','umur','alamat'];
    protected $vilable = ['nama','orangtua_id','umur','alamat'];
    public $timestamp = true ;

       public function orangtua()
    {
    	return $this->belongsTo('App\orangtua','orangtua_id');
	}
}