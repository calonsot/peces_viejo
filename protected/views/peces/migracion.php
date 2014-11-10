<?php

header('Content-Type: text/html; charset=UTF-8');

//Se calcula el número de líneas que tiene tal archivo para iterar
$n = system("wc -l protected/data/BD_PECES_NORMAL.csv | awk '{print $1}'");
system("echo \"INSERT INTO peces(nombre_comun,nombre_ingles,nombre_cientifico,clase,orden,familia,grupo_id,nacional_importado,tipo_imagen,imagen,triptico,talla_captura,arte_pesca,tipo_veda_id,veda,generalidades,descripcion_distribucion,cultivado_capturado,comercio,pais_importacion) VALUES \" > protected/data/tabla_peces_STD.sql");
for($i=2;$i<=$n;$i++){
	//Se extrae campo grupo de la línea especificada
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$11"" }\' protected/data/BD_PECES_NORMAL.csv';
	//Se extrae el id del nombre del grupo
	$grupo = $db->get_id('grupo', 'id','nombre="'.system($cad).'"');
	//Si no existe grupo, por default asigna id: 0
	if(!$grupo)
		$grupo = 0;
	//Da formato al id de grupo
	$formato_grupo = strip_tags($grupo);
	//Se extrae campo tipo_veda de la línea especificada
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$26"" }\' protected/data/BD_PECES_NORMAL.csv';
	//Se extrae el id del tipo_veda
	$veda = $db->get_id('tipo_veda', 'id','nombre="'.system($cad).'"');
	//Si no existe tipo_veda, por default asigna id: 0
	if(!$veda)
		$veda = 0;
	//Da formato al id tipo_veda
	$formato_veda = strip_tags($veda);
	
	//Se extraen los campos que requiere la tabla peces para ser creados y realiza un append en el archivo especificado
	if($i==$n)
		$cmd = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print "(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",'.$formato_grupo.',\""$12"\",\""$18"\",\"\",\""$19"\",\""$20"\",\""$22"\",'.$formato_veda.',\""$27"\",\""$28"\",\""$29"\",\""$30"\",\""$31"\",\""$32"\")" }\' protected/data/BD_PECES_NORMAL.csv >> protected/data/tabla_peces_STD.sql';
	else
		$cmd = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print "(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",'.$formato_grupo.',\""$12"\",\""$18"\",\"\",\""$19"\",\""$20"\",\""$22"\",'.$formato_veda.',\""$27"\",\""$28"\",\""$29"\",\""$30"\",\""$31"\",\""$32"\")," }\' protected/data/BD_PECES_NORMAL.csv >> protected/data/tabla_peces_STD.sql';
	//Se imprime la inserción
	echo $cmd."<br>";
	//Se efectua el comando
	system($cmd);
}

//Se agrega la tabla a MySQL
system("mysql -h localhost -u root -proot mydb < protected/data/tabla_peces_STD.sql");

system("echo \"INSERT INTO pez_distribucion(especie_id,distribucion) VALUES \" > protected/data/tabla_pez_distribucion.sql");
system("echo \"INSERT INTO pez_tipo_capturas(especie_id,tipo_captura_id) VALUES \" > protected/data/tabla_pez_tipo_capturas.sql");
system("echo \"INSERT INTO pez_estado_conservacion(especie_id,estado_conservacion) VALUES \" > protected/data/tabla_pez_estado_conservacion.sql");
system("echo \"INSERT INTO pez_carta_nacional(especie_id,carta_nacional_id) VALUES \" > protected/data/tabla_pez_carta_nacional.sql");
for($i=2;$i<=$n;$i++){
	//Inicia inserción para tablas multirelacionales
	//Se extrae campo nombre_comun de la línea especificada
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$1"" }\' protected/data/BD_PECES_NORMAL.csv';
	//Se extrae el id del nombre_comun de la tabla peces
	$id_pez = $db->get_id('peces', 'especie_id','nombre_comun="'.system($cad).'"');
	//Imprime dicho id
	$id_pez = strip_tags($id_pez);
	echo "El id es: ".$id_pez."<br>";

	
