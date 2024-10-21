
  <!-- page content -->
				<div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="tile_count">
          <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar <small>Productos</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  <table border="1">
          <?php foreach($datos as $fila){ ?>
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"   method="POST" enctype="multipart/form-data">
            
    
		 <div class="item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="nombre"> Ingrese su Nombre:<span class="required">*</span>
				  </label>
			      <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="nombre" name="nombre" value="<?= $fila->nombre?>" required="required" class="form-control">
				  </div>
		     	</div>

				 <div class="item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="precio"> Ingrese su Precio:<span class="required">*</span>
				  </label>
			      <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="precio" name="precio" value="<?= $fila->precio?>" required="required" class="form-control">
				  </div>
		     	</div>

           <div class="form-group row">
									<label class="col-form-label col-md-3 col-sm-3 " for="foreingKey">Seleccionar
										Fabricante:</label>

									<select class="form-control col-md-6 col-sm-6  " name="codigo_fabricante" id="codigo_fabricante">
										<option value="">Selecione una Marca</option>
										<?php foreach ($marcas as $marca) { ?>
											<option value="<?= $marca->codigo ?>"<?= ($fila->codigo_fabricante==$marca->nombre)?>><?=$marca->nombre?></option>
										
										<?php } ?>
									</select>
								</div>




				 
         
                  
				 <div class="item form-group">
	             <div class="col-md-6 col-sm-6 offset-md-3">
		
		           <input  id="btn" type="submit" class="btn btn-success" name="editar" value="MODIFICAR">
	              </div>
              </div>
                  
         </form>
         <?php } ?>

        </table>

                  </div>
                </div>
              </div>

            
          </div>
        </div>
         </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        