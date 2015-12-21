#!/bin/bash

while :
  do
    read -p "Padrone devo continuare? [Y/N]" a;
    if [[ "$a" == "N" ]];
      then
        break;
    fi
  done

echo -e "Ti ringrazio di aver fermato questo strazio\n";
