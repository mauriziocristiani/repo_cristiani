#!/bin/bash

x=1;

while [ $x -le 5 ]
  do
    read -p "Quante ciambelle vuoi? " a;
    echo -e "ne vuoi $a\nItearazione $x\n";
    x=$(( x+1 ));
  done
