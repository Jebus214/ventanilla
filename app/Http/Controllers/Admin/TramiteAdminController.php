<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tramite;
use App\Oficina;
use App\Rubro;
use App\Requisito;
use App\Pregunta;
use App\Fundamento;
use App\Unidad;


class TramiteAdminController extends Controller
{


	    public function __construct()
    {
       // $this->middleware('superAdmin');
			 $this->middleware('auth');

    }


		public function catalogoUser(Request $request){


			$user = $request->user();


			$dependencia=$user->dependencia()->with('tramite')->get();
			$tramites=$dependencia[0]->tramite;


			//$tramites = Tramite::orderBy('created_at', 'asc')->get();

		  return view('admin/catalogo', [
		      'tramites' => $tramites
		  ]);

		}

     public function update(Request $request, $id)
    {


  	$unidadNew = $request->input('unidad_nombre');



	    $t=Tramite::findOrFail($id)->update($request->all());

			$tramite=Tramite::findOrFail($id);

				$unidad=unidad::findOrFail($tramite->unidad->id);

				$unidad->update(['nombre'=>$unidadNew]);

      // return response()->json(['mensaje'=>$request]);
    	return redirect('/admin/tramites/'.$id);

    }


		public function updateTitular(Request $request, $id)
	 {

		 $tramite=Tramite::findOrFail($id);
		 $dependencia=$tramite->
		 $unidad=



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


				///////////////////////////////////////////////////////////////////////////
				////Oficinas API																													/
				//																																				/
				//																																				/
				//																																				/
				///////////////////////////////////////////////////////////////////////////

				public function addOficina(Request $request, $id)
	     {



	       $tramite=Tramite::findOrFail($id);

	         	$tramite->oficina()->save(Oficina::create($request->all()));
	 				return response()->json(['data'=>$request,'mensaje'=>'added']);

	     }


	 			public function editOficina(Request $request,$id)
	 			{


	 //      $requisito=Oficina::findOrFail($request->input('id'))->update($request->all());
	 			$oficina=Oficina::findOrFail($id)->update($request->all());


	 			return response()->json(['data'=>$oficina,'mensaje'=>'edited']);

	     }

	     public function deleteOficina(Request $request, $id)
	     {

	     		  $oficina=Oficina::findOrFail($id)->delete();;

	          return response()->json(['data'=>$request,'mensaje'=>'deleted']);

	     }


	 		public function showOficina($id)
	  		{
	 		 //
	 		  $oficina=Oficina::findOrFail($id);
	 		  return response()->json($oficina);

	 		}

	 				public function showOficinaByTramite($id)
	 		 		{
	 				 //
							$tramite=Tramite::with('oficina')->findOrFail($id);
							$oficina=$tramite->oficina()->get();
							$oficina=$oficina->where('tipo','otro')->values();
							return response()->json($oficina);

	 				}


				///////////////////////////////////////////////////////////////////////////////////




								///////////////////////////////////////////////////////////////////////////
								////Oficinas API																													/
								//																																				/
								//																																				/
								//																																				/
								///////////////////////////////////////////////////////////////////////////

								public function addOficinaDependencia(Request $request, $id)
					     {



					       $tramite=Tramite::findOrFail($id);

					         	$tramite->oficina()->save(Oficina::create($request->all()));
					 				return response()->json(['data'=>$request,'mensaje'=>'added']);


					     }


					 			public function editOficinaDependencia(Request $request,$id)
					 			{


					 //      $requisito=Oficina::findOrFail($request->input('id'))->update($request->all());
					 			$oficina=Oficina::findOrFail($id)->update($request->all());


					 			return response()->json(['data'=>$oficina,'mensaje'=>'edited']);

					     }

					     public function deleteOficinaDependencia(Request $request, $id)
					     {

					     		  $oficina=Oficina::findOrFail($id)->delete();;

					          return response()->json(['data'=>$request,'mensaje'=>'deleted']);

					     }


					 		public function showOficinaDependencia($id)
					  		{
					 		 //
					 		  $oficinaDependencia=Oficina::findOrFail($id);
					 		  return response()->json($oficinaDependencia);

					 		}

					 				public function showOficinaDependenciaByTramite($id)
					 		 		{
					 				 //
					 				    $tramite=Tramite::with('oficina')->findOrFail($id);
					 						$oficinaDependencia=$tramite->oficina()->get();
											$oficinaDependencia=$oficinaDependencia->where('tipo','dependencia')->values();
					 				  	return response()->json($oficinaDependencia);

					 				}


								///////////////////////////////////////////////////////////////////////////////////


																public function addOficinaUnidad(Request $request, $id)
													     {



													       $tramite=Tramite::findOrFail($id);

													         	$tramite->oficina()->save(Oficina::create($request->all()));
													 				return response()->json(['data'=>$request,'mensaje'=>'added']);

													     }


													 			public function editOficinaUnidad(Request $request,$id)
													 			{


													 //      $requisito=Oficina::findOrFail($request->input('id'))->update($request->all());
													 			$oficina=Oficina::findOrFail($id)->update($request->all());


													 			return response()->json(['data'=>$oficina,'mensaje'=>'edited']);

													     }

													     public function deleteOficinaUnidad(Request $request, $id)
													     {

													     		  $oficina=Oficina::findOrFail($id)->delete();;

													          return response()->json(['data'=>$request,'mensaje'=>'deleted']);

													     }


													 		public function showOficinaUnidad($id)
													  		{
													 		 //
													 		  $oficinaUnidad=Oficina::findOrFail($id);
													 		  return response()->json($oficinaUnidad);

													 		}

													 				public function showOficinaUnidadByTramite($id)
													 		 		{
													 				 //
													 				    $tramite=Tramite::with('oficina')->findOrFail($id);
													 						$oficinaUnidad=$tramite->oficina()->get();

																			$oficinaUnidad=$oficinaUnidad->where('tipo','unidad')->values();

													 				  	return response()->json($oficinaUnidad);

													 				}


																///////////////////////////////////////////////////////////////////////////////////





								////////////////////////////////////////////////////////////////////////////////
								////Pregunta API
								//
								//
								/////////////////////////////////////////////////////////////////////////////7/

								public function addPregunta(Request $request, $id)
					     {



					       $tramite=Tramite::findOrFail($id);

					         	$tramite->pregunta()->save(Pregunta::create($request->all()));
					 				return response()->json(['data'=>$request,'mensaje'=>'added']);

					     }


					 			public function editPregunta(Request $request,$id)
					 			{


					 //      $requisito=Pregunta::findOrFail($request->input('id'))->update($request->all());
					 			$pregunta=Pregunta::findOrFail($id)->update($request->all());


					 			return response()->json(['data'=>$pregunta,'mensaje'=>'edited']);

					     }

					     public function deletePregunta(Request $request, $id)
					     {

					     		  $pregunta=Pregunta::findOrFail($id)->delete();;

					          return response()->json(['data'=>$request,'mensaje'=>'deleted']);

					     }


					 		public function showPregunta($id)
					  		{
					 		 //
					 		  $pregunta=Pregunta::findOrFail($id);
					 		  return response()->json($pregunta);

					 		}

					 				public function showPreguntaByTramite($id)
					 		 		{
					 				 //
					 				    $tramite=Tramite::with('oficina')->findOrFail($id);
					 						$pregunta=$tramite->pregunta()->get();
					 				  	return response()->json($pregunta);

					 				}


								///////////////////////////////////////////////////////////////////////////////////



																////////////////////////////////////////////////////////////////////////////////
																////Fundamento API
																//
																//
																/////////////////////////////////////////////////////////////////////////////7/

																public function addFundamento(Request $request, $id)
													     {



													       $tramite=Tramite::findOrFail($id);

													         	$tramite->fundamento()->save(Fundamento::create($request->all()));
													 				return response()->json(['data'=>$request,'mensaje'=>'added']);

													     }


													 			public function editFundamento(Request $request,$id)
													 			{


													 //      $requisito=Fundamento::findOrFail($request->input('id'))->update($request->all());
													 			$fundamento=Fundamento::findOrFail($id)->update($request->all());


													 			return response()->json(['data'=>$fundamento,'mensaje'=>'edited']);

													     }

													     public function deleteFundamento(Request $request, $id)
													     {

													     		  $fundamento=Fundamento::findOrFail($id)->delete();;

													          return response()->json(['data'=>$request,'mensaje'=>'deleted']);

													     }


													 		public function showFundamento($id)
													  		{
													 		 //
													 		  $fundamento=Fundamento::findOrFail($id);
													 		  return response()->json($fundamento);

													 		}

													 				public function showFundamentoByTramite($id)
													 		 		{
													 				 //
													 				    $tramite=Tramite::with('oficina')->findOrFail($id);
													 						$fundamento=$tramite->fundamento()->get();
													 				  	return response()->json($fundamento);

													 				}


																///////////////////////////////////////////////////////////////////////////////////

}
