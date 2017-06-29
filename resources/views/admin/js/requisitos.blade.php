


<script>
  
$(document).ready(function(){



  $.ajax({
                url:uri,
                headers:{'X-CSRF-TOKEN':token},
                type:verb,
                dataType:'json',
                success:function(response){
               





                },

                error:function(xhr, error){
               
           
                
                }
              
              });
});




          






</script>


            