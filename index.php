<?php
require "localhost/index.php";
// set relative route where from folder localhost
$localdir = "/localhost/";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beauty  | LocalHost</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= $localdir ?>css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $localdir ?>css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= $localdir ?>css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $localdir ?>css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= $localdir ?>css/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style media="screen">
    .content-wrapper{
      margin-left: 0!important;
    }
    .main-footer{
      margin-left: 0px;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Beauty</b>LocalHost</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BeautyLocalHost
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Host</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <?PHP include "localhost/modules/topData.php" ?>
      </div>

      <div class="row">
        <div class="col-md-8">
            <!-- incluyo tabla de proyectos -->
            <?PHP include "localhost/modules/proyects.php" ?>
        </div>

        <div class="col-md-4">
          <!-- incluyo analisis de puertos -->
          <?PHP include "localhost/modules/ports.php" ?>

          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Proyectos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">

                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image" />
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">
                      prueba
                      <span class="label label-info pull-right">valor</span>
                    </a>
                    <span class="product-description">
                      Descripcion
                    </span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>

  <!-- /.modal-dialog -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
  </footer>
<div class="control-sidebar-bg"></div>
<div id="modal" class="modal">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span></button>
      <h4 class="modal-title">Editando informacion del proyecto:  <b class="proyect-name"></b></h4>
    </div>
    <form class="form-horizontal" id="form-info" >
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= $localdir ?>js/jquery.min.js"></script>
<script src="<?= $localdir ?>js/bootstrap.min.js"></script>
<script src="<?= $localdir ?>js/adminlte.min.js"></script>
<script src="<?= $localdir ?>adminlte/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var info = eval(button.data('proyect'));
    var title = (info.title === 0)? button.data('title') : info.title;
    var modal = $(this);
    modal.find('.modal-body').html(' ');
    modal.find('.proyect-name').text(title);
    modal.find('.modal-body').append('<input type="hidden" name="dir" value="'+button.data('title')+'" />');
    modal.find('.modal-body').append('<input type="hidden" name="proyect" value="'+button.data('proyect')+'" />');
    $.each(info, function(name, val) {
      var html = "<div class='form-group'> <label class='col-sm-2 control-label'>"+name.toUpperCase()+"</label> <div class='col-sm-10'><input class='form-control' name ='"+name+"' value='"+val+"' type='text'></div></div>";
      modal.find('.modal-body').append(html);
    })
  });
  $("#form-info").submit(function(e) {
      var url = <?= $localdir ?>+"update-info.php"; // the script where you handle the form input.
      $.ajax({
             type: "POST",
             url: url,
             data: $("#form-info").serialize(), // serializes the form's elements.
             success: function(data)
             {
               var newData = eval(data['proyect']);
               var proyect = data['proyect'];
               delete data['proyect'];
               newData = data;
               var tr = $("."+proyect);
               for (var i in data){
                  if (i === "title") {
                    if (data[i] !== 0) {
                      $(tr).find('.'+i).html(data[i]);
                    }
                  }else{
                    $(tr).find('.'+i).html(data[i]);
                  }
               }
               $('#modal').modal('hide');
             }
           });
      e.preventDefault(); // avoid to execute the actual submit of the form.
  });

});
</script>
</body>
</html>
