<?php
/* @var $this PecesController */
/* @var $model Peces */
//header('Content-type: application/json; charset=UTF-8');
//header('Content-Type: text/html; charset=ISO-8859-1');

if (!isset($vacio))
{
	echo "<div class='resul'>Número de resultados: <span class='numero'>".count($resultados)."</span></div>";
	?>

<div id="vista_res">
	<div class="view">
	<?php 			
		foreach ($resultados as $k => $pez) {
		//$pez = Peces::model()->findByPk($pez["especie_id"]);
		
		//echo "ID: ".$pez->especie_id."<br>";		
		echo "<div id ='dresul_".$pez['id']."'class='dresul_all'>";	
		echo "<div class='dresul_view'>";
		echo "<div class='dresul_head'>";
		
		// Parte de los nombres	
		echo "<strong>".($pez['nombre_comun']).", ".($pez['nombre_ingles'])."</strong><br> <i>(".$pez['nombre_cientifico'].")</i>";
		
		// Parte del peso
		echo "<div class='peso_recomendacion'>";
		echo "<span class='numpeso'>".$pez['peso']."</span>";
		
		if ($pez['peso'] == 0)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo recomendacion_pez color_V+"));
		else if ($pez['peso'] == 5)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo recomendacion_pez color_V-"));
		else if ($pez['peso'] >= 10 && $pez['peso'] <= 15)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo recomendacion_pez color_A-"));
		else if ($pez['peso'] == 20)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo recomendacion_pez color_A+"));
		else if ($pez['peso'] > 20)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo recomendacion_pez color_R"));
		echo "</div>";
			
		echo "</div>"; //cierra dresul_head
		
		// Logo de Importado
		echo "<div class='dimp'>";
		if($pez['nacional_importado_valor'] == 1)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/importado.png", "Pez importado", array("title"=>"Importado"))." +20";
		echo "</div>";
		
		echo "<div id='dat_".$pez['id']."'>";
		
		// Imagenes peces
		echo "<div class='dima'>";
		if ($pez['tipo_imagen'] == 1)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/".($pez['imagen']), $pez['nombre_comun'], array('class'=>'ima'));
		elseif ($pez['tipo_imagen'] == 2)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/siluetas/".($pez['imagen']), $pez['nombre_comun'], array('class'=>'ima'));
		echo "</div>";
		
		// Zonas de la CNP
		echo '<span class="color_estilo bgcolor_pacifico bgcolor_zonas"></span>';
		echo '<span class="color_estilo bgcolor_golfo bgcolor_zonas"></span><br />';
		
		for ($i=1;$i<7;$i++)
		{
			if ($pez['zona'.$i.'_valor'] == 2)
				echo "<span class=\"color_estilo color_cnp_".$pez['zona'.$i.'_valor']."\"></span>";
			else if ($pez['zona'.$i.'_valor'] == 3)
				echo "<span class=\"color_estilo color_cnp_".$pez['zona'.$i.'_valor']."\"></span>";
			else
				echo "<span class=\"color_estilo color_cnp_".$pez['zona'.$i.'_valor']."\"></span>";
		}
		
		echo "</div>"; // cierra  dat_
		echo "</div>"; //cierra dresul_view
		echo "<div id ='dresul_body_".$pez['id']."'class='dresul_body' style='display:none'>";

		// Categorias de riesgo
		$cat_riesgo = array();
		
		if($pez['nom_valor'] == 1)
			array_push($cat_riesgo, $pez['nom'].CHtml::link(' (NOM)', "http://www.biodiversidad.gob.mx/especies/catRiesMexico.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank"))." +20");		
		if($pez['iucn_valor'] == 1)
			array_push($cat_riesgo, $pez['iucn'].CHtml::link(' (IUCN)', "http://www.biodiversidad.gob.mx/especies/catRiesMundo.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank"))." +5");			
		if($pez['cites_valor'] == 1)
			array_push($cat_riesgo, $pez['cites'].CHtml::link(' (CITES)', "http://www.biodiversidad.gob.mx/planeta/cites/index.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank"))." +5");	
		if (count($cat_riesgo) > 0)
			echo "<strong>Categorias de riesgo:</strong> ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"estado_conservacion"))."<br />".implode('<br />', $cat_riesgo)."<br /><br />";
			
		// Distribuciones
		$distribuciones = array();
		
		if ($pez['presente_pacifico'] == 1)
			array_push($distribuciones, 'Ocenano pacífico');
		if ($pez['presente_golfo'] == 1)
			array_push($distribuciones, 'Golfo de México');
		if ($pez['presente_caribe'] == 1)
			array_push($distribuciones, 'Mar y caribe');
		if (count($distribuciones) > 0)
			echo "<strong>Distribuci&oacute;n en:</strong> ".implode(', ', $distribuciones)."<br /><br />";	
			
		// Tipo de pesca
		if ($pez['tipo_captura_valor'] == 1)
			echo "<strong>Tipo de pesca:</strong> ".$pez['tipo_captura']." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"tipo_pesca"))."<br /><br />";
			else if  ($pez['tipo_captura_valor'] == 2)
			echo "<strong>Tipo de pesca:</strong> ".$pez['tipo_captura']." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"tipo_pesca"))." +5 <br /><br />";
		
		// Arte de pesca
		if (!empty($pez['arte_pesca'])) 
			echo "<strong>Arte de pesca:</strong> ".$pez['arte_pesca']." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."<br /><br />";			
				
		// Veda
		if (!empty($pez['tipo_veda']))
		{
			if (!empty($pez['tipo_veda_fecha']))
				echo "<strong>Veda:</strong> ".$pez['tipo_veda']." (".$pez['tipo_veda_fecha'].") ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))." +20 <br /><br />";
			else
				echo "<strong>Veda:</strong> ".$pez['tipo_veda']." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))." +20 <br /><br />";
		}

		// Capturas
		$capturas = array();
		
		if ($pez['objetivo'] == 1)
			array_push($capturas, 'objetivo');
		if ($pez['incidental'] == 1)
			array_push($capturas, 'incidental');
		if ($pez['deportiva'] == 1)
			array_push($capturas, 'deportiva');
		if ($pez['fomento'] == 1)
			array_push($capturas, 'fomento');
		if ($pez['cultivada'] == 1)
			array_push($capturas, 'cultivada');
		if (count($capturas) > 0)
			echo "<strong>Tipo de captura:</strong> ".implode(', ', $capturas)."<br /><br />";
				
		// Talla captura
		if (!empty($pez['talla captura']))
			echo "Talla del pez: ".($pez['talla_captura'])." cm.<br /><br />";	
		
		// Grupo
		if (!empty($pez['grupo_conabio']))
			echo "<strong>Grupo:</strong> ".($pez['grupo_conabio'])."<br /><br />";
		
		//Generalidades
		if (!empty($pez['generalidades']))
			echo "<strong>Generalidades:</strong> ".($pez['generalidades'])."<br /><br />";
			
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