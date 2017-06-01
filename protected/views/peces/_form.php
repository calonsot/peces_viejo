<?php
/* @var $this PecesController */
/* @var $model Peces */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peces-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_comun'); ?>
		<?php echo $form->textField($model,'nombre_comun',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_comun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_ingles'); ?>
		<?php echo $form->textField($model,'nombre_ingles',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_ingles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otros_nombres_comunes'); ?>
		<?php echo $form->textField($model,'otros_nombres_comunes',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'otros_nombres_comunes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cientifico'); ?>
		<?php echo $form->textField($model,'nombre_cientifico',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_cientifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presente_golfo'); ?>
		<?php echo $form->textField($model,'presente_golfo'); ?>
		<?php echo $form->error($model,'presente_golfo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presente_caribe'); ?>
		<?php echo $form->textField($model,'presente_caribe'); ?>
		<?php echo $form->error($model,'presente_caribe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presente_pacifico'); ?>
		<?php echo $form->textField($model,'presente_pacifico',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'presente_pacifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo_cnp'); ?>
		<?php echo $form->textField($model,'grupo_cnp',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grupo_cnp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo_conabio'); ?>
		<?php echo $form->textField($model,'grupo_conabio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grupo_conabio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacional_importado'); ?>
		<?php echo $form->textField($model,'nacional_importado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nacional_importado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacional_importado_valor'); ?>
		<?php echo $form->textField($model,'nacional_importado_valor'); ?>
		<?php echo $form->error($model,'nacional_importado_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacional_importado_peso'); ?>
		<?php echo $form->textField($model,'nacional_importado_peso'); ?>
		<?php echo $form->error($model,'nacional_importado_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objetivo'); ?>
		<?php echo $form->textField($model,'objetivo'); ?>
		<?php echo $form->error($model,'objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incidental'); ?>
		<?php echo $form->textField($model,'incidental'); ?>
		<?php echo $form->error($model,'incidental'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deportiva'); ?>
		<?php echo $form->textField($model,'deportiva'); ?>
		<?php echo $form->error($model,'deportiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fomento'); ?>
		<?php echo $form->textField($model,'fomento'); ?>
		<?php echo $form->error($model,'fomento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cultivada'); ?>
		<?php echo $form->textField($model,'cultivada'); ?>
		<?php echo $form->error($model,'cultivada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'talla_captura'); ?>
		<?php echo $form->textField($model,'talla_captura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'talla_captura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_captura'); ?>
		<?php echo $form->textField($model,'tipo_captura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipo_captura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_captura_valor'); ?>
		<?php echo $form->textField($model,'tipo_captura_valor'); ?>
		<?php echo $form->error($model,'tipo_captura_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_captura_peso'); ?>
		<?php echo $form->textField($model,'tipo_captura_peso'); ?>
		<?php echo $form->error($model,'tipo_captura_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arte_pesca'); ?>
		<?php echo $form->textField($model,'arte_pesca',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'arte_pesca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_valor'); ?>
		<?php echo $form->textField($model,'nom_valor'); ?>
		<?php echo $form->error($model,'nom_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_peso'); ?>
		<?php echo $form->textField($model,'nom_peso'); ?>
		<?php echo $form->error($model,'nom_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iucn'); ?>
		<?php echo $form->textField($model,'iucn',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'iucn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iucn_valor'); ?>
		<?php echo $form->textField($model,'iucn_valor'); ?>
		<?php echo $form->error($model,'iucn_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iucn_peso'); ?>
		<?php echo $form->textField($model,'iucn_peso'); ?>
		<?php echo $form->error($model,'iucn_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cites'); ?>
		<?php echo $form->textField($model,'cites',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cites'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cites_valor'); ?>
		<?php echo $form->textField($model,'cites_valor'); ?>
		<?php echo $form->error($model,'cites_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cites_peso'); ?>
		<?php echo $form->textField($model,'cites_peso'); ?>
		<?php echo $form->error($model,'cites_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_veda'); ?>
		<?php echo $form->textField($model,'tipo_veda',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipo_veda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_veda_valor'); ?>
		<?php echo $form->textField($model,'tipo_veda_valor'); ?>
		<?php echo $form->error($model,'tipo_veda_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_veda_peso'); ?>
		<?php echo $form->textField($model,'tipo_veda_peso'); ?>
		<?php echo $form->error($model,'tipo_veda_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_veda_fecha'); ?>
		<?php echo $form->textField($model,'tipo_veda_fecha',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipo_veda_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'generalidades'); ?>
		<?php echo $form->textField($model,'generalidades',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'generalidades'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distribucion'); ?>
		<?php echo $form->textField($model,'distribucion',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'distribucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cultivada_capturada'); ?>
		<?php echo $form->textField($model,'cultivada_capturada',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cultivada_capturada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comercio'); ?>
		<?php echo $form->textField($model,'comercio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comercio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pais_importacion'); ?>
		<?php echo $form->textField($model,'pais_importacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pais_importacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona1'); ?>
		<?php echo $form->textField($model,'zona1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zona1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona1_valor'); ?>
		<?php echo $form->textField($model,'zona1_valor'); ?>
		<?php echo $form->error($model,'zona1_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona1_peso'); ?>
		<?php echo $form->textField($model,'zona1_peso'); ?>
		<?php echo $form->error($model,'zona1_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona2'); ?>
		<?php echo $form->textField($model,'zona2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zona2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona2_valor'); ?>
		<?php echo $form->textField($model,'zona2_valor'); ?>
		<?php echo $form->error($model,'zona2_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona2_peso'); ?>
		<?php echo $form->textField($model,'zona2_peso'); ?>
		<?php echo $form->error($model,'zona2_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona3'); ?>
		<?php echo $form->textField($model,'zona3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zona3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona3_valor'); ?>
		<?php echo $form->textField($model,'zona3_valor'); ?>
		<?php echo $form->error($model,'zona3_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona3_peso'); ?>
		<?php echo $form->textField($model,'zona3_peso'); ?>
		<?php echo $form->error($model,'zona3_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona4'); ?>
		<?php echo $form->textField($model,'zona4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zona4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona4_valor'); ?>
		<?php echo $form->textField($model,'zona4_valor'); ?>
		<?php echo $form->error($model,'zona4_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona4_peso'); ?>
		<?php echo $form->textField($model,'zona4_peso'); ?>
		<?php echo $form->error($model,'zona4_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona5'); ?>
		<?php echo $form->textField($model,'zona5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zona5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona5_valor'); ?>
		<?php echo $form->textField($model,'zona5_valor'); ?>
		<?php echo $form->error($model,'zona5_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona5_peso'); ?>
		<?php echo $form->textField($model,'zona5_peso'); ?>
		<?php echo $form->error($model,'zona5_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona6'); ?>
		<?php echo $form->textField($model,'zona6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zona6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona6_valor'); ?>
		<?php echo $form->textField($model,'zona6_valor'); ?>
		<?php echo $form->error($model,'zona6_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona6_peso'); ?>
		<?php echo $form->textField($model,'zona6_peso'); ?>
		<?php echo $form->error($model,'zona6_peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seafoodwatch'); ?>
		<?php echo $form->textField($model,'seafoodwatch',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'seafoodwatch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_imagen'); ?>
		<?php echo $form->textField($model,'tipo_imagen'); ?>
		<?php echo $form->error($model,'tipo_imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnp'); ?>
		<?php echo $form->textField($model,'cnp'); ?>
		<?php echo $form->error($model,'cnp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->