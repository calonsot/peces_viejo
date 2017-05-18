<?php
/* @var $this PecesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peces',
);

$this->menu=array(
	array('label'=>'Create Peces', 'url'=>array('create')),
	array('label'=>'Manage Peces', 'url'=>array('admin')),
);
?>

<h1>Peces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
