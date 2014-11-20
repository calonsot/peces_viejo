<form name="buscador" id="buscador" method="get"
	action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/peces/resultado">
	<table width="320" border="0" align="center" cellpadding="8"
		cellspacing="1">
		<tr>
			<td colspan="2" bgcolor="#C2BDA0" class="txt_reforesta"><div
					align="center" class="intro_vecinosVerdes">
					<strong>Peces marinos comerciales</strong>
				</div></td>
		</tr>		
		<tr>
			<td colspan="2" bgcolor="#D9D6C4"><span class="txt_reforesta">Nombre
					<input type="text" name="buscador_nombre_comun"
					id="buscador_nombre_comun">
			</span></td>
		</tr>
		<tr>
			<td colspan="2" bgcolor="#D9D6C4"><span class="txt_reforesta">Nombre
					cient&iacute;fico <input type="text"
					name="buscador_nombre_cientifico" id="buscador_nombre_cientifico">
			</span></td>
		</tr>
		<tr>
			<td colspan="2" bgcolor="#D9D6C4"><span class="txt_reforesta">Grupo </span>
				<label for="select"></label> <?php echo CHtml::dropDownList('buscador_grupo', null, CHtml::listData(Grupo::model()->findAll(array('order'=>'nombre ASC')), 'id', 'nombre'),
				array('id'=>'buscador_grupo', 'prompt'=>'---Todos---')); ?></td>
		</tr>
		<tr>
			<td colspan="2" bgcolor="#D9D6C4"><span class="txt_reforesta">Conservacion </span>
				<label for="select"></label> <?php echo CHtml::dropDownList('buscador_edo', null, CHtml::listData(EstadoConservacion::model()->options(), 'id', 'nombre', 'grupo'),
				array('id'=>'buscador_edo', 'prompt'=>'---Elija---')); ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<label style="font-size:12px;"> Captura</label>
			</td>
		</tr>
		<tr>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="buscador_captura_selectiva" id="buscador_captura_selectiva">
					Pesca selectiva
			</span></td>
			<td width="150" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="buscador_captura_noselectiva" id="buscador_captura_noselectiva">
					Pesca no selectiva 
			</span></td>
		</tr>
		<tr>
			<td colspan="2">
				<label style="font-size:12px;"> Distribuci&oacute;n</label>
			</td>
		</tr>
		<tr>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="distribucion[]" id="buscador_pacifico" value="3">
					Pac&iacute;fico
			</span></td>
			<span class="txt_reforesta">
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="distribucion[]" id="buscador_golfo" value="1"> Golfo de
					M&eacute;xico
			</span></td>
		</tr>
		<tr>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"><span class="txt_reforesta">
			<input
					type="checkbox" name="distribucion[]" id="buscador_caribe" value="2">
					Mar Caribe
			</span></td>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"><span class="txt_reforesta">
			<input type="checkbox" name="distribucion[]" id="buscador_fuera" value="4"> 
					Fuera del Pa&iacute;s
			</span></td>
		</tr>
		<tr>
			<td colspan="2">
				<label style="font-size:12px;"> Tipo de captura</label>
			</td>
		</tr>
		<tr>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="captura[]" id="buscador_objetivo" value="1">
					Objetivo
			</span></td>
			<span class="txt_reforesta">
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="captura[]" id="buscador_incidental" value="2">
					Incidental
			</span></td>
		</tr>
		<tr>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"><span class="txt_reforesta">
			<input type="checkbox" name="captura[]" id="buscador_deportiva" value="3">
					Deportiva
			</span></td>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"><span class="txt_reforesta">
			<input type="checkbox" name="captura[]" id="buscador_fomento" value="4"> Fomento
			</span></td>
		</tr>
		<tr>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"><span class="txt_reforesta">
			<input type="checkbox" name="captura[]" id="buscador_cultivada" value="5">
					Cultivada
			</span></td>
		</tr>
	</table>
</form>

<button type="button" id="limpiar">Limpiar</button>
<span style="float: right;"><?php echo CHtml::link('[Ver todos los peces]', Yii::app()->request->baseUrl.'/index.php/peces', array("style"=>"color:black;font-size:12px;")); ?>
</span>
