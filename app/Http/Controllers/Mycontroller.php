<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\anak;

class Mycontroller extends Controller
{
    //
    public function index()
    {
    	$a="Sella";
    	return "Nama saya adalah <b>".$a."</b>";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function tampilmodel()
    {
    	$orangtua = orangtua::All();
    	$anak = anak::All();
    	return view('about',compact('orangtua','anak'));
    }
}