<form name="buscador" id="buscador" method="get"
	action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/peces/resultado">
	<table width="320" border="0" align="center" cellpadding="8"
		cellspacing="1">
		<tr>
			<td colspan="2" bgcolor="#C2BDA0" class="txt_reforesta"><div
					align="center" class="intro_vecinosVerdes">
					<strong>Peces comerciales de mayor importancia</strong>
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
				<label for="select"></label> <?php echo CHtml::dropDownList('buscador_grupo', null, CHtml::listData(Peces::model()->findAll(array('order'=>'grupo ASC', 'group'=>'grupo')), 'grupo', 'grupo'), 
				array('id'=>'buscador_grupo', 'prompt'=>'---Todos---')); ?></td>
		</tr>
		<tr>
			<td colspan="2" bgcolor="#D9D6C4"><span class="txt_reforesta">Sustentabilidad
					pesquera </span> <label for="select"></label> <?php echo CHtml::dropDownList('buscador_sustentabilidad', null, CHtml::listData(Peces::model()->findAll(array('order'=>'aprovechamiento ASC', 'group'=>'aprovechamiento')), 'aprovechamiento', 'aprovechamiento'), 
				array('id'=>'buscador_sustentabilidad', 'prompt'=>'---Todos---')); ?>
			</td>
		</tr>
		<tr>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="buscador_amigable" id="buscador_amigable">
					Pesca selectiva
			</span></td>
			<td width="150" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="buscador_no_amigable" id="buscador_no_amigable">
					Pesca no selectiva 
			</span></td>
		</tr>
		<tr>
			<td width="165" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="buscador_pacifico" id="buscador_pacifico">
					Pac&iacute;fico
			</span></td>
			<td width="150" bgcolor="#D9D6C4"><span class="txt_reforesta"> <input
					type="checkbox" name="buscador_golfo" id="buscador_golfo"> Golfo de
					M&eacute;xico y Mar Caribe
			</span></td>
		</tr>
	</table>
</form>

<button type="button" id="limpiar">Limpiar</button>
<span style="float: right;"><?php echo CHtml::link('[Ver todos los peces]', Yii::app()->request->baseUrl.'/index.php/peces', array("style"=>"color:black;font-size:12px;")); ?>
</span>
