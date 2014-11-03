<?php
echo "1<br>";

$n = system("wc -l protected/data/BD_Normal.csv | awk '{print $1}'");

echo "2<br>";

for($i=2;$i<=$n;$i++){
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$11"" }\' protected/data/BD_Normal.csv';
	$grupo = $db->get_id('grupos', 'nombre="'.system($cad).'"');
	if(!$grupo)
		$grupo = 0;
	$formato_grupo = strip_tags($grupo);
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$26"" }\' protected/data/BD_Normal.csv';
	$veda = $db->get_id('tipo_veda', 'nombre="'.system($cad).'"');
	if(!$veda)
		$veda = 0;
	$formato_veda = strip_tags($veda);
	$cmd = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print "INSERT INTO peces(nombre_comun,nombre_ingles,nombre_cientifico,clase,orden,familia,grupo_id,nacional_importado,tipo_imagen,imagen,triptico,talla_captura,arte_pesca,tipo_veda_id,veda,generalidades,descripcion_distribucion,cultivado_capturado,comercio,pais_importacion,html,fecha_creacion,fecha_actualizacion) VALUES(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",'.$formato_grupo.',\""$12"\",\""$18"\",\"\",\""$19"\",\""$20"\",\""$22"\",'.$formato_veda.',\""$27"\",\""$28"\",\""$29"\",\""$30"\",\""$31"\",\""$32"\",0,\"\",\"\");" }\' protected/data/BD_Normal.csv >> protected/data/tabla_peces_STD.sql';
	echo $cmd."<br>";
	system($cmd);
}

//Se agrega la tabla a MySQL
system("mysql -h localhost -u root -proot peces < protected/data/tabla_peces_STD.sql");

for($i=2;$i<=$n;$i++){
	//Inicia inserción para tablas multirelacionales
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$1"" }\' protected/data/BD_Normal.csv';
	$id_pez = $db->get_id('peces', 'nombre_comun="'.system($cad).'"');
	echo "El id es: ".$id_pez."<br>";
	/*$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$7"" }\' protected/data/BD_Normal.csv';
	if(system($cad)==1){
		$tipo_distr = $db->get_id('tipo_distribucion', 'nombre="Pacífico"');
		echo "id_t_d: ".$tipo_distr."<br>";
	}
	
	echo $cad."<br>";*/	
}
?>