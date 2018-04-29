
console.log("hello get user");
cargarPerfil()


   function  cargarPerfil(){
 
    var ids = sessionStorage.getItem('id');
    var id = parseInt(ids);      
 
    if (id === null || id === undefined){
     
      window.location.href='registro.php';
    }
        
        $.ajax({
          method: "GET",
          url: "http://localhost:3000/users/"+id
        }).done(function( response ) {
    
         renderUser(response);
        }).fail(function (error){
          debugger;
          alert("error");
        });
    
       }

       function renderUser(x){

            var nombre =  x.nombre;
            var apellido = x.apellido;
            var apellido2 = x.apellido2;
            var username = x.username;
            var nacimiento = x.nacimiento;
            var imagen = x.imagen;
           
         
            var titulo =   " <img src='https://icon-icons.com/icons2/546/PNG/512/1455555007_users-16_icon-icons.com_53274.png' class='img-circle' alt='User Image'>";
                titulo +=  "<h5 id='nombres2'> "+ x.nombre+" <br> <span> "+x.nacimiento+" </span> </h5>";   

            var dentro =   "<h3 name='usernames2' class='widget-user-username'> "+x.username+"  </h3>"; 
            var fuera =    " <img src='https://icon-icons.com/icons2/546/PNG/512/1455555007_users-16_icon-icons.com_53274.png' class='user-image' alt='User Image'>";
                fuera +=   "<span  class='hidden-xs'>  "+ x.nombre+"  </span>";

          
           $(".nombres2").append(nombre);
           $(".apellidos2").append(apellido);
           $(".usernames2").append(username);
           $('.nacimientos2').append(nacimiento);

           $('.profileuser').append(titulo);
           $('.fuera').append(fuera);

           
           document.getElementById("nombres1").setAttribute("value",nombre);
           document.getElementById("apellidos1").setAttribute("value",apellido);
           document.getElementById("usernames1").setAttribute("value",username);
           document.getElementById("nacimientos1").setAttribute("value",nacimiento);
    
       }


    
     /* function editUser(){
      alert("buuu");
        var nombre =  $("#nombres1").val();
        var apellido = $("#apellidos1").val();
        var username = $("#usernames1").val();
        var nacimiento = $("#nacimientos1").val();
    
        alert("datos : " + nombre + apellido + apellido2 + username + password);
      }*/