<?php
/* @var $this PecesController */
/* @var $model Peces */

$this->breadcrumbs=array(
	'Peces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Peces', 'url'=>array('index')),
	array('label'=>'Manage Peces', 'url'=>array('admin')),
);
?>

<h1>Create Peces</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>