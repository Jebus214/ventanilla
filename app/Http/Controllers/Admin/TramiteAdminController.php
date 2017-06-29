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



  //    $t=Tramite::findOrFail($id);

  //        $t->requisito()->save(Requisito::create($request->all()));

           //Requisito::create($request->all());

        // return response()->json(['mensaje'=>$request]);
				return response()->json(['data'=>$request,'mensaje'=>'add']);

    }


    public function editRequisito(Request $request)
    {


      $requisito=Requisito::findOrFail($request->input('id'))->update($request->all());


			return response()->json(['data'=>$requisito,'mensaje'=>'edited']);

    }

    public function deleteRequisito(Request $request, $id)
    {

      $tramite=Tramite::findOrFail($id)->update($request->all());

      $tramite->requisito()->save(Requisito::create($request->all()));

				$tramite->requisito()->detach([$request->->input('id')]);
           //Requisito::create($request->all());

         return response()->json(['data'=>$request,'mensaje'=>'deleted']);

    }


		public function showRequisito($id)
 		{
		 //
		  $requisito=Requisito::findOrFail($id);
		  return response()->json($requisito);

		}

}
