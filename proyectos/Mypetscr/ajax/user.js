function getUsers() {
    $.ajax({
      method: "GET",
      url: "http://localhost:3000/users"
    }).done(function( response ) {
        debugger;
        console.log(response);
        renderPlacesTable(response);
    }).fail(function (error){
      debugger;
      console.log(error);
    });
  }

  function saveUser() {
    debugger;
    var nombre =  x.nombre;
    var apellido = x.apellido;
    var apellido2 = x.apellido2;
    var username = x.username;
    var nacimiento = x.nacimiento;
    var imagen = x.imagen;
   
    var user = {
      "nombre" : nombre,
      "apellido" : apellido,
      "apellido2": apellido2,
      "username" : username,
      "nacimiento" : nacimiento,
      "imagen": imagen,
    };


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
  }

  function renderPlacesTable(list) {

    list.forEach(function(element) {


      debugger;

      console.log("nombre");
      var row = "<tr>";
      row += "<td>"+element.nombre+"</td>";
      row += "<tr/>";
      $("#usersTable").append(row);
    });
  }