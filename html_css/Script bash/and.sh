#!/bin/bash

echo -e "ciao quanti file vuoi creare?\n"

read num;

if [ $num -gt 10 ]; then
	echo -e "numero troppo grosso";
	exit;
fi

if [ $num -le 0 ]; then
	echo -e "numero troppo piccolo\n";
	exit;
fi

for i in $( seq 1 $num ); do
	touch "file-$i";
	echo -e "Padrone ho creato file-->$i\n";
done
