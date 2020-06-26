<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Questão 08 - Caio Henrique</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  
  <!-- Sidebar -->
    <?php
      include "_include/sidebar.php";
    ?>
  <!-- /Sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Questão 08</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 08</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2>8. Crie um algoritmo em que o usuário escolha uma operação (soma, subtração, multiplicação ou
divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em
cada um dos números.</h2>
          <!-- Small boxes (Stat box) -->
          <form name="calcular" method="POST" action="" >
            <div class="row">
              <div class="col-2">
                <input required type="number" id="num1" name="num1" class="form-control" placeholder="Primeiro Valor">
              </div>
              <div class="col-1" style="padding:0px 0px 0px 0px;">
                <select required style="padding:0px 1px 0px 1px;" class="custom-select" id="operacao" name="operacao">
                    <option value="soma">+ </option>
                    <option value="sub">- </option>
                    <option value="mult">* </option>
                    <option value="div">/ </option>
                </select>
              </div>
              <div class="col-2">
                <input required type="number" id="num2" name="num2" class="form-control" placeholder="Segundo Valor">
              </div>
            </div><br>
            <div class="row">
              <div class="col-3">
                <button type="submit" class="btn btn-primary">Calcular Operação</button>
              </div>
            </div>
          </form>

          <?php

$num1 = $_POST['num1'];
$operacao = $_POST["operacao"];
$num2 = $_POST['num2'];
$resultado;

  function soma($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
  }

  function sub($num1, $num2){
    $resultado = $num1 - $num2;
    return $resultado;
  }

  function mult($num1, $num2){
    $resultado = $num1 * $num2;
    return $resultado;
  }

  function divi($num1, $num2){
    $resultado = $num1 / $num2;
    return $resultado;
  }

  if ($operacao == "soma"){
    echo "<br>Resultado:<hr>".soma($num1, $num2);
  }
  else if ($operacao == "sub"){
    echo "<br>Resultado:<hr>".sub($num1, $num2);
  }
  else if ($operacao == "mult"){
    echo "<br>Resultado:<hr>".mult($num1, $num2);
  }
  else if ($operacao == "div"){
    echo "<br>Resultado:<hr>".divi($num1, $num2);
  }
  else {
      echo "<hr> Erro. Recarregue a página e tente novamente.<hr>";
  }


?>


  </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->      

    <?php
    include"_include/footer.php";
  ?>  


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>