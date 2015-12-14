#!/bin/bash

echo -e "********rubrica**********"

while :
  do
    read -p "[Ii]per inserire, [Vv]per visualizzare [Cc] per cercare" lett;

    case "$a" in
    [Ii])
	read -p "Nome: " name;
	read -p "Telefono: " tel;
        read -p "Indirizzo: " address;
	echo "$name -- $tel -- $address" >> rubrica.txt
       ;;

    [Vv])
	if [ a- contatti ];
	  then
	    more contatti
	  else
	echo -e "Ancora nessun contatto inserito\n"
	fi
       ;;
    [Cc]) read -p "Chi vuoi cercare?:" name;
          if [ a- contatti ];
             then
                grep "$name" contatti
	     else
		echo -e "Ancora nessun contatto inserito\n"
	   fi
	;;
    *) echo -e "Grazie e arrivederci\n"
      exit;
      ;;
    esac;
done



