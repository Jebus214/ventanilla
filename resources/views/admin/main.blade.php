<div role="tabpanel" class="tab-pane active" id="tramites">
      <div class="row">


        <div class="col-md-12">
          <form action="{{ url('/admin/update/tramites/'.$tramites->id) }}" method="POST">
              {{ csrf_field() }}
            
              <div class="form-group"> <label>Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $tramites->nombre }}"> </div>
              
            <div class="form-group"> <label>Unidad</label>
              <input type="text" name="unidad_nombre" class="form-control" placeholder="Dependencia" value="{{ $tramites->unidad->nombre }}"> </div>

              
            
            <div class="form-group"> <label>Descripción</label>
              <textarea type="text" name="descripcion" class="form-control" placeholder="Descripción" value="">{{ $tramites->descripcion }}</textarea> </div>
            <div class="form-group"> <label>Casos en que el trámite debe realizarse</label>
              <textarea type="text" name="casos" class="form-control" placeholder="Descripción" value="">{{ $tramites->casos }}</textarea> </div>
            <div class="form-group"> <label>Criterios de resolución</label>
              <textarea type="text" name="criterios" class="form-control" placeholder="Descripción" value="">{{ $tramites->criterios }}</textarea> </div>
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
            
<div class="form-group"> <label>Vigencia</label>
              <input type="text" name="vigencia" class="form-control" placeholder="Vigencia" value="{{ $tramites->vigencia}}"> </div>
            

            <div class="form-group"> <label>Costo</label>
              <input type="text" name="costos" class="form-control" placeholder="Costo" value="{{ $tramites->costo}}"> </div>
            <div class="form-group"> <label>Donde Pagar</label>
              <input type="text" name="dondepag" class="form-control" placeholder="Donde Pagar" value="{{ $tramites->dondepag}}"> </div>
            <div class="form-group"> <label>Forma de  Pagar</label>
              <input type="text" name="formapago" class="form-control" placeholder="Forma de  Pagar" value="{{ $tramites->formapago}}"> </div>
            <div class="form-group"> <label>Elabora</label>
              <input type="text" name="elabora" class="form-control" placeholder="Elabora" value="{{ $tramites->elabora}}"> </div>

            <div class="form-group"> <label>Revisa</label>
              <input type="text" name="revisa" class="form-control" placeholder="Revisa" value="{{ $tramites->revisa}}"> </div>      
           
           <div class="form-group"> <label>Autoriza</label>
              <input type="text" name="autoriza" class="form-control" placeholder="Autoriza" value="{{ $tramites->autoriza}}"> </div>

                        <button type="submit" class="btn btn-primary" href="#">Guardar </button>

          </form>
        </div>
      </div>
</div>
