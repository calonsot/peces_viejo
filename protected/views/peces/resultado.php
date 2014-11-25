<style>
.tooltiptext
{
	display: none;
}
</style>

<script>
$(document).ready(function(){
	$('.veda').qtip({
		content: {text: $('#veda_tip')}
	});
	$('.arte_de_pesca').qtip({
		content: {text: $('#arte_de_pesca_tip')}
	});
	$('.tipo_pesca').qtip({
		content: {text: $('#tipo_pesca_tip')}
	});	
});
</script>

<?php
/* @var $this PecesController */
/* @var $model Peces */
if (!isset($vacio))
{
	echo "<span style=\"color:#323D2C;\"><b>Mostrando ".count($peces)." resultados</b></span>";
?>
<div class="tooltiptext" id="veda_tip">
			<p class="txt_reforesta">
				<strong class="Utexconceptos">Vedas</strong><br> Con el fin de
				optimizar el aprovechamiento de la pesca desde un punto de vista
				biol&oacute;gico y socioecon&oacute;mico, la Comisi&oacute;n
				Nacional de Acuacultura y Pesca (CONAPESCA) ha establecido vedas
				para la captura de especies en condiciones de deterioro y de esta
				forma protegerlas durante periodos cr&iacute;ticos de
				reproducci&oacute;n o crecimiento. De las cerca de <strong>551</strong>
				especies de peces marinos que son aprovechas en M&eacute;xico, 97
				especies tienen alg&uacute;n tipo de veda.
			</p>
</div>

<div class="tooltiptext" id="arte_de_pesca_tip">
			<p class="txt_reforesta">
				<strong class="Utexconceptos">Artes de pesca</strong><br> Los
				distintos m&eacute;todos de pesca, se conocen como &ldquo;artes de
				pesca&rdquo; y se clasifican en cuatro tipos:
			</p>
			<p class="txt_reforesta">
				<strong><img src="http://www.biodiversidad.gob.mx/usos/images/balazo_tiposUsos.png" width="6"
					height="6"> L&iacute;neas:</strong> Este arte consiste en un hilo
				con un anzuelo con carnada en su punta final. Existen variantes de
				la l&iacute;nea como: l&iacute;nea de anzuelo, l&iacute;nea
				cabrillera de fondo, l&iacute;nea de mano, troleado y carpiota o
				pollito.<br> <br> <strong><img src="http://www.biodiversidad.gob.mx/usos/images/balazo_tiposUsos.png"
					width="6" height="6"> Palangres: </strong>Es una cuerda larga con
				varios anzuelos con carnada sujetados a ciertos intervalos. Existen
				diferentes tipos de palangres como palangres escameros, palangre
				tiburonero, palangre viajero de fondo, rosario o ristra, dependiendo
				de las especies &ldquo;objetivo&rdquo;.<br> <br> <strong><img
					src="http://www.biodiversidad.gob.mx/usos/images/balazo_tiposUsos.png" width="6" height="6"> Redes: </strong>Las
				redes son mallas construida de hilos finos. Los peces quedan
				atrapados por las agallas o entre la cabeza y el cuerpo. Existen
				diferentes tipos de redes entre ellas est&aacute;n la red agallera,
				atarraya, red caritera, red corvinera y red sardinera.<br> <br> <strong><img
					src="http://www.biodiversidad.gob.mx/usos/images/balazo_tiposUsos.png" width="6" height="6"> Trampas
					y nasas: </strong>Son cajas o compartimientos a los que son
				atra&iacute;dos los peces. Las formas t&iacute;picas de las trampas
				y nasas, son cajas, conos, cilindros, esferas o botellas. Su
				tama&ntilde;o var&iacute;a seg&uacute;n la especie a capturar.
				Tienen aperturas en forma de embudos o cu&ntilde;as para que el pez
				ingrese f&aacute;cilmente pero tenga una baja probabilidad de
				escape. Existen diferentes tipos de trampas y nasas, como la nasa o
				trampa langostera, casitas cubanas, trampa para bacalao, trampa para
				pulpo.
			</p>
			<p class="txt_reforesta">Algunas artes de pesca pueden tener un
				fuerte impacto sobre la biodiversidad marina, por lo que es
				determinante que el consumidor conozca la informaci&oacute;n sobre
				el tipo de arte que es utilizado, si es selectiva con el ambiente y
				selectiva con las especies extra&iacute;das, si no lo es, o si tiene
				una alta tasa de captura incidental.</p>
</div>

<div class="tooltiptext" id="tipo_pesca_tip">
			<p class="txt_reforesta">
			<strong class="Utexconceptos">Tipos de pesca</strong><br>
				<img src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/imgPecesAmigable.png" width="17" height="17"><strong>
					Selectiva</strong> &nbsp;<br> Algunos tipos de artes de
				pesca de bajo impacto: Red de arrastre para camarones
				RS-INP-MEX-110&acute;para embarcaciones mayores en el Golfo de
				California, red agallera para lisa y liseta o lebrancha,
				l&iacute;nea de mano para peces pel&aacute;gicos y demersales,
				curric&aacute;n para pesca de especies pel&aacute;gicas, palangre
				para peces pel&aacute;gicos costeros, palangre para mero, palangre
				para la pesca de tiburones pel&aacute;gicos del Pac&iacute;fico
				central mexicano, a bordo de embarcaciones de mediana altura,
				palangre para at&uacute;n: Golfo de M&eacute;xico y Caribe.
			</p>
			<p class="txt_reforesta">
				<img src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/imgPecesNoAmigable.png" width="17" height="17"> <strong>No selectiva</strong> <br> Algunos tipos de artes de
				pesca de alto impacto para el ambiente son el chinchorro playero,
				red de enmalle para tiburones y rayas en embarcaciones menores, red
				agallera para escama pel&aacute;gica, red agallera para escama de
				fondo, red agallera para esteros y l&iacute;nea de costa, palangre
				para embalses, palangre escama de esteros, palangre para especies de
				fondo, palangre para tibur&oacute;n oce&aacute;nico y pez espada.
			</p>
</div>

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
				echo "<span style=\"color:#323D2C;\"><b>".utf8_decode($pezobj->nombre_comun).", ".utf8_decode($pezobj->nombre_ingles)."</b></span> <i>(".$pezobj->nombre_cientifico.")</i>";
			else
				echo "<span style=\"color:#323D2C;\"><b>".utf8_decode($pezobj->nombre_comun)."</b></span> <i>(".$pezobj->nombre_cientifico.")</i>";
		} elseif (!empty($pezobj->nombre_ingles))
			echo "<span style=\"color:#323D2C;\"><b>".utf8_decode($pezobj->ingles)."</b></span> <i>(".$pezobj->nombre_cientifico.")</i>";
		else
			echo $pezobj->nombre_cientifico;				
		echo "</td>";
		
		
		//Parte del grupo
		if (!empty($pezobj->grupo->nombre)) {
			echo "<td width=\"500px\">Grupo ".utf8_decode($pezobj->grupo->nombre)."</td>";
		}
		echo "</tr>";
		
		
		//Estados de conservacion
		$estados_conservacion = array();
		foreach($pezobj->estadoConservacions as $j)
		{
			if($j->Nivel1==1)
				array_push($estados_conservacion, utf8_decode($j->nombre).CHtml::link(' (IUCN)', "http://www.iucnredlist.org/about/introduction", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));
				
			if($j->Nivel1==2)
				array_push($estados_conservacion, utf8_decode($j->nombre).CHtml::link(' (CITES)', "http://www.cites.org/esp/app/index.phpn", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));
				
			if($j->Nivel1==3)
				array_push($estados_conservacion, utf8_decode($j->nombre).CHtml::link(' (NOM)', "http://www.biodiversidad.gob.mx/especies/catRiesMexico.html", array("style"=>"color:#584B05;font-size:10px;", "target" => "_blank")));
		}
		
		
		//Distribucion
		$distribuciones = array();
		foreach($pezobj->distribucions as $j)
			array_push($distribuciones, utf8_decode($j->Nombre));
		if (!empty($estados_conservacion))
			if(!empty($distribuciones))
				echo "<tr><td width=\"500px\">".implode(', ', $estados_conservacion)."</td><td width=\"500px\">Distribuci&oacute;n en: ".implode(', ', $distribuciones)."</td></tr>";
			else
				echo "<tr><td>".implode(', ', $estados_conservacion)."</td></tr>";
		else { //Distribucion
			
			echo "<tr><td>Distribuci&oacute;n en: ".implode(', ', $distribuciones)."</td></tr>";
		}
		
		echo "</table>"; // Termina primera tabla
		echo "<table style='width:1000px;background:#d2ceb9;'>";  // Empieza segunda
				
		//Imagenes
		if ($pezobj->tipo_imagen == 1)
			echo "<tr><td>".CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/".utf8_decode($pezobj->imagen), $pezobj->nombre_cientifico, array('width'=>'860px;'))."</td></tr>";
		elseif ($pezobj->tipo_imagen == 2)
			echo "<tr><td>".CHtml::image(Yii::app()->request->baseUrl."/imagenes/siluetas/".utf8_decode($pezobj->imagen), $pezobj->nombre_cientifico, array('width'=>'860px;'))."</td></tr>";
		
		echo "</table>"; //Termina segunda tabla
		echo "<table style='width:1000px;background:#d2ceb9;' cellpadding='10px' cellspacing='3px'>";  //Empieza tercera
		
		//Capturas
		$capturas = array();
		foreach($pezobj->tipoCapturases as $j)
			array_push($capturas, utf8_decode($j->nombre));			
		if (!empty($capturas))
		{
			if (!empty($pezobj->talla_captura))
				echo "<tr><td width=\"500px\">Captura: ".implode(', ', $capturas)."</td><td width=\"500px\">Talla de captura ".utf8_decode($pezobj->talla_captura)." cm</td></tr>";
			else
				echo "<tr><td>Captura: ".implode(', ', $capturas)."</td></tr>";
		} elseif (!empty($pezobj->talla_captura)) //Talla captura
			echo "<tr><td>Talla captura ".utf8_decode($pezobj->talla_captura)." cm</td></tr>";	

		
		//Veda
		if (!empty($pezobj->veda))
		{
			if (!empty($pezobj->tipoVeda->Nombre))
				echo "<tr><td width=\"500px\">Veda: ".utf8_decode($pezobj->veda)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))."</td><td width=\"500px\">Tipo de veda: ".utf8_decode($pezobj->tipoVeda->Nombre)."</td></tr>";
			else
				echo "<tr><td>Veda: ".utf8_decode($pezobj->veda)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"veda"))."</td></tr>";
		} elseif (!empty($pezobj->tipoVeda->Nombre)) //Tipo de veda
			echo "<tr><td>Tipo de veda: ".utf8_decode($pezobj->tipoVeda->Nombre)."</td></tr>";

		
		//Arte de pesca
		if (!empty($pezobj->arte_pesca)) 
		{
			if(!empty($pezobj->tipo_captura))
				echo "<tr><td width=\"500px\">Arte de pesca: ".utf8_decode($pezobj->arte_pesca)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."</td><td width=\"500px\">Tipo de pesca: ".utf8_decode($pezobj->tipo_captura)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"tipo_pesca"))."</td></tr>";
			else
				echo "<tr><td>Arte de pesca: ".utf8_decode($pezobj->arte_pesca)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"arte_de_pesca"))."</td></tr>";			
		} elseif (!empty($pezobj->tipo_captura)) //Tipo de captura
			echo "<tr><td>Tipo de pesca: ".utf8_decode($pezobj->tipo_captura)." ".CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/helptip.png", "Ayuda", array("class"=>"tipo_pesca"))."</td></tr>";
		
		
		//Generalidades
		if (!empty($pezobj->generalidades))
			echo "<tr><td>Generalidades: ".utf8_decode($pezobj->generalidades)."</td></tr>";
		
		
		//Carta nacional
		$cartas_nacionales = '';
		foreach($pezobj->cartaNacionals as $j){
			if($j->Nivel1==1)
				$cartas_nacionales.= "<li>Pacífico zona 1: ".utf8_decode($j->Nombre)."</li>";
			
			if($j->Nivel1==2)
				$cartas_nacionales.= "<li>Pacífico zona 2: ".utf8_decode($j->Nombre)."</li>";
			
			if($j->Nivel1==3)
				$cartas_nacionales.= "<li>Pacífico zona 3: ".utf8_decode($j->Nombre)."</li>";
			
			if($j->Nivel1==4)
				$cartas_nacionales.= "<li>Golfo Mex y Caribe zona 1: ".utf8_decode($j->Nombre)."</li>";
			
			if($j->Nivel1==5)
				$cartas_nacionales.= "<li>Golfo Mex y Caribe zona 2: ".utf8_decode($j->Nombre)."</li>";
			
			if($j->Nivel1==6)
				$cartas_nacionales.= "<li>Golfo Mex y Caribe zona 3: ".utf8_decode($j->Nombre)."</li>";
			
		}
		if (!empty($cartas_nacionales))
			echo "<tr><td><br>Carta Nacional Pesquera (2012): <ul style=\"font: Arial,Helvetica,sans-serif;color:black;font-size:16px;\">".$cartas_nacionales."</ul></td></tr>";
		
		
		echo "</table>";
		?>
	<br/>
	<?php } ?>
</div>

<?php 	
	} else
	echo $vacio;
?>