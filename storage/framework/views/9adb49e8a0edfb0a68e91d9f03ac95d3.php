<!DOCTYPE html>
<html lang="en">
<head>
  <title>V&V Soluciones Tecnólogicas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<a class="navbar-brand" href="<?php echo e(route('welcome.blade')); ?>"> V&V Avocado Lover'S</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">      
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"></a>
        </li>
        <li class="nav-item">
        <li class="nav-item dropdown">
        <input id="id_usuario" name="id_usuario" class="form-control" placeholder="" type="text" value="<?php echo e(Auth::user()->id); ?>" hidden>
        <input id="idTipoUsuario" name="idTipoUsuario" class="form-control" placeholder="" type="text" value="<?php echo e(Auth::user()->idTipoUsuario); ?>" hidden>                

          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Bienvenido(a): <?php echo e(Auth::user()->name); ?></a>
             <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Configuración</a></li>
                    <li><a class="dropdown-item" href="#"></a></li>
                    <li><a class="dropdown-item"  href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i> Salir </a>
                                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                                    <?php echo csrf_field(); ?>
                                      </form>
                </li>
          </ul>
        </li>
        <li class="nav-item">  


          <a class="nav-link" href="javascript:void(0)">Tipo usuario:<?php echo e(Auth::user()->idTipoUsuario); ?></a>
        </li>
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="" >
       <!-- <button class="btn btn-primary" type="button">Search</button> -->
      </form>
    </div>
  </div>
</nav>


<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\ADMIN\resources\views/layouts/cabecera.blade.php ENDPATH**/ ?>