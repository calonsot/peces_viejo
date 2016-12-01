<?php $this->renderPartial('/peces/_buscador');?>

<div id="contenido_peces">
	<?php
	if (isset( $resultados ))	
		$this->renderPartial ( '_resultado', array (
				'resultados' => $resultados,
				'count' => $count,
				'page_size' => $page_size,
				'pages' => $pages 
		) );
	
	else
		"Lo sentimos tu busqueda no fue la correcta";
	?>
</div>