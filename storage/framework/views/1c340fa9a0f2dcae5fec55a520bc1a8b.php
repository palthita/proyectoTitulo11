<?php
$tipo_usuario = gettipousuario();
$usuarios = getUsuarios();
$empresas = getEmpresas();
$getSistemas = getSistemas();
?>
<?php echo $__env->make('layouts.cabecera', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>		
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">  Configuración Inicial de Empresas</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('configEmpresas.blade')); ?>">Empresas</a> <!-- Asignar desde modal o similar sistemas a la empresa creada-->
              </li></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Config Empresas</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card" id="asociaSistemaEmpresa">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Datos Empresa</h4>
                    <p class="card-description"> Seleccione Empresa a configurar </p>
                    <form class="forms-sample">
                      <div class="form-group row">
                        <select class="form-select" name="idEmpresa" id="idEmpresa" class="form-control" onchange="habilitaSistemas(this.value);">
                                                                        <option value="" >Seleccion...</option>
                                                                        <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($r->id); ?>"><?php echo e($r->nombreEmpresa); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>  
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Rut</label>
                        <div class="col-sm-9">
                        <input type="text" id="rutEmpresa" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Giro</label>
                        <div class="col-sm-9">
                        <input type="text" id="giroEmpresa" class="form-control">
                        </div>
                      </div>
                      <hr>
                      <div class="form-group row" id="usuarioSupervisorSelect" hidden>
                      <h4 class="card-title">Asignar usuario Supervisor a Empresa</h4>

                        <label for="exampleInputMobile" class="col-sm-9 col-form-label">Seleccione usuario</label>
                        <div class="col-sm-3">
                        <select class="form-select" name="idUsuario" id="idUsuario" class="form-control">
                                                                        <option value="" >Seleccion...</option>
                                                                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($r->id); ?>"><?php echo e($r->name); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>  
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card" id="muestraSistemasAsociados" disabled>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sistemas Activos</h4>
                    <p class="card-description"> Sistemas Asociados a Empresa</p>
                    <form class="forms-sample">
                          <table class="table table-hover" id="sistemaTable">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nombre Sistema</th>
                                <th>Acción</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                              </tr>
                            </tbody>
                          </table>

                    </form>
                  </div>
                </div>
              </div>
              
              </div>
           
              
            </div>
          </div>
         
        </div>
        <!-- Scripts -->
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
    <script>
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
      } );
