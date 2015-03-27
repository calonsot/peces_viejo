<?php
/* @var $this PecesController */
/* @var $model Peces */
//header('Content-type: application/json; charset=UTF-8');
//header('Content-Type: text/html; charset=ISO-8859-1');
if (!isset($vacio))
{
	echo "<div class='resul'>Mostrando ".count($resultados)." resultados</b></div><br>";
?>

<div class="view">


	<?php 			
		foreach ($resultados as $k => $pez) {
		$pezobj = Peces::model()->findByPk($pez["especie_id"]);
		
		//echo "ID: ".$pezobj->especie_id."<br>";		
		echo "<div id='dresul' class='dresul_all'>";
		
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
		echo "</div>";
		
		echo "<div class='dima'>";
		//Imagenes
		if ($pezobj->tipo_imagen == 1)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/".($pezobj->imagen), $pezobj->nombre_cientifico, array('class'=>'ima'));
		elseif ($pezobj->tipo_imagen == 2)
			echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/siluetas/".($pezobj->imagen), $pezobj->nombre_cientifico, array('class'=>'ima'));
		echo "</div>";
		
		echo "<div onClick='vm()'>";
		echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/semaforo/".Peces::peso_a_nombre_imagen($pezobj->peso));
		echo "</div>";
		
		echo "<div class='dresul_body'>";
		
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

		
		//Parte del grupo
		if (!empty($pezobj->grupo->nombre)) {
			echo "<b>Grupo:</b> ".($pezobj->grupo->nombre);
		}
		echo "<br><br>";
		
		
		//Generalidades
		if (!empty($pezobj->generalidades))
			echo "<b>Generalidades:</b> ".($pezobj->generalidades)."<br><br>";

		
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

		
		//Arte de pesca
		if (!empty($pezobj->arte_pesca)) 
		{
			if(!empty($pezobj->selectiva_noselectiva))
				echo "<b>Arte de pesca:</b> ".($pezobj->arte_pesca)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."<br><br>";
			else
				echo "<b>Arte de pesca:</b> ".$pezobj->arte_pesca." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."<br><br>";			
		} elseif (!empty($pezobj->selectiva_noselectiva));
		

		//Carta nacional
		$cartas_nacionales = '';
		foreach($pezobj->cartaNacionals as $j){
			if($j->Nivel1==1)
				$cartas_nacionales.= "<li>Pac&iacute;fico zona 1: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==2)
				$cartas_nacionales.= "<li>Pac&iacute;fico zona 2: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==3)
				$cartas_nacionales.= "<li>Pac&iacute;fico zona 3: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==4)
				$cartas_nacionales.= "<li>Golfo de M&eacute;xico y Caribe zona 1: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==5)
				$cartas_nacionales.= "<li>Golfo de M&eacute;xico y Caribe zona 2: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==6)
				$cartas_nacionales.= "<li>Golfo de M&eacute;xico y Caribe zona 3: ".($j->Nombre)."</li>";
			
		}
		if (!empty($cartas_nacionales))
			echo "<b>Carta Nacional Pesquera (2012):</b> ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"carta_nacional"))."<ul>".$cartas_nacionales."</ul>";
			
		echo "</div>";
		echo "</div>";
		?>

		
	<?php } ?>
</div>

<?php 	
	} else
	echo $vacio;
?>