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
		<?php echo $form->labelEx($model,'nombre_cientifico'); ?>
		<?php echo $form->textField($model,'nombre_cientifico',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_cientifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_ingles'); ?>
		<?php echo $form->textField($model,'nombre_ingles',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_ingles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo'); ?>
		<?php echo $form->textField($model,'grupo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familia'); ?>
		<?php echo $form->textField($model,'familia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'familia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'talla_captura'); ?>
		<?php echo $form->textField($model,'talla_captura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'talla_captura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aprovechamiento'); ?>
		<?php echo $form->textField($model,'aprovechamiento',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'aprovechamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lista_roja_iucn'); ?>
		<?php echo $form->textField($model,'lista_roja_iucn',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lista_roja_iucn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'veda'); ?>
		<?php echo $form->textField($model,'veda',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'veda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arte_de_pesca'); ?>
		<?php echo $form->textField($model,'arte_de_pesca',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'arte_de_pesca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_arte_pesca'); ?>
		<?php echo $form->textArea($model,'tipo_arte_pesca',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tipo_arte_pesca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'generalidades'); ?>
		<?php echo $form->textArea($model,'generalidades',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'generalidades'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distribucion'); ?>
		<?php echo $form->textArea($model,'distribucion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'distribucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'html'); ?>
		<?php echo $form->textArea($model,'html',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'html'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->