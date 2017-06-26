@extends('layouts.admin')

@section('content')


 <div role="tabpanel" class="tab-pane active" id="tramites">
      <div class="row">
        <div class="col-md-12">
          <form class="">
            <div class="form-group"> <label>Nombre</label>
              <input type="text" class="form-control" placeholder="Nombre"> </div>
            <div class="form-group"> <label>Descripción</label>
              <input type="text" class="form-control" placeholder="Descripción"> </div>
            <div class="form-group"> <label>Rubro</label>
              <input type="text" class="form-control" placeholder="Rubro"> </div>
            
          </form>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Requisito </th>
                <th>Original</th>
                <th>Copias</th>
                <th>Fundamento Legal </th>
                <th>Persona</th>
                <th>Editar</th>
                <th>Borrar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1 </td>
                <td>Requisito </td>
                <td>Original</td>
                <td>Copias</td>
                <td>Fundamento Legal </td>
                <td>Persona</td>
                <td>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar</a>
                </td>
                <td>
                  <a href="#" class="btn btn-danger">Borrar</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>


<div class="modal" id="editModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">×</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form class="">
                <div class="form-group"> <label>Vigencia</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Costo</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Forma de Pago</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Donde podra pagarse</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Close</a>
          <a class="btn btn-primary text-white">Save changes</a>
        </div>
      </div>
    </div>
  </div>

  @endsection
