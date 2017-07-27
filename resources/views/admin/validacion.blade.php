<div role="tabpanel" class="tab-pane" id="validacion">
   
  <div class="container">

    <form action="{{ url('/admin/update/tramites/'.$tramites->id) }}" method="POST">
       {{ csrf_field() }}

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