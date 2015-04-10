<?php
/**
 * Para correr el script es necesario y migrar la base es necesario:
 * 1) Aegurarse que las columnas del nuevo csv correspondan con el orden y numero de las anteriores (campo separador "|")
 * 2) Limpiar la base correindo el MER_peces_comerciales.mwb para generar de nuevo las tablas
 * 3) Correr la pagina: http://localhost/peces/protected/data/migracion/migracion.php
 * 4) Descomentar en el controlador de peces la accion completa_pesos y correr: http://localhost/peces/index.php/peces/completa_pesos
 */
header('Content-Type: text/html; charset=UTF-8');
include 'mysql.php';

$csv = "peces.csv";
$separador = "\|";

$database = "usos";
$host = "localhost";
$usuario = "usuario";
$password = "passwd";

$db = new mysql($database, $host, $usuario, $password);

//Columna de grupo: 11
system("./extrae_grupo.sh $csv $separador 11 extrae_grupo.sql");

//Columnas de ditribuciones: 7,8,9,10
system("./extrae_distribucion.sh $csv $separador extrae_distribucion.sql");

//Columnas de tipo de capturas: 13,14,15,16,17
system("./extrae_capturas.sh $csv $separador extrae_capturas.sql");

//Columna de tipo_veda: 25
system("./extrae_veda.sh $csv $separador 25 extrae_veda.sql");

echo "Corriendo las tablas no dependientes<br>";
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < extrae_grupo.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < tabla_carta_nacional.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < extrae_distribucion.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < tabla_estado_conservacion.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < extrae_capturas.sql");
system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < extrae_veda.sql");


//Para llenar la tabla de peces
system("echo \"INSERT INTO peces(especie_id,nombre_comun,nombre_ingles,nombre_cientifico,clase,orden,familia,grupo_id,nacional_Importado,tipo_imagen,imagen,talla_captura,selectiva_noselectiva,arte_pesca,tipo_veda_id,veda,generalidades,descripcion_distribucion,cultivado_capturado,comercio,pais_importacion,recomendacion) VALUES \" > tabla_peces.sql");
system("echo \"INSERT INTO pez_tipo_capturas(peces_especie_id,tipo_capturas_id) VALUES \" > tabla_pez_tipo_capturas.sql");
system("echo \"INSERT INTO pez_distribucion(peces_especie_id,distribucion_id) VALUES \" > tabla_pez_distribucion.sql");
system("echo \"INSERT INTO pez_carta_nacional(peces_especie_id,carta_nacional_id) VALUES \" > tabla_pez_carta_nacional.sql");
system("echo \"INSERT INTO pez_estado_conservacion(peces_especie_id,estado_conservacion_id) VALUES \" > tabla_pez_estado_conservacion.sql");
system("chmod 777 tabla_peces.sql tabla_pez_tipo_capturas.sql tabla_pez_carta_nacional.sql tabla_pez_distribucion.sql tabla_pez_estado_conservacion.sql");

$linea = 0;
$handle = fopen($csv, "r");
if ($handle) 
{
	echo "Abriendo el archvo $csv<br>";
	while (($line = fgets($handle)) !== false) 
	{
		if ($linea == 0)
			$linea++;
		else {
			$datos = explode("|", $line);
			
			echo "<pre>";
			print_r($datos);
			echo "</pre>";
			
			$especie_id = $linea;
			$grupo = $datos[10];
			$tipo_veda = $datos[24];
			$nombre_ingles = str_replace("'", "\'", $datos[1]);
					
			if ($grupo != "")
				$grupo_id = $db->get_id('grupo', 'id',"nombre='$grupo'");
			else
				$grupo_id = 'NULL';
		
			if ($tipo_veda != "")
				$tipo_veda_id = $db->get_id('tipo_veda', 'id',"Nombre='$tipo_veda'");
			else
				$tipo_veda_id = 'NULL';
		
			//Tipos de capturas
			if ($datos[12] == '1')  //Objetivo
				system("echo \"($especie_id,1),\" >> tabla_pez_tipo_capturas.sql");
			if ($datos[13] == '1')  //Incidental
				system("echo \"($especie_id,2),\" >> tabla_pez_tipo_capturas.sql");
			if ($datos[14] == '1')  //Deportiva
				system("echo \"($especie_id,3),\" >> tabla_pez_tipo_capturas.sql");
			if ($datos[15] == '1')  //Fomento
				system("echo \"($especie_id,4),\" >> tabla_pez_tipo_capturas.sql");
			if ($datos[16] == '1')  //Cultivada
				system("echo \"($especie_id,5),\" >> tabla_pez_tipo_capturas.sql");
			
			//Distribuciones
			if ($datos[6] == '1')  //Golfo de Mexico
				system("echo \"($especie_id,1),\" >> tabla_pez_distribucion.sql");
			if ($datos[7] == '1')  //Mar Caribe
				system("echo \"($especie_id,2),\" >> tabla_pez_distribucion.sql");
			if ($datos[8] == '1')  //Pacifico
				system("echo \"($especie_id,3),\" >> tabla_pez_distribucion.sql");
			if ($datos[9] == '1')  //Fuera del pais
				system("echo \"($especie_id,4),\" >> tabla_pez_distribucion.sql");
			
			//Carta nacional
			if ($datos[31] != '')   //Pacifico zona 1
			{
				$carta_nacional_id = $db->get_id('carta_nacional', 'id',"Nombre='$datos[31]' AND Nivel1=1");
				system("echo \"($especie_id,$carta_nacional_id),\" >> tabla_pez_carta_nacional.sql");
			}
			if ($datos[32] != '')   //Pacifico zona 2
			{
				$carta_nacional_id = $db->get_id('carta_nacional', 'id',"Nombre='$datos[32]' AND Nivel1=2");
				system("echo \"($especie_id,$carta_nacional_id),\" >> tabla_pez_carta_nacional.sql");
			}
			if ($datos[33] != '')   //Pacifico zona 3
			{
				$carta_nacional_id = $db->get_id('carta_nacional', 'id',"Nombre='$datos[33]' AND Nivel1=3");
				system("echo \"($especie_id,$carta_nacional_id),\" >> tabla_pez_carta_nacional.sql");
			}
			if ($datos[34] != '')   //Golfo de Mexico y Mar Caribe zona 1
			{
				$carta_nacional_id = $db->get_id('carta_nacional', 'id',"Nombre='$datos[34]' AND Nivel1=4");
				system("echo \"($especie_id,$carta_nacional_id),\" >> tabla_pez_carta_nacional.sql");
			}
			if ($datos[35] != '')   //Golfo de Mexico y Mar Caribe zona 2
			{
				$carta_nacional_id = $db->get_id('carta_nacional', 'id',"Nombre='$datos[35]' AND Nivel1=5");
				system("echo \"($especie_id,$carta_nacional_id),\" >> tabla_pez_carta_nacional.sql");
			}
			if ($datos[36] != '')   //Golfo de Mexico y Mar Caribe zona 3
			{
				$carta_nacional_id = $db->get_id('carta_nacional', 'id',"Nombre='$datos[36]' AND Nivel1=6");
				system("echo \"($especie_id,$carta_nacional_id),\" >> tabla_pez_carta_nacional.sql");
			}
			
			//Estado de conservacion
			if ($datos[21] != '')   //IUCN
			{
				$estado_conservacion_id = $db->get_id('estado_conservacion', 'id',"nombre='$datos[21]' AND Nivel1=1");
				system("echo \"($especie_id,$estado_conservacion_id),\" >> tabla_pez_estado_conservacion.sql");
			}
			if ($datos[22] != '')   //CITES
			{
				$estado_conservacion_id = $db->get_id('estado_conservacion', 'id',"nombre='$datos[22]' AND Nivel1=2");
				system("echo \"($especie_id,$estado_conservacion_id),\" >> tabla_pez_estado_conservacion.sql");
			}
			if ($datos[23] != '')   //NOM
			{
				$estado_conservacion_id = $db->get_id('estado_conservacion', 'id',"nombre='$datos[23]' AND Nivel1=3");
				system("echo \"($especie_id,$estado_conservacion_id),\" >> tabla_pez_estado_conservacion.sql");
			}
							
			system("echo \"($especie_id,'$datos[0]','$nombre_ingles','$datos[2]','$datos[3]','$datos[4]','$datos[5]',$grupo_id,'$datos[11]',$datos[17],'$datos[42]','$datos[18]','$datos[19]','$datos[20]',$tipo_veda_id,'$datos[25]','$datos[26]','$datos[27]','$datos[28]','$datos[29]','$datos[30]',$datos[43]),\" >> tabla_peces.sql");
			$linea++;
		}
	}
	
	echo "Sustutuyendo el ultimo caracter<br>";
	//Sustituye el ultimo caracter del archivo por ;
	system("sed -i '\$s/,$/;/' tabla_peces.sql");
	system("sed -i '\$s/,$/;/' tabla_pez_tipo_capturas.sql");
	system("sed -i '\$s/,$/;/' tabla_pez_distribucion.sql");
	system("sed -i '\$s/,$/;/' tabla_pez_carta_nacional.sql");
	system("sed -i '\$s/,$/;/' tabla_pez_estado_conservacion.sql");

	echo "Corriendo las tablas mas dependientes<br>";
	//Corre los scripts generados
	system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < tabla_peces.sql");
	system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < tabla_pez_tipo_capturas.sql");
	system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < tabla_pez_distribucion.sql");
	system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < tabla_pez_carta_nacional.sql");
	system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < tabla_pez_estado_conservacion.sql");
	
	echo "Corrigiendo las imagenes que no les pusieron la extension<br>";
	//Pone las imagenes con extension .png
	system("mysql --default-character-set=utf8 -h ".$host." -u ".$usuario." -p".$password." ".$database." < asigna_pesos.sql");
	$db->update('peces', array('imagen'=>"CONCAT(imagen,'.png')"), "imagen NOT LIKE '%.png' AND imagen != ''");
	
	echo "Borrando los archivos generados";
	//Borrando los archivos no necesarios
	system("rm -f extrae_grupo.sql extrae_distribucion.sql extrae_capturas.sql extrae_veda.sql tabla_peces.sql tabla_pez_tipo_capturas.sql tabla_pez_distribucion.sql tabla_pez_carta_nacional.sql tabla_pez_estado_conservacion.sql");
	
	fclose($handle);
} else
	echo "Error al abrir el archivo";
	
