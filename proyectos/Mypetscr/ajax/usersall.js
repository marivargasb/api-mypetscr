
var USER = USER ||{



edit: function(){

  var nombre =  $("#nombres1").val()
  var apellido = $("#apellidos1").val()
  var username = $("#usernames1").val()
  var nacimiento = $("#nacimientos1").val()
  
  var ids = sessionStorage.getItem('id');
  var id = parseInt(ids);       

  
  $.ajax({
   method: "PATCH",
   url: "http://localhost:3000/users/"+ id,
   data: {
     "nombre" : nombre,
     "apellido" : apellido,
     "username" : username,
     "nacimiento" : nacimiento
   },
   dataType: "JSON" 
  }).done(function( response ) {
   debugger;
     console.log(response);
    alert("Modificado");
     getusers();
  }).fail(function (error){
  // debugger;
   alert("error");
   console.log(error);
  }); 

},

saveUser: function() {
  debugger;

  var nombre =  $("#nombre").val();
  var apellido = $("#apellido").val();
  var apellido2 = $("#apellido2").val();
  var username = $("#usernames").val();
  var password = $("#passwords").val();


  $.ajax({
    method: "POST",
    url: "http://localhost:3000/users",
    data: {
      "nombre" : nombre,
      "apellido" : apellido,
      "apellido2": apellido2,
      "username" : username,
      "password" : password
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


login: function() {
  var username1 = $("#user1").val();
  var password1 = $("#passworde1").val();
  

  $.ajax({
    method: "GET",
    url: "http://localhost:3000/users"
  }).done(function( response ) {
    
    response.forEach(function(x) {
      debugger;
      if (x.username == username1 & x.password == password1) {
        
        sessionStorage.setItem('id',x.id);
        var ids = sessionStorage.getItem('id');
        alert("id" +ids);
        window.location.href = 'perfil3.php';
        exit;   
    } 
   
  });
  alert("La contraseña o el correo no corresponde a  ninguno de nuestros usuarios");
  
  }).fail(function (error){
    debugger;
    alert("error");
  });
},



renderUser: function(response) {
  var username = $("#user1").value;
  var password = $("#passworde1").value;

  response.forEach(function(x) {
    debugger;
    if (x.username == username & x.password == password) {
      
      sessionStorage.setItem('id',x.id);
      var ids = sessionStorage.getItem('id');
      alert("id" +ids);
      window.location.href = 'perfil3.php';
      exit;   
  } 
 
});
alert("La contraseña o el correo no corresponde a  ninguno de nuestros usuarios");
},

delete: function(){

  var ids = sessionStorage.getItem('id');
  var id = parseInt(ids);     

 
  $.ajax({
    method: "DELETE",
    url: "http://localhost:3000/users/"+id
  }).done(function( response ) {

    alert("Usuario Eliminado" );
    window.location.href='registro.php';

  }).fail(function (error){
    debugger;
    alert("error");
  });

}


}