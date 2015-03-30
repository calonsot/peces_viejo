<?php

header('Content-Type: text/html; charset=ISO-8859-1');

$csv = "BD_STANDARD.csv";
$separador = "?";

$database = "usos";
$host = "localhost";
$usuario = "root";
$password = "root";
//Columna de grupo: 11
system("protected/data/extrae_grupo.sh protected/data/".$csv." ".$separador." 11 protected/data/extrae_grupo.sql");
system("protected/data/extrae_distribucion.sh protected/data/".$csv." ".$separador." protected/data/extrae_distribucion.sql");
system("protected/data/extrae_capturas.sh protected/data/".$csv." ".$separador." protected/data/extrae_capturas.sql");
//Columna de veda: 25
system("protected/data/extrae_veda.sh protected/data/".$csv." ".$separador." 25 protected/data/extrae_veda.sql");

system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/filtros.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/extrae_grupo.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/tabla_carta_nacional.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/extrae_distribucion.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/tabla_estado_conservacion.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/extrae_capturas.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/tipo_veda.sql");
//echo $db->get_id('carta_nacional', 'Nombre','id=1'));

//Se calcula el número de líneas que tiene tal archivo para iterar
$n = system("wc -l protected/data/".$database." | awk '{print $1}'");
system("echo \"SET FOREIGN_KEY_CHECKS=0; \" > protected/data/tabla_peces_migracion.sql");
system("echo \"INSERT INTO peces(nombre_comun,nombre_ingles,nombre_cientifico,clase,orden,familia,grupo_id,nacional_importado,tipo_imagen,imagen,triptico,talla_captura,selectiva_noselectiva,arte_pesca,tipo_veda_id,veda,generalidades,descripcion_distribucion,cultivado_capturado,comercio,pais_importacion) VALUES \" >> protected/data/tabla_peces_migracion.sql");
system("chmod 777 protected/data/tabla_peces_migracion.sql");
echo "valor de n: ".$n."<br>";
for($i=1;$i<=$n;$i++){
	//Se extrae campo grupo de la línea especificada
	//echo $i."<br>";
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$11"" }\' protected/data/'.$database;
	//Se extrae el id del nombre del grupo
	$grupo = $db->get_id('grupo', 'id','nombre="'.trim(system($cad)).'"');
	//Si no existe grupo, por default asigna id: 0
	if(!$grupo)
		$grupo = "NULL";
	//Da formato al id de grupo
	$formato_grupo = strip_tags($grupo);
	//Se extrae campo tipo_veda de la línea especificada
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$25"" }\' protected/data/'.$database;
	//Se extrae el id del tipo_veda
	$veda = $db->get_id('tipo_veda', 'id','nombre="'.system($cad).'"');
	//Si no existe tipo_veda, por default asigna id: 0
	//echo "El tipo de veda es: ".$veda."<br>";
	if(!$veda)
		$veda = "NULL";
	//Da formato al id tipo_veda
	$formato_veda = strip_tags($veda);
	
	//echo "Formato grupo: ".$formato_grupo."<br>";
	//echo "Formato veda: ".$formato_veda."<br>";
	//Se extraen los campos que requiere la tabla peces para ser creados y realiza un append en el archivo especificado
	if($i==$n)
		$cmd = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print "(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",'.$formato_grupo.',\""$12"\","$18",\""$43"\",NULL,\""$19"\",\""$20"\",\""$21"\",'.$formato_veda.',\""$26"\",\""$27"\",\""$28"\",\""$29"\",\""$30"\",\""$31"\")" }\' protected/data/'.$database.' >> protected/data/tabla_peces_migracion.sql';
	else
		$cmd = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print "(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",'.$formato_grupo.',\""$12"\","$18",\""$43"\",NULL,\""$19"\",\""$20"\",\""$21"\",'.$formato_veda.',\""$26"\",\""$27"\",\""$28"\",\""$29"\",\""$30"\",\""$31"\")," }\' protected/data/'.$database.' >> protected/data/tabla_peces_migracion.sql';
	//Se imprime la inserción
	//echo $cmd."<br>";
	//Se efectua el comando
	system($cmd);
}

//Se agrega la tabla a MySQL
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/tabla_peces_migracion.sql");

system("echo \"SET FOREIGN_KEY_CHECKS=0; \" > protected/data/tabla_pez_distribucion.sql");
system("echo \"INSERT INTO pez_distribucion(peces_especie_id,distribucion_id) VALUES \" >> protected/data/tabla_pez_distribucion.sql");

