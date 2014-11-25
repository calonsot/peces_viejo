<?php
/* @var $this PecesController */
/* @var $model Peces */
if (!isset($vacio))
{
	echo "<span style=\"color:#323D2C;\"><b>Mostrando ".count($peces)." resultados</b></span>";
?>

<div class="view">
	<?php foreach ($peces as $k => $pez) {
		$pezobj = Peces::model()->findByPk($pez["especie_id"]);
		
		//echo "ID: ".$pezobj->especie_id."<br>";		
		echo "<table style='width:1000px;background:#C2BDA0;'>";
		
		
		//Parte de los datos principales
		echo "<tr><td width=\"500px\">";		
		if(!empty($pezobj->nombre_comun))
		{
			if (!empty($pezobj->nombre_ingles))
				echo "<span style=\"color:#323D2C;\"><b>".($pezobj->nombre_comun).", ".($pezobj->nombre_ingles)."</b></span> <i>(".$pezobj->nombre_cientifico.")</i>";
			else
				echo "<span style=\"color:#323D2C;\"><b>".($pezobj->nombre_comun)."</b></span> <i>(".$pezobj->nombre_cientifico.")</i>";
		} elseif (!empty($pezobj->nombre_ingles))
			echo "<span style=\"color:#323D2C;\"><b>".($pezobj->ingles)."</b></span> <i>(".$pezobj->nombre_cientifico.")</i>";
		else
			echo $pezobj->nombre_cientifico;				
		echo "</td>";
		
		
		//Parte del grupo
		if (!empty($pezobj->grupo->nombre)) {
			echo "<td width=\"500px\">Grupo ".($pezobj->grupo->nombre)."</td>";
		}
		echo "</tr>";
		
		
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
				echo "<tr><td width=\"500px\">".implode(', ', $estados_conservacion)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"estado_conservacion"))."</td><td width=\"500px\">Distribuci&oacute;n en: ".implode(', ', $distribuciones)."</td></tr>";
			else
				echo "<tr><td>".implode(', ', $estados_conservacion)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"estado_conservacion"))."</td></tr>";
		else { //Distribucion
			
			echo "<tr><td>Distribuci&oacute;n en: ".implode(', ', $distribuciones)."</td></tr>";
		}
		
		echo "</table>"; // Termina primera tabla
		echo "<table style='width:1000px;background:#d2ceb9;'>";  // Empieza segunda
				
		//Imagenes
		if ($pezobj->tipo_imagen == 1)
			echo "<tr><td>".CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/".($pezobj->imagen), $pezobj->nombre_cientifico, array('width'=>'860px;'))."</td></tr>";
		elseif ($pezobj->tipo_imagen == 2)
			echo "<tr><td>".CHtml::image(Yii::app()->request->baseUrl."/imagenes/siluetas/".($pezobj->imagen), $pezobj->nombre_cientifico, array('width'=>'860px;'))."</td></tr>";
		
		echo "</table>"; //Termina segunda tabla
		echo "<table style='width:1000px;background:#d2ceb9;' cellpadding='10px' cellspacing='3px'>";  //Empieza tercera
		
		//Capturas
		$capturas = array();
		foreach($pezobj->tipoCapturases as $j)
			array_push($capturas, ($j->nombre));			
		if (!empty($capturas))
		{
			if (!empty($pezobj->talla_captura))
				echo "<tr><td width=\"500px\">Captura: ".implode(', ', $capturas)."</td><td width=\"500px\">Talla de captura ".($pezobj->talla_captura)." cm</td></tr>";
			else
				echo "<tr><td>Captura: ".implode(', ', $capturas)."</td></tr>";
		} elseif (!empty($pezobj->talla_captura)) //Talla captura
			echo "<tr><td>Talla captura ".($pezobj->talla_captura)." cm</td></tr>";	

		
		//Veda
		if (!empty($pezobj->veda))
		{
			if (!empty($pezobj->tipoVeda->Nombre))
				echo "<tr><td width=\"500px\">Veda: ".($pezobj->veda)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))."</td><td width=\"500px\">Tipo de veda: ".($pezobj->tipoVeda->Nombre)."</td></tr>";
			else
				echo "<tr><td>Veda: ".($pezobj->veda)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))."</td></tr>";
		} elseif (!empty($pezobj->tipoVeda->Nombre)) //Tipo de veda
			echo "<tr><td>Tipo de veda: ".($pezobj->tipoVeda->Nombre)."</td></tr>";

		
		//Arte de pesca
		if (!empty($pezobj->arte_pesca)) 
		{
			if(!empty($pezobj->tipo_captura))
				echo "<tr><td width=\"500px\">Arte de pesca: ".($pezobj->arte_pesca)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."</td><td width=\"500px\">Tipo de pesca: ".($pezobj->tipo_captura)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"tipo_pesca"))."</td></tr>";
			else
				echo "<tr><td>Arte de pesca: ".$pezobj->arte_pesca." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."</td></tr>";			
		} elseif (!empty($pezobj->tipo_captura)) //Tipo de pesca
			echo "<tr><td>Tipo de pesca: ".$pezobj->tipo_captura." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"tipo_pesca"))."</td></tr>";
		
		
		//Generalidades
		if (!empty($pezobj->generalidades))
			echo "<tr><td>Generalidades: ".($pezobj->generalidades)."</td></tr>";
		
		
		//Carta nacional
		$cartas_nacionales = '';
		foreach($pezobj->cartaNacionals as $j){
			if($j->Nivel1==1)
				$cartas_nacionales.= "<li>Pacífico zona 1: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==2)
				$cartas_nacionales.= "<li>Pacífico zona 2: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==3)
				$cartas_nacionales.= "<li>Pacífico zona 3: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==4)
				$cartas_nacionales.= "<li>Golfo Mex y Caribe zona 1: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==5)
				$cartas_nacionales.= "<li>Golfo Mex y Caribe zona 2: ".($j->Nombre)."</li>";
			
			if($j->Nivel1==6)
				$cartas_nacionales.= "<li>Golfo Mex y Caribe zona 3: ".($j->Nombre)."</li>";
			
		}
		if (!empty($cartas_nacionales))
			echo "<tr><td><br>Carta Nacional Pesquera (2012): ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"carta_nacional"))."<ul style=\"font: Arial,Helvetica,sans-serif;color:black;font-size:16px;\">".$cartas_nacionales."</ul></td></tr>";
		
		
		echo "</table>";
		?>
	<br/>
	<?php } ?>
</div>

<?php 	
	} else
	echo $vacio;
?>