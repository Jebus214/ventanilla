<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tramite;
use App\Rubro;

class TramiteAdminController extends Controller
{


	    public function __construct()
    {
       // $this->middleware('superAdmin');
    }

     public function update(Request $request, $id)
    {

      $t=Tramite::findOrFail($id)->update($request->all());     
          

        // return response()->json(['mensaje'=>$request]);
    	return redirect('/admin/tramites/'.$id);
    
    }


     public function addRequisito(Request $request, $id)
    {

      $t=Tramite::findOrFail($id)->update($request->all());     
          
          $t->requisito()->save(Requisito::create($request->all()));

           //Requisito::create($request->all());

        // return response()->json(['mensaje'=>$request]);
      return redirect('/admin/tramites/'.$id);
    
    }


    public function editRequisito(Request $request, $id)
    {

      $t=Tramite::findOrFail($id)->update($request->all());     
          
          $t->requisito()->save(Requisito::create($request->all()));

           //Requisito::create($request->all());

        // return response()->json(['mensaje'=>$request]);
      return redirect('/admin/tramites/'.$id);
    
    }

    public function deleteRequisito(Request $request, $id)
    {

      $t=Tramite::findOrFail($id)->update($request->all());     
          
          $t->requisito()->save(Requisito::create($request->all()));

           //Requisito::create($request->all());

        // return response()->json(['mensaje'=>$request]);
      return redirect('/admin/tramites/'.$id);
    
    }

}
