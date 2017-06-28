<div role="tabpanel" class="tab-pane" id="preguntas">
  <div class="container">

    
    <div class="row">
      <div class="col-md-12">
        <form class="">
          <div class="form-group"> <label>Pregunta</label>
            <input type="email" class="form-control" placeholder="Pregunta"> </div>
            <div class="form-group"> <label>Respuesta</label>
              <input type="email" class="form-control" placeholder="Respuesta"> </div>
            </form>
            <a class="btn btn-primary" href="#">Agregar </a>
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
                  <th>Pregunta </th>
                  <th>Respuesta</th>
                  <th>Editar</th>
                  <th>Borrar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tramites->pregunta as $pregunta)
                <tr>
                  <td>{{ $pregunta->id }} </td>
                  <td>{{ $pregunta->pregunta }} </td>
                  <td>{{ $pregunta->respuesta }} </td>
                  <td>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar</a>
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
                  <form class="">

                    <div class="form-group"> <label>Pregunta</label>
                      <input type="email" class="form-control" placeholder="Enter email"> </div>
                      <div class="form-group"> <label>Respuesta</label>
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