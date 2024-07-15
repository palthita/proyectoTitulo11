<?php
$cuentaUsuarios = cuentaUsuarios();
$empresas = getEmpresas();
$cuentaEmpresas = cuentaEmpresas();
$cuentaSistemas = cuentaSistemas();
$getUserTipo = getUserTipo();

?>
<?php echo $__env->make('layouts.cabecera', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Avocado Lover's <i class="fa fa-heart icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <?php if(getUserTipo() == 3 || getUserTipo() == 5 ): ?>       
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Usuarios Activos <i class="fa fa-users mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo e(cuentaUsuarios()); ?></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Empresas Activas <i class="fa fa-building mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo e(cuentaEmpresas()); ?></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Sistemas Activos <i class="fa fa-desktop mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo e(cuentaSistemas()); ?></h2>
                  </div>
                </div>
              </div>
            </div>         
            <div class="row">
              <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body p-0 d-flex">
                    <div id="inline-datepicker" class="datepicker datepicker-custom"><div class="datepicker datepicker-inline"><div class="datepicker-days" style=""><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">July 2024</th><th class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day" data-date="1719705600000">30</td><td class="day" data-date="1719792000000">1</td><td class="day" data-date="1719878400000">2</td><td class="day" data-date="1719964800000">3</td><td class="day" data-date="1720051200000">4</td><td class="day" data-date="1720137600000">5</td><td class="day" data-date="1720224000000">6</td></tr><tr><td class="day" data-date="1720310400000">7</td><td class="day" data-date="1720396800000">8</td><td class="day" data-date="1720483200000">9</td><td class="day" data-date="1720569600000">10</td><td class="day" data-date="1720656000000">11</td><td class="day" data-date="1720742400000">12</td><td class="today day" data-date="1720828800000">13</td></tr><tr><td class="day" data-date="1720915200000">14</td><td class="day" data-date="1721001600000">15</td><td class="day" data-date="1721088000000">16</td><td class="day" data-date="1721174400000">17</td><td class="day" data-date="1721260800000">18</td><td class="day" data-date="1721347200000">19</td><td class="day" data-date="1721433600000">20</td></tr><tr><td class="day" data-date="1721520000000">21</td><td class="day" data-date="1721606400000">22</td><td class="day" data-date="1721692800000">23</td><td class="day" data-date="1721779200000">24</td><td class="day" data-date="1721865600000">25</td><td class="day" data-date="1721952000000">26</td><td class="day" data-date="1722038400000">27</td></tr><tr><td class="day" data-date="1722124800000">28</td><td class="day" data-date="1722211200000">29</td><td class="day" data-date="1722297600000">30</td><td class="day" data-date="1722384000000">31</td><td class="new day" data-date="1722470400000">1</td><td class="new day" data-date="1722556800000">2</td><td class="new day" data-date="1722643200000">3</td></tr><tr><td class="new day" data-date="1722729600000">4</td><td class="new day" data-date="1722816000000">5</td><td class="new day" data-date="1722902400000">6</td><td class="new day" data-date="1722988800000">7</td><td class="new day" data-date="1723075200000">8</td><td class="new day" data-date="1723161600000">9</td><td class="new day" data-date="1723248000000">10</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2024</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month focused">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2020-2029</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2019</span><span class="year">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year focused">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year new">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade">2010</span><span class="decade focused">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
                  </div>
                </div>
              </div>
              <?php elseif(getUserTipo() == 6 ): ?> 
              <div class="row">
              <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body p-0 d-flex">
                    <div id="inline-datepicker" class="datepicker datepicker-custom"><div class="datepicker datepicker-inline"><div class="datepicker-days" style=""><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">July 2024</th><th class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day" data-date="1719705600000">30</td><td class="day" data-date="1719792000000">1</td><td class="day" data-date="1719878400000">2</td><td class="day" data-date="1719964800000">3</td><td class="day" data-date="1720051200000">4</td><td class="day" data-date="1720137600000">5</td><td class="day" data-date="1720224000000">6</td></tr><tr><td class="day" data-date="1720310400000">7</td><td class="day" data-date="1720396800000">8</td><td class="day" data-date="1720483200000">9</td><td class="day" data-date="1720569600000">10</td><td class="day" data-date="1720656000000">11</td><td class="day" data-date="1720742400000">12</td><td class="today day" data-date="1720828800000">13</td></tr><tr><td class="day" data-date="1720915200000">14</td><td class="day" data-date="1721001600000">15</td><td class="day" data-date="1721088000000">16</td><td class="day" data-date="1721174400000">17</td><td class="day" data-date="1721260800000">18</td><td class="day" data-date="1721347200000">19</td><td class="day" data-date="1721433600000">20</td></tr><tr><td class="day" data-date="1721520000000">21</td><td class="day" data-date="1721606400000">22</td><td class="day" data-date="1721692800000">23</td><td class="day" data-date="1721779200000">24</td><td class="day" data-date="1721865600000">25</td><td class="day" data-date="1721952000000">26</td><td class="day" data-date="1722038400000">27</td></tr><tr><td class="day" data-date="1722124800000">28</td><td class="day" data-date="1722211200000">29</td><td class="day" data-date="1722297600000">30</td><td class="day" data-date="1722384000000">31</td><td class="new day" data-date="1722470400000">1</td><td class="new day" data-date="1722556800000">2</td><td class="new day" data-date="1722643200000">3</td></tr><tr><td class="new day" data-date="1722729600000">4</td><td class="new day" data-date="1722816000000">5</td><td class="new day" data-date="1722902400000">6</td><td class="new day" data-date="1722988800000">7</td><td class="new day" data-date="1723075200000">8</td><td class="new day" data-date="1723161600000">9</td><td class="new day" data-date="1723248000000">10</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2024</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month focused">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2020-2029</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2019</span><span class="year">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year focused">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year new">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade">2010</span><span class="decade focused">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
                  </div>
                </div>
                
              </div>
              <?php endif; ?>
          </div>
       
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
    </script><?php /**PATH C:\xampp\htdocs\ADMIN\resources\views/welcome.blade.php ENDPATH**/ ?>