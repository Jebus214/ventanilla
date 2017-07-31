<div role="tabpanel" class="tab-pane" id="oficinas">
      

<div class="container">
         
      <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Agregar Titular de la Dependencia
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            <div  class="form-group"> 
                <input data-id="id" type="hidden" class="form-control" value="" placeholder="id"> </div>
            <div class="form-group"> <label>Titular de la Dependencia</label>
              <input data-id="titular" type="text" class="form-control oficinaDependencia-form" placeholder="Titular de la Dependencia"> </div>
            
            <div class="form-group"> <label>Calle</label>
              <input data-id="calle" type="text" class="form-control oficinaDependencia-form" placeholder="Calle"> </div>
            <div class="form-group"> <label>No  Ext</label>
              <input data-id="numext" type="text" class="form-control oficinaDependencia-form" placeholder="No  Ext"> </div>
              <div class="form-group"> <label>No  Int</label>
              <input data-id="numint" type="text" class="form-control oficinaDependencia-form" placeholder="No  Int"> </div>
            <div class="form-group"> <label>Colonia</label>
              <input data-id="colonia" type="text" class="form-control oficinaDependencia-form" placeholder="Colonia"> </div>
            <div class="form-group"> <label>Municipio</label>
              <input data-id="municipio" type="text" class="form-control oficinaDependencia-form" placeholder="Municipio"> </div>
            <div class="form-group"> <label>CP</label>
              <input data-id="CP" type="text" class="form-control oficinaDependencia-form" placeholder="CP"> </div>
            <div class="form-group"> <label>Lada</label>
              <input data-id="lada" type="text" class="form-control oficinaDependencia-form" placeholder="Lada"> </div>
            <div class="form-group"> <label>Teléfonos</label>
              <input data-id="telefono" type="text" class="form-control oficinaDependencia-form" placeholder="Teléfonos"> </div>
            <div class="form-group"> <label>Extensión</label>
              <input data-id="extension" type="text" class="form-control oficinaDependencia-form" placeholder="Extensión"> </div>
            <div class="form-group"> <label>Email</label>
              <input data-id="mail" type="email" class="form-control oficinaDependencia-form" placeholder="Correo Electrónico"> </div>
            <div class="form-group"> <label>Horario de Atención</label>
              <input data-id="horario" type="text" class="form-control oficinaDependencia-form" placeholder="Horario de Atención"> </div>

              <div class="form-group"> <label></label>
              <input data-id="tipo" type="hidden" class="form-control oficinaDependencia-form" placeholder="Tipo" value="dependencia"> </div>





          <button id="oficinaDependencia-add" class="btn btn-primary" href="#">Agregar </button>
      </div>
    </div>
  </div>
  
  
</div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <table data-tramiteId="{{$tramites->id}}" id="OficinaDependenciaTable" class="cell-border" cellspacing="0"  style="width:100%">
            <thead>
              <tr>
       
                <th>Titular de la Dependencia</th>
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

    <div class="modal" id="oficinaDependenciaEditModal">
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
                
                <div class="form-group"> <label>Titular de la Dependencia</label>
                  <input id="titular" type="text" class="form-control" value="" placeholder="Titular de la Dependencia"> </div>
                
                <div class="form-group"> <label>Calle</label>
                  <input id="calle" type="text" class="form-control" value="" placeholder="Calle"> </div>
                <div class="form-group"> <label>No Int</label>
                  <input id="numint" type="text" class="form-control" value="" placeholder="No Int "> </div>
                <div class="form-group"> <label>No Ext</label>
                  <input id="numext" type="text" class="form-control" value="" placeholder="No Ext"> </div>
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
          <a id="oficinaDependencia-save" class="btn btn-primary text-white">Guardar cambios</a>
        </div>
      </div>
    </div>
  </div>


      

