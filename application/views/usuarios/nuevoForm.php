
	

      
          
         
          




		        <!-- page content -->
				<div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="tile_count">
          <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrar <small>Usuarios</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  <table border="1">
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"   action="<?= base_url("controlador_usuario/adicionar");?>" method="POST" enctype="multipart/form-data">
            
    
		 <div class="item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="nombre">Nombre:<span class="required">*</span>
				  </label>
			      <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="nombre" name="nombre" required="required" class="form-control">
				  </div>
		     	</div>
           <div class="item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="contrasena">contraseña:<span class="required">*</span>
				  </label>
			      <div class="col-md-6 col-sm-6 ">
                  <input type="password" id="contrasena" name="contrasena" required="required" class="form-control">
				  </div>
        </div>

           <div class="item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="examinar">Examinar:<span class="required">*</span>
				  </label>
			      <div class="col-md-6 col-sm-6 ">
                  <input type="file" id="upload" name="upload" required="required" class="form-control" accept=".jpg,.png">
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

        


		