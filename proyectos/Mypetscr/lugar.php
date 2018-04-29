<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mi Lugar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="css/estilos-footer.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="layout-boxed skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
  <style>
  #map{

width: 100%;
height:100%;
border: 3px solid black;
height: 450px;
}
  </style>

<script type="text/javascript">
 getOnePlace();
</script>
  
        <!-- Logo -->
        <a href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>R</span>
          <!-- logo for regular state and mobile devices -->
         
          <span class="logo-lg"><b>Mypets</b> <label class="label label-danger" >CR</label></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <div class="navbar-custom-menu ">
            <ul class="nav navbar-nav">
  


          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa  fa-heart"></i>
        
              </a>
              <ul class="dropdown-menu">
                <li class="header">Favoritos recientes</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
               
                 
     
                  
                  
                  <li><!-- start message -->
<a href="">
  <div class="pull-left">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgV1cokAhUc_f0ljJt88_Jf4K9RaRgZSvGuUCBV6Up4SS9wo--" class="img-circle" alt="User Image">
  </div>
  <h4>
     Robi
    <small><i class="fa fa-clock-o"></i> 23-08-1996</small>
  </h4>
  <p> buen lugar</p>
</a>
</li>
                                    <!-- end message -->
                  
                 
                                  
                    <!-- end message -->
                  
      
                  </ul>
                </li>
                <li class="footer"><a href="#"> favoritos</a></li>
              </ul>
            </li>
   <!-- User Account: style can be found in dropdown.less -->
   <li class="dropdown user user-menu">
              <a href="#" id="fuera" class=" fuera dropdown-toggle" data-toggle="dropdown">
              
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
  
                <li id="profileuser" class="user-header profileuser">
                 
                </li>
                
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="perfil.php">Perfil</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="form_lugar.php">Editar</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="sobre.php">Sobre Nosotros</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="perfil3.php" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a onclick="logout()" href="#" class="btn btn-default btn-flat"> Cerrar Sesion</a>
                  </div>
                </li>
              </ul>
            </li>
<!-- Control Sidebar Toggle Button -->
<li>
 <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>
</header>
  <!-- Left side column. contains the logo and sidebar -->







    










  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
         Pagina
          <small> mi pagina</small>
        </h1>
    
      </section>
  

    <!-- Main content -->
   <section class="content"> 
 
    
   
      <div class="row">
        
   
  
      <div class="row col-lg-12">




        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
  




         
    <div class="box-body">





      <div class="thumbnail">

          <div id="nego"></div> 
       
          
  <div class="row carousel-holder">


 <div class="col-md-12">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://static.azteca.com/crop/crop.php?coordinates=50,50&width=750&height=450&img=http://static.azteca.com/imagenes/2017/03/foto-especial-2113823.jpg"  width="1200" height="1000" />

        <div class="carousel-caption">
          First Slide
        </div>
      </div>
   
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="fa fa-angle-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="fa fa-angle-right"></span>
    </a>
  </div>
 </div>

</div>
 <div id="placepets" class="caption-full">

</div>


     




      </div>
    </div>
  </div>
</div>



 



    
             
             
  <div class="active tab-pane" id="activity">




    <div class="post clearfix">
      <div class="user-block">
      <img src="https://pbs.twimg.com/media/CnsHg1nWYAEFutg.png" class="img-circle" alt="User Image">
            <span class="username">
              <a href="#"> andrea</a>

       
<!-- COMENTARIO-->


    <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
          <div class="container">
    
            <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-1 col-md-offset-1">
        
        
        <form action="php\modificar\o-comentario.php?id= " method="POST" role="form">
          <fieldset>
            <h2>COMENTARIO</h2>
            <div class="form-group">
              <textarea id="mensaje" name="mensaje" class="form-control" rows="3"> Es un increible lugar, lo disfrute mucho</textarea>
          </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6" >
                           
             <input  type="submit"   class="btn btn-lg btn-success btn-block"  value="Sign In">
                            
                  
              </div>
              
            </div>
          </fieldset>
        </form>

      </div>
    </div>
    
    </div>
          </div>
  
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




       
            </span>
        <span class="description">Sent  message - 2-04-2017</span>
      </div>
      <!-- /.user-block -->
      <p>
      hermoso lugar 
      </p>

  
    </div>
    <!-- /.post -->







                   
    <!-- /.post -->
  </div>


      </div>



        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        

        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>








<!--Footer-->
<footer class="footer1">
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="footer-desc text-center">
                    <img src="http://superdevresources.com/images/super-dev-resources-logo.png" width="82" height="48" alt="">
                    <p>
                        <a href="/" rel="home" title="Super Dev Resources">Nuestro propocito es crear una red en donde todos podamos compartir<br>las mejores aventuras con tu mejor amigo <a href="sobre.php">Leer mas</a>
                    </p>
                </div>
            </div>
          
     
                <ul class="social ">
            <div class="container-fluid">
                <div class="row">
                <div class="sicon ">
            
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                    <div class="icon-circle">
                      <a href="#" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </div>
                  </div>
                 
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                    <div class="icon-circle">
                      <a href="#" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                    <div class="icon-circle">
                      <a href="#" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                    <div class="icon-circle">
                      <a href="#" class="iLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
            
                </div>
              </div>
            </div>
                </ul>
           


            
          
        </div> <!--/.row--> 
    </div> <!--/.container--> 
</div> <!--/.footer-->

<div class="footer-bottom">
    <div class="container">
           <div class="pull-left"> Copyright © <a href="">Mypetscr</a>.  todos los derechos reservados.</div>
    
    </div>
</div> <!--/.footer-bottom--> 
</footer>
<!--/Footer-->
  
<script>
obtenerSeccion()

function obtenerSeccion(){
var id = sessionStorage.getItem('id');
console.log("perfil" + id);
if (id === null || id === undefined){
  window.location.href='registro.php'}

}
 
function logout(){
  sessionStorage.clear();
  window.location.href = 'registro.php';

}
</script> 
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      
      
      
      
      <!-- Inicio tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Perfil</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 
</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKgL99QGHGEibwnzxvvO80HeE94NN3-NM&callback=initMap">
    </script>
     <script type="text/javascript" src="ajax/getplace.js"></script>
     
      <script type="text/javascript" src="ajax/getuser.js"></script>

</body>
</html>
