<?php
/* @var $this PecesController */
/* @var $dataProvider CActiveDataProvider */



?>

<h3 style="font-family:verdana;color:#033B42;">Peces comerciales de mayor importancia</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
