<?php
/* @var $this PecesController */
/* @var $model Peces */
if (!isset($vacio))
{
	//echo "<h3 style='left;font-family:verdana;color:#033B42;'>".$cuantos." peces con mayor importancia comercial</h3>";
?>

<div class="view">
	<?php foreach ($peces as $k => $pez) { 
		echo utf8_decode($pez["nombre_comun"])."<br>";
		$pezobj = Peces::model()->findByPk($pez["especie_id"]);
		foreach($pezobj->cartaNacionals as $j){
			echo utf8_decode($j->Nombre);
		}
		?>
	<br/>
	<?php } ?>

</div>

<?php 	
} else
	echo $vacio;
?>