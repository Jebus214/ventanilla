
  <div class="container">

    
    <div class="row">
      <div class="col-md-8">
          <div class="form-group"> 
            <input data-id="descripcion" type="text" class="form-control fundamento-form" placeholder="Fundamento"> </div>
            

          </div>
          <div class="col-md-4">
                        <button id="fundamento-add" class="btn btn-primary" href="#">Agregar </button>


          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <table data-tramiteId="{{$tramites->id}}" id="fundamentoTable" class="cell-border" cellspacing="0"  style="width:100%">
            <thead>
              <tr>

                  <th>Fundamento </th>
                  <th>Editar</th>
                  <th>Borrar</th>
               
              </tr>
            </thead>
          
 
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
              <div  class="form-group"> 
                <input id="id" type="hidden" class="form-control" value="" placeholder="id"> </div>

                      <div class="form-group"> <label>fundamento</label>
                        <input id="descripcion" type="text" class="form-control" placeholder="fundamento"> </div>
                      


                
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <a class="btn btn-default" data-dismiss="modal">Cerrar</a>
                  <a id="fundamento-save" class="btn btn-primary text-white">Guardar cambios</a>
                </div>
              </div>
            </div>
          </div>      

        