<div class="container">
         
      <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          Agregar Titular de la Unidad Administrativa Responsable
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            <div  class="form-group"> 
                <input data-id="id" type="hidden" class="form-control" value="" placeholder="id"> </div>
            <div class="form-group"> <label>Titular de la Unidad Administrativa Responsable</label>
              <input data-id="titular" type="text" class="form-control oficinaUnidad-form" placeholder="Titular de la Unidad Administrativa Responsable"> </div>
            
            <div class="form-group"> <label>Calle</label>
              <input data-id="calle" type="text" class="form-control oficinaUnidad-form" placeholder="Calle"> </div>
            <div class="form-group"> <label>No  Ext</label>
              <input data-id="numext" type="text" class="form-control oficinaUnidad-form" placeholder="No  Ext"> </div>
              <div class="form-group"> <label>No  Int</label>
              <input data-id="numint" type="text" class="form-control oficinaUnidad-form" placeholder="No  Int"> </div>
            <div class="form-group"> <label>Colonia</label>
              <input data-id="colonia" type="text" class="form-control oficinaUnidad-form" placeholder="Colonia"> </div>
            <div class="form-group"> <label>Municipio</label>
              <input data-id="municipio" type="text" class="form-control oficinaUnidad-form" placeholder="Municipio"> </div>
            <div class="form-group"> <label>CP</label>
              <input data-id="CP" type="text" class="form-control oficinaUnidad-form" placeholder="CP"> </div>
            <div class="form-group"> <label>Lada</label>
              <input data-id="lada" type="text" class="form-control oficinaUnidad-form" placeholder="Lada"> </div>
            <div class="form-group"> <label>Teléfonos</label>
              <input data-id="telefono" type="text" class="form-control oficinaUnidad-form" placeholder="Teléfonos"> </div>
            <div class="form-group"> <label>Extensión</label>
              <input data-id="extension" type="text" class="form-control oficinaUnidad-form" placeholder="Extensión"> </div>
            <div class="form-group"> <label>Email</label>
              <input data-id="mail" type="email" class="form-control oficinaUnidad-form" placeholder="Correo Electrónico"> </div>
            <div class="form-group"> <label>Horario de Atención</label>
              <input data-id="horario" type="text" class="form-control oficinaUnidad-form" placeholder="Horario de Atención"> </div>
            <div class="form-group"> <label></label>
              <input data-id="tipo" type="hidden" class="form-control oficinaUnidad-form" placeholder="Tipo" value="unidad"> </div>

          <button id="oficinaUnidad-add" class="btn btn-primary" href="#">Agregar </button>
      </div>
    </div>
  </div>
  
  
</div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <table data-tramiteId="{{$tramites->id}}" id="OficinaUnidadTable" class="cell-border" cellspacing="0"  style="width:100%">
            <thead>
              <tr>
       
                <th>Titular de la Unidad Administrativa Responsable</th>
                
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

    <div class="modal" id="oficinaUnidadEditModal">
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
                
                <div class="form-group"> <label>Titular de la Unidad Administrativa Responsable</label>
                  <input id="titular" type="text" class="form-control" value="" placeholder="Titular de la Unidad Administrativa Responsable"> </div>
                <div class="form-group"> <label>Calle</label>
                  <input id="calle" type="text" class="form-control" value="" placeholder="Calle"> </div>
                <div class="form-group"> <label>No Int</label>
                  <input id="numint" type="text" class="form-control" value="" placeholder="No Int"> </div>
                <div class="form-group"> <label>No Ext</label>
                  <input id="numext" type="text" class="form-control" value="" placeholder="No Ext"> </div>
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
                <div class="form-group"> <label>Tipo</label>
                  <input id="tipo" type="hidden" class="form-control" value="unidad" placeholder="Tipo"> </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Cerrar</a>
          <a id="oficinaUnidad-save" class="btn btn-primary text-white">Guardar cambios</a>
        </div>
      </div>
    </div>
  </div>



      

