
<?php echo $__env->make('layouts.cabecera', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>		
<div class="main-panel">
				<div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card">
                                    <div class="card-header">
                                    <h3>Registro tipo de usuario</h3>
                            </div>						                             
                                <div id="formdatos">
                                    <div class="card-body">
                                        <div class="card-title">
                                        <strong class="box-title" >Ingreso de Información</strong>
                                        </div>
						                                        <hr>
                                            <div class="form-group text-center">
                                            </div>                                          
                                            <div class="row">
                                              <div class="col-6">
                                                <label for="cc-payment" class="control-label mb-1">Descripción tipo de usuario </label>
                                                <input  name="TipoUsuario" id="TipoUsuario" type="text" class="form-control" hidden >
                                                <input  name="desTipoUsuario" id="desTipoUsuario" type="text" class="form-control" placeholder="Ej: Supervisor" require >
                                              </div>
                                
                                            </div>                                        
                                           
<hr>
                                           
                                                <button id="guardar" name="guardar" type="submit" class="btn btn-lg btn-info btn-block" onclick="guardar();">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Guardar Datos</span>
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
                                <strong class="card-title">Tipo Usuarios</strong>
                            </div>
                            <div class="table-responsive">
            <table class="table table-bordered" id="tipoUsuariotable" >
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Tipo Usuario</th>
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
            </div><!-- .animated -->
        </div><!-- .content -->


     

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
    <script type="text/javascript">
        $(document).ready(function() {
          buscaTipoUsuario();
      } );
function buscaTipoUsuario(){
        $.ajax({
            url: "<?php echo e(route('buscaTipoUsuario')); ?>",
            success: function (respuesta) {
              id_user =respuesta.id;
             if (id_user != ""){
              getDetalleTipoUsuario();
             }
            },
            error: function () {
              console.log("No se ha podido obtener la información");
            }
          });
}
      function getDetalleTipoUsuario(){  
        $('#tipoUsuariotable').DataTable({
                    processing: true,
                    serverSide: true,
                    "ajax":{
                        url : "<?php echo e(route('detalleTipoUsuario')); ?>",
                      },
                      "columns":[		
                          { "data": "id" ,name:"id"},
                          { "data": "nombre" ,name:"nombre"},
                          { "data": "action" ,name:"action"},
                          ]
                  });
   
  }
  function guardar() {
          var nombre = document.getElementById("desTipoUsuario").value;
var idTipoUsuario = document.getElementById("TipoUsuario").value;
console.log(idTipoUsuario);
          if(nombre ==""){
            alert("Ingrese la información solicitada");
            document.getElementById("nombre").focus();
          }

        $.ajax({
          
          data: {
            idTipoUsuario,
            nombre,
           
          },
          url: "<?php echo e(route('guardaTipoUsuario')); ?>",
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
  function cargaDetalleTipoUsuario(id){
    var t_usuario="";
    let lista = "";

    $.ajax({
        url: "<?php echo e(route('loadTipoUsuarios')); ?>",
        data: {
          "id": id,
        },
        success: function (respuesta) {
          let tipoUsuario =respuesta;
            nombre=tipoUsuario[0].nombre;        
          document.getElementById('desTipoUsuario').value=nombre;      
          document.getElementById('TipoUsuario').value=id;      

        },
        error: function () {
          console.log("No se ha podido obtener la información");
        }
      });
}
function eliminar(id){
  $.ajax({
      url: "<?php echo e(route('eliminarTipoUsuarios')); ?>",
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
  </script>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\ADMIN\resources\views/tipoUsuario.blade.php ENDPATH**/ ?>