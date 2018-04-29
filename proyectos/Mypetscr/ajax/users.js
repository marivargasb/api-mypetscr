
getUsers()


function getUsers() {
    document.getElementById.ajax({
      method: "GET",
      url: "http://localhost:3000/users"
    }).done(function( response ) {
        debugger;
        console.log(response);
     renderUser(response);
    }).fail(function (error){
      debugger;
      alert("error");
    });
  }



  function renderUser(response) {
    var username = "marivargas";
    //"marivargas";
    //$("#user").value;
    var password = "86161177";
    // "86161177";
    //$("#passworde").value;
     //   alert("user " + username + password);
    response.forEach(function(x) {
      debugger;
      if (x.username == username & x.password == password) {
        
        sessionStorage.setItem('id',x.id);
        var ids = sessionStorage.getItem('id');
        //alert("id" +ids);
        window.location.href = 'perfil3.php';
        exit;   
    } 
   
  });
  alert("La contraseña o el correo no corresponde a  ninguno de nuestros usuarios");
}


  function saveUser() {
    debugger;
 
    var nombre =  document.getElementById("#nombre").value;
    var apellido = document.getElementById("#apellido").value;
    var apellido2 = document.getElementById("#apellido2").value;
    var username = document.getElementById("#usernames").value;
    var password = document.getElementById("#passwords").value;


   document.getElementById.ajax({
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
  }


 
