

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="tile_count">
          <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista <small>Fabricante</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <a href="<?=base_url("reportes/imprimir_lista_fabricante");?>"  class="btn btn-round btn-info" target="_blank">Imprimiendo</a>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          
                          <td>nro</td>
                          <td>Nombre</td>
				                  
                          
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
			$n=1;
			foreach( $ver as $fila){ ?>
            <tr>
                    <th><?=$n++?></th>
                    <td><?=$fila->nombre ?></td>
                    
                    <td>  </td>
					<td><a id="elim" href="<?=base_url("controlador_fabricante/eliminar/$fila->codigo");?>" class="btn btn-round btn-danger">Eliminar</a></td>
					<td><a id="edit" href="<?=base_url("controlador_fabricante/editar/$fila->codigo");?>" class="btn btn-round btn-success">Editar</a></td>
          <td><a id="impri" href="<?=base_url("reportes/imprimir_fabricante/$fila->codigo");?>"  class="btn btn-round btn-warning" target="_blank">Imprimir</a></td>
            </tr>

            <?php } ?>
                      
                      </tbody>
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

