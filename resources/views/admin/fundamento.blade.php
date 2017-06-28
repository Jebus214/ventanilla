<div role="tabpanel" class="tab-pane" id="fundamento">
  
  <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group"> <label>Fundamento Legal</label>
            <input type="email" class="form-control" placeholder="Original"> </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"><label>Agregar</label>
            <a style="display:block" href="#" class="btn btn-primary">+</a>
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
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#fundamentoEditModal">Editar</a>
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

    <div class="modal" id="fundamentoEditModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">×</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> <label>Fundamento legal</label>
                <input type="email" class="form-control" placeholder="Fundamento Legal"> </div>
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