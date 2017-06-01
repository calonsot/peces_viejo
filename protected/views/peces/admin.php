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
		'nombre_ingles',
		'otros_nombres_comunes',
		'nombre_cientifico',
		'presente_golfo',
		/*
		'presente_caribe',
		'presente_pacifico',
		'grupo_cnp',
		'grupo_conabio',
		'nacional_importado',
		'nacional_importado_valor',
		'nacional_importado_peso',
		'objetivo',
		'incidental',
		'deportiva',
		'fomento',
		'cultivada',
		'talla_captura',
		'tipo_captura',
		'tipo_captura_valor',
		'tipo_captura_peso',
		'arte_pesca',
		'nom',
		'nom_valor',
		'nom_peso',
		'iucn',
		'iucn_valor',
		'iucn_peso',
		'cites',
		'cites_valor',
		'cites_peso',
		'tipo_veda',
		'tipo_veda_valor',
		'tipo_veda_peso',
		'tipo_veda_fecha',
		'generalidades',
		'distribucion',
		'cultivada_capturada',
		'comercio',
		'pais_importacion',
		'zona1',
		'zona1_valor',
		'zona1_peso',
		'zona2',
		'zona2_valor',
		'zona2_peso',
		'zona3',
		'zona3_valor',
		'zona3_peso',
		'zona4',
		'zona4_valor',
		'zona4_peso',
		'zona5',
		'zona5_valor',
		'zona5_peso',
		'zona6',
		'zona6_valor',
		'zona6_peso',
		'seafoodwatch',
		'imagen',
		'tipo_imagen',
		'cnp',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
