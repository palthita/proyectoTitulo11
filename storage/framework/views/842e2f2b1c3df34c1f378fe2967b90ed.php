<?php echo $__env->make('layouts.cabecera', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="fa fa-refresh"></i>
                </span> Asignación estado entrega documento
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Palta Lovers. <i class="mdi mdi-heart text-danger"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-6 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">                
                        <div class="card-body">
                                <p class="font-weight-bold"> N°: </p>
                                <p class="mb-2"> DIRECCIÓN </p>
                                <p class="font-weight-bold">COMUNA </p>
                        </div>
                    </div>
              </div>
              <div class="col-6 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">                
                        <div class="card-body">
                                <p class="font-weight-bold">ESTADO</p>
                        </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                                 <h4 class="card-title"></h4>
                                    <div class="row">
                                             <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">ESTADO ENTREGA</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-check form-check-success">
                                                                    <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> ENTREGADO <i class="input-helper"></i></label>
                                                                </div>
                                                            </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-check form-check-danger">
                                                                        <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> DEVUELTO <i class="input-helper"></i></label>
                                                                    </div>
                                                                </div>
                                                    </div>
                                            </div>
                                 </div>                              
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">DESCRIPCIÓN ENTREGA</label>
                                                    <div class="col-sm-9">
                                                            <select class="form-select">
                                                                <option>America</option>
                                                                <option>Italy</option>
                                                                <option>Russia</option>
                                                                <option>Britain</option>
                                                            </select>
                                                    </div>
                                        </div>
                                    </div>
                                         <div class="col-md-12">
                                                <div class="form-group row">
                                                            <label lass="col-md-6 col-form-label" for="exampleTextarea1">DESCRIPCIÓN ESTADO</label>
                                                            <div class="col-sm-6">
                                                                <textarea class="form-control" id="desc" rows="4"></textarea>
                                                            </div>
                                                </div>
                                        </div>
                              </div>
                              
                  </div>
                </div>
              </div>
            </div>
            
                  
            </div>
          </div>
         <?php /**PATH C:\xampp\htdocs\ADMIN\resources\views/layouts/eDis.blade.php ENDPATH**/ ?>