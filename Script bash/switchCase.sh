#!/bin/bash

read -p "Dammi una lettera Padrone [a/b/c]" lett;

case "$lett" in
[Aa]) 
  echo -e "Hai inserito una A-->$lett\n"
  ;;
[Bb]) 
  echo -e "Hai inserito una B-->$lett\n"
  ;;
[Cc]) 
  echo -e "Hai inserito una C-->$lett\n"
  ;;
esac;

