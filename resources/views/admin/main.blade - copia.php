<div role="tabpanel" class="tab-pane active" id="tramites">
      <div class="row">
        <div class="col-md-12">
          <form class="">
            <div class="form-group"> <label>Nombre</label>
              <input type="text" class="form-control" placeholder="Nombre" value="{{ $tramites->nombre }}"> </div>
            <div class="form-group"> <label>Descripción</label>
              <input type="text" class="form-control" placeholder="Descripción" value="{{ $tramites->descripcion }}"> </div>
            <div class="form-group"> <label>Rubro</label>
              <input type="text" class="form-control" placeholder="Rubro" value="{{ $tramites->rubro->nombre}}"> </div>
            <div class="form-group"> <label>Documento a Obtener</label>
              <input type="text" class="form-control" placeholder="Rubro" value="{{ $tramites->doc_obtener}}"> </div>
            <div class="form-group"> <label>Fundamento Legal</label>
              <input type="text" class="form-control" placeholder="Rubro" value="{{ $tramites->fun_legal}}"> </div>
            <div class="form-group"> <label>Costo</label>
              <input type="text" class="form-control" placeholder="Rubro" value="{{ $tramites->costo}}"> </div>
            <div class="form-group"> <label>Donde Pagar</label>
              <input type="text" class="form-control" placeholder="Rubro" value="{{ $tramites->dondepag}}"> </div> 
            <div class="form-group"> <label>Forma de  Pagar</label>
              <input type="text" class="form-control" placeholder="Rubro" value="{{ $tramites->formapago}}"> </div> 

          </form>
        </div>
      </div>
</div>