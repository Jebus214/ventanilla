<div role="tabpanel" class="tab-pane active" id="tramites">
      <div class="row">
        

        <div class="col-md-12">
          <form action="{{ url('/admin/update/tramites/'.$tramites->id) }}" method="POST">
              {{ csrf_field() }}

            <div class="form-group"> <label>Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $tramites->nombre }}"> </div>
            <div class="form-group"> <label>Descripción</label>
              <input type="text" name="descripcion" class="form-control" placeholder="Descripción" value="{{ $tramites->descripcion }}"> </div>
            <div class="form-group"> <label>Rubro</label>
              <select class="form-control" name="rubro_id" >
              @foreach ($rubros as $rubro)
              @if($tramites->rubro->id==$rubro->id)
                  <option value="{{$rubro->id}}" selected>{{$rubro->nombre}}</option>
              @else 
                  <option value="{{$rubro->id}}">{{$rubro->nombre}}</option>

              @endif


               @endforeach

              </select></div>
            <div class="form-group"> <label>Documento a Obtener</label>
              <input type="text" name="doc_obtener" class="form-control" placeholder="Documento a Obtene" value="{{ $tramites->doc_obtener}}"> </div>
            <div class="form-group"> <label>Fundamento Legal</label>
              <input type="text" name="fun_legal" class="form-control" placeholder="Fundamento Legal" value="{{ $tramites->fun_legal}}"> </div>
            @include('admin/fundamentoLista')

            <div class="form-group"> <label>Costo</label>
              <input type="text" name="costos" class="form-control" placeholder="Costo" value="{{ $tramites->costo}}"> </div>
            <div class="form-group"> <label>Donde Pagar</label>
              <input type="text" name="dondepag" class="form-control" placeholder="Donde Pagar" value="{{ $tramites->dondepag}}"> </div> 
            <div class="form-group"> <label>Forma de  Pagar</label>
              <input type="text" name="formapago" class="form-control" placeholder="Forma de  Pagar" value="{{ $tramites->formapago}}"> </div> 
                        <button type="submit" class="btn btn-primary" href="#">Guardar </button>

          </form>
        </div>
      </div>
</div>