system("echo \"SET FOREIGN_KEY_CHECKS=0; \" > protected/data/tabla_pez_tipo_capturas.sql");
system("echo \"INSERT INTO pez_tipo_capturas(peces_especie_id,tipo_capturas_id) VALUES \" >> protected/data/tabla_pez_tipo_capturas.sql");

system("echo \"SET FOREIGN_KEY_CHECKS=0; \" > protected/data/tabla_pez_estado_conservacion.sql");
system("echo \"INSERT INTO pez_estado_conservacion(peces_especie_id,estado_conservacion_id) VALUES \" >> protected/data/tabla_pez_estado_conservacion.sql");

system("echo \"SET FOREIGN_KEY_CHECKS=0; \" > protected/data/tabla_pez_carta_nacional.sql");
system("echo \"INSERT INTO pez_carta_nacional(peces_especie_id,carta_nacional_id) VALUES \" >> protected/data/tabla_pez_carta_nacional.sql");
echo "El valor de n es: ".$n."<br>";
for($i=1;$i<=$n;$i++){
	//Inicia inserción para tablas multirelaciona 	les
	//Se extrae campo nombre_comun de la línea especificada
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$3"" }\' protected/data/'.$database;
	//Se extrae el id del nombre_comun de la tabla peces
	//echo "La cadena es: ".$cad."<br>";
	//$id_pez = $db->get_id('peces', 'especie_id','nombre_cientifico="'.system($cad).'"'));
	//Imprime dicho id
	//$id_pez = strip_tags($id_pez);
	$id_pez = $i;
	//if($i - $id_pez >= -1)
		//$id_pez --;
	//echo "El valor de i es: ".$i."<br>";
	//echo "El id es: ".$id_pez."<br>";
	/*if($id_pez == $n)
		$id_pez -= 1;*/
	
