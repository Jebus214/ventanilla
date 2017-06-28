<div role="tabpanel" class="tab-pane" id="oficinas">
      

<div class="container">
         
      <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Agregar
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <form class="">
            <div class="form-group"> <label>Titular de la Oficina</label>
              <input type="email" class="form-control" placeholder="Titular de la Oficina"> </div>
            <div class="form-group"> <label>Nombre de Oficina</label>
              <input type="email" class="form-control" placeholder="Nombre de Oficina"> </div>
            <div class="form-group"> <label>Calle</label>
              <input type="email" class="form-control" placeholder="Calle"> </div>
            <div class="form-group"> <label>No  Ext</label>
              <input type="email" class="form-control" placeholder="No  Ext"> </div>
              <div class="form-group"> <label>No  Ext</label>
              <input type="email" class="form-control" placeholder="No  Ext"> </div>
            <div class="form-group"> <label>Colonia</label>
              <input type="email" class="form-control" placeholder="Colonia"> </div>
            <div class="form-group"> <label>Municipio</label>
              <input type="email" class="form-control" placeholder="Municipio"> </div>
            <div class="form-group"> <label>CP</label>
              <input type="email" class="form-control" placeholder="CP"> </div>
            <div class="form-group"> <label>Lada</label>
              <input type="email" class="form-control" placeholder="Lada"> </div>
            <div class="form-group"> <label>Teléfonos</label>
              <input type="email" class="form-control" placeholder="Teléfonos"> </div>
            <div class="form-group"> <label>Extensión</label>
              <input type="email" class="form-control" placeholder="Extensión"> </div>
            <div class="form-group"> <label>Email</label>
              <input type="email" class="form-control" placeholder="Email"> </div>
            <div class="form-group"> <label>Horario de Atención</label>
              <input type="email" class="form-control" placeholder="Horario de Atención"> </div>
          </form>
          <a class="btn btn-primary" href="#">Agregar </a>
      </div>
    </div>
  </div>
  
  
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
                <th>Titular</th>
            <th>Nombre</th>
            <th>Calle</th>
            <th>No Int</th>
            <th>No Ext</th>
            <th>Colonia</th>
            <th>Municipio</th>
            <th>CP</th>
            <th>Lada</th>
            <th>Teléfonos</th>
            <th>Extensión</th>
            <th>Email</th>
            <th>Horario de Atención</th>
              </tr>
            </thead>
            <tbody>
                    @foreach ($tramites->oficina as $oficina)
              <tr>
                  <td>{{ $oficina->id }}</td>
                  <td>{{ $oficina->titular }} </td>
                  <td>{{ $oficina->oficina }} </td>
                  <td>{{ $oficina->calle }} </td>
                  <td>{{ $oficina->numext }} </td>
                  <td>{{ $oficina->numint }} </td>
                  <td>{{ $oficina->colonia }} </td>
                  <td>{{ $oficina->municipio }} </td>
                  <td>{{ $oficina->CP }} </td>
                  <td>{{ $oficina->lada }} </td>
                  <td>{{ $oficina->telefono }} </td>
                  <td>{{ $oficina->extension }} </td>
                  <td>{{ $oficina->mail }} </td>
                  <td>{{ $oficina->horario }} </td>
                <td>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#oficinasEditModal">Editar</a>
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

    <div class="modal" id="oficinasEditModal">
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
                <div class="form-group"> <label>Titular de la Oficina</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Nombre de Oficina</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Calle</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>No Int y Ext</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Colonia</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Municipio</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>CP</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Lada</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Teléfonos</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Extensión</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Fax</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Email</label>
                  <input type="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Horario de Atención</label>
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


</div>