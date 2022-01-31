#!/bin/bash

sys::valid(){
    if type -a echo>/dev/null 2>&1; then
         return 0
      else
          return 1
    fi
 }

Keyboard::Exit(){
	local status=$?
	
echo "
[**] Error
         <Keyboard stoped>
         <Keyboard Signal Sigint>
         <Keyboadd INT>
         
[Keyboard Exit]
"
exit 1
}

sys::print(){
sys="printf"
echo
}

shopt -s expand_aliases

alias Tulis.strN='echo -e'
alias Tulis.str='printf'

#trap "Keyboard::Exit" INT SIGINT
