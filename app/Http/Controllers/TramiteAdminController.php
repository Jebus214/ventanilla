<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tramite;

class TramiteAdminController extends Controller
{


	    public function __construct()
    {
       // $this->middleware('superAdmin');
    }

     public function updatee(Request $request, $id)
    {


        Tramite::findOrFail($id)->update($request->all());
          // return response()->json(['mensaje'=>'editado']);
    	return redirect($request->path());

    }

}
