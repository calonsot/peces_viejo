<?php
/* @var $this PecesController */
/* @var $model Peces */

$this->breadcrumbs=array(
	'Peces'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Peces', 'url'=>array('index')),
	array('label'=>'Create Peces', 'url'=>array('create')),
	array('label'=>'View Peces', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Peces', 'url'=>array('admin')),
);
?>

<h1>Update Peces <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>