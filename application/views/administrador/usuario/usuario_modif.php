<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url();?>img/image.png" type="image/ico" />

    <title>San Martin de Porres! </title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="<?php echo base_url();?>admintemplete/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>admintemplete/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>admintemplete/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>admintemplete/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
	<link href="<?php echo base_url();?>admintemplete/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="<?php echo base_url();?>admintemplete/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="<?php echo base_url();?>admintemplete/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="<?php echo base_url();?>admintemplete/vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="<?php echo base_url();?>admintemplete/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="<?php echo base_url();?>admintemplete/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admintemplete/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admintemplete/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admintemplete/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admintemplete/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>admintemplete/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admintemplete/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              
            <img src="<?php echo base_url();?>img/image.png" alt="CentroCatólico" width="30%;">
            <img src="<?php echo base_url();?>img/nomLogo.png" alt="CentroCatólico" width="70%;">
            </div>

            <div class="clearfix"></div><br>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>index.php/reportes/admin"><i class="fa fa-home" ></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-user"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/usuario/indexlte">Lista de Usuarios</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/usuario/agregar">Agregar Nuevo Usuario</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Miembros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/miembro/index">Lista de Miembros</a></li>
                      <li><a a href="<?php echo base_url(); ?>index.php/miembro/agregar">Agregar Nuevo Miembro</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cogs"></i> Servicios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/servicio/index">Lista de Servicios</a></li>
                      <li><a a href="<?php echo base_url(); ?>index.php/servicio/agregar">Agregar Nuevo Servicio</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-male"></i> Solicitante <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/solicitante/index">Lista de Solicitantes</a></li>
                      <li><a a href="<?php echo base_url(); ?>index.php/solicitante/agregar">Agregar Nuevo Solicitante</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-wrench"></i> Prestacion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/prestacion/index">Lista de Prestaciones</a></li>
                      <li><a a href="<?php echo base_url(); ?>index.php/prestacion/agregar">Agregar Nuevo Prestación</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> Eventos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/evento/index">Lista de Eventos</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/evento/agregar">Agregar Nuevo Evento</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/evento/agregar"></a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-pencil-square-o"></i> Actividades <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/actividad/index">Lista de Actividades</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/actividad/agregar">Agregar Nueva Actividad</a></li>
                    </ul>
                  </li>
                  
                  
                  <li><a><i class="fa fa-cc-amex"></i> Donaciones <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/donacion/index">Lista de Donaciones</a></li>
                      <li><a a href="<?php echo base_url(); ?>index.php/donacion/agregar">Agregar Nuevo Donación</a></li>
                    </ul>
                  </li>
                  
                 
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url(); ?>index.php/usuario/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user pull-left"></i>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                        <i class="fa fa-cog pull-right"></i>
                          <span>Settings</span>
                        </a>
                      <a class="dropdown-item"  href="<?php echo base_url(); ?>index.php/usuario/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">1</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Modificar Usuario</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Ir</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Formulario<small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
