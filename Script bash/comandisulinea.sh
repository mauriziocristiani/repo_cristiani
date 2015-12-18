#!/bin/bash

echo -e "Da linea di comando hai inserito $# parametri\n" 

echo -e "Il programma in esecuzione è $0\n" 

echo -e "Il primo parametro inserito è $1\n"

echo -e "$@\n"

#(con la variabile $# conta quanti parametri vengono dati in pasto allo script. Ogni stringa viene contata come un singolo parametro. Con $0 si salva il nome del programma. Con $1 segna qual'è il primo parametro. Con $@ stampa tutti i parametri)