function habilitaSistemas(idEmpresa){
  document.getElementById('idEmpresa').disabled = true;
  document.getElementById('usuarioSupervisorSelect').hidden = false;
 $.ajax({
        url: "<?php echo e(route('loadEmpresas')); ?>",
        data: {
          "id": idEmpresa,
        },
        success: function (respuesta) {
          empresa = respuesta;
          element= empresa;
          
          document.getElementById('rutEmpresa').value = element.rutEmpresa;
          document.getElementById('giroEmpresa').value = element.giroEmpresa;
          document.getElementById('rutEmpresa').disabled = true;
          document.getElementById('giroEmpresa').disabled = true;
         /* document.getElementById('sistemasHabilitados').hidden = false;*/
          getdetalle(idEmpresa);
          /*cargaDetalleSistemas(idEmpresa);*/
        },
        error: function () {
          console.log("No se ha podido obtener la información");
        }
      });

}
 function cargaDetalleSistemas(idEmpresa){    
  id = idEmpresa;
  var nombreS = "";
  var estadoS= "";
  document.getElementById('muestraSistemasAsociados').hidden = false;

    $.ajax({
        url: "<?php echo e(route('loadSistemasEmpresa')); ?>",
        data: {
          "id": id,
        },
        success: function (respuesta) {
            sistemas =respuesta;
            console.log(respuesta);
            var nombreS= "";
          

        for (var i = 0; i < sistemas.length; i++) {
          element = sistemas[i];
          estado = element.estado;
          console.log(estado);

            if(estado ==1 ){            
              nombreS+=  "<div class='col-md-6'>"+
                            "<div class='form-group row'>"+
                               "<label class='col-sm-9 col-form-label' id='nombreSistemaAsociado'>" + element.NOMBRE + "</label>"+
                                  "<div class='col-sm-3'>"+
                                      "<button type='button' id='estadoSi'  class='btn btn-inverse-success btn-sm'  onclick='asociaSistema("+element.id+");'>Asignar</button>"+
                                     "</div>"+
                          "</div>"+
                       "</div>";
            }else if(estado == 2){
              nombreS+= "<div class='col-md-6'>"+
                            "<div class='form-group row'>"+
                            "<label class='col-sm-9 col-form-label' id='nombreSistemaAsociado'>" + element.NOMBRE + "</label>"+
                            "<div class='col-sm-3'>"+
                            "<button type='button' id='estadoSi' class='btn btn-inverse-warning btn-sm' onclick='asociaSistema("+element.id+");'>Desvincular</button>"+
                            "</div>"+
                          "</div>"+
                       "</div>";
            }            
        }
        document.getElementById('muestraSistemasAsociados').innerHTML = nombreS;


        },
        error: function () {
          console.log("No se ha podido obtener la información");
        }
      });
}
function eliminarSistemas(id){
  $.ajax({
      url: "<?php echo e(route('eliminarSistemas')); ?>",
      data: {
        "id": id,
      },
      success: function (respuesta) {
        let alerta = respuesta;
                   alert(alerta);
                   window.location.reload();
      },
      error: function () {
        console.log("No se ha podido obtener la información");
      }
    });
}
function guardar() {
 
          var codigo_s = document.getElementById("codigo_s").value;
          var nombre = document.getElementById("nombre_s").value;
          
          var desc = document.getElementById("desc").value;
          var activo = 1;

          if(codigo_s ==""){
            alert("Ingrese la información solicitada");
            document.getElementById("codigo_s").focus();
          }else if(nombre==""){
            alert("Ingrese la información solicitada");
            document.getElementById("nombre_s").focus();
          }else if(desc==""){
            alert("Ingrese la información solicitada");
            document.getElementById("desc").focus();
          }
        $.ajax({
          
          data: {           
            codigo_s,
            nombre,
            desc,
            activo,
          },
          url: "<?php echo e(route('guardar')); ?>",
                  type: 'GET',
                  dataType : "json",
                  async: false,
                  error: function(X){
                            
                    },
                  success: function(json){
                    let alerta = json.message;
                   alert(alerta);
                   location.reload();

                  }
                  });  


}
function getdetalle(idEmpresa){  
  $('#sistemaTable').DataTable({
              processing: true,
              serverSide: true,
              "ajax":{
                  url : "<?php echo e(route('muestraSistemasActivos')); ?>",
                  data: {
                  "idEmpresa": idEmpresa,
                },
                },
                "columns":[		
      { "data": "id" ,name:"id"},
      { "data": "NOMBRE" ,name:"NOMBRE"},
      { "data": "action" ,name:"action"}

      ]
            });


}
function asociaSistema(id){
  var idEmpresa = document.getElementById("idEmpresa").value;
  var idSistema = id;
  $.ajax({
          
          data: {           
            idEmpresa,
            idSistema,
          },
          url: "<?php echo e(route('asignaSistemaEmpresa')); ?>",
                  type: 'GET',
                  dataType : "json",
                  async: false,
                  error: function(X){
                    
                    },
                  success: function(respuesta){
                    let alerta = respuesta.message;
                    asocia = respuesta;
                    element = asocia;
                    idSistemaAsocia = element.id;
                    idSistema = element.idSistema;
                    estado= element.estado;

                  }
                  });  
}

  </script>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\ADMIN\resources\views/configEmpresas.blade.php ENDPATH**/ ?>