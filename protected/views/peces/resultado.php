<?php
/* @var $this PecesController */
/* @var $model Peces */
if (!isset($vacio))
{
	//echo "<h3 style='left;font-family:verdana;color:#033B42;'>".$cuantos." peces con mayor importancia comercial</h3>";
?>

<div class="view">
	<?php foreach ($peces as $k => $pez) {
		$cont = 0;
		$pezobj = Peces::model()->findByPk($pez["especie_id"]);
		
		echo utf8_decode($pez["especie_id"])."<br>";
		
		echo "<table style='width:1000px;background:silver;'>";
		
		echo "<tr><td colspan='2'>";
		if(!empty($pez["nombre_comun"])){
				echo "<b>Nombre Común: </b>".utf8_decode($pez["nombre_comun"])."<br>";
		}
		echo "</td></tr>";
		
		echo "<tr><td colspan='2' align='center'>";
		if(!empty($pez["tipo_imagen"]) & utf8_decode($pez["tipo_imagen"])=="Silueta"){
				//echo "<b>Imagen: </b>".utf8_decode($pez["imagen"])."<br>";
				echo '<img width="547" height="301" alt="Peces" src="../../imagenes/siluetas/'.utf8_decode($pez["imagen"]).'"></img>';
		}
		echo "</td></tr>";
		//echo "<tr><td colspan='2' align='center'>";
		//echo '<img width="547" height="301" alt="Peces" src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/imgPeces.png"></img>';
		//echo "</td></tr>";
		
		echo "<tr>";
		if(!empty($pez["nombre_ingles"])){
			echo "<td>";
				echo "<b>Nombre en Inglés: </b>".utf8_decode($pez["nombre_ingles"])."<br>";
			echo "</td>";
		}
		if(!empty($pez["nombre_cientifico"])){
			echo "<td>";
				echo "<b>Nombre Científico: </b>".utf8_decode($pez["nombre_cientifico"])."<br>";
			echo "</td>";
		}
		echo "</tr>";
		
		echo "<tr>";
		if(!empty($pezobj->grupo->nombre)){
			echo "<td>";
				echo "<b>Grupo: </b>".utf8_decode($pezobj->grupo->nombre)."<br>";
			echo "</td>";
		}
		echo "<td>";
		foreach($pezobj->distribucions as $j){
			$cont++;
			if($cont > 1)
				echo ", ".utf8_decode($j->Nombre);
			else
				echo "<b>Distribucion: </b>".utf8_decode($j->Nombre);
		}
		echo "</td>";
		echo "</tr>";
		$cont = 0;

		echo "<tr>";
		echo "<td>";
		foreach($pezobj->tipoCapturases as $j){
			$cont++;
			if($cont > 1)
				echo ", ".utf8_decode($j->nombre);
			else
				echo "<b>Captura: </b>".utf8_decode($j->nombre);
		}
		echo "</td>";
		$cont = 0;
		if(!empty($pez["talla_captura"])){
			echo "<td>";
				echo "<b>Talla Capturada: </b>".utf8_decode($pez["talla_captura"])."<br>";
			echo "</td>";
		}
		echo "</tr>";
		
		echo "<tr>";
		
		if(!empty($pezobj->tipoVeda->Nombre)){
			echo "<td>";
			echo "<b>Tipo de Veda: </b>".utf8_decode($pezobj->tipoVeda->Nombre)."<br>";
			echo "</td>";
		}
		if(!empty($pez["veda"])){
			echo "<td>";
			echo "<b>Veda: </b>".utf8_decode($pez["veda"])."<br>";
			echo "</td>";
		}
		echo "</tr>";
		
		echo "<tr>";
		if(!empty($pez["arte_pesca"])){
			echo "<td colspan='2'>";
			echo "<b>Arte de pesca: </b>".utf8_decode($pez["arte_pesca"])."<br>";
			echo "</td>";
		}
		echo "</tr>";

		foreach($pezobj->estadoConservacions as $j){
			if($j->Nivel1==1){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Especie en riesgo mundialmente (Lista Roja UICN): </b>".utf8_decode($j->nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
			if($j->Nivel1==2){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Especie que requiere permiso para comercio internacional (CITES): </b>".utf8_decode($j->nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
			if($j->Nivel1==3){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Especie en riesgo en Mèxico (NOM-059-SEMARNAT-2010): </b>".utf8_decode($j->nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
		}
		
		echo "<tr>";		
		if(!empty($pez["generalidades"])){
			echo "<td colspan='2'>";
			echo "<b>Generalidades: </b>".utf8_decode($pez["generalidades"])."<br>";
			echo "</td>";
		}
		echo "</tr>";
		
		
		foreach($pezobj->cartaNacionals as $j){
			if($j->Nivel1==1){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Carta Nacional Pesquera (2012) Pacífico zona 1: </b>".utf8_decode($j->Nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
			if($j->Nivel1==2){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Carta Nacional Pesquera (2012) Pacífico zona 2: </b>".utf8_decode($j->Nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
			if($j->Nivel1==3){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Carta Nacional Pesquera (2012) Pacífico zona 3: </b>".utf8_decode($j->Nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
			if($j->Nivel1==4){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Carta Nacional Pesquera (2012) Golfo Mex y Caribe zona 1: </b>".utf8_decode($j->Nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
			if($j->Nivel1==5){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Carta Nacional Pesquera (2012) Golfo Mex y Caribe zona 2: </b>".utf8_decode($j->Nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
			if($j->Nivel1==6){
				echo "<tr>";
				echo "<td colspan='2'>";
				echo "<b>Carta Nacional Pesquera (2012) Golfo Mex y Caribe zona 3: </b>".utf8_decode($j->Nombre)."<br>";
				echo "</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
		?>
	<br/>
	<?php } ?>
</div>

<?php 	
} else
	echo $vacio;
?>