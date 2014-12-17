<?php
/* @var $this PecesController */
/* @var $data Peces */
?>

<div class="view">
	<?php 
		echo $data->nombre_cientifico."<br>";
		echo $data->grupo_id."<br>";
		//echo $data->grupo->nombre."<br>";
		if(!empty($data->cartaNacionals))
			foreach ($data->cartaNacionals as $k)
				echo $k->Nombre."<br>";
		
	?>

</div>
