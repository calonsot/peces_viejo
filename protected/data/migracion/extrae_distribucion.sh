#!/bin/bash

#1. EL PRIMER ARGUMENTO ES EL CSV
#2. EL SEGUNDO ARGUMENTO ES EL SEPARADOR
#3. EL TERCER ARGUMENTO ES LA SALIDA SQL

echo "INSERT INTO distribucion(nombre) VALUES " > $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $7'})"\")," >> $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $8'})"\")," >> $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $9'})"\")," >> $3
echo "(\""$(head -n1 $1 | awk -F $2 {'print $10'})"\")" >> $3
