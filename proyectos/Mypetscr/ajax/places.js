
var PLACE = PLACE ||{


  getplace: function(){

    var ids = sessionStorage.getItem('id');
    var id = parseInt(ids);      
    var cont = 0;
    $.ajax({
      method: "GET",
      url: "http://localhost:3000/places"
    }).done(function( response ) {
      
      response.forEach(function(x) {
       
        
        if (x.user_id == id ) {
 
          cont++;
   var opciones =  "<button   type='submit' onclick='PLACE.edit()'   class='btn btn-warning' > Edit </button>";
       opciones += "<button   type='submit' onclick='PLACE.delete()'   class='btn btn-danger' >Delete </button>";
       $('.opciones').append(opciones); 
      
           $("#direccion4").append(x.direccion);
           $("#descripcion4").append(x.descripcion);
           document.getElementById("nombres4").setAttribute("value",x.nombre);
           document.getElementById("correo4").setAttribute("value",x.correo);
           document.getElementById("web4").setAttribute("value",x.web);
           document.getElementById("telefono4").setAttribute("value",x.telefono);
           document.getElementById("id4").setAttribute("value",x.id);
          $("#categoria4").append(x.categoria);
          $("#provincia4").append( x.provincia);
    
      
      }  
    });

    if(cont < 1){
      var opcione = "<button   type='submit' onclick='PLACE.create()'   class='btn btn-danger' >Agregar </button>";
      $('.opciones').append(opcione); 
        }
    
    }).fail(function (error){
      debugger;
      alert("error");
      window.location.href = 'perfil3.php';
    });


  },

  edit: function(){

        
    debugger;
 
    var ids = $("#id4").val(); 
    var id = parseInt(ids);
    var nombre =  $("#nombres4").val();
    var correo = $("#correo4").val();
    var web =  $("#web4").val();
    var categoria = $("#categoria3").val();
    var provincia = $("#provincia3").val();
    var telefono =  $("#telefono4").val();
    var direccion = $("#direccion4").val();
    var descripcion = $("#descripcion4").val();
  alert("id" + id);

    $.ajax({
      method:"PATCH",
      url: "http://localhost:3000/places/"+ id,
      data: {
        "nombre" : nombre,
        "correo" : correo,
        "web": web,
        "categoria" : categoria,
        "provincia" : provincia,
        "telefono": telefono ,
        "direccion" : direccion,
        "descripcion" : descripcion,
    
      },
      dataType: "JSON" 
    }).done(function( response ) {
       alert("editado");
    }).fail(function (error){
      alert("error editando");
      console.log(error);
    }); 

  },
  create: function(){

    
    debugger;
    var id = sessionStorage.getItem('id');
    var x = parseInt(id);   
    var nombre =  $("#nombres4").val();
    var correo = $("#correo4").val();
    var web =  $("#web4").val();
    var categoria = $("#categoria3").val();
    var provincia = $("#provincia3").val();
    var telefono =  $("#telefono4").val();
    var direccion = $("#direccion4").val();
    var descripcion = $("#descripcion4").val();


  

    $.ajax({
      method: "POST",
      url: "http://localhost:3000/places",
      data: {
        "nombre" : nombre,
        "correo" : correo,
        "web": web,
        "categoria" : categoria,
        "provincia" : provincia,
        "telefono": telefono ,
        "direccion" : direccion,
        "descripcion" : descripcion,
        "user_id" : x
      },
      dataType: "JSON" 
    }).done(function( response ) {
      debugger;
        console.log(response);
       alert("agregrado");
        getusers();
    }).fail(function (error){
     // debugger;
      alert("error");
      console.log(error);
    }); 


  },

  delete: function(){

    var ids = $("#id4").val(); 
    var id = parseInt(ids);
   
    $.ajax({
      method: "DELETE",
      url: "http://localhost:3000/places/"+id
    }).done(function( response ) {
  
      alert("Lugar Eliminado" );
      window.location.href='perfil3.php';
  
    }).fail(function (error){
      debugger;
      alert("error");
    });
  
  }
}