<div role="tabpanel" class="tab-pane" id="requisitos">
      <div class="container">


      <div class="row">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group"> <label>Descripción</label>
            <input type="text" data-id="descripcion" class="form-control requisito-form" placeholder="Descripción"> </div>
        </div>

        <div class="col-md-12">
          <div class="form-group"> <label>Fundamento</label>
            <textarea type="text" data-id="articulo" class="form-control requisito-form" placeholder="Artículo"> </textarea></div>
        </div>
      </div>



      <div class="row">
      
        
        <div class="col-md-2">
          <div class="form-group"> <label>Original</label>
            <input type="text" data-id="original" class="form-control requisito-form" placeholder="Original"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"> <label>Copias</label>
            <input type="text" data-id="copias" class="form-control requisito-form" placeholder="Copias"> </div>
        </div>
        
          <!-- <div class="col-md-2">
          <div class="form-group"> <label>Fracción</label>
            <input type="text" data-id="fraccion" class="form-control requisito-form" placeholder="Fracción"> </div>
        </div>
        <div class="col-md-2">
          <div class="form-group"> <label>Ley</label>
            <input type="text" data-id="ley" class="form-control requisito-form" placeholder="Ley"> </div>
        </div>
        <!--<div class="col-md-2">
          <div class="form-group"> <label>Fundamento legal</label>
            <input type="hidden" data-id="fundamento" class="form-control requisito-form" placeholder="Fundamento Legal"> </div>
        </div>-->
        <div class="col-md-3">
          <div class="form-group"> <label>Persona</label>
            <select data-id="tipo" name="tipo" class="form-control requisito-form"  >
                  <option value="Personas Físicas">Personas Físicas</option>      
                  <option value="Personas Morales">Personas Morales</option>      
                  <option value="Instituciones Públicas">Instituciones Públicas</option>      

            </select>
        </div>
          </div>
        <div class="col-md-2">
          <div class="form-group"><label>Agregar</label>
            <button id="requisito-add" style="display:block" href="#" class="btn btn-primary">+</button>
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
                <th>Fundamento</th>

               

                <th>Persona</th>
                 <th>Editar</th>
                  <th>Borrar</th>
               
              </tr>
            </thead>
          
 
          </table>
        </div>
      </div>
      
    </div>





    <div class="modal" id="requisitoEditModal">
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
                <textarea id="descripcion" type="text" class="form-control" value="" placeholder="Requisito"></textarea> </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> <label>Fundamento</label>
                <textarea id="articulo" type="text" class="form-control" value="" placeholder="Artículo"></textarea> </div>
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
            
            <!--<div class="col-md-3">
              <div class="form-group"> <label>Fracción</label>
                <input id="fraccion" type="text" class="form-control" value="" placeholder="Fracción"> </div>
            </div>
            <div class="col-md-3">
              <div class="form-group"> <label>Ley</label>
                <input id="ley" type="text" class="form-control" value="" placeholder="Ley"> </div>
            </div>
            <div class="col-md-3">
              <div class="form-group"> <label>Fundamento legal</label>
                <textarea id="fundamento" type="text" class="form-control" value="" placeholder="Fundamento Legal"></textarea></div>
            </div>-->
            <div class="col-md-3">
              <div class="form-group"> <label>Persona</label>

            <select id="tipo" name="tipo" class="form-control requisito-form">
                  <option value="Personas Físicas">Personas Físicas</option>      
                  <option value="Personas Morales">Personas Morales</option>      
                  <option value="Instituciones Públicas">Instituciones Públicas</option>      

            </select>


              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Close</a>
          <a id="requisito-save" class="btn btn-primary text-white">Guardar cambios</a>
        </div>
      </div>
    </div>
  </div>


    </div>
