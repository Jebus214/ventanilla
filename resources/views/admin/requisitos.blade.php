<div role="tabpanel" class="tab-pane" id="requisitos">
      <div class="container">
        
      <div class="row">
        <div class="col-md-2">
          <div class="form-group"> <label>Original</label>
            <input type="email" class="form-control" placeholder="Original"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"> <label>Copias</label>
            <input type="email" class="form-control" placeholder="Copias"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"> <label>Fundamento legal</label>
            <input type="email" class="form-control" placeholder="Fundamento Legal"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"> <label>Persona</label>
            <input type="email" class="form-control" placeholder="Persona"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"><label>Agregar</label>
            <a style="display:block" href="#" class="btn btn-primary">+</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 class="display-5">Requisitos</h5>
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

            @foreach ($tramites->requisito as $requisito)
              <tr>
                <td>{{ $requisito->id }}</td>
                <td>{{ $requisito->descripcion }} </td>
                <td>{{ $requisito->original }}</td>
                <td>{{ $requisito->copia }}</td>
                <td>{{ $requisito->fundamento }}</td>
                <td>{{ $requisito->tipo }}</td>
                <td>
                  <a href="#" class="btn btn-primary">Editar</a>
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
              <div class="form-group"> <label>Requisito</label>
                <input type="email" class="form-control" placeholder="Requisito"> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group"> <label>Original</label>
                <input type="email" class="form-control" placeholder="Original"> </div>
            </div>
            <div class="col-md-3">
              <div class="form-group"> <label>Copias</label>
                <input type="email" class="form-control" placeholder="Copias"> </div>
            </div>
            <div class="col-md-3">
              <div class="form-group"> <label>Fundamento legal</label>
                <input type="email" class="form-control" placeholder="Fundamento Legal"> </div>
            </div>
            <div class="col-md-3">
              <div class="form-group"> <label>Persona</label>
                <input type="email" class="form-control" placeholder="Persona"> </div>
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