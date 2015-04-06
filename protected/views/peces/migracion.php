<?php
header('Content-Type: text/html; charset=ISO-8859-1');

$csv = "peces.csv";
$separador = "|";

$database = "usos";
$host = "localhost";
$usuario = "calonso";
$password = "30113";

//Columna de grupo: 11
system("protected/data/migracion/extrae_grupo.sh protected/data/migracion/".$csv." \\".$separador." 11 protected/data/migracion/extrae_grupo.sql");

//Columnas de ditribuciones: 7,8,9,10
system("protected/data/migracion/extrae_distribucion.sh protected/data/".$csv." \\".$separador." protected/data/migracion/extrae_distribucion.sql");

//Columnas de tipo de capturas: 13,14,15,16,17
system("protected/data/migracion/extrae_capturas.sh protected/data/".$csv." \\".$separador." protected/data/migracion/extrae_capturas.sql");

//Columna de tipo_veda: 25
system("protected/data/migracion/extrae_veda.sh protected/data/".$csv." \\".$separador." 25 protected/data/migracion/extrae_veda.sql");

system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/migracion/extrae_grupo.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/migracion/tabla_carta_nacional.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/migracion/extrae_distribucion.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/migracion/tabla_estado_conservacion.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/migracion/extrae_capturas.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < protected/data/migracion/extrae_veda.sql");

//Para llenar la tabla de peces
system("echo \"INSERT INTO peces(especie_id,nombre_comun,nombre_ingles,nombre_cientifico,clase,orden,familia,grupo_id,nacional_Importado,tipo_imagen,imagen,talla_captura,selectiva_noselectiva,arte_pesca,tipo_veda_id,veda,generalidades,descripcion_distribucion,cultivado_capturado,comercio,pais_importacion,recomendacion) VALUES \" > protected/data/migracion/tabla_peces.sql");
system("chmod 777 protected/data/migracion/tabla_peces.sql");

$linea = 1;
$handle = fopen("protected/data/migracion/peces.csv", "r");
if ($handle) 
{
	while (($line = fgets($handle)) !== false && $linea != 1) 
	{
		echo "Abriendo el archvo ".$csv;
		$datos = explode("|", $line);
		
		$especie_id = $linea-1;
		$grupo = $datos[10];
		$tipo_veda = $datos[24];
		
		if ($grupo != "")
			$grupo_id = $db->get_id('grupo', 'id',"nombre='$grupo'");
		else
			$grupo_id = 'NULL';
		
		if ($tipo_veda != "")
			$tipo_veda_id = $db->get_id('tipo_veda', 'id',"Nombre='$tipo_veda'");
		else
			$grupo_id = NULL;
		
		system("echo \"($especie_id,'$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]',$grupo_id,$datos[11],$datos[17],'$datos[42]','$datos[18]','$datos[19]','$datos[20]',$tipo_veda_id,'$datos[25]','$datos[26]','$datos[27]','$datos[28]','$datos[29]','$datos[30]',$datos[43]),\" >> protected/data/migracion/tabla_peces.sql");
		$linea++;
	}

	fclose($handle);
} else
	echo "Error al abrir el archivo";