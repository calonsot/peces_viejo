<?php
/* @var $this PecesController */
/* @var $data Peces */
?>

<div class="view">
	<?php if (empty($data->foto)) { ?>
	<span style="float: left; font-family: verdana; color: #033B42;"><b> <?php echo CHtml::encode($data->nombre_comun); ?>
	</b> <?php echo CHtml::link('Ver', Yii::app()->request->baseUrl."/index.php/peces/".$data->id, array("style"=>"color:#033B42;font-size:12px;", "align-text" => "left")); ?>
	</span><i>(Sin foto)</i><br>
	<?php } else { ?>
	<span style="float: left; font-family: verdana; color: #033B42;"><b> <?php echo CHtml::encode($data->nombre_comun); ?>
	</b> </span><br />
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/".CHtml::encode(str_replace("2", "", $data->foto)), $data->nombre_comun), Yii::app()->request->baseUrl."/index.php/peces/".$data->id); ?>
	<?php } ?>
	<br />

</div>
