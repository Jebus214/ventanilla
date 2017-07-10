<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tramite;
use App\Rubro;
use App\Requisito;

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



      $tramite=Tramite::findOrFail($id);

        	$tramite->requisito()->save(Requisito::create($request->all()));
				return response()->json(['data'=>$request,'mensaje'=>'added']);

    }


			public function editRequisito(Request $request,$id)
			{


//      $requisito=Requisito::findOrFail($request->input('id'))->update($request->all());
			$requisito=Requisito::findOrFail($id)->update($request->all());


			return response()->json(['data'=>$requisito,'mensaje'=>'edited']);

    }

    public function deleteRequisito(Request $request, $id)
    {

    		  $requisito=Requisito::findOrFail($id)->delete();;

         return response()->json(['data'=>$request,'mensaje'=>'deleted']);

    }


		public function showRequisito($id)
 		{
		 //
		  $requisito=Requisito::findOrFail($id);
		  return response()->json($requisito);

		}

				public function showRequisitoByTramite($id)
		 		{
				 //
				    $tramite=Tramite::with('requisito')->findOrFail($id);
						$requisito=$tramite->requisito()->get();
				  	return response()->json($requisito);

				}

}
