<?php
$empresas = getEmpresas();
$getSistemas = getSistemas();
$getUserTipo = getUserTipo();
?>

<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?php if(getUserTipo() == 3 ): ?>          

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <!-- si el usuario es owner tiene todos los privilegios / usuario administrador puede crear empresas -->
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#mantenedor" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Mantenedores Plataforma</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-gears"></i>
          </a>
          <div class="collapse" id="mantenedor">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('usuariosadmin.blade')); ?>">Usuarios</a>
              </li><li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('tipoUsuario.blade')); ?>">Tipo Usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('sistemas.blade')); ?>">Sistemas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('empresas.blade')); ?>">Empresas</a> <!-- Asignar desde modal o similar sistemas a la empresa creada-->
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#configuracion" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Configuración</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-gears"></i>
          </a>
          <div class="collapse" id="configuracion">
            <ul class="nav flex-column sub-menu">
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('configEmpresas.blade')); ?>">Empresas</a> <!-- Asignar desde modal o similar sistemas a la empresa creada-->
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#distribucion" aria-expanded="false" aria-controls="auth">
            <span class="menu-title">Sistema Distribución</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-send-o"></i>
          </a>
          <div class="collapse" id="distribucion">
        
            <ul class="nav flex-column sub-menu">
            <span class="menu-title">Mantendedores</span>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Descripciones estados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Zonas de reparto</a>
              </li>
            </ul>
          </div>
          <div class="collapse" id="distribucion">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Asigna Estado </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#recetas" aria-expanded="false" aria-controls="auth">
            <span class="menu-title">Recetas</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-coffee"></i>
          </a>
          <div class="collapse" id="recetas">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#colegios" aria-expanded="false" aria-controls="auth">
            <span class="menu-title">Colegios</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-university"></i>
          </a>
          <div class="collapse" id="colegios">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
              </li>
              
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <?php elseif(getUserTipo() == 5): ?>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <!-- si el usuario es owner tiene todos los privilegios / usuario administrador puede crear empresas -->
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#mantenedor" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Mantenedores</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-gears"></i>
          </a>
          <div class="collapse" id="mantenedor">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('usuariosadmin.blade')); ?>">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('sistemas.blade')); ?>">Sistemas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('empresas.blade')); ?>">Empresas</a> <!-- Asignar desde modal o similar sistemas a la empresa creada-->
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#configuracion" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Configuración</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-gears"></i>
          </a>
          <div class="collapse" id="configuracion">
            <ul class="nav flex-column sub-menu">
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('configEmpresas.blade')); ?>">Empresas</a> <!-- Asignar desde modal o similar sistemas a la empresa creada-->
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#distribucion" aria-expanded="false" aria-controls="auth">
            <span class="menu-title">Sistema Distribución</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-send-o"></i>
          </a>
          <div class="collapse" id="distribucion">
        
            <ul class="nav flex-column sub-menu">
            <span class="menu-title">Mantendedores</span>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Descripciones estados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Zonas de reparto</a>
              </li>
            </ul>
          </div>
          <div class="collapse" id="distribucion">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Asigna Estado </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/samples/login.html"> Login </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/samples/register.html"> Register </a>
              </li>
           
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#recetas" aria-expanded="false" aria-controls="auth">
            <span class="menu-title">Recetas</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-coffee"></i>
          </a>
          <div class="collapse" id="recetas">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
              </li>
             
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#colegios" aria-expanded="false" aria-controls="auth">
            <span class="menu-title">Colegios</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-university"></i>
          </a>
          <div class="collapse" id="colegios">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
              </li>
              
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <?php elseif(getUserTipo() == 6): ?>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
         
        
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#distribucion" aria-expanded="false" aria-controls="auth">
            <span class="menu-title">Sistema Distribución</span>
            <i class="menu-arrow"></i>
            <i class="fa fa-send-o"></i>
          </a>
          <div class="collapse" id="distribucion">        
            <ul class="nav flex-column sub-menu">
            <span class="menu-title">Mantendedores</span>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Descripciones estados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Zonas de reparto</a>
              </li>
            </ul>
          </div>
          <div class="collapse" id="distribucion">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('eDis.blade')); ?>"> Asigna Estado </a>
              </li>
              
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
      } );
    </script><?php /**PATH C:\xampp\htdocs\ADMIN\resources\views/layouts/menu.blade.php ENDPATH**/ ?>