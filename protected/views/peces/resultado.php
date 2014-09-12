<?php
/* @var $this PecesController */
/* @var $model Peces */
if (!isset($vacio))
{
	echo "<h3 style='left;font-family:verdana;color:#033B42;'>".$cuantos." peces con mayor importancia comercial</h3>";
?>

<div class="view">
	<?php foreach ($peces as $k => $pez) { ?>
	<?php if (empty($pez->foto)) { ?>
	<span style="float: left; font-family: verdana; color: #033B42;"><b> <?php echo CHtml::encode($pez->nombre_comun); ?>
	</b> <?php echo CHtml::link('Ver', Yii::app()->request->baseUrl."/index.php/peces/".$pez->id, array("style"=>"color:#033B42;font-size:12px;", "align-text" => "left")); ?>
	</span><i>(Sin foto)</i><br>
	<?php } else { ?>
	<span style="float: left; font-family: verdana; color: #033B42;"><b> <?php echo CHtml::encode($pez->nombre_comun); ?>
	</b> </span><br />
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/peces/".CHtml::encode(str_replace("2", "", $pez->foto)), $pez->nombre_comun), Yii::app()->request->baseUrl."/index.php/peces/".$pez->id); ?>
	<?php } ?>
	<br />
	<?php } ?>

</div>

<?php 	
} else
	echo $vacio;
?>