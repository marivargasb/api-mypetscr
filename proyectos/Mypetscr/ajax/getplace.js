
getPlaces();
getOnePlace();
function getPlaces() {
  $.ajax({
    method: "GET",
    url: "http://localhost:3000/places"
  }).done(function( response ) {
 
      renderPlacesTable(response);
  }).fail(function (error){
    debugger;
    alert("error");
    renderPlacesTable(error);
  });

    }

    
function  getOnePlace(){

  var id_lugar = getParameterByName('id_lugar');


  $.ajax({
    method: "GET",
    url: "http://localhost:3000/places/"+id_lugar
  }).done(function( response ) {

      renderPlaceTable(response);
  }).fail(function (error){
    debugger;
    alert("error");
    renderPlacesTable(error);
  });

    } 

  
  function renderPlacesTable(listOfplaces) {
 
   
    listOfplaces.forEach(function(element) {
     
     
      var salida =  "  <div class='row'> " ;
          salida +=  "  <div class='col-sm-6 col-md-6'> "; 
          salida +=  "  <div class='thumbnail' > "; 
          salida +=  "  <h3 class='text-center'><span class='label label-info'> "+element.categoria+" </span>     <span class='label label-danger'> "+element.provincia+"</span></h3>";
               
          salida +=  "     <img src='https://media-cdn.tripadvisor.com/media/photo-s/0e/57/99/f2/ananda-hotel-boutique.jpg'   class='img-responsive'> ";
          salida +=  "     <div class='caption'> ";
          salida +=  "     <div class='row'> ";
          salida +=  "     <div class='col-md-12 col-xs-12'> ";
          salida +=  "     <a href='lugar.php?id_lugar="+element.id+" ' >" ;
          salida +=  "     <h3 class='text-center' >    </span>   <label class='badge  fa fa-paw  label-info'> "+element.nombre+" </label></h3> ";
          salida +=  "     </a> ";
          salida +=  "     </div> ";
          salida +=  "     <div class='col-md-12 col-xs-12 price'> ";
                    
          salida +=  "     <h4 class='text-center'> ";
          salida +=  "     <label>Correo:</label>"+element.correo+" <label>Telefono:</label> "+element.telefono+"</h4> ";
          salida +=  "     </div> ";
          salida +=  "     </div> ";
                    
          salida +=  "     <p class='text-center'> <label>Descripcion:</label>"+element.descripcion+"</p> ";
          salida +=  "     <div class='row'> ";
          salida +=  "     <center> ";
          salida +=  "     <div class='col-md-12'> ";
          salida +=  "     <a href=''>  <button class='btn btn-danger  ' type='button'  > ME GUSTA <span class='badge '> 5  </span> </button> </a>";
          salida +=  "     <button class='btn btn-warning ' type='button'  > Agregado </button>";
          salida +=  "     </div>";
          salida +=  "     </center> ";
          salida +=  "     </div>";
          salida +=  "     <p> </p> ";
          salida +=  "     </div>";
          salida +=  "     </div> ";
          salida +=  "     </div>";
          salida +=  "     </div> ";
          
        
          $("#rowpets").append(salida);
         
             });
  }



    function renderPlaceTable(list) {
   
  var titulo =   "  <h1 > "+list.nombre+"</h1>";   
  var salida =      " <h4><a  href=''> " +list.web+ " </a> ";
      salida +=     " </h4> ";
      salida +=     " <p> <b>Direccion: </b> "+list.direccion+" </p> ";
      salida +=     " <p> <b>Descripcion:</b> "+list.descripcion+ " </p> ";
      salida +=     " <span  class='label label-warning'>"+list.categoria+"</span> ";
      salida +=     " <span   class='label label-danger'>"+list.provincia+"</span> ";
      
      salida +=     " <p> <b>Correo Electronico:</b> "+list.correo+"</p> ";
      salida +=     " <p> <b> Telefono: </b>"+list.telefono+"</p> ";
       
      salida +=     " </div>";
      salida +=     " <br> ";
      salida +=     " <div class='ratings'> ";
      salida +=     " <p class='pull-right'>10 me gustas</p> ";
      salida +=     " <br> ";
   
      salida +=     " </div>";
  
      $("#nego").append(titulo);
      $("#placepets").append(salida);
    }

    function getParameterByName(name) {
      name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
      var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);
      return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }