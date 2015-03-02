#!/bin/bash
rm -f $2
while read linea
do
	peso=0
	peso2=0
	peso3=0
	peso4=0
	peso5=0
	peso6=0
	nombre_cientifico=$(echo $linea | awk -F'|' {'print $3'})
	recomendacion=$(echo $linea | awk -F'|' {'print $45'})
	if [ "$recomendacion" = "1" ]; then
		nacional_importado=$(echo $linea | awk -F'|' {'print $12'})
		echo "Nacional_Importado: "$nacional_importado
		case "$nacional_importado" in
			"Nacional")   let peso=peso+0
			    ;;
			"Importado")  let peso=peso+8
			    ;;
			"Nacional e importado")  let peso=peso+8
			    ;;
			*) echo "No se reconocio el pez"
			    ;;
		esac

		selectiva=$(echo $linea | awk -F'|' {'print $21'})
		echo "Selectiva: "$selectiva
		case "$selectiva" in
			"Selectiva")  let peso=peso+0
			    ;;
			"No selectiva")  let peso=peso+1
			    ;;
			*) echo "No se reconocio el pez"
			    ;;
		esac

		tipo_veda=$(echo $linea | awk -F'|' {'print $26'})
		echo "Tipo Veda: "$tipo_veda
		case "$tipo_veda" in
			"Ninguno")  let peso=peso+0
			    ;;
			"")  let peso=peso+0
			    ;;
			"Temporal fija")  let peso=peso+1
			    ;;
			"Permanente (solo pesca deportiva)")  let peso=peso+2
			    ;;
			"Permanente")  let peso=peso+3
			    ;;
			*) echo "No se reconocio el pez"
			    ;;
		esac

		edo_cons=$(echo $linea | awk -F'|' {'print $25'})
		echo "Estado de Conservacion: "$edo_cons
		case "$edo_cons" in
			"Amenazada")  let peso=peso+4
			    ;;
			"En peligro crítico")  let peso=peso+4
			    ;;
			"Extinto en vida silvestre")  let peso=peso+4
			    ;;
			"")  let peso=peso+0
			    ;;
			*) echo "No se reconocio el pez"
			    ;;
		esac

		let peso6=peso5=peso4=peso3=peso2=peso

		carta_nacional1=$(echo $linea | awk -F'|' {'print $33'})
		echo "Carta Nacional1: "$carta_nacional1
		case "$carta_nacional1" in
			"Con potencial de desarrollo")
				let peso=peso+0
			    ;;
			"Máximo aprovechamiento permisible")  let peso=peso+2
			    ;;
			"Máximo aprovechamiento sustentable")  let peso=peso+2
			    ;;
			"Deterioro")  let peso=peso+4
			    ;;
			"Máximo aprovechamiento permisible/ Deterioro")  let peso=peso+4
			    ;;
			*) echo "No se reconocio el pez"
			   let peso=-1
			    ;;
		esac

		carta_nacional2=$(echo $linea | awk -F'|' {'print $34'})
		echo "Carta Nacional2: "$carta_nacional2
		case "$carta_nacional2" in
			"Con potencial de desarrollo")
				let peso2=peso2+0
			    ;;
			"Máximo aprovechamiento permisible")  let peso2=peso2+2
			    ;;
			"Máximo aprovechamiento sustentable")  let peso2=peso2+2
			    ;;
			"Deterioro")  let peso2=peso2+4
			    ;;
			"Máximo aprovechamiento permisible/ Deterioro")  let peso2=peso2+4
			    ;;
			*) echo "No se reconocio el pez"
			   let peso2=-1
			    ;;
		esac

		carta_nacional3=$(echo $linea | awk -F'|' {'print $35'})
		echo "Carta Nacional3: "$carta_nacional3
		case "$carta_nacional3" in
			"Con potencial de desarrollo")
				let peso3=peso3+0
			    ;;
			"Máximo aprovechamiento permisible")  let peso3=peso3+2
			    ;;
			"Máximo aprovechamiento sustentable")  let peso3=peso3+2
			    ;;
			"Deterioro")  let peso3=peso3+4
			    ;;
			"Máximo aprovechamiento permisible/ Deterioro")  let peso3=peso3+4
			    ;;
			*) echo "No se reconocio el pez"
			   let peso3=-1
			    ;;
		esac

		carta_nacional4=$(echo $linea | awk -F'|' {'print $36'})
		echo "Carta Nacional4: "$carta_nacional4
		case "$carta_nacional4" in
			"Con potencial de desarrollo")
				let peso4=peso4+0
			    ;;
			"Máximo aprovechamiento permisible")  let peso4=peso4+2
			    ;;
			"Máximo aprovechamiento sustentable")  let peso4=peso4+2
			    ;;
			"Deterioro")  let peso3=peso3+4
			    ;;
			"Máximo aprovechamiento permisible/ Deterioro")  let peso4=peso4+4
			    ;;
			*) echo "No se reconocio el pez"
			   let peso4=-1
			    ;;
		esac

		carta_nacional5=$(echo $linea | awk -F'|' {'print $37'})
		echo "Carta Nacional5: "$carta_nacional5
		case "$carta_nacional5" in
			"Con potencial de desarrollo")
				let peso5=peso5+0
			    ;;
			"Máximo aprovechamiento permisible")  let peso5=peso5+2
			    ;;
			"Máximo aprovechamiento sustentable")  let peso5=peso5+2
			    ;;
			"Deterioro")  let peso5=peso5+4
			    ;;
			"Máximo aprovechamiento permisible/ Deterioro")  let peso5=peso5+4
			    ;;
			*) echo "No se reconocio el pez"
			   let peso5=-1
			    ;;
		esac

		carta_nacional6=$(echo $linea | awk -F'|' {'print $38'})
		echo "Carta Nacional6: "$carta_nacional6
		case "$carta_nacional6" in
			"Con potencial de desarrollo")
				let peso6=peso6+0
			    ;;
			"Máximo aprovechamiento permisible")  let peso6=peso6+2
			    ;;
			"Máximo aprovechamiento sustentable")  let peso6=peso6+2
			    ;;
			"Deterioro")  let peso6=peso6+4
			    ;;
			"Máximo aprovechamiento permisible/ Deterioro")  let peso6=peso6+4
			    ;;
			*) echo "No se reconocio el pez"
			   let peso6=-1
			    ;;
		esac

		echo "UPDATE peces SET peso=\""$peso"/"$peso2"/"$peso3"/"$peso4"/"$peso5"/"$peso6"\" WHERE nombre_cientifico=\"$nombre_cientifico\";" >> $2
		#echo $peso"/"$peso2"/"$peso3"/"$peso4"/"$peso5"/"$peso6
	fi
done < $1