//									SE LLENA TABLA: PEZ_DISTRIBUCION
//-----------------------------------------------------------------------------------------------------------//
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$7"" }\' protected/data/'.$database;
	//Sí el campo Golfo de México es 1 se calcula el id en la tabla tipo_distribucion	
	if(system($cad)==1){
		//Inserta a la tabla pez_tipo_distribucion con el id del pez y el id del tipo de distribucion
		$cad = 'echo "('.$id_pez.',1)," >> protected/data/tabla_pez_distribucion.sql';
		system($cad);	
	}

	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$8"" }\' protected/data/'.$database;
	//Sí el campo Golfo de México es 1 se calcula el id en la tabla tipo_distribucion
	
	if(system($cad)==1){
		//Inserta a la tabla pez_tipo_distribucion con el id del pez y el id del tipo de distribucion
		$cad = 'echo "('.$id_pez.',2)," >> protected/data/tabla_pez_distribucion.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$9"" }\' protected/data/'.$database;
	//Sí el campo Golfo de México es 1 se calcula el id en la tabla tipo_distribucion
	
	if(system($cad)==1){	
		
		//Inserta a la tabla pez_tipo_distribucion con el id del pez y el id del tipo de distribucion
		$cad = 'echo "('.$id_pez.',3)," >> protected/data/tabla_pez_distribucion.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$10"" }\' protected/data/'.$database;
	//Sí el campo Golfo de México es 1 se calcula el id en la tabla tipo_distribucion$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$37"" }\' protected/data/'.$database;
		
	if(system($cad)==1){
		//Inserta a la tabla pez_tipo_distribucion con el id del pez y el id del tipo de distribucion
		$cad = 'echo "('.$id_pez.',4)," >> protected/data/tabla_pez_distribucion.sql';
		system($cad);
	}
//									SE LLENA TABLA: PEZ_TIPO_CAPTURAS
//----------------------------------------------------------------------------------------------------------//	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$13"" }\' protected/data/'.$database;
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',1)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$14"" }\' protected/data/'.$database;
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',2)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$15"" }\' protected/data/'.$database;
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',3)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$16"" }\' protected/data/'.$database;
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',4)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$17"" }\' protected/data/'.$database;
	
	if(system($cad)==1){
		$cad = 'echo "('.$id_pez.',5)," >> protected/data/tabla_pez_tipo_capturas.sql';
		system($cad);
	}
	echo "<br>****************** SE LLENA TABLA: PEZ_ESTADO_CONSERVACION ******************<br>";
//									SE LLENA TABLA: PEZ_ESTADO_CONSERVACION
//----------------------------------------------------------------------------------------------------------//
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$22"" }\' protected/data/'.$database;
	
	echo "La cad es: ".system($cad);
	echo "La cad UTF8 es: ".utf8_decode(system($cad));
	
	
	if(utf8_decode(system($cad))!=""){
		echo "<br>Nombre Lista Roja: ".system($cad)."<br>";
		$id_edo = $db->get_id('estado_conservacion', 'id','nombre="'.utf8_decode(system($cad)).'" AND Nivel1=1');
		$id_edo = strip_tags($id_edo);
		$cad = 'echo "('.$id_pez.','.$id_edo.')," >> protected/data/tabla_pez_estado_conservacion.sql';
		system($cad); 
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$23"" }\' protected/data/'.$database;
	
	if(utf8_decode(system($cad))!=""){
		echo "<br>Nombre Cites: ".system($cad)."<br>";
		$id_edo = $db->get_id('estado_conservacion', 'id','nombre="'.utf8_decode(system($cad)).'" AND Nivel1=2');
		$id_edo = strip_tags($id_edo);
		$cad = 'echo "('.$id_pez.','.$id_edo.')," >> protected/data/tabla_pez_estado_conservacion.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$24"" }\' protected/data/'.$database;
	
	if(utf8_decode(system($cad))!=""){
		echo "<br>Nombre NOM: ".system($cad)."<br>";
		$id_edo = $db->get_id('estado_conservacion', 'id','nombre="'.utf8_decode(system($cad)).'" AND Nivel1=3');
		$id_edo = strip_tags($id_edo);
		$cad = 'echo "('.$id_pez.','.$id_edo.')," >> protected/data/tabla_pez_estado_conservacion.sql';
		system($cad);
	}
	/*$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$37"" }\' protected/data/'.$database;
	
	if(system($cad)!=""){
		$id_cn = $db->get_id('carta_nacional', 'id','nombre="'.system($cad).'" AND Nivel1=5'));
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}*/
	echo "<br>************************************************************************<br>";
	echo "<br>****************** SE LLENA TABLA: PEZ_CARTA_NACIONAL ******************<br>";
//									SE LLENA TABLA: PEZ_CARTA_NACIONAL
//----------------------------------------------------------------------------------------------------------//
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$32"" }\' protected/data/'.$database;
	$id_carta=0;	
	if(system($cad)!=""){
			switch (system($cad)) {
			case 'Sin datos.': $id_carta = 2;
				break;
			case 'sin datos.': $id_carta = 2;
				break;	
			case 'Con potencial de desarrollo.': $id_carta = 3;
				break;
			case 'En deterioro.': $id_carta = 4;
				break;
			case 'Máximo aprovechamiento permisible.': $id_carta = 5;
				break;			
			default: $id_carta = 0;
				break;
		}

		echo "El id de la carta_nacional es: ".$id_carta;		
		$cad = 'echo "('.$id_pez.','.$id_carta.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$33"" }\' protected/data/'.$database;
	
	if(strip_tags(system($cad))!=""){
		switch (system($cad)) {
			case 'Sin datos.': $id_carta = 10;
				break;
			case 'sin datos.': $id_carta = 10;
				break;	
			case 'Con potencial de desarrollo.': $id_carta = 7;
				break;
			case 'En deterioro.': $id_carta = 8;
				break;
			case 'Máximo aprovechamiento permisible.': $id_carta = 9;
				break;			
			default: $id_carta = 0;
				break;
		}
		echo "El id de la carta_nacional es: ".$id_carta;		
		$cad = 'echo "('.$id_pez.','.$id_carta.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$34"" }\' protected/data/'.$database;
	
	if(strip_tags(system($cad))!=""){
		switch (system($cad)) {
			case 'Sin datos.': $id_carta = 15;
				break;
			case 'sin datos.': $id_carta = 15;
				break;	
			case 'Con potencial de desarrollo.': $id_carta = 12;
				break;
			case 'En deterioro.': $id_carta = 13;
				break;
			case 'Máximo aprovechamiento permisible.': $id_carta = 14;
				break;			
			default: $id_carta = 0;
				break;
		}
		echo "El id de la carta_nacional es: ".$id_carta;		
		$cad = 'echo "('.$id_pez.','.$id_carta.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);

		/*$id_cn = $db->get_id('carta_nacional', 'id','Nombre="'.system($cad).'" AND Nivel1=3');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);*/
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$35"" }\' protected/data/'.$database;
	
	if(strip_tags(system($cad))!=""){
		switch (system($cad)) {
			case 'Sin datos.': $id_carta = 20;
				break;
			case 'sin datos.': $id_carta = 20;
				break;	
			case 'Con potencial de desarrollo.': $id_carta = 17;
				break;
			case 'En deterioro.': $id_carta = 18;
				break;
			case 'Máximo aprovechamiento permisible.': $id_carta = 19;
				break;			
			default: $id_carta = 0;
				break;
		}
		echo "El id de la carta_nacional es: ".$id_carta;		
		$cad = 'echo "('.$id_pez.','.$id_carta.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);
		/*$id_cn = $db->get_id('carta_nacional', 'id','Nombre="'.system($cad).'" AND Nivel1=4');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);*/
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$36"" }\' protected/data/'.$database;
	
	if(strip_tags(system($cad))!=""){
		switch (system($cad)) {
			case 'Sin datos.': $id_carta = 25;
				break;
			case 'sin datos.': $id_carta = 25;
				break;	
			case 'Con potencial de desarrollo.': $id_carta = 22;
				break;
			case 'En deterioro.': $id_carta = 23;
				break;
			case 'Máximo aprovechamiento permisible.': $id_carta = 24;
				break;			
			default: $id_carta = 0;
				break;
		}
		echo "El id de la carta_nacional es: ".$id_carta;		
		$cad = 'echo "('.$id_pez.','.$id_carta.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);

		/*$id_cn = $db->get_id('carta_nacional', 'id','Nombre="'.system($cad).'" AND Nivel1=5');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);*/
	}
	
	$cad = 'awk \'BEGIN { FS = "?"}; NR == '.$i.' {print ""$37"" }\' protected/data/'.$database;

	if(strip_tags(system($cad))!=""){
		switch (system($cad)) {
			case 'Sin datos.': $id_carta = 30;
				break;
			case 'sin datos.': $id_carta = 30;
				break;	
			case 'Con potencial de desarrollo.': $id_carta = 27;
				break;
			case 'En deterioro.': $id_carta = 28;
				break;
			case 'Máximo aprovechamiento permisible.': $id_carta = 29;
				break;			
			default: $id_carta = 0;
				break;
		}
		echo "El id de la carta_nacional es: ".$id_carta;		
		$cad = 'echo "('.$id_pez.','.$id_carta.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);

		/*$id_cn = $db->get_id('carta_nacional', 'id','Nombre="'.system($cad).'" AND Nivel1=6');
		$id_cn = strip_tags($id_cn);
		$cad = 'echo "('.$id_pez.','.$id_cn.')," >> protected/data/tabla_pez_carta_nacional.sql';
		system($cad);*/
	}
	echo "<br>************************************************************************<br>";

}
system("cat protected/data/tabla_pez_carta_nacional.sql | sed '\$s/.\$//' > protected/data/aux_CN.txt");
system("cat protected/data/aux_CN.txt > protected/data/tabla_pez_carta_nacional.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/tabla_pez_carta_nacional.sql");

system("cat protected/data/tabla_pez_distribucion.sql | sed '\$s/.\$//' > protected/data/aux_D.txt");
system("cat protected/data/aux_D.txt > protected/data/tabla_pez_distribucion.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/tabla_pez_distribucion.sql");

system("cat protected/data/tabla_pez_estado_conservacion.sql | sed '\$s/.\$//' > protected/data/aux_EC.txt");
system("cat protected/data/aux_EC.txt > protected/data/tabla_pez_estado_conservacion.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/tabla_pez_estado_conservacion.sql");

system("cat protected/data/tabla_pez_tipo_capturas.sql | sed '\$s/.\$//' > protected/data/aux_TP.txt");
system("cat protected/data/aux_TP.txt > protected/data/tabla_pez_tipo_capturas.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/tabla_pez_tipo_capturas.sql");

system("protected/data/set_recomendacion.sh protected/data/".$database." protected/data/recomendation.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/recomendation.sql");

system("protected/data/asigna_pesos.sh protected/data/".$database." protected/data/setPesos.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/setPesos.sql");
?>