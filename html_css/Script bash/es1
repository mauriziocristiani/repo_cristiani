#!/bin/bash

echo -e "Ciao, quanti file vuoi creare(1-10)?\n";

read num;

if [[ $num -gt 10 || $num -le 0]]; then
	echo -e "numero errato";
	exit;
fi

for i in $( seq 1 $num ); do
	touch file-$i;

	echo -e "Vuoi dare i permessi (x) a file-$i? Y/N \n";
	read lettera;

	if [[ $lettera == "Y" || $lettera == "y" ]]; then
		chmod u+x file-$i;
	fi

	echo -e "Padrone ho creato file-$i\n";
done
