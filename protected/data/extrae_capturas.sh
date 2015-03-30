#!/bin/bash

#1. EL PRIMER ARGUMENTO ES EL CSV
#2. EL SEGUNDO ARGUMENTO ES EL SEPARADOR
#3. EL CUARTO ARGUMENTO ES LA SALIDA SQL

echo "INSERT INTO tipo_capturas(nombre) VALUES " > $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $13'})"\")," >> $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $14'})"\")," >> $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $15'})"\")," >> $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $16'})"\")," >> $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $17'})"\")" >> $3
