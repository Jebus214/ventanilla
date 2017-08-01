  <div role="tabpanel" class="tab-pane active" id="tramites">
    <div class="row">


      <div class="col-md-12">
        <form action="{{ url('/admin/update/tramites/'.$tramites->id) }}" method="POST">
          {{ csrf_field() }}

          <div class="form-group"> <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $tramites->nombre }}"> </div>

<div class="form-group"> <label>Descripción</label>
              <textarea rows="4" type="text" name="descripcion" class="form-control" placeholder="Descripción" value="">{{ $tramites->descripcion }}</textarea> </div>
<div class="form-group"> <label>Tipo</label>
                  <select  class="form-control" name="tipo" >
                     @if($tramites->tipo=="Servicio")
                    <option value="Servicio" selected>Servicio</option>
                    <option value="Trámite">Trámite</option>
                    @else
                     <option value="Servicio">Servicio</option>
                    <option value="Trámite" selected>Trámite</option>
                    @endif
                  </select></div>

                  
            

              <div class="form-group"> <label></label>
                <input type="hidden" name="unidad_nombre" class="form-control" placeholder="Dependencia" value="{{ $tramites->unidad->nombre }}"> </div>


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
                    <input type="text" name="doc_obtener" class="form-control" placeholder="Documento a Obtener" value="{{ $tramites->doc_obtener}}"> </div>


                    <div class="form-group"> <label>Vigencia</label>
                      <input type="text" name="vigencia" class="form-control" placeholder="Vigencia" value="{{ $tramites->vigencia}}"> </div>


                      <div class="form-group"> <label>Dirección Web</label>
                        <input type="text" name="direccion_web" class="form-control" placeholder="Dirección Web" value="{{ $tramites->direccion_web}}"> </div>

                        <div class="form-group"> <label>Casos en que el trámite debe realizarse</label>
                          <textarea type="text" name="casos" class="form-control" placeholder="Descripción" value="">{{ $tramites->casos }}</textarea> </div>





                          <div class="form-group"> <label>Duración del trámite</label>
                            <input type="text" name="duracion" class="form-control" placeholder="duracion" value="{{ $tramites->duracion}}"> </div>           
                            <div class="form-group"> <label>Tiempo de respuesta</label>
                              <input type="text" name="tiempo_rep" class="form-control" placeholder="Tiempo de respuesta" value="{{ $tramites->tiempo_rep}}"> </div>
                              <div class="form-group"> <label>Costo</label>
                                <textarea type="text" name="costo" class="form-control" placeholder="Costo" value="">{{ $tramites->costo}}</textarea></div>

                                <div class="form-group"> <label>Forma de  Pagar</label>
                                  <input type="text" name="formapago" class="form-control" placeholder="Forma de  Pagar" value="{{ $tramites->formapago}}"> </div>

                                  <div class="form-group"> <label>Donde Pagar</label>
                                    <input type="text" name="dondepag" class="form-control" placeholder="Donde Pagar" value="{{ $tramites->dondepag}}"> </div>

                                    <div class="form-group"> <label>Otras alternativas de pago</label>
                                    <input type="text" name="alternativa_pago" class="form-control" placeholder="Alternativas de pago" value="{{ $tramites->alternativa_pago}}"> </div>



                                    <div class="form-group"> <label>Criterios de resolución</label>
                                      <textarea type="text" rows="5" name="criterios" class="form-control" placeholder="Descripción" value="">{{ $tramites->criterios }}</textarea> </div>            

                                     <button type="submit" class="btn btn-primary" href="#">Guardar </button>

                                          </form>
                                        </div>
                                      </div>
                                    </div>