//									SE LLENA TABLA: PEZ_DISTRIBUCION
//-----------------------------------------------------------------------------------------------------------//
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$7"" }\' protected/data/BD_PECES_NORMAL.csv';
	//Sí el campo Golfo de México es 1 se calcula el id en la tabla tipo_distribucion
	
	if(system($cad)==1){
		//Inserta a la tabla pez_tipo_distribucion con el id del pez y el id del tipo de distribucion
		$cad = 'echo "('.$id_pez.',1)," >> protected/data/tabla_pez_distribucion.sql';
		system($cad);	
	}

	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$8"" }\' protected/data/BD_PECES_NORMAL.csv';
	//Sí el campo Golfo de México es 1 se calcula el id en la tabla tipo_distribucion
	
	if(system($cad)==1){
		//Inserta a la tabla pez_tipo_distribucion con el id del pez y el id del tipo de distribucion
		$cad = 'echo "('.$id_pez.',2)," >> protected/data/tabla_pez_distribucion.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$9"" }\' protected/data/BD_PECES_NORMAL.csv';
	//Sí el campo Golfo de México es 1 se calcula el id en la tabla tipo_distribucion
	
	if(system($cad)==1){	
		
		//Inserta a la tabla pez_tipo_distribucion con el id del pez y el id del tipo de distribucion
		$cad = 'echo "('.$id_pez.',3)," >> protected/data/tabla_pez_distribucion.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$10"" }\' protected/data/BD_PECES_NORMAL.csv';
	//Sí el campo Golfo de México es 1 se calcula el id en la tabla tipo_distribucion$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$37"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=5');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
	
	if(system($cad)==1){
		//Inserta a la tabla pez_tipo_distribucion con el id del pez y el id del tipo de distribucion
		$cad = 'echo "('.$id_pez.',4)," >> protected/data/tabla_pez_distribucion.sql';
		system($cad);
	}
//									SE LLENA TABLA: PEZ_TIPO_CAPTURAS
//----------------------------------------------------------------------------------------------------------//	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$13"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',3)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$14"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',4)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$15"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',5)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$16"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',6)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$17"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',7)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}

//									SE LLENA TABLA: PEZ_ESTADO_CONSERVACION
//----------------------------------------------------------------------------------------------------------//
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$23"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	
	
	if(system($cad)!=""){
		echo "<br>Nombre Lista Roja: ".system($cad)."<br>";
		$id_edo = $db->get_id('estado_conservacion', 'id','nombre="'.system($cad).'" AND Nivel1=1');
		$id_edo = strip_tags($id_edo);
		$cad = 'echo "('.$id_pez.','.$id_edo.')," >> protected/data/tabla_pez_estado_conservacion.sql';
		system($cad); 
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$24"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_edo = $db->get_id('estado_conservacion', 'id','nombre="'.system($cad).'" AND Nivel1=2');
		$id_edo = strip_tags($id_edo);
		$cad = 'echo "('.$id_pez.','.$id_edo.')," >> protected/data/tabla_pez_estado_conservacion.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$25"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_edo = $db->get_id('estado_conservacion', 'id','nombre="'.system($cad).'" AND Nivel1=3');
		$id_edo = strip_tags($id_edo);
		$cad = 'echo "('.$id_pez.','.$id_edo.')," >> protected/data/tabla_pez_estado_conservacion.sql';
		system($cad);
	}
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$37"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=5');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
//									SE LLENA TABLA: PEZ_CARTA_NACIONAL
//----------------------------------------------------------------------------------------------------------//
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$33"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=1');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$34"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=2');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$35"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=3');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$36"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=4');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$37"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=5');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "|"}; NR == '.$i.' {print ""$38"" }\' protected/data/BD_PECES_NORMAL.csv';
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=6');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}

}

?>