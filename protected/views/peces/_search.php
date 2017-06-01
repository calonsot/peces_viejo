<?php
/* @var $this PecesController */
/* @var $model Peces */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_comun'); ?>
		<?php echo $form->textField($model,'nombre_comun',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_ingles'); ?>
		<?php echo $form->textField($model,'nombre_ingles',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otros_nombres_comunes'); ?>
		<?php echo $form->textField($model,'otros_nombres_comunes',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_cientifico'); ?>
		<?php echo $form->textField($model,'nombre_cientifico',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presente_golfo'); ?>
		<?php echo $form->textField($model,'presente_golfo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presente_caribe'); ?>
		<?php echo $form->textField($model,'presente_caribe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presente_pacifico'); ?>
		<?php echo $form->textField($model,'presente_pacifico',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grupo_cnp'); ?>
		<?php echo $form->textField($model,'grupo_cnp',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grupo_conabio'); ?>
		<?php echo $form->textField($model,'grupo_conabio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacional_importado'); ?>
		<?php echo $form->textField($model,'nacional_importado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacional_importado_valor'); ?>
		<?php echo $form->textField($model,'nacional_importado_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacional_importado_peso'); ?>
		<?php echo $form->textField($model,'nacional_importado_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objetivo'); ?>
		<?php echo $form->textField($model,'objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incidental'); ?>
		<?php echo $form->textField($model,'incidental'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deportiva'); ?>
		<?php echo $form->textField($model,'deportiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fomento'); ?>
		<?php echo $form->textField($model,'fomento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cultivada'); ?>
		<?php echo $form->textField($model,'cultivada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'talla_captura'); ?>
		<?php echo $form->textField($model,'talla_captura',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_captura'); ?>
		<?php echo $form->textField($model,'tipo_captura',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_captura_valor'); ?>
		<?php echo $form->textField($model,'tipo_captura_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_captura_peso'); ?>
		<?php echo $form->textField($model,'tipo_captura_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arte_pesca'); ?>
		<?php echo $form->textField($model,'arte_pesca',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_valor'); ?>
		<?php echo $form->textField($model,'nom_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_peso'); ?>
		<?php echo $form->textField($model,'nom_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iucn'); ?>
		<?php echo $form->textField($model,'iucn',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iucn_valor'); ?>
		<?php echo $form->textField($model,'iucn_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iucn_peso'); ?>
		<?php echo $form->textField($model,'iucn_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cites'); ?>
		<?php echo $form->textField($model,'cites',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cites_valor'); ?>
		<?php echo $form->textField($model,'cites_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cites_peso'); ?>
		<?php echo $form->textField($model,'cites_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_veda'); ?>
		<?php echo $form->textField($model,'tipo_veda',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_veda_valor'); ?>
		<?php echo $form->textField($model,'tipo_veda_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_veda_peso'); ?>
		<?php echo $form->textField($model,'tipo_veda_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_veda_fecha'); ?>
		<?php echo $form->textField($model,'tipo_veda_fecha',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'generalidades'); ?>
		<?php echo $form->textField($model,'generalidades',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distribucion'); ?>
		<?php echo $form->textField($model,'distribucion',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cultivada_capturada'); ?>
		<?php echo $form->textField($model,'cultivada_capturada',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comercio'); ?>
		<?php echo $form->textField($model,'comercio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pais_importacion'); ?>
		<?php echo $form->textField($model,'pais_importacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona1'); ?>
		<?php echo $form->textField($model,'zona1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona1_valor'); ?>
		<?php echo $form->textField($model,'zona1_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona1_peso'); ?>
		<?php echo $form->textField($model,'zona1_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona2'); ?>
		<?php echo $form->textField($model,'zona2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona2_valor'); ?>
		<?php echo $form->textField($model,'zona2_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona2_peso'); ?>
		<?php echo $form->textField($model,'zona2_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona3'); ?>
		<?php echo $form->textField($model,'zona3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona3_valor'); ?>
		<?php echo $form->textField($model,'zona3_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona3_peso'); ?>
		<?php echo $form->textField($model,'zona3_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona4'); ?>
		<?php echo $form->textField($model,'zona4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona4_valor'); ?>
		<?php echo $form->textField($model,'zona4_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona4_peso'); ?>
		<?php echo $form->textField($model,'zona4_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona5'); ?>
		<?php echo $form->textField($model,'zona5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona5_valor'); ?>
		<?php echo $form->textField($model,'zona5_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona5_peso'); ?>
		<?php echo $form->textField($model,'zona5_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona6'); ?>
		<?php echo $form->textField($model,'zona6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona6_valor'); ?>
		<?php echo $form->textField($model,'zona6_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona6_peso'); ?>
		<?php echo $form->textField($model,'zona6_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seafoodwatch'); ?>
		<?php echo $form->textField($model,'seafoodwatch',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_imagen'); ?>
		<?php echo $form->textField($model,'tipo_imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cnp'); ?>
		<?php echo $form->textField($model,'cnp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->