<div class="container">
         
      <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTres" aria-expanded="true" aria-controls="collapseTres">
          Agregar otras oficinas
        </a>
      </h4>
    </div>
    <div id="collapseTres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            <div  class="form-group"> 
                <input data-id="id" type="hidden" class="form-control" value="" placeholder="id"> </div>
            <div class="form-group"> <label>Responsable de la Oficina</label>
              <input data-id="titular" type="text" class="form-control oficina-form" placeholder="Responsable de la Oficina"> </div>
            <div class="form-group"> <label>Nombre de Oficina</label>
              <input data-id="oficina" type="text" class="form-control oficina-form" placeholder="Nombre de Oficina"> </div>
            <div class="form-group"> <label>Calle</label>
              <input data-id="calle" type="text" class="form-control oficina-form" placeholder="Calle"> </div>
            <div class="form-group"> <label>No  Ext</label>
              <input data-id="numext" type="text" class="form-control oficina-form" placeholder="No  Ext"> </div>
              <div class="form-group"> <label>No  Int</label>
              <input data-id="numint" type="text" class="form-control oficina-form" placeholder="No  Int"> </div>
            <div class="form-group"> <label>Colonia</label>
              <input data-id="colonia" type="text" class="form-control oficina-form" placeholder="Colonia"> </div>
            <div class="form-group"> <label>Municipio</label>
              <input data-id="municipio" type="text" class="form-control oficina-form" placeholder="Municipio"> </div>
            <div class="form-group"> <label>CP</label>
              <input data-id="CP" type="text" class="form-control oficina-form" placeholder="CP"> </div>
            <div class="form-group"> <label>Lada</label>
              <input data-id="lada" type="text" class="form-control oficina-form" placeholder="Lada"> </div>
            <div class="form-group"> <label>Teléfonos</label>
              <input data-id="telefono" type="text" class="form-control oficina-form" placeholder="Teléfonos"> </div>
            <div class="form-group"> <label>Extensión</label>
              <input data-id="extension" type="text" class="form-control oficina-form" placeholder="Extensión"> </div>
            <div class="form-group"> <label>Email</label>
              <input data-id="mail" type="email" class="form-control oficina-form" placeholder="Correo Electrónico"> </div>
            <div class="form-group"> <label>Horario de Atención</label>
              <input data-id="horario" type="text" class="form-control oficina-form" placeholder="Horario de Atención"> </div>

              <div class="form-group"> <label>Municipios que atiende</label>
              <input data-id="municipios_a" type="text" class="form-control oficina-form" placeholder="Municipios que atiende"> </div>
   <div class="form-group"> <label></label>
              <input data-id="tipo" type="hidden" class="form-control oficina-form" placeholder="Tipo" value="otro"> </div>
          <button id="oficina-add" class="btn btn-primary" href="#">Agregar </button>
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
       
                <th>Responsable</th>
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
                <th>Municipios que Atiende</th>
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
                <div  class="form-group"> 
                <input id="id" type="hidden" class="form-control" value="" placeholder="id"> </div>
                
                <div class="form-group"> <label>Responsable de la Oficina</label>
                  <input id="titular" type="text" class="form-control" value="" placeholder="Responsable de la Oficina"> </div>
                <div class="form-group"> <label>Nombre de Oficina</label>
                  <input id="oficina" type="text" class="form-control" value="" placeholder="Nombre de Oficina"> </div>
                <div class="form-group"> <label>Calle</label>
                  <input id="calle" type="text" class="form-control" value="" placeholder="Calle"> </div>
                <div class="form-group"> <label>No Int</label>
                  <input id="numint" type="text" class="form-control" value="" placeholder="No Int"> </div>
                <div class="form-group"> <label>No Ext</label>
                  <input id="numext" type="text" class="form-control" value="" placeholder="No Ext"> </div>
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
                  <div class="form-group"> <label>Municipios que atiende</label>
                  <input id="municipios_a" type="text" class="form-control" value="" placeholder="Municipios que atiende"> </div>
               <div class="form-group"> <label></label>
                  <input id="tipo" type="hidden" class="form-control" value="otro" placeholder="Tipo"> </div>
                
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