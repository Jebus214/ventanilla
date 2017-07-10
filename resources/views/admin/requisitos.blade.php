<div role="tabpanel" class="tab-pane" id="requisitos">
      <div class="container">


      <div class="row">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group"> <label>Descripción</label>
            <input type="text" data-id="descripcion" class="form-control requisitos-form" placeholder="Descripción"> </div>
        </div>
      </div>

      <div class="row">
      
        
        <div class="col-md-2">
          <div class="form-group"> <label>Original</label>
            <input type="text" data-id="original" class="form-control requisitos-form" placeholder="Original"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"> <label>Copias</label>
            <input type="text" data-id="copias" class="form-control requisitos-form" placeholder="Copias"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"> <label>Fundamento legal</label>
            <input type="text" data-id="fundamento" class="form-control requisitos-form" placeholder="Fundamento Legal"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"> <label>Persona</label>
            <input type="text" data-id="tipo" class="form-control requisitos-form" placeholder="Persona"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"><label>Agregar</label>
            <button id="add-requisito" style="display:block" href="#" class="btn btn-primary">+</button>
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
          <table data-tramiteId="{{$tramites->id}}" id="dataTable" class="cell-border" cellspacing="0"  style="width:100%">
            <thead>
              <tr>

                <th>Requisito </th>
                <th>Original</th>
                <th>Copias</th>
                <th>Fundamento Legal </th>
                <th>Persona</th>
                 <th>Editar</th>
                  <th>Borrar</th>
               
              </tr>
            </thead>
          
 
          </table>
        </div>
      </div>
      
    </div>





    <div class="modal" id="requisitosEditModal">
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
              <div  class="form-group"> <label>Requisito</label>
                <input id="descripcion" type="text" class="form-control" value="" placeholder="Requisito"> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group"> <label>Original</label>
                <input id="original" type="text" class="form-control" value="" placeholder="Original"> </div>
            </div>
            <div class="col-md-3">
              <div class="form-group"> <label>Copias</label>
                <input id="copia" type="text" class="form-control" value="" placeholder="Copias"> </div>
            </div>
            <div class="col-md-3">
              <div class="form-group"> <label>Fundamento legal</label>
                <textarea id="fundamento" type="text" class="form-control" value="" placeholder="Fundamento Legal"></textarea></div>
            </div>
            <div class="col-md-3">
              <div class="form-group"> <label>Persona</label>
                <input id="tipo" type="text" class="form-control" value="" placeholder="Persona"> </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Close</a>
          <a id="save-requisito" class="btn btn-primary text-white">Guardar cambios</a>
        </div>
      </div>
    </div>
  </div>


    </div>
