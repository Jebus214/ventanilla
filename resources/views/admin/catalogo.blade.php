@extends('layouts.admin')

@section('content')
 

 <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>nombre </th>
                  <th>rubro</th>
                  <th>dependencia</th>
                  <th>Editar</th>
                  <th>Borrar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tramites as $tramite)
                <tr>
                  <td>{{ $tramite->id }} </td>	
                  <td>{{ $tramite->nombre }} </td>
                  <td>{{ $tramite->rubro->nombre }} </td>
                  <td>{{ $tramite->dependencia->nombre }} </td>
                  <td>
                    <a href="/admin/tramites/{{$tramite->id}}" class="btn btn-primary" >Editar</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">Borrar</a>
                  </td>
                </tr>
                       @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
 
 @endsection
