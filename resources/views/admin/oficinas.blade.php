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
            <div  class="form-group"> 
                <input id="id" type="hidden" class="form-control" value="" placeholder="id"> </div>
            <div class="form-group"> <label>Titular de la Oficina</label>
              <input id="titular" type="text" class="form-control oficina-form" placeholder="Titular de la Oficina"> </div>
            <div class="form-group"> <label>Nombre de Oficina</label>
              <input id="oficina" type="text" class="form-control oficina-form" placeholder="Nombre de Oficina"> </div>
            <div class="form-group"> <label>Calle</label>
              <input id="calle" type="text" class="form-control oficina-form" placeholder="Calle"> </div>
            <div class="form-group"> <label>No  Ext</label>
              <input id="numext" type="text" class="form-control oficina-form" placeholder="No  Ext"> </div>
              <div class="form-group"> <label>No  Ext</label>
              <input id="numint" type="text" class="form-control oficina-form" placeholder="No  Ext"> </div>
            <div class="form-group"> <label>Colonia</label>
              <input id="colonia" type="text" class="form-control oficina-form" placeholder="Colonia"> </div>
            <div class="form-group"> <label>Municipio</label>
              <input id="municipio" type="text" class="form-control oficina-form" placeholder="Municipio"> </div>
            <div class="form-group"> <label>CP</label>
              <input id="CP" type="text" class="form-control oficina-form" placeholder="CP"> </div>
            <div class="form-group"> <label>Lada</label>
              <input id="lada" type="text" class="form-control oficina-form" placeholder="Lada"> </div>
            <div class="form-group"> <label>Teléfonos</label>
              <input id="telefono" type="text" class="form-control oficina-form" placeholder="Teléfonos"> </div>
            <div class="form-group"> <label>Extensión</label>
              <input id="extension" type="text" class="form-control oficina-form" placeholder="Extensión"> </div>
            <div class="form-group"> <label>Email</label>
              <input id="mail" type="email" class="form-control oficina-form" placeholder="Correo Electrónico"> </div>
            <div class="form-group"> <label>Horario de Atención</label>
              <input id="horario" type="text" class="form-control oficina-form" placeholder="Horario de Atención"> </div>

          <a id="oficina-add" class="btn btn-primary" href="#">Agregar </a>
      </div>
    </div>
  </div>
  
  
</div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <table data-tramiteId="{{$tramites->id}}" id="OficinaTable" class="cell-border" cellspacing="0"  style="width:100%">
            <thead>
              <tr>
       
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
                <th>Editar</th>
                <th>Borrar</th>
               
              </tr>
            </thead>
          
 
          </table>


          
        </div>
      </div>
    </div>

    <div class="modal" id="oficinaEditModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">×</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
         
                <div class="form-group"> <label>Titular de la Oficina</label>
                  <input id="id" type="text" class="form-control" value="" placeholder="Titular de la Oficina"> </div>
                <div class="form-group"> <label>Nombre de Oficina</label>
                  <input id="oficina" type="text" class="form-control" value="" placeholder="Nombre de Oficina"> </div>
                <div class="form-group"> <label>Calle</label>
                  <input id="calle" type="text" class="form-control" value="" placeholder="Calle"> </div>
                <div class="form-group"> <label>No Int</label>
                  <input id="numint" type="text" class="form-control" value="" placeholder="No Int y Ext"> </div>
                <div class="form-group"> <label>No Ext</label>
                  <input id="numext" type="text" class="form-control" value="" placeholder="No Int y Ext"> </div>
                <div class="form-group"> <label>Colonia</label>
                  <input id="colonia" type="text" class="form-control" value="" placeholder="Colonia"> </div>
                <div class="form-group"> <label>Municipio</label>
                  <input id="municipio" type="text" class="form-control" value="" placeholder="Municipio"> </div>
                <div class="form-group"> <label>CP</label>
                  <input id="CP" type="text" class="form-control" value="" placeholder="CP"> </div>
                <div class="form-group"> <label>Lada</label>
                  <input id="lada" type="text" class="form-control" value="" placeholder="Lada"> </div>
                <div class="form-group"> <label>Teléfonos</label>
                  <input id="telefono" type="text" class="form-control" value="" placeholder="Teléfonos"> </div>
                <div class="form-group"> <label>Extensión</label>
                  <input id="extension" type="text" class="form-control" value="" placeholder="Extensión"> </div>
                
                <div class="form-group"> <label>Email</label>
                  <input id="mail" type="text" class="form-control" value="" placeholder="Email"> </div>
                <div class="form-group"> <label>Horario de Atención</label>
                  <input id="horario" type="text" class="form-control" value="" placeholder="Horario de Atención"> </div>
            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Cerrar</a>
          <a id="oficina-save" class="btn btn-primary text-white">Guardar cambios</a>
        </div>
      </div>
    </div>
  </div>


</div>