<?php
/* @var $this PecesController */
/* @var $model Peces */

$this->breadcrumbs=array(
	'Peces'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Peces', 'url'=>array('index')),
	array('label'=>'Create Peces', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#peces-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Peces</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'peces-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre_comun',
		'nombre_cientifico',
		'nombre_ingles',
		'grupo',
		'familia',
		/*
		'lugar',
		'talla_captura',
		'aprovechamiento',
		'lista_roja_iucn',
		'veda',
		'arte_de_pesca',
		'tipo_arte_pesca',
		'generalidades',
		'distribucion',
		'foto',
		'html',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
