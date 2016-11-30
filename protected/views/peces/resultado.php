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
		foreach ($resultados as $k => $pez) {
		$pezobj = Peces::model()->findByPk($pez["especie_id"]);
		
		//echo "ID: ".$pezobj->especie_id."<br>";		
		echo "<div id ='dresul_".$pezobj->especie_id."'class='dresul_all'>";
		

		echo "<div class='dresul_view'>";
		
		
		
		echo "<div class='dresul_head'>";
		//Parte de los datos principales	
		if(!empty($pezobj->nombre_comun))
		{
			if (!empty($pezobj->nombre_ingles))
				echo "<b>".($pezobj->nombre_comun).", ".($pezobj->nombre_ingles)."</b><br> <i>(".$pezobj->nombre_cientifico.")</i>";
			else
				echo "<b>".($pezobj->nombre_comun)."</b><br> <i>(".$pezobj->nombre_cientifico.")</i>";
		} elseif (!empty($pezobj->nombre_ingles))
			echo "<b>".($pezobj->ingles)."</b><br> <i>(".$pezobj->nombre_cientifico.")</i>";
		else
			echo $pezobj->nombre_cientifico;				
		
		echo "</div>"; //cierra dresul_head
		


		// Imagen de Importado
		echo "<div class='dimp'>";
		if($pezobj->nacional_Importado == "Importado" || $pezobj->nacional_Importado == "Nacional e importado")
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/importado.png", "Importado", array("title"=>"Importado"));
		echo "</div>";
		
		
		
		//Cuando tiene datos en la zona
		echo "<div id='dat_".$pezobj->especie_id."'>";
		
		
		//Imagenes peces
		echo "<div class='dima'>";
		if ($pezobj->tipo_imagen == 1)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/".($pezobj->imagen), $pezobj->nombre_cientifico, array('class'=>'ima'));
		elseif ($pezobj->tipo_imagen == 2)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/siluetas/".($pezobj->imagen), $pezobj->nombre_cientifico, array('class'=>'ima'));
		echo "</div>";
		
		
		if ($pezobj->recomendacion == 1 && !empty($pezobj->peso))
		{
			$imagenes = $pezobj->peso_a_nombre_imagen();
			
			foreach ($imagenes as $index => $imagen)
				echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/semaforo/".$imagen.".jpg");
		}
		echo "</div>"; // cierra  dat_
			
		echo "</div>"; //cierra dresul_view
		
		echo "<div id ='dresul_body_".$pezobj->especie_id."'class='dresul_body' style='display:none'>";
		

		//Estados de conservacion
		$estados_conservacion = array();
		foreach($pezobj->estadoConservacions as $j)
		{
			if($j->Nivel1==1)
				array_push($estados_conservacion, $j->nombre.CHtml::link(' (IUCN)', "http://www.biodiversidad.gob.mx/especies/catRiesMundo.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));
				
			if($j->Nivel1==2)
				array_push($estados_conservacion, $j->nombre.CHtml::link(' (CITES)', "http://www.biodiversidad.gob.mx/planeta/cites/index.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));
				
			if($j->Nivel1==3)
				array_push($estados_conservacion, ($j->nombre).CHtml::link(' (NOM)', "http://www.biodiversidad.gob.mx/especies/catRiesMexico.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));
		}

		
		
		//Distribucion
		$distribuciones = array();
		foreach($pezobj->distribucions as $j)
			array_push($distribuciones, ($j->Nombre));
		if (!empty($estados_conservacion))
			if(!empty($distribuciones))
				echo "<b>Estado de conservaci&oacute;n:</b> ".implode(', ', $estados_conservacion)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"estado_conservacion"))."<br><br><b>Distribuci&oacute;n en:</b> ".implode(', ', $distribuciones)."<br><br>";
			else
				echo "<b>Estado de conservaci&oacute;n:</b> ".implode(', ', $estados_conservacion)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"estado_conservacion"))."<br><br>";
			else {
				echo "<b>Distribuci&oacute;n en:</b> ".implode(', ', $distribuciones)."<br><br>";
			}
		
		
			
		//Tipo de pesca
			echo "<b>Tipo de pesca:</b> ".$pezobj->selectiva_noselectiva." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"tipo_pesca"))."<br><br>";
		
		
		
		//Arte de pesca
		if (!empty($pezobj->arte_pesca)) 
		{
			if(!empty($pezobj->selectiva_noselectiva))
				echo "<b>Arte de pesca:</b> ".($pezobj->arte_pesca)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."<br><br>";
			else
				echo "<b>Arte de pesca:</b> ".$pezobj->arte_pesca." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."<br><br>";			
		} elseif (!empty($pezobj->selectiva_noselectiva));
		
		
		
		//Veda
		if (!empty($pezobj->veda))
		{
			if (!empty($pezobj->tipoVeda->Nombre))
				echo "<b>Veda:</b> ".($pezobj->veda)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))."<br><br><b>Tipo de veda:</b> ".($pezobj->tipoVeda->Nombre)."<br><br>";
			else
				echo "<b>Veda:</b> ".($pezobj->veda)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))."<br><br>";
		} elseif (!empty($pezobj->tipoVeda->Nombre))
		
		
		//Tipo de veda
			echo "<b>Tipo de veda:</b> ".($pezobj->tipoVeda->Nombre)."<br><br>";



		//Capturas
		$capturas = array();
		foreach($pezobj->tipoCapturases as $j)
			array_push($capturas, ($j->nombre));			
		if (!empty($capturas))
		{
			if (!empty($pezobj->talla_captura))
				echo "<b>Captura:</b> ".implode(', ', $capturas)."<br>Talla de captura ".($pezobj->talla_captura)." cm<br><br>";
			else
				echo "<b>Captura:</b> ".implode(', ', $capturas)."<br><br>";
		} elseif (!empty($pezobj->talla_captura))
			echo "Talla de captura ".($pezobj->talla_captura)." cm<br><br>";
		
		
		
		//Parte del grupo
		if (!empty($pezobj->grupo->nombre)) {
			echo "<b>Grupo:</b> ".($pezobj->grupo->nombre);
		}
		echo "<br><br>";
		
		
		
		//Generalidades
		if (!empty($pezobj->generalidades))
			echo "<b>Generalidades:</b> ".($pezobj->generalidades)."<br><br>";

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