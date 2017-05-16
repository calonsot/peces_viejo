<!-- BUSCADOR -->

<div id="buscar_des" class="c_buscador perspective">
<?php 
if (strrpos($_SERVER['REQUEST_URI'], 'resultado'))
	/*echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/titulo.png", "Ficha", array("id" => "ficham")), Yii::app()->request->baseUrl);*/ 
?>

	<form name="buscador" id="buscador" method="get" action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/peces/resultado">
		<div style="width: 100%; padding-bottom: 15px;">
			<input type="text" name="nombre_comun" id="buscador_nombre_comun" placeholder="Nombre común">
			<input type="text" name="nombre_cientifico" id="buscador_nombre_cientifico" placeholder="Nombre cient&iacute;fico">
			<label for="select"></label> 
			<?php echo CHtml::dropDownList('grupo', null, CHtml::listData(Grupo::model()->findAll(array('order'=>'nombre ASC')), 'id', 'nombre'), array('id'=>'buscador_grupo', 'prompt'=>'---Grupo---')); ?>
		</div>

		<div style="width: 100%;text-align:center;color: #4E4D49;">
			<span>También puedes buscar los peces seleccionando su recomendación en el semáforo y/o zona pesquera:</span>
		</div>
	
			<div id="recomendaciones">

			<label  for="buscador_muy_recomendable" class="recomendacion_pez color_V+">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>
			<input type="checkbox" name="recomendacion[]" value="V+" id="buscador_muy_recomendable">
				<hr />
				<b>Muy recomendable</b> 
				</label>
				
				<label for="buscador_recomendable"class="recomendacion_pez color_V-">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>
			<input type="checkbox" name="recomendacion[]" value="V-" id="buscador_recomendable">
				<hr /> <b>Recomendable</b>
				</label>
				
				<label for="buscador_poco_recomendable"class="recomendacion_pez color_A-">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>
			<input type="checkbox" name="recomendacion[]" value="A-"id="buscador_poco_recomendable">
					<hr /> <b>Poco recomendable</b>
				</label> 
				
				<label for="buscador_no_recomendable"
					class="recomendacion_pez color_A+">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>
			<input type="checkbox" name="recomendacion[]" value="A+"
					id="buscador_no_recomendable">
					<hr /> <b>No recomendable</b>
				</label>
				
				<label for="buscador_evita"
					class="recomendacion_pez color_R">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/pez.png", "Pez", array('class' => "pez_circulo")); ?>
			<input type="checkbox" name="recomendacion[]" value="R"
					id="buscador_evita">
					<hr /> <b>Evita</b>
				</label>
				
				<div id="botones">
					<button type="button"><?php echo CHtml::link('Ver todos los peces', Yii::app()->request->baseUrl.'/index.php/peces/resultado', array("class"=>"b_verall")); ?></button>
					<button type="button" id="limpiar" class="b_verall">Limpiar</button>
				</div>
			</div>

			<div id="mapa">
			
		<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/zonas_pesqueras_mapa.jpg", "Zonas", array("width" => "290px;", "usemap" => "#zona", "id" => "mapaz")); ?>
    		<map name="zona">
					<area id="zona6" shape="poly"
						coords="243,135,248,136,253,135,256,133,255,130,258,127,259,125,256,120,254,113,252,108,247,111,247,115,244,118,243,120,242,124,243,127,242,130"
						href="#" title="Zona III"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapag_iii.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona5" shape="poly"
						coords="196,136,205,134,211,133,214,133,217,129,219,125,220,120,222,115,228,113,231,113,235,111,239,111,244,111,251,108,249,100,246,92,242,87,235,85,226,85,219,85,209,87,204,88,200,90,195,93"
						href="#" title="Zona II"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapag_ii.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona4" shape="poly"
						coords="172,87,195,86,194,95,194,116,195,137,185,134,176,127,168,114,166,97"
						href="#" title="Zona I"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapag_i.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona2" shape="poly"
						coords="54,43,58,45,61,48,63,50,65,56,68,62,72,68,76,72,78,74,82,77,84,80,87,81,86,84,86,88,90,89,94,92,95,95,97,96,102,101,108,107,110,111,111,114,113,116,113,120,113,122,100,122,95,119,91,116,85,114,83,110,83,106,85,104,83,100,81,98,78,97,77,94,77,93,75,88,73,85,73,81,70,78,66,72,62,65,58,59,55,56,53,55,53,50,53,47"
						href="#" title="Zona II"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapap_ii.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona1" shape="poly"
						coords="5,75,9,81,17,85,24,89,28,90,35,97,39,98,42,106,47,113,54,119,60,122,65,125,75,123,80,119,82,111,81,106,79,102,75,99,70,94,67,92,66,89,67,85,65,81,61,79,58,77,55,76,51,71,48,70,53,69,55,67,53,62,49,57,45,55,43,48,41,43,38,37,32,38,29,41,28,44,27,49,25,53,19,53,10,55,3,55"
						href="#" title="Zona I"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapap_i.jpg',1)"
						onmouseout="MM_swapImgRestore()">

					<area id="zona3" shape="poly"
						coords="67,128,76,134,87,139,97,145,107,152,118,158,128,163,140,168,153,171,165,175,174,178,180,180,190,178,193,179,196,179,209,163,200,157,195,153,188,153,184,156,180,157,174,156,166,154,157,151,151,148,144,146,139,144,138,142,128,142,124,137,119,133,114,131,111,127,111,123,106,123,100,123,95,120,90,117,86,116,83,115,82,119,79,123,75,126,71,126"
						href="#" title="Zona III"
						onmouseover="MM_swapImage('mapaz','','<?php echo Yii::app()->request->baseUrl; ?>/imagenes/aplicacion/zonas_pesqueras_mapap_iii.jpg',1)"
						onmouseout="MM_swapImgRestore()">
				</map>
				<div style="display: none;">
					<input type="radio" name="zona" value="1" id="buscador_zona1"><label
						for="buscador_recomendable" class="preguntas sem"><span></span>
						Pacífico zona 1</label> <input type="radio" name="zona" value="2"
						id="buscador_zona2"><label for="buscador_recomendable"
						class="preguntas sem"><span></span> Pacífico zona 2</label> <input
						type="radio" name="zona" value="3" id="buscador_zona3"><label
						for="buscador_recomendable" class="preguntas sem"><span></span>
						Pacífico zona 3</label> <input type="radio" name="zona" value="4"
						id="buscador_zona4"><label for="buscador_recomendable"
						class="preguntas sem"><span></span> Golfo de México y Caribe zona
						1</label> <input type="radio" name="zona" value="5"
						id="buscador_zona5"><label for="buscador_recomendable"
						class="preguntas sem"><span></span> Golfo de México y Caribe zona
						2</label> <input type="radio" name="zona" value="6"
						id="buscador_zona6"><label for="buscador_recomendable"
						class="preguntas sem"><span></span> Golfo de México y Caribe zona
						3</label> <input type="radio" name="zona" value="7"
						id="buscador_zona7"><label for="buscador_recomendable"
						class="preguntas sem"><span></span> Importado</label>
				</div>
			</div>
			<div id="pez_explicado">
			<div>
				<strong>Ejemplo de división por zonas</strong>
				<hr />
				<div>
					<?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/EpinephelusStriatus.png", "Ejemplo de resultado", array('class'=>'ima')); ?>
				</div>
				<span class="color_estilo bgcolor_pacifico bgcolor_zonas"></span>
				<span class="color_estilo bgcolor_golfo bgcolor_zonas"></span>
				<br />
				<span class="color_estilo color_V+ "></span>
				<span class="color_estilo color_V- "></span>
				<span class="color_estilo color_A- "></span>
				<span class="color_estilo color_A+ "></span>
				<span class="color_estilo color_R "></span>
				<span class="color_estilo color_B "></span>
				
				<span class="color_estilo color_pacifico"><strong><small>Zona I</small></strong></span>
				<span class="color_estilo color_pacifico"><strong><small>Zona II</small></strong></span>
				<span class="color_estilo color_pacifico"><strong><small>Zona III</small></strong></span>
				<span class="color_estilo color_golfo"><strong><small>Zona I</small></strong></span>
				<span class="color_estilo color_golfo"><strong><small>Zona II</small></strong></span>
				<span class="color_estilo color_golfo"><strong><small>Zona III</small></strong></span>
				<br />
				<span class="color_estilo color_pacifico" style="width: 45%;"><strong>&#8627;Pacifico&#8626;</strong></span>
				<span class="color_estilo color_golfo" style="width: 45%;"><strong>&#8627;Golfo y caribe&#8626;</strong></span>
			</div>
			</div>
		</div>
	</form>
</div>