<?php
foreach($infousuario->result() as $row){
?>
                                    <form class="" action="<?php echo base_url();?>index.php/usuario/modificarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
                                        <span class="section">Información Personal</span>
                                        <div class="field item form-group">
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->id;?>" class='optional' name="id"  type="hidden" required="required"/></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Carnet de Identidad: <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->ci;?>" class='optional' name="carnet" id="carnet" type="text" required="required"/>
                                                <span id="errorCarnet" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombres: <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->nombres;?>" name="nombres" id="nombres"  type="text" required="required" />
                                                <span id="errorNombres" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Primer Apellido<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->primerApellido;?>" name="primerApellido" id="primerApellido" required="required" type="text" />
                                                <span id="errorApellido" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Segundo Apellido:<span></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->segundoApellido;?>" type="text" name="segundoApellido" />
                                                <span id="errorApellido2" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Correo Electrónico: <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->email;?>" name="email" class='email' required="required" type="email" />
                                                <span id="errorEmail" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->telefono;?>" type="tel" class='tel' name="telefono" required='required' data-validate-length-range="8,20" />
                                                <span id="errorTelefono" class="error"></span></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Rol:<span></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->rol;?>" type="text" name="rol" required="required" /></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                          <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('id'); ?>" required='required'  />
                                          </div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Modificar</button>
                                                    <button type='reset' class="btn btn-success">Limpiar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php

}
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

                    <!-- footer content -->
        <footer>
            <div class="pull-right">
            Centro Carismático San Martin de Porres
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script>
function validarFormulario() {
    var carnet = document.getElementById("carnet").value.trim();
    var nombres = document.getElementsByName("nombres")[0].value.trim();
    var primerApellido = document.getElementsByName("primerApellido")[0].value.trim();
    var segundoApellido = document.getElementsByName("segundoApellido")[0].value.trim();
    var email = document.getElementsByName("email")[0].value.trim();
    var telefono = document.getElementsByName("telefono")[0].value.trim();
    var formValido = true;

    // Validación del Carnet de Identidad
    var carnetRegex = /^[A-Za-z0-9-]+$/;
    if (!carnetRegex.test(carnet) || carnet.length > 10 || carnet === "") {
        document.getElementById("errorCarnet").innerHTML = "Carnet inválido.";
        formValido = false;
    } else {
        document.getElementById("errorCarnet").innerHTML = "";
    }

    //nombres
    var nombresRegex = /^[A-Za-z]{3,12}$/;

if (!nombresRegex.test(nombres)) {
    document.getElementById("errorNombres").innerHTML = "Nombres inválidos.";
    formValido = false;
} else {
    document.getElementById("errorNombres").innerHTML = "";
}

    //apellido
    var apellidoRegex = /^[A-Za-z]{3,12}$/;

    if (!apellidoRegex.test(primerApellido) || primerApellido.length > 12 || primerApellido === "") {
        document.getElementById("errorApellido").innerHTML = "Primer Apellido inválido.";
        formValido = false;
    } else {
        document.getElementById("errorApellido").innerHTML = "";
    }

    //apellido
    var apellido2Regex = /^[A-Za-z]{0,12}$/;

    if (!apellido2Regex.test(segundoApellido)) {
        document.getElementById("errorApellido2").innerHTML = "Segundo Apellido inválido.";
        formValido = false;
    } else {
        document.getElementById("errorApellido2").innerHTML = "";
    }

    // Validación de Correo Electrónico
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailRegex.test(email)) {
        document.getElementById("errorEmail").innerHTML = "Correo Electrónico inválido.";
        formValido = false;
    } else {
        document.getElementById("errorEmail").innerHTML = "";
    }

    // Validación de Teléfono
    var telefonoRegex = /^\d{8,20}$/;
    if (!telefonoRegex.test(telefono)) {
        document.getElementById("errorTelefono").innerHTML = "Teléfono inválido.";
        formValido = false;
    } else {
        document.getElementById("errorTelefono").innerHTML = "";
    }

    if (!formValido) {
        // Si hay errores, evita que se envíe el formulario
        return false;
    }

    // Si todas las validaciones pasan, puedes permitir el envío del formulario
    return true;
}
</script>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>admintemplete/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="<?php echo base_url();?>admintemplete/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>admintemplete/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>admintemplete/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>admintemplete/vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="<?php echo base_url();?>admintemplete/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="<?php echo base_url();?>admintemplete/vendors/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url();?>admintemplete/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="<?php echo base_url();?>admintemplete/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="<?php echo base_url();?>admintemplete/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="<?php echo base_url();?>admintemplete/vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="<?php echo base_url();?>admintemplete/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="<?php echo base_url();?>admintemplete/vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="<?php echo base_url();?>admintemplete/vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="<?php echo base_url();?>admintemplete/vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="<?php echo base_url();?>admintemplete/vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="<?php echo base_url();?>admintemplete/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="<?php echo base_url();?>admintemplete/vendors/starrr/dist/starrr.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>admintemplete/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>admintemplete/build/js/custom.min.js"></script>

  </body>
</html>