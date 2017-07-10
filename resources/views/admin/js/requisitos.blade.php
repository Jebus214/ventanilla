


<script src="/js/fileinput.min.js" type="text/javascript"></script>
<script src="/js/fileinput_locale_es.js" type="text/javascript"></script>
<script src="/js/crud.js"></script>
<script src="/datatables.net/js/jquery.dataTables.min.js"></script>


<script>
  


$(document).ready(function(){


var tableId="dataTable";
var tramiteId=$('#'+tableId).attr('data-tramiteId');
var modalId="requisitosEditModal";
var resourceName;

function loadModalRequisitos(id){


  var inputArray=$("#requisitosEditModal .form-group");


  $.get( "/api/requisito/"+id, function( data ) {


    for (var i = 0; i < inputArray.length; i++) {

      var inputElement=$(inputArray[i].lastElementChild);
        console.log(inputElement.val(data[inputElement.attr('id')]));
            console.log(inputElement.val());
    }


  });



}

              $('.edit-button').click(function(e){

                e.preventDefault();
                var button_reference=this;
                var id=$(button_reference).attr('data-id');
                loadModalRequisitos(id);

              });

  


var columnsArray=[  {"data":"descripcion"},
                    {"data":"original"},
                    {"data":"copia"},
                    {"data":"fundamento"},
                    {"data":"tipo"},                  
                    ];




                    

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
    url:  '/api/tramite/'+tramiteId+'/requisito/',
    dataSrc: ''
  },
  "columns": columnsArray,

  "columnDefs": [
  


  {
    "targets":5,
    "data": "id",
      "render": function ( data, type, full, meta ) {
        var status=data;

      

          return '<a class="btn btn-primary edit-button" data-toggle="modal" data-target="#requisitosEditModal" data-id="'+data+'">Editar</a>'    
        
        
      
    },
    

  },
    {
    "targets":6,
    "data": "id",
      "render": function ( data, type, full, meta ) {
       
      

          return '<a class="btn btn-danger delete-modal" data-id="'+data+'">Borrar</a>'    
        
        
      
    },
    

  },


  ]

} );




$(tableId+' tbody').on( 'click', 'a.btn-primary', function () {
            
              
    
    var id=$(this).attr('data-id');
    console.log(id);
    loadModalRequisitos(id);

    } );



$(tableId+' tbody').on( 'click', 'a.btn-danger', function () {
            
              
    
    var idRequisito=$(this).attr('data-id');
    console.log(idRequisito);
    $.ajaxSetup({headers: {'X-CSRF-Token': $('#_token').val()}});
                      $.post( "/api/delete/requisito/"+idRequisito,{id:idRequisito}).done(function(){
                                console.log('borrado:'+id);
                                myDataTable.ajax.reload();

                      });
    
    } );



$('#save-requisito').click(function(e){
                e.preventDefault();


                var inputArray=$("#requisitosEditModal .form-group");


                var formData={};


                for (var i = 0; i < inputArray.length; i++) {

                  var inputElement=$(inputArray[i].lastElementChild);
                      formData[inputElement.attr('id')]=inputElement.val();

                    //console.log(inputElement.val(data[inputElement.attr('id')]));

                }

                      console.log(formData);
                      console.log(formData.id);

                      $.ajaxSetup({headers: {'X-CSRF-Token': $('#_token').val()}});
                      $.post( "/api/requisito/"+formData.id,formData).done(function(){
                          loadModalRequisitos(formData.id);
                      });


                myDataTable.ajax.reload();



              });


$('#add-requisito').click(function(e){
                e.preventDefault();


                var inputArray=$(".form-group .requisitos-form");


                var formData={};


                for (var i = 0; i < inputArray.length; i++) {

                  var inputElement=$(inputArray[i]);

                      formData[inputElement.attr('data-id')]=inputElement.val();

                    //console.log(inputElement.val(data[inputElement.attr('id')]));

                }

                      console.log(formData);
                      console.log(formData.id);

                      $.ajaxSetup({headers: {'X-CSRF-Token': $('#_token').val()}});
                      $.post( "/api/add/tramite/"+tramiteId+"/requisito/",formData).done(function(){
                                        myDataTable.ajax.reload();

                      for (var i = 0; i < inputArray.length; i++) {

                        var inputElement=$(inputArray[i]);

                          inputElement.val('');

                    
                      }

                      });





              });


});


            


</script>


            













</script>
