#!/bin/bash
sum() {

	echo -e "Somma $(( $op1+$op2 ))";
}

read -p "Operatore 1: ", op1;
read -p "Operatore 2: ", op2;

sum;

#$ ha uno scope, ovvero cosa riesco a vedere 

