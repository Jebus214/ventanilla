@extends('layouts.admin')


@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endsection


@section('content')


 <div class="container">
        <div class="row">
          <div class="col-md-12">

              <table id="catalogoTable" class="display" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>nombre </th>
                  <th>rubro</th>
                  <th>unidad</th>
                  <th>Ultima actualiación</th>
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
                  <td>{{ $tramite->unidad->nombre }} </td>
                   <td>{{ $tramite->updated_at }} </td>
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



  @section('javascript')
      @include('admin/js/requisitos')
  @endsection
