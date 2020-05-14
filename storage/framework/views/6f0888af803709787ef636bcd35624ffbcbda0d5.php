<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Raices Comunicaciones</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link rel="shortcut icon" href="https://wisphub.net/media/uploadsCKEditor/yeideradrian.noba%40gmail.com%40global-raices-tv/2019/08/29/logoticsv1-recuperado.jpg">
  <!-- Custom fonts for this template -->
  <link href="<?php echo e(asset('assets/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  
  <link rel="stylesheet" href="<?php echo e(asset('js/chosen.jquery.min')); ?>">
  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('assets/css/agency.css')); ?>" rel="stylesheet">
  <style>
    .stereo{
      margin-top: 60px;
      width: 250px;
      height: 250px;

      position: fixed;
      float: left;
      left: 10%
    }

    .ml-10{
      margin-left: 130px;
    }

 /* .btn-audio{
    position: fixed;
    float: right;
    left: 90%;
    bottom: 6%
    }*/
    .img{

      width:100px;
      
    }
    .radio{
      
      bottom: 2%;
      left: 90%;
      width: 150px;
      position: fixed;
      border-radius: 15px;
    


    }

.plan{
  /*background-color: rgba(0,0,0,0.3);*/
  width: 100%;
  padding: 20px;
  margin-top: 5px;
  
}
.none{
  display: none;
}
    .radio li{
      display: inline;
    padding-right: 3px;
    padding-left: 3px;
      float: left;
      list-style: none;
    }

    .text.pri{
      color: green;
    }

    @media  only screen and (max-width: 600px) {
  .radio {
    bottom: 2%;
      left: 50%;
      width: 150px;
      position: fixed;
      border-radius: 15px;
    }

    .ml-10{
      margin-left: 0;
    }
    .icono{
     
    }
}
    .radio li a:hover{

    }
  
  <?php if($datos['primario']=='default'): ?>)
.btn-primary {
  background-color: #fed136;
  border-color: #fed136;
}

.btn-primary:active, .btn-primary:focus, .btn-primary:hover {
  background-color: #fec810 !important;
  border-color: #fec810 !important;
  color: white;
}

.btn-primary:active, .btn-primary:focus {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
  box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
}
<?php else: ?>
.btn-primary {
  background-color:  <?php echo e($datos['primario']); ?> ;
  border-color: <?php echo e($datos['primario']); ?>;
}

.btn-primary:active, .btn-primary:focus, .btn-primary:hover {
  background-color: <?php echo e($datos['primario']); ?> !important;
  border-color: <?php echo e($datos['primario']); ?> !important;
  color: white;
}

.btn-primary:active, .btn-primary:focus {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
  box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;

 .text-primary {
  color: #fed136 !important;
}

<?php endif; ?>

  <?php if($datos['bg_nav']=='default'): ?>
  .bg_color{
    background-color: #000000;
  }

  <?php else: ?>
   .bg_color{
    background-color: $datos['bg_nav'];
  }
  <?php endif; ?>


  

    </style>


</head>

<body id="page-top">
<?php /**PATH /var/www/html/Raicesc/resources/views/thema/head2.blade.php ENDPATH**/ ?>