 <div role="tabpanel" class="tab-pane" id="preguntas">
  <div class="container">

    
    <div class="row">
      <div class="col-md-12">
          <div class="form-group"> <label>Pregunta</label>
            <textarea data-id="pregunta" type="text" class="form-control pregunta-form" placeholder="Pregunta"></textarea> </div>
            <div class="form-group"> <label>Respuesta</label>
              <textarea data-id="respuesta" type="text" class="form-control pregunta-form" placeholder="Respuesta"></textarea></div>

            <button id="pregunta-add" class="btn btn-primary" href="#">Agregar </button>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <table data-tramiteId="{{$tramites->id}}" id="preguntaTable" class="cell-border" cellspacing="0"  style="width:100%">
            <thead>
              <tr>

                  <th>Pregunta </th>
                  <th>Respuesta</th>
                  <th>Editar</th>
                  <th>Borrar</th>
               
              </tr>
            </thead>
          
 
          </table>

          </div>
        </div>
      </div>
      <div class="modal" id="preguntaEditModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button">×</button>
              <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
              <div  class="form-group"> 
                <input id="id" type="hidden" class="form-control" value="" placeholder="id"> </div>

                      <div class="form-group"> <label>Pregunta</label>
                        <textarea id="pregunta" type="text" class="form-control" placeholder="Pregunta"></textarea> </div>
                      <div class="form-group"> <label>Respuesta</label>
                        <textarea id="respuesta" type="text" class="form-control" placeholder="Respuesta"></textarea></div>


                
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <a class="btn btn-default" data-dismiss="modal">Cerrar</a>
                  <a id="pregunta-save" class="btn btn-primary text-white">Guardar cambios</a>
                </div>
              </div>
            </div>
          </div>      

        </div>