
	

      
          
         
          




		        <!-- page content -->
				<div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="tile_count">
          <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrar <small>Productos</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  <table border="1">
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"   action="<?= base_url("controlador_producto/adicionar");?>" method="POST" enctype="multipart/form-data">
            
    
		 <div class="item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="nombre">Nombre:<span class="required">*</span>
				  </label>
			      <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="nombre" name="nombre" required="required" class="form-control">
				  </div>
		     	</div>

				 <div class="item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="precio">Precio:<span class="required">*</span>
				  </label>
			      <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="precio" name="precio" required="required" class="form-control">
				  </div>
		     	</div>
           <div class="item form-group ">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="foreingKey">Seleccionar un fabricante:</label>
                            <div class="col-md-6 col-sm-6 ">
                            <select class="form-control " name="codigo_fabricante" id="codigo_fabricante">
                                <option value="">Selecione una Marca</option>
                                <?php foreach ($marcas as $marca) { ?>
                                    <option value="<?= $marca->codigo?>"><?= $marca->nombre ?>
                                    </option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>

				 
           
                  
				 <div class="item form-group">
	             <div class="col-md-6 col-sm-6 offset-md-3">
		
		           <input  id="btn" type="submit" class="btn btn-success" value="GUARDAR">
	              </div>
              </div>
                  
         </form>

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
        <!-- /page content ->

        


		