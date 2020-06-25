<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP AdminLTE 3 | Dashboard</title>
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
            <h1 class="m-0 text-dark">Questão 07</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 07</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          <?php
                //Número informados pelo usuário
                $n1 = 6; //Valor do usuario
                $n2 = 1000; //Valor do usuario
                $j  = 0;
                $soma = 0;
                //Alimentar o vetor A com 100 posições
                for($i=1;$i<=100;$i++){
                    $a[$i-1] = rand($n1,$n2);
                }

                //Identificar os numeros pares e armazenar no vetor B com no maximo 10 posições
                for($i=1;$i<=100;$i++){
                    
                    //Verificando se o numero é PAR
                    if(($a[$i-1]%2) == 0){
                    //Controlando quantidade de 10 valores no vetor B
                    if($j <= 9){    
                        $b[$j] = $a[$i-1];
                        //Soma dos numeros pares
                        $soma = $soma + $b[$j];
                    }
                        $j++;

                    }
                }

                var_dump($a);
                echo "<BR>";
                var_dump($b);
                echo "<BR>";
                echo "SOMA COM VARIAVEL = ".$soma;
                echo "<BR>";
                echo "SOMA COM ARRAYSUM = ".array_sum($b);


            ?>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include"_include/footer.php";
  ?>  

</body>
</html>
