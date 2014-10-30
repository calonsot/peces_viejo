<?php
$n = system("wc -l protected/data/BD_Peces2.csv | awk '{print $1}'");
for($i=2;$i<=$n;$i++){
	//echo $i."<br>";
	echo "<br>";

	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$11"" }\' protected/data/BD_Peces2.csv';
	$grupo = $db->get_id('grupos', 'nombre="'.system($cad).'"');
	if(!$grupo)
		$grupo = 0;
	$formato_grupo = strip_tags($grupo);
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$26"" }\' protected/data/BD_Peces2.csv';
	$veda = $db->get_id('tipo_veda', 'nombre="'.system($cad).'"');
	if(!$veda)
		$veda = 0;
	$formato_veda = strip_tags($veda);
	//echo "la veda es: ".$formato_veda;
	$cmd = 'awk \'BEGIN { FS = "|"}; NR == 2 {print "INSERT INTO peces(nombre_comun,nombre_ingles,nombre_cientifico,clase,orden,familia,grupo_id,nacional_importado,tipo_imagen,imagen,triptico,talla_captura,arte_pesca,tipo_veda_id,veda,generalidades,descripcion_distribucion,cultivado_capturado,comercio,pais_importacion,html,fecha_creacion,fecha_actualizacion) VALUES(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",'.$formato_grupo.',\""$12"\",\""$18"\",\"\",\""$19"\",\""$20"\",\""$22"\",'.$formato_veda.',\""$27"\",\""$28"\",\""$29"\",0,\""$31"\",\""$32"\",0,\"\",\"\");" }\' protected/data/BD_Peces2.csv >> tabla_peces.sql';
	system($cmd);
}
/*




$cmd = 'awk \'BEGIN { FS = "|"}; NR == 2 {print "INSERT INTO peces(nombre_comun,nombre_ingles,nombre_cientifico,clase,orden,familia,id_grupo,nacional_importado,tipo_imagen,imagen,triptico,talla_captura,arte_pesca,id_tipo_veda,veda,generalidades,descripcion_distribucion,cultivado_capturado,comercio,pais_importacion,html,fecha_creacion,fecha_actualizacion) VALUES(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",0,\""$12"\",\""$18"\",\"\",\""$19"\",\""$20"\",\""$22"\",\""$26"\",\""$27"\",\""$28"\",\""$29"\",0,\""$31"\",\""$32"\",0,\"\",\"\");" }\' protected/data/BD_Peces2.csv';
$line =explode(";",system($cmd));
echo $line[1];
echo system("wc -l protected/data/BD_Peces2.csv | awk '{print $1}'");*/
?>