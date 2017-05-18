<?php
/* @var $this PecesController */
/* @var $data Peces */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_comun')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_comun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_ingles')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_ingles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros_nombres_comunes')); ?>:</b>
	<?php echo CHtml::encode($data->otros_nombres_comunes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_cientifico')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_cientifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presente_golfo')); ?>:</b>
	<?php echo CHtml::encode($data->presente_golfo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presente_caribe')); ?>:</b>
	<?php echo CHtml::encode($data->presente_caribe); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('presente_pacifico')); ?>:</b>
	<?php echo CHtml::encode($data->presente_pacifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo_cnp')); ?>:</b>
	<?php echo CHtml::encode($data->grupo_cnp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo_conabio')); ?>:</b>
	<?php echo CHtml::encode($data->grupo_conabio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacional_importado')); ?>:</b>
	<?php echo CHtml::encode($data->nacional_importado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacional_importado_valor')); ?>:</b>
	<?php echo CHtml::encode($data->nacional_importado_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacional_importado_peso')); ?>:</b>
	<?php echo CHtml::encode($data->nacional_importado_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incidental')); ?>:</b>
	<?php echo CHtml::encode($data->incidental); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deportiva')); ?>:</b>
	<?php echo CHtml::encode($data->deportiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fomento')); ?>:</b>
	<?php echo CHtml::encode($data->fomento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cultivada')); ?>:</b>
	<?php echo CHtml::encode($data->cultivada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talla_captura')); ?>:</b>
	<?php echo CHtml::encode($data->talla_captura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_captura')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_captura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_captura_valor')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_captura_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_captura_peso')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_captura_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arte_pesca')); ?>:</b>
	<?php echo CHtml::encode($data->arte_pesca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_valor')); ?>:</b>
	<?php echo CHtml::encode($data->nom_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_peso')); ?>:</b>
	<?php echo CHtml::encode($data->nom_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iucn')); ?>:</b>
	<?php echo CHtml::encode($data->iucn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iucn_valor')); ?>:</b>
	<?php echo CHtml::encode($data->iucn_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iucn_peso')); ?>:</b>
	<?php echo CHtml::encode($data->iucn_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cites')); ?>:</b>
	<?php echo CHtml::encode($data->cites); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cites_valor')); ?>:</b>
	<?php echo CHtml::encode($data->cites_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cites_peso')); ?>:</b>
	<?php echo CHtml::encode($data->cites_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_veda')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_veda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_veda_valor')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_veda_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_veda_peso')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_veda_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_veda_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_veda_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('generalidades')); ?>:</b>
	<?php echo CHtml::encode($data->generalidades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distribucion')); ?>:</b>
	<?php echo CHtml::encode($data->distribucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cultivada_capturada')); ?>:</b>
	<?php echo CHtml::encode($data->cultivada_capturada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comercio')); ?>:</b>
	<?php echo CHtml::encode($data->comercio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais_importacion')); ?>:</b>
	<?php echo CHtml::encode($data->pais_importacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona1')); ?>:</b>
	<?php echo CHtml::encode($data->zona1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona1_valor')); ?>:</b>
	<?php echo CHtml::encode($data->zona1_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona1_peso')); ?>:</b>
	<?php echo CHtml::encode($data->zona1_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona2')); ?>:</b>
	<?php echo CHtml::encode($data->zona2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona2_valor')); ?>:</b>
	<?php echo CHtml::encode($data->zona2_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona2_peso')); ?>:</b>
	<?php echo CHtml::encode($data->zona2_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona3')); ?>:</b>
	<?php echo CHtml::encode($data->zona3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona3_valor')); ?>:</b>
	<?php echo CHtml::encode($data->zona3_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona3_peso')); ?>:</b>
	<?php echo CHtml::encode($data->zona3_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona4')); ?>:</b>
	<?php echo CHtml::encode($data->zona4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona4_valor')); ?>:</b>
	<?php echo CHtml::encode($data->zona4_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona4_peso')); ?>:</b>
	<?php echo CHtml::encode($data->zona4_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona5')); ?>:</b>
	<?php echo CHtml::encode($data->zona5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona5_valor')); ?>:</b>
	<?php echo CHtml::encode($data->zona5_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona5_peso')); ?>:</b>
	<?php echo CHtml::encode($data->zona5_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona6')); ?>:</b>
	<?php echo CHtml::encode($data->zona6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona6_valor')); ?>:</b>
	<?php echo CHtml::encode($data->zona6_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona6_peso')); ?>:</b>
	<?php echo CHtml::encode($data->zona6_peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seafoodwatch')); ?>:</b>
	<?php echo CHtml::encode($data->seafoodwatch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_imagen')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnp')); ?>:</b>
	<?php echo CHtml::encode($data->cnp); ?>
	<br />

	*/ ?>

</div>