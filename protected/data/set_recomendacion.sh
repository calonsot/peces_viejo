#!/bin/bash
awk 'BEGIN { FS = "?" } ; { print "UPDATE peces SET recomendacion=1 where 1="$44" AND nombre_cientifico=\""$3"\";" }' $1 > $2
sed -i '1d' $2
