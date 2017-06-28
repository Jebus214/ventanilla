<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Tramite;
use App\Rubro;




Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/admin/tramites',function(){
  $tramites = Tramite::orderBy('created_at', 'asc')->get();

  return view('admin/catalogo', [
      'tramites' => $tramites
  ]);
});


Route::get('/admin/tramites/{id}',function($id){

  //$tramites = Tramite::orderBy('created_at', 'asc')->get();
  $tramites = Tramite::findOrFail($id);
  $rubros=Rubro::orderBy('id', 'asc')->get();

  return view('admin/tramites', [
      'tramites' => $tramites,'rubros'=> $rubros
  ]);


});


Route::get('/api/tramite/{id}',function($id){

  $tramites = Tramite::with('rubro','pregunta','oficina','dependencia','requisito')->findOrFail($id);

//return $tramites->pregunta;

    return response()->json(['data'=>$tramites]);

});



Route::get('/api/tramite/{id}',function($id){

  $tramites = Tramite::with('rubro','pregunta','oficina','dependencia','requisito')->findOrFail($id);

//return $tramites->pregunta;

    return response()->json(['data'=>$tramites]);

});

Route::match(['get', 'post'],'/admin/update/tramites/{id}','Admin\TramiteAdminController@update');
