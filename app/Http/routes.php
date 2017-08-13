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
use App\User;
use App\Dependencia;
use App\Fundamento;



Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');




//requisitos admin Routes
Route::get('/api/requisito/{id}', 'Admin\TramiteAdminController@showRequisito');
Route::get('/api/tramite/{id}/requisito', 'Admin\TramiteAdminController@showRequisitoByTramite');
Route::post('/api/requisito/{id}', 'Admin\TramiteAdminController@editRequisito');
Route::post('/api/delete/requisito/{id}', 'Admin\TramiteAdminController@deleteRequisito');
Route::post('/api/add/tramite/{id}/requisito/', 'Admin\TramiteAdminController@addRequisito');

//Oficinas admin Routes
Route::get('/api/oficina/{id}', 'Admin\TramiteAdminController@showOficina');
Route::get('/api/tramite/{id}/oficina', 'Admin\TramiteAdminController@showOficinaByTramite');
Route::post('/api/oficina/{id}', 'Admin\TramiteAdminController@editOficina');
Route::post('/api/delete/oficina/{id}', 'Admin\TramiteAdminController@deleteOficina');
Route::post('/api/add/tramite/{id}/oficina/', 'Admin\TramiteAdminController@addOficina');

//Oficinas admin Routes
Route::get('/api/oficinaDependencia/{id}', 'Admin\TramiteAdminController@showOficinaDependencia');
Route::get('/api/tramite/{id}/oficinaDependencia', 'Admin\TramiteAdminController@showOficinaDependenciaByTramite');
Route::post('/api/oficinaDependencia/{id}', 'Admin\TramiteAdminController@editOficinaDependencia');
Route::post('/api/delete/oficinaDependencia/{id}', 'Admin\TramiteAdminController@deleteOficinaDependencia');
Route::post('/api/add/tramite/{id}/oficinaDependencia/', 'Admin\TramiteAdminController@addOficinaDependencia');

//Oficinas admin Routes
Route::get('/api/oficinaUnidad/{id}', 'Admin\TramiteAdminController@showOficinaUnidad');
Route::get('/api/tramite/{id}/oficinaUnidad', 'Admin\TramiteAdminController@showOficinaUnidadByTramite');
Route::post('/api/oficinaUnidad/{id}', 'Admin\TramiteAdminController@editOficinaUnidad');
Route::post('/api/delete/oficinaUnidad/{id}', 'Admin\TramiteAdminController@deleteOficinaUnidad');
Route::post('/api/add/tramite/{id}/oficinaUnidad/', 'Admin\TramiteAdminController@addOficinaUnidad');





//Pregunta admin Routes
Route::get('/api/pregunta/{id}', 'Admin\TramiteAdminController@showPregunta');
Route::get('/api/tramite/{id}/pregunta', 'Admin\TramiteAdminController@showPreguntaByTramite');
Route::post('/api/pregunta/{id}', 'Admin\TramiteAdminController@editPregunta');
Route::post('/api/delete/pregunta/{id}', 'Admin\TramiteAdminController@deletePregunta');
Route::post('/api/add/tramite/{id}/pregunta/', 'Admin\TramiteAdminController@addPregunta');


//Pregunta admin Routes
Route::get('/api/fundamento/{id}', 'Admin\TramiteAdminController@showFundamento');
Route::get('/api/tramite/{id}/fundamento', 'Admin\TramiteAdminController@showFundamentoByTramite');
Route::post('/api/fundamento/{id}', 'Admin\TramiteAdminController@editFundamento');
Route::post('/api/delete/fundamento/{id}', 'Admin\TramiteAdminController@deleteFundamento');
Route::post('/api/add/tramite/{id}/fundamento/', 'Admin\TramiteAdminController@addFundamento');

///////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/template',function(){



return view('cedula_template');
});


Route::get('/pdfTest2/{id}',function($id){
  ini_set('max_execution_time', 300);
  ini_set('memory_limit','1000M');

  $tramites = Tramite::findOrFail($id);
  $rubros=Rubro::orderBy('id', 'asc')->get();


  $pdf = App::make('dompdf.wrapper');

  //$pdf->setOptions([ "defaultPaperSize" => "letter","defaultMediaType" => "full"]);

$requisitos=$tramites->requisito()->get();

//$requisitos_fisica= $requisitos->where('tipo','Personas Físicas');

//$requisitos_morales




  $pdf->setPaper('letter', 'portrait')->loadView('pdf', ['tramites' => $tramites,'rubros'=> $rubros,'requisito'=>'asd']);
  //$pdf->loadView('cedula_template');


return $pdf->stream();

});
Route::get('/pdfTest/{id}',function($id){

  $tramites = Tramite::findOrFail($id);
  $rubros=Rubro::orderBy('id', 'asc')->get();


  $pdf = App::make('dompdf.wrapper');

  //$pdf->setOptions([ "defaultPaperSize" => "letter","defaultMediaType" => "full"]);


  $pdf->setPaper('letter', 'portrait')->loadView('cedula_template', ['tramites' => $tramites,'rubros'=> $rubros]);
  //$pdf->loadView('cedula_template');

return $pdf->stream();

});

//Catalogo admin Routes
Route::get('/admin/tramites', 'Admin\TramiteAdminController@catalogoUser');



Route::get('/admin/tramitesss',function(){


  $tramites = Tramite::orderBy('created_at', 'asc')->get();



  return view('admin/catalogo', [
      'tramites' => $tramites
  ]);
})->middleware(['auth']);


Route::get('/admin/tramites/{id}',function($id){

  //$tramites = Tramite::orderBy('created_at', 'asc')->get();
  $tramites = Tramite::findOrFail($id);
  $rubros=Rubro::orderBy('id', 'asc')->get();

  return view('admin/tramites', [
      'tramites' => $tramites,'rubros'=> $rubros
  ]);


})->middleware(['auth']);


Route::get('/api/tramite/{id}',function($id){

  $tramites = Tramite::with('rubro','pregunta','oficina','dependencia','requisito')->findOrFail($id);

//return $tramites->pregunta;

    return response()->json(['data'=>$tramites]);

})->middleware(['auth']);



Route::get('/api/tramite/{id}',function($id){

  $tramites = Tramite::with('rubro','pregunta','oficina','dependencia','requisito')->findOrFail($id);

//return $tramites->pregunta;

    return response()->json(['data'=>$tramites]);

})->middleware(['auth']);





Route::match(['get', 'post'],'/admin/update/tramites/{id}','Admin\TramiteAdminController@update');






Route::get('/api/dependencia/{id}/tramites',function($id){

//$user = User::with('dependencia')->findOrFail($id);
//return $user->pregunta;
//$user->dependencia();

//$d=$user->dependencia()->with('tramite')->get();

$dependencia = Dependencia::findOrFail($id);

$t=$dependencia->tramite()->get();


    return response()->json(['data'=>$t]);

});





Route::get('/api/user/{id}/tramites',function($id){

  $user = User::with('dependencia')->findOrFail($id);


  $dependencia=$user->dependencia()->with('tramite')->get();
  $t=$dependencia[0]->tramite;
  return response()->json(['data'=>$t]);

});
