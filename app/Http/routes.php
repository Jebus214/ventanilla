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

Route::get('/generarTotal',function(){

  ini_set('max_execution_time', 0);
  ini_set('memory_limit','2000M');


  $dependencias = Dependencia::get();

  if(!File::isDirectory('cedulas'))
    $result = File::makeDirectory('cedulas');

foreach ($dependencias as $dependencia) {

$tramites = Tramite::where('dependencia_id',$dependencia->id)->where('dependencia_id','<>', '0')->get();

$depFolder = iconv('UTF-8','Windows-1252',$dependencia->nombre);
  if(!File::isDirectory('cedulas/'.$depFolder))
    $result = File::makeDirectory('cedulas/'.$depFolder);


foreach ($tramites as $tramite) {
$val=$tramite->nombre;
$pdf = App::make('dompdf.wrapper');
$val=str_replace('/','',$val);
$val=str_replace('"','',$val);
$val=str_replace(':','',$val);
$val=str_replace('.','',$val);



if (strlen($val)>70 ) {
$val=substr($val,0,70);
}


$val = iconv('UTF-8','Windows-1252',$val);



  if(!File::isDirectory('cedulas/'.$depFolder)){
  $result = File::makeDirectory('cedulas/'.$depFolder);
  }

  $pdf->setPaper('letter', 'portrait')->loadView('pdf', ['tramites' => $tramite]);

  $pdf->save('cedulas/'.$depFolder.'/'.$val.'.pdf');

}





}



return 'yeihh';

});


////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/generar/{id}',function($id){

  ini_set('max_execution_time', 0);
  ini_set('memory_limit','2000M');


  $dependencia = Dependencia::findOrFail($id);

  if(!File::isDirectory('cedulas'))
    $result = File::makeDirectory('cedulas');



$tramites = Tramite::where('dependencia_id',$dependencia->id)->where('dependencia_id','<>', '0')->get();

$depFolder = iconv('UTF-8','Windows-1252',$dependencia->nombre);
  if(!File::isDirectory('cedulas/'.$depFolder))
    $result = File::makeDirectory('cedulas/'.$depFolder);


foreach ($tramites as $tramite) {

  $val=$tramite->nombre;
  $pdf = App::make('dompdf.wrapper');
  $val=stripslashes($val);
  $val=str_replace('/','',$val);
  $val=str_replace('"','',$val);
  $val=str_replace(':','',$val);
  $val=str_replace('.','',$val);


if (strlen($val)>70 ) {
$val=substr($val,0,70);
}


$val = iconv('UTF-8','Windows-1252',$val);



  if(!File::isDirectory('cedulas/'.$depFolder)){
  $result = File::makeDirectory('cedulas/'.$depFolder);
  }

  $pdf->setPaper('letter', 'portrait')->loadView('pdf', ['tramites' => $tramite]);

  $pdf->save('cedulas/'.$depFolder.'/'.$val.'.pdf');

}








return 'yeihh';

});

Route::get('/template',function(){



return view('cedula_template');
});


Route::get('/pdfTest2/{id}',function($id){
  ini_set('max_execution_time', 300);
  ini_set('memory_limit','1000M');

  $tramites = Tramite::findOrFail($id);


  $pdf = App::make('dompdf.wrapper');

  //$pdf->setOptions([ "defaultPaperSize" => "letter","defaultMediaType" => "full"]);
  $pdf->setPaper('letter', 'portrait')->loadView('pdf', ['tramites' => $tramites]);
  //$pdf->loadView('cedula_template');

  if(!File::isDirectory('test'))
    $result = File::makeDirectory('test');

return $pdf->save('myfile'.$id.'.pdf')->stream();

});

Route::get('/pdfTest',function(){

  ini_set('max_execution_time', 0);
  ini_set('memory_limit','2000M');

  $dependencias = Dependencia::get();
  //$tramites = Tramite::findOrFail($id);

  if(!File::isDirectory('cedulas'))
    $result = File::makeDirectory('cedulas');

foreach ($dependencias as $dependencia) {



$val = iconv('UTF-8','Windows-1252',$dependencia->nombre);
  if(!File::isDirectory('cedulas/'.$val))
    $result = File::makeDirectory('cedulas/'.$val);
}

  //$pdf = App::make('dompdf.wrapper');

  //$pdf->setPaper('letter', 'portrait')->loadView('cedula_template', ['tramites' => $tramites,'rubros'=> $rubros]);


//$pdf = App::make('dompdf.wrapper');
//$pdf->loadHTML('<h1>Test</h1>');
//return $pdf->save('myfile.pdf')->stream();

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
