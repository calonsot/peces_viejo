<!-- BUSCADOR -->

<div class="c_buscador perspective">

<?php 
if (strrpos($_SERVER['REQUEST_URI'], 'resultado'))
	/*echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/titulo.png", "Ficha", array("id" => "ficham")), Yii::app()->request->baseUrl);*/ 
?>
	<center><b>Buscador</b></center>
	
	<form name="buscador" id="buscador" method="get" action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/peces/resultado">
		<div>
			<input type="text" name="nombre_comun" id="buscador_nombre_comun" placeholder="Nombre común">
			<input type="text" name="nombre_cientifico" id="buscador_nombre_cientifico" placeholder="Nombre cient&iacute;fico">
			<label for="select"></label>
			<?php echo CHtml::dropDownList('grupo', null, CHtml::listData(Peces::grupos_conabio(), 'grupo_conabio', 'grupo_conabio'), array('id'=>'buscador_grupo', 'prompt'=>'---Grupo---')); ?>
		</div>
		
		<hr>

		<div id="nacional_importado">
			Nacional <input type="checkbox" name="nacional_importado[]" id="buscador_nac" value="0,2">
			Importado <input type="checkbox" name="nacional_importado[]" id="buscador_imp" value="1,2">
		</div>
		
		<hr>
		
		<div id="cat_riesgo">
			NOM 059 <input type="checkbox" name="cat_riesgo[]" id="buscador_nom" value="nom">
			IUCN <input type="checkbox" name="cat_riesgo[]" id="buscador_iucn" value="iucn">
			CITES <input type="checkbox" name="cat_riesgo[]" id="buscador_cites" value="cites">
		</div>
		
		<hr>
		
		<div id="veda">
			Sin veda <input type="checkbox" name="veda[]" id="buscador_sin_veda" value="0">
			Con veda <input type="checkbox" name="veda[]" id="buscador_con_veda" value="1,2,3">
		</div>
		
		<hr>
		
		<div id="selectiva">
			Selectiva <input type="checkbox" name="selectiva[]" id="buscador_selectiva" value="1">
			No selectiva <input type="checkbox" name="selectiva[]" id="buscador_no_selectiva" value="2">
		</div>
		
		<hr>
		
		<div id="botones">
			<button type="button"><?php echo CHtml::link('Ver todos los peces', Yii::app()->request->baseUrl.'/index.php/peces/resultado', array("class"=>"b_verall")); ?></button>
			<button type="button" id="limpiar" class="b_verall">Limpiar</button>
			</div>
			
			
	    <hr>
		
		<div>
			<span>También puedes buscar los peces seleccionando su recomendación en el semáforo y/o zona pesquera:</span>
		</div>
	
		<div id="recomendacion">

			<label  for="buscador_muy_recomendable" class="recomendacion_pez color_V+">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>

			<input type="checkbox" name="recomendacion[]" value="0" id="buscador_muy_recomendable">
			<b>Muy recomendable <span class="numpeso">(0)</span></b> 

			</label>

			<label for="buscador_recomendable"class="recomendacion_pez color_V-">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>

			<input type="checkbox" name="recomendacion[]" value="5" id="buscador_recomendable">
			<b>Recomendable <span class="numpeso">(5)</span></b>

			</label>

			<label for="buscador_poco_recomendable"class="recomendacion_pez color_A-">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>

			<input type="checkbox" name="recomendacion[]" value="10-15"id="buscador_poco_recomendable">
			<b>Poco recomendable <span class="numpeso">(10-15)</span></b>

			</label>

			<label for="buscador_no_recomendable"
			class="recomendacion_pez color_A+">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>

			<input type="checkbox" name="recomendacion[]" value="20" id="buscador_no_recomendable">
			<b>No recomendable <span class="numpeso">(20)</span></b>

			</label>

			<label for="buscador_evita"
			class="recomendacion_pez color_R">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>

			<input type="checkbox" name="recomendacion[]" value="25-200" id="buscador_evita">
			<b>Evita <span class="numpeso">(>20)</span></b>

			</label><br>

		</div>

			<div id="mapa">
			
		<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/zonas_pesqueras_mapa.jpg", "Zonas", array("width" => "290px;", "usemap" => "#zona", "id" => "mapaz")); ?>
    		<map name="zona" id="mapa_zonas">
					<area id="zona6" shape="poly"
						coords="243,135,248,136,253,135,256,133,255,130,258,127,259,125,256,120,254,113,252,108,247,111,247,115,244,118,243,120,242,124,243,127,242,130"
						href="#" title="Quintana Roo"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapa_6.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona5" shape="poly"
						coords="196,136,205,134,211,133,214,133,217,129,219,125,220,120,222,115,228,113,231,113,235,111,239,111,244,111,251,108,249,100,246,92,242,87,235,85,226,85,219,85,209,87,204,88,200,90,195,93"
						href="#" title="Tabasco, Campeche y Yucatán"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapa_5.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona4" shape="poly"
						coords="172,87,195,86,194,95,194,116,195,137,185,134,176,127,168,114,166,97"
						href="#" title="Tamaulipas y Veracruz"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapa_4.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona2" shape="poly"
						coords="54,43,58,45,61,48,63,50,65,56,68,62,72,68,76,72,78,74,82,77,84,80,87,81,86,84,86,88,90,89,94,92,95,95,97,96,102,101,108,107,110,111,111,114,113,116,113,120,113,122,100,122,95,119,91,116,85,114,83,110,83,106,85,104,83,100,81,98,78,97,77,94,77,93,75,88,73,85,73,81,70,78,66,72,62,65,58,59,55,56,53,55,53,50,53,47"
						href="#" title="Golfo de California (Baja California, Baja California Sur, Sonora, Sinaloa, Nayarit)"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapa_2.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona1" shape="poly"
						coords="5,75,9,81,17,85,24,89,28,90,35,97,39,98,42,106,47,113,54,119,60,122,65,125,75,123,80,119,82,111,81,106,79,102,75,99,70,94,67,92,66,89,67,85,65,81,61,79,58,77,55,76,51,71,48,70,53,69,55,67,53,62,49,57,45,55,43,48,41,43,38,37,32,38,29,41,28,44,27,49,25,53,19,53,10,55,3,55"
						href="#" title="Península de Baja California (Costa del Pacífico de Baja California y Baja California Norte"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapa_1.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona3" shape="poly"
						coords="67,128,76,134,87,139,97,145,107,152,118,158,128,163,140,168,153,171,165,175,174,178,180,180,190,178,193,179,196,179,209,163,200,157,195,153,188,153,184,156,180,157,174,156,166,154,157,151,151,148,144,146,139,144,138,142,128,142,124,137,119,133,114,131,111,127,111,123,106,123,100,123,95,120,90,117,86,116,83,115,82,119,79,123,75,126,71,126"
						href="#" title="Pacífico centro-sur (Jalisco, Colima, Michoacán, Guerrero, Oaxaca, Chiapas)"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapa_3.jpg',1)"
						onmouseout="MM_swapImgRestore()">
				</map>
				<div id="zonas">
					<input type="checkbox" name="zonas[]" value="1" id="buscador_zona1">
					<input type="checkbox" name="zonas[]" value="2" id="buscador_zona2">
					<input type="checkbox" name="zonas[]" value="3" id="buscador_zona3">
					<input type="checkbox" name="zonas[]" value="4" id="buscador_zona4">
					<input type="checkbox" name="zonas[]" value="5" id="buscador_zona5">
					<input type="checkbox" name="zonas[]" value="6" id="buscador_zona6">
				</div>
			</div>
			
			<hr>
			
			
		
			<center><b>Ejemplo de división por zonas</b></center>
			<div id="pez_explicado">
				<br>
				<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/EpinephelusStriatus.png", "Ejemplo de resultado", array('class'=>'ima')); ?>

				<span class="color_estilo bgcolor_pacifico bgcolor_zonas"></span>
				<span class="color_estilo bgcolor_golfo bgcolor_zonas"></span>
				<br />
				<span class="color_estilo color_cnp_1 "></span>
				<span class="color_estilo color_cnp_1 "></span>
				<span class="color_estilo color_cnp_2 "></span>
				<span class="color_estilo color_cnp_0 "></span>
				<span class="color_estilo color_cnp_2 "></span>
				<span class="color_estilo color_cnp_3 "></span>

				<span class="color_estilo color_pacifico"><small>Zona I</small></span>
				<span class="color_estilo color_pacifico"><small>Zona II</small></span>
				<span class="color_estilo color_pacifico"><small>Zona III</small></span>
				<span class="color_estilo color_golfo"><small>Zona I</small></span>
				<span class="color_estilo color_golfo"><small>Zona II</small></span>
				<span class="color_estilo color_golfo"><small>Zona III</small></span>
				<br />
				<span class="color_estilo color_pacifico" style="width: 45%;">&#8627;Pacifico&#8626;</span>
				<span class="color_estilo color_golfo" style="width: 45%;">&#8627;Golfo y caribe&#8626;</span>
			
			</div>
		</div>
		
	</form>
</div>

