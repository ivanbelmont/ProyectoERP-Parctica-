<?php function tbl_Submodulos($mysqli,$idModulo) {

$mysqli->real_query("SELECT s.id_submodulo,s.nombre,m.html color,s.icon 
FROM crr_submodulos s,crr_modules m 
WHERE s.id_modulo=$idModulo
AND m.id=s.id_modulo;");
  

    $ConsUsuario = $mysqli->use_result();

while ($fila = $ConsUsuario->fetch_object())
           {
            echo '<div class="col-md-4" onclick="Funciones('.$fila->id_submodulo.')">
                  <div class="info-box '.$fila->color.'">
                <span class="info-box-icon"><i class="ion '.$fila->icon.'"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">'.$fila->nombre.'</span>
                  
                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
          </div>';
           }
           ?>
           <div class="col-md-3 col-sm-6 col-xs-12">
            <button onclick="House();" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-sign-out"></i>Regresar</button>
          </div>
                  <!--     <div class="col-md-3 col-sm-6 col-xs-12" onclick="House();">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion Ion-ios-home"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Regresar</span>
                  
                </div>
              </div>
            </div>-->
            <?php
           

 }

	?>