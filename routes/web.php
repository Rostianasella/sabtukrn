<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/orgtua',function(){
	$or= App\orangtua::all();
	foreach ($or as $data) {
		echo $data->nama_ibu." dengan ";
		echo $data->nama_ayah."   ";
		foreach ($data->anak as $key ) {
			echo "<li>$key->nama</li><br>";
		}
	}
});

Route::get('/percobaan','Mycontroller@index');

Route::get('/percobaan2','Mycontroller@tampilan');

Route::get('/percobaan3','Mycontroller@tampilmodel');