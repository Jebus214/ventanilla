


<script src="/js/fileinput.min.js" type="text/javascript"></script>
<script src="/js/fileinput_locale_es.js" type="text/javascript"></script>
<script src="/js/crud.js"></script>
<script src="/datatables.net/js/jquery.dataTables.min.js"></script>


<script>
  


$(document).ready(function(){





function loadModalRequisitos(id,modalId,resourceName){


      console.log('test2:'+id);



  var inputArray=$("#"+modalId+" .form-group");


  $.get( "/api/"+resourceName+"/"+id, function( data ) {


    for (var i = 0; i < inputArray.length; i++) {

      var inputElement=$(inputArray[i].lastElementChild);
        console.log(inputElement.val(data[inputElement.attr('id')]));
            console.log(inputElement.val());
            console.log(inputElement.attr('id'));
    }


  });
}



function bindTable(tableId,tramiteId,modalId,resourceName,columnsArray){



              $('.'+resourceName+'-edit-button').click(function(e){

                e.preventDefault();
                var button_reference=this;
                var id=$(button_reference).attr('data-id');
                loadModalRequisitos(id,modalId,resourceName);

              });

  





var editButtonColumnIndex=columnsArray.length;



var deleteButtonColumnIndex=columnsArray.length + 1;



console.log(editButtonColumnIndex);
console.log(deleteButtonColumnIndex);
                    

var myDataTable=$('#'+tableId).DataTable( {
  "language":{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
      "sFirst":    "Primero",
      "sLast":     "Último",
      "sNext":     "Siguiente",
      "sPrevious": "Anterior"
    },
    "oAria": {
      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
  },
  ajax: {
    url:  '/api/tramite/'+tramiteId+'/'+resourceName+'/',
    dataSrc: ''
  },
  "columns": columnsArray,

  "columnDefs": [
  


  {
    "targets":editButtonColumnIndex,
    "data": "id",
      "render": function ( data, type, full, meta ) {
        var status=data;

      

          return '<a class="btn btn-primary '+resourceName+'-edit-button" data-toggle="modal" data-target="#'+modalId+'" data-id="'+data+'">Editar</a>'    
        
        
      
    },
    

  },
    {
    "targets":deleteButtonColumnIndex,
    "data": "id",
      "render": function ( data, type, full, meta ) {
       
      

          return '<a class="btn btn-danger delete-modal" data-id="'+data+'">Borrar</a>'    
        
        
      
    },
    

  },


  ]

} );




$('#'+tableId+' tbody').on( 'click', 'a.btn-primary', function () {
            
              
    
    var id=$(this).attr('data-id');

    console.log('test:'+id);
    loadModalRequisitos(id,modalId,resourceName);

    } );



$('#'+tableId+' tbody').on( 'click', 'a.btn-danger', function () {
            
              
    
    var idResource=$(this).attr('data-id');
    console.log(idResource);
    $.ajaxSetup({headers: {'X-CSRF-Token': $('#_token').val()}});
                      $.post( "/api/delete/"+resourceName+"/"+idResource,{id:idResource}).done(function(){
                                console.log('borrado:'+id);
                                myDataTable.ajax.reload();

                      });
    
    } );



$('#'+resourceName+'-save').click(function(e){
                e.preventDefault();


                var inputArray=$("#"+modalId+" .form-group");


                var formData={};


                for (var i = 0; i < inputArray.length; i++) {

                  var inputElement=$(inputArray[i].lastElementChild);
                      formData[inputElement.attr('id')]=inputElement.val();


                }

                      console.log(formData);
                      console.log(formData.id);

                      $.ajaxSetup({headers: {'X-CSRF-Token': $('#_token').val()}});
                      $.post( "/api/"+resourceName+"/"+formData.id,formData).done(function(){
                          loadModalRequisitos(formData.id);
                      });


                myDataTable.ajax.reload();



              });


$('#'+resourceName+'-add').click(function(e){
                e.preventDefault();


                var inputArray=$(".form-group ."+resourceName+"-form");


                var formData={};


                for (var i = 0; i < inputArray.length; i++) {

                  var inputElement=$(inputArray[i]);

                      formData[inputElement.attr('data-id')]=inputElement.val();

                      console.log(inputElement[0]);

                }

                      console.log(formData);
                      
                      $.ajaxSetup({headers: {'X-CSRF-Token': $('#_token').val()}});
                      $.post( "/api/add/tramite/"+tramiteId+"/"+resourceName+"/",formData).done(function(){
                                        myDataTable.ajax.reload();

                      for (var i = 0; i < inputArray.length; i++) {

                        var inputElement=$(inputArray[i]);

                          inputElement.val('');

                    
                      }

                      });





              });



}


    $('#catalogoTable').DataTable({
  "language":{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
      "sFirst":    "Primero",
      "sLast":     "Último",
      "sNext":     "Siguiente",
      "sPrevious": "Anterior"
    },
    "oAria": {
      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
  },
 "pageLength": 200,

} );


bindTable("dataTable",$('#dataTable').attr('data-tramiteId'),"requisitosEditModal","requisito",[ 
                    {"data":"descripcion"},
                    {"data":"original"},
                    {"data":"copia"},
                    {"data":"articulo"},
               
                    {"data":"tipo"},                  
                    ]);




bindTable("OficinaDependenciaTable",$('#OficinaDependenciaTable').attr('data-tramiteId'),"oficinaDependenciaEditModal","oficinaDependencia",[
                    {"data":"titular"},
                    {"data":"calle"},
                    {"data":"numint"},
                    {"data":"numext"},
                    {"data":"colonia"}, 
                    {"data":"municipio"},                  
                    {"data":"CP"},  
                    {"data":"lada"},  
                    {"data":"telefono"},  
                    {"data":"extension"},
                    {"data":"mail"}, 
                    {"data":"horario"},     
                  
                  
                    ]);


bindTable("OficinaUnidadTable",$('#OficinaUnidadTable').attr('data-tramiteId'),"oficinaUnidadEditModal","oficinaUnidad",[
                    {"data":"titular"},
                    {"data":"calle"},
                    {"data":"numint"},
                    {"data":"numext"},
                    {"data":"colonia"}, 
                    {"data":"municipio"},                  
                    {"data":"CP"},  
                    {"data":"lada"},  
                    {"data":"telefono"},  
                    {"data":"extension"},
                    {"data":"mail"}, 
                    {"data":"horario"},     
                  
                  
                    ]);




bindTable("OficinaTable",$('#OficinaTable').attr('data-tramiteId'),"oficinaEditModal","oficina",[
                    {"data":"titular"},
                    {"data":"oficina"},
                    {"data":"calle"},
                    {"data":"numint"},
                    {"data":"numext"},
                    {"data":"colonia"}, 
                    {"data":"municipio"},                  
                    {"data":"CP"},  
                    {"data":"lada"},  
                    {"data":"telefono"},  
                    {"data":"extension"},
                    {"data":"mail"}, 
                    {"data":"horario"},      
                    {"data":"municipios_a"},  
                  
                  
                    ]);



bindTable("preguntaTable",$('#preguntaTable').attr('data-tramiteId'),"preguntaEditModal","pregunta",[
                    {"data":"pregunta"},
                    {"data":"respuesta"},
                
                  
                  
                    ]);






bindTable("fundamentoTable",$('#fundamentoTable').attr('data-tramiteId'),"fundamentoEditModal","fundamento",[
                     {"data":"articulo"},
                 
                    
                    ]);



//$("#fundamentoTable_length").hide();
//$("#fundamentoTable_filter").hide();
//$("#fundamentoTable_info").hide();
//$("#fundamentoTable_paginate").hide();


});


            


</script>


            













</script>
