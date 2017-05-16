<?php
/* @var $this PecesController */
/* @var $model Peces */
//header('Content-type: application/json; charset=UTF-8');
//header('Content-Type: text/html; charset=ISO-8859-1');

if (!isset($vacio))
{
	echo "<div class='resul'>Número de resultados: ".count($resultados)."</b></div>";
	?>

<div id="vista_res">
	<div class="view">
	<?php 			
		foreach ($resultados as $k => $pezobj) {
		//$pezobj = Peces::model()->findByPk($pez["especie_id"]);
		
		//echo "ID: ".$pezobj->especie_id."<br>";		
		echo "<div id ='dresul_".$pezobj['id']."'class='dresul_all'>";	
		echo "<div class='dresul_view'>";
		echo "<div class='dresul_head'>";
		
		// Parte de los nombres	
		echo "<b>".($pezobj['nombre_comun']).", ".($pezobj['nombre_ingles'])."</b><br> <i>(".$pezobj['nombre_cientifico'].")</i>";
						
		echo "</div>"; //cierra dresul_head
		
		// Logo de Importado
		echo "<div class='dimp'>";
		if($pezobj['nacional_importado_valor'] == 1)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/importado.png", "Pez importado", array("title"=>"Importado"));
		echo "</div>";
		
		echo "<div id='dat_".$pezobj['id']."'>";
		
		// Imagenes peces
		echo "<div class='dima'>";
		if ($pezobj['tipo_imagen'] == 1)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/".($pezobj['imagen']), $pezobj['nombre_comun'], array('class'=>'ima'));
		elseif ($pezobj['tipo_imagen'] == 2)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/siluetas/".($pezobj['imagen']), $pezobj['nombre_comun'], array('class'=>'ima'));
		echo "</div>";
		
		/*
		if ($pezobj->recomendacion == 1 && !empty($pezobj->peso))
		{
			$imagenes = $pezobj->peso_a_nombre_imagen();
			echo '<span class="color_estilo bgcolor_pacifico bgcolor_zonas"></span>';
			echo '<span class="color_estilo bgcolor_golfo bgcolor_zonas"></span><br />';
			
			foreach ($imagenes as $index => $imagen)
				echo "<span class=\"color_estilo color_$imagen \"></span>";
		}*/
		echo "</div>"; // cierra  dat_
		echo "</div>"; //cierra dresul_view
		
		echo "<div id ='dresul_body_".$pezobj['id']."'class='dresul_body' style='display:none'>";

		// Categorias de riesgo
		$cat_riesgo = array();
		
		if($pezobj['nom_valor'] == 1)
			array_push($cat_riesgo, $pezobj['nom'].CHtml::link(' (NOM)', "http://www.biodiversidad.gob.mx/especies/catRiesMexico.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));		
		if($pezobj['iucn_valor'] == 1)
			array_push($cat_riesgo, $pezobj['iucn'].CHtml::link(' (IUCN)', "http://www.biodiversidad.gob.mx/especies/catRiesMundo.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));			
		if($pezobj['cites_valor'] == 1)
			array_push($cat_riesgo, $pezobj['cites'].CHtml::link(' (CITES)', "http://www.biodiversidad.gob.mx/planeta/cites/index.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));	
		if (count($cat_riesgo) > 0)
			echo "<b>Categorias de riesgo:</b> ".implode(', ', $cat_riesgo)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"estado_conservacion"))."<br /><br />";
			
		// Distribuciones
		$distribuciones = array();
		
		if ($pezobj['presente_pacifico'] == 1)
			array_push($distribuciones, 'Ocenano pacífico');
		if ($pezobj['presente_golfo'] == 1)
			array_push($distribuciones, 'Golfo de México');
		if ($pezobj['presente_caribe'] == 1)
			array_push($distribuciones, 'Mar y caribe');
		if (count($distribuciones) > 0)
			echo "<b>Distribuci&oacute;n en:</b> ".implode(', ', $distribuciones)."<br /><br />";	
			
		// Tipo de pesca
		echo "<b>Tipo de pesca:</b> ".$pezobj['tipo_captura']." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"tipo_pesca"))."<br /><br />";
		
		// Arte de pesca
		if (!empty($pezobj['arte_pesca'])) 
			echo "<b>Arte de pesca:</b> ".$pezobj['arte_pesca']." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."<br /><br />";			
				
		// Veda
		if (!empty($pezobj['tipo_veda']))
		{
			if (!empty($pezobj['tipo_veda_fecha']))
				echo "<b>Veda:</b> ".$pezobj['tipo_veda']." (".$pezobj['tipo_veda_fecha'].") ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))."<br /><br />";
			else
				echo "<b>Veda:</b> ".$pezobj['tipo_veda']." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))."<br /><br />";
		}

		// Capturas
		$capturas = array();
		
		if ($pezobj['objetivo'] == 1)
			array_push($capturas, 'objetivo');
		if ($pezobj['incidental'] == 1)
			array_push($capturas, 'incidental');
		if ($pezobj['deportiva'] == 1)
			array_push($capturas, 'deportiva');
		if ($pezobj['fomento'] == 1)
			array_push($capturas, 'fomento');
		if ($pezobj['cultivada'] == 1)
			array_push($capturas, 'cultivada');
		if (count($capturas) > 0)
			echo "<b>Tipo de captura:</b> ".implode(', ', $capturas)."<br /><br />";
				
		// Talla captura
		if (!empty($pezobj['talla captura']))
			echo "Talla del pez: ".($pezobj['talla_captura'])." cm.<br /><br />";	
		
		// Grupo
		if (!empty($pezobj['grupo_conabio']))
			echo "<b>Grupo:</b> ".($pezobj['grupo_conabio'])."<br /><br />";
		
		//Generalidades
		if (!empty($pezobj['generalidades']))
			echo "<b>Generalidades:</b> ".($pezobj['generalidades'])."<br /><br />";
			
		echo "<b>Peso: </b>".$pezobj['peso']." | CNP: ".$pezobj['cnp'];	

		echo "</div>";  //cierra dresul_body_
		echo "</div>";  //cierra dresul_all
		?>

		
	<?php } ?>
	</div>
</div>

<?php 	
	} else
	echo $vacio;
?>