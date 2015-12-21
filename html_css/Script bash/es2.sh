#!/bin/bash

echo e- "Ciao amico mio, quale comando vuoi contare?\n";

read com;

history | grep $com | wc -l;


