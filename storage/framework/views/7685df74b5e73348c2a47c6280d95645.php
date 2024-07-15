<?php
$tipo_usuario = gettipousuario();
?>
<?php echo $__env->make('layouts.cabecera', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>		
<div class="main-panel">
				<div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                         <div class="card-header">
                         <h3>Ingreso sistemas</h3>
                         </div>
						                                 <!-- Credit Card -->
                                <div id="formdatos">
                                    <div class="card-body">
                                        <div class="card-title">
                                        <strong class="box-title" >Ingreso</strong>
                                        </div>
						                                        <hr>
                                            <div class="form-group text-center">
                                            </div>                                          
                                            <div class="row">
                                              <div class="col-6">
                                                <label for="cc-payment" class="control-label mb-1">Código Sistema</label>
                                                <input  name="nombre" id="codigo_s" type="text" class="form-control" placeholder="" require data-bs-toggle="tooltipCodigo" title="El código debe ser unico" >
                                              </div>
                                              <div class="col-6">
                                                <label for="cc-payment" class="control-label mb-1">Nombre sistema</label>
                                                <input  name="nombre" id="nombre_s" type="text" class="form-control" placeholder="" require >
                                              </div>
                                            </div>   
                                            <div class="row">
                                              <div class="col-6">
                                                <label for="cc-payment" class="control-label mb-1" >Descripción sistema</label>
                                                <textarea class="form-control" id="desc" rows="4" require data-bs-toggle="tooltip" title="Indique la funcionalidad del sistema"></textarea>
                                              </div>
                                              <div class="col-6">
                                              <label for="cc-payment" class="control-label mb-1">Estado</label>
                                              <div class="form-group">
                            <div class="form-check">                         

                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="estado" value="1"  checked="" disabled=""> Activo <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="estado" value="2"  disabled=""> Inactivo<i class="input-helper"></i></label>
                            </div>
          
                          </div>
                                              </div>
                                            </div>                                                                                    
                                          <hr>                                          
                                                <button id="guardar" name="guardar" type="submit" class="btn btn-lg btn-info btn-block" onclick="guardar();">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Guardar</span>
                                                </button><br><br>
                                            </div>        
						</div>
                        
                      </div>
					</div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sistemas</strong>
                            </div>
                                <div class="table-responsive">
                                  <table class="table table-bordered" id="sistemaTable" >
                                          <thead>
                                              <tr>
                                                  <th>Id</th>
                                                  <th>Codigo_Sistema</th>
                                                  <th>Nombre sistema</th>
                                                  <th>Estado</th>
                                                  <th>Acción</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>                                           
                                              </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>   

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

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
// Initialize tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
<script>
// Initialize tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltipCodigo"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
    <script type="text/javascript">
        $(document).ready(function() {
          getdetalle();// validar la tabla vacia para que no de error
      } );
     
      function getdetalle(){  
        $('#sistemaTable').DataTable({
                    processing: true,
                    serverSide: true,
                    "ajax":{
                        url : "<?php echo e(route('detalleSistemas')); ?>",
                      },
                      "columns":[		
            { "data": "id" ,name:"id"},
            { "data": "NOMBRE" ,name:"NOMBRE"},
            { "data": "DESCRIPCION_SISTEMA" ,name:"DESCRIPCION_SISTEMA"},
            { "data": "ESTADO_SISTEMA" ,name:"ESTADO_SISTEMA"},
            { "data": "action" ,name:"action"}

            ]
                  });
   
  }
  function cargaDetalleSistemas(id){
    var t_usuario="";
    let lista = "";

    $.ajax({
        url: "<?php echo e(route('loadSistemas')); ?>",
        data: {
          "id": id,
        },
        success: function (respuesta) {
          let usuarios =respuesta;
            rut=usuarios[0].rut;
            nombre=usuarios[0].name;
            telefono=usuarios[0].telefono;
            email=usuarios[0].email;
            password=usuarios[0].password;
            activo=usuarios[0].activo;
            id_tipousuario=usuarios[0].id_tipousuario;
              if(id_tipousuario==1){
                t_usuario="SUPERADMIN"
                lista += "<option value='1'>" + t_usuario + "</option>";
                document.getElementById("id_tipousuario").innerHTML = lista;

              }else if(id_tipousuario==2){
                t_usuario="ADMINISTRADOR"
                lista += "<option value='2'>" + t_usuario + "</option>";
                document.getElementById("id_tipousuario").innerHTML = lista;

              }else if(id_tipousuario==3){
                t_usuario="ESTUDIANTE"
                lista += "<option value='3'>" + t_usuario + "</option>";
                document.getElementById("id_tipousuario").innerHTML = lista;

              }else if(id_tipousuario==4){
                t_usuario="DOCENTE"
                lista += "<option value='4'>" + t_usuario + "</option>";
                document.getElementById("id_tipousuario").innerHTML = lista;

              }else if(id_tipousuario==5){
                t_usuario="APODERADO"
                lista += "<option value='5'>" + t_usuario + "</option>";
                document.getElementById("id_tipousuario").innerHTML = lista;

              }

          document.getElementById('nombre').value=nombre;
          document.getElementById('nombre').readOnly = true;

          document.getElementById('mail').value=email;
          document.getElementById('mail').readOnly = true;

          document.getElementById('telefono').value=telefono;


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
  </script>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\ADMIN\resources\views/sistemas.blade.php ENDPATH**/ ?>