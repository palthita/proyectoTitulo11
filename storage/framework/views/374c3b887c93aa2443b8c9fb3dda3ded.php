<?php
$tipo_usuario = gettipousuario();
$estado = getEstado();
?>
<?php echo $__env->make('layouts.cabecera', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>		
<div class="main-panel">
				<div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                         <div class="card-header">
                         <h3>Formulario Registro usuarios</h3>
                         </div>
						                                 <!-- Credit Card -->
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
                                                <label for="cc-payment" class="control-label mb-1">Nombre </label>
                                                <input  name="nombre" id="nombre" type="text" class="form-control" placeholder="" require >
                                              </div>
                                              <div class="col-6">
                                                <label for="cc-payment" class="control-label mb-1">Mail</label>
                                                <input  name="mail" id="mail" type="text" class="form-control" placeholder="Ingrese Mail" require >
                                              </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-6">
                                                <label for="cc-payment" class="control-label mb-1">Contraseña</label>
                                                <input  name="pass" id="pass" type="password" class="form-control" placeholder="Ingrese contraseña" require >
                                            </div>
                                            <div class="col-6">
                                                <label for="cc-payment" class="control-label mb-1">Repetir Contraseña</label>
                                                <input  name="pass1" id="pass1" type="password" class="form-control" placeholder="Ingrese contraseña" require onchange="validarpass();">
                                            </div>
                                          </div>
                                           
                                            <div class="row">
                                             
                                                <div class="col-6">
                                            <label for="usuario">Tipo Usuario</label>
                                                <select name="id_tipousuario" id="id_tipousuario" class="form-control" >
                                                <option value="" >Seleccion...</option>
                                                <?php $__currentLoopData = $tipo_usuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($r->id); ?>"><?php echo e($r->nombre); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>
                                            </div>
                                            <div class="col-6">
                                            <label for="estado">Estado</label>
                                                <select name="estado" id="estado" class="form-control" >
                                                <option value="" >Seleccion...</option>
                                                <?php $__currentLoopData = $estado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($r->id); ?>"><?php echo e($r->nombreEstado); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>
                                            </div>
                                              </div>
<hr>
                                           
                                                <button id="guardar" name="guardar" type="submit" class="btn btn-lg btn-info btn-block" onclick="guardarUsuario();">
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
                                <strong class="card-title">Usuarios</strong>
                            </div>
                            <div class="table-responsive">
            <table class="table table-bordered" id="usuariostable" >
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Tipo Usuario</th>
                                            <th>Activo</th>
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
          buscaUsuarios();
      } );
      function buscaUsuarios(){
        $.ajax({
            url: "<?php echo e(route('buscaUsuario')); ?>",
            success: function (respuesta) {
              id_user =respuesta.id;
             if (id_user != ""){
              getdetalleUsuario();
             }
            },
            error: function () {
              console.log("No se ha podido obtener la información");
            }
          });
      }
      function getdetalleUsuario(){  
        $('#usuariostable').DataTable({
                    processing: true,
                    serverSide: true,
                    "ajax":{
                        url : "<?php echo e(route('getdetalleUsuario')); ?>",
                      },
                      "columns":[		
            { "data": "id" ,name:"id"},
            { "data": "name" ,name:"name"},
            { "data": "email" ,name:"email"},
            { "data": "idTipoUsuario" ,name:"idTipoUsuario"},
            { "data": "estado" ,name:"estado"},
            { "data": "action" ,name:"action"}

            ]
                  });
   
  }
      function validarpass(pass,pass1){
        var p1 = document.getElementById('pass').value;
        var p2 = document.getElementById('pass1').value;
         if( p1 != p2){
          alert("Contraseñas no coinciden");
           document.getElementById("pass1").focus();
         }

      }

      function guardarUsuario() {
          var nombre = document.getElementById("nombre").value;
          var mail = document.getElementById("mail").value;
          var pass = document.getElementById("pass").value;
          var pass1 = document.getElementById("pass1").value;
          var id_tipousuario = document.getElementById("id_tipousuario").value;
          var estado = document.getElementById("estado").value;

          if(nombre ==""){
            alert("Ingrese la información solicitada");
            document.getElementById("nombre").focus();
          }else if(mail==""){
            alert("Ingrese la información solicitada");
            document.getElementById("mail").focus();
          }else if(pass1 ==""){
            alert("Ingrese la información solicitada");
            document.getElementById("pass1").focus();
          }else if(id_tipousuario==""){
            alert("Ingrese la información solicitada");
            document.getElementById("id_tipousuario").focus();
          }else if(estado==""){
            alert("Ingrese la información solicitada");
            document.getElementById("estado").focus();
          }

        $.ajax({
          
          data: {           
            nombre,
            mail,
            pass,
            id_tipousuario,
            estado,
          },
          url: "<?php echo e(route('guardaUsuario')); ?>",
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
  
  function cargaDetalleUsuario(id){
    var t_usuario="";
    let lista = "";
    var estado=";"
    $.ajax({
        url: "<?php echo e(route('loadUsuarios')); ?>",
        data: {
          "id": id,
        },
        success: function (respuesta) {
          let usuarios =respuesta;
          console.log(usuarios);
            nombre=usuarios[0].name;
            email=usuarios[0].email;
            password=usuarios[0].password;
            id_tipousuario=usuarios[0].idTipoUsuario;
            activo=usuarios[0].estado;
            
              
          document.getElementById('nombre').value=nombre;

          document.getElementById('mail').value=email;
          document.getElementById('mail').readOnly = true;
        },
        error: function () {
          console.log("No se ha podido obtener la información");
        }
      });
}
function eliminarUsuario(id){
  $.ajax({
      url: "<?php echo e(route('eliminarUsuario')); ?>",
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
<?php /**PATH C:\xampp\htdocs\ADMIN\resources\views/usuariosadmin.blade.php ENDPATH**/ ?>