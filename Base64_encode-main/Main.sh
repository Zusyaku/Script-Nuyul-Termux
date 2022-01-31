#!/bin/bash

. lib/moduler.sh

Bash.import: text_display/IO.ECHO text_display/colorama
Bash.import: util/IO.TYPE util/IO.FUNC util/IO.SYSTEM.var
Bash.import: util/IO.SYSTEM.log

# Introduce me is bayu riski this time I want to show you a tool that works to secure your source code
# You can use for free just by downloading this repository
# how to use it is very easy you just need to put your source name and output the encode result


# how to use it : bash Main.sh or chmod 777 Main.sh; ./Main.sh or make run
@ require

if ! (type -a tput> /dev/null 2>&1); then {
	Tulis.strN "$(mode.bold: merah)x$(mode.bold: putih) are you already running command make install (apakah anda sudah menjalankan perintah make install)$(default.color)"
	exit $?
}
fi

shopt -s checkwinsize # useful to maintain its display from changing while zooming
shopt -s extglob # Ensure advanced pattern matching is available
# [ colors ]
b=$(mode.bold: biru)    cy=$(mode.bold: cyan)
ij=$(mode.bold: hijau)  hi=$(mode.normal: hitam)
me=$(mode.bold: merah)  un=$(mode.bold: ungu)
ku=$(mode.bold: kuning) pu=$(mode.bold: putih)
m=$(mode.bold: pink)    st=$(default.color)

# simple animation
def: stdout.write(){
	[string[1]] named
	run="$2"
	get="$2"
x=0
y=0
	while true ; do
		for ((i = 0; i < ${#get}; i++)); do
			time.sleep: 01
			Tulis.str "\r${named}${run:0:i+1}"
		done
		let x++
		let y++
		if [[ $x -eq 1 ]]; then
			run=$(echo "$run" | sed -e 's/[a-zA-Z]/ /g' | tr "." " ") # useful for creating the effect of removing (berguna untuk menciptakan efek menghapus)
		elif [[ $x -eq 2 ]]; then
			run="$2"
			x=0 # if the value of x is 2 it will reset that value to 0 (jika nilai x adalah 2 maka akan mereset nilai tersebut ke 0)
		fi
		if [[ $y -eq 10 ]]; then
			break
		fi
		done
}

def: run.text(){
	local label="$1"
	local text="${@:2,2}"
	
	for ((count = 0 ; count < ${#text} ; count ++)); do {
		time.sleep: 01
		Tulis.str "\r${label}${text:0:count+1}"
	}; done
};

@ base64 encode definition

def: encode(){
	[string[1]] name
	[string[2]] output

	b64=$(cat $name | base64 | tr -d "\n") @ base64 step 1
	goto_1="set +x;$'\x65\x76\x61\x6c' "'"$('"$'\x62\x61\x73\x65\x36\x34' $'\x2d\x64' <<< ${b64}"')"' @ useful for building an execution pattern
	echo "${goto_1}" > $2
	@ last step
}

color=(${me} ${ij} ${ku} ${b} ${cy} ${un} ${m})

#for random in "${color[@]}"; do
#	get_color=$(echo "$random" | sort -R | head -1)
#	rand_1="${get_color}"
#	rand_2="${get_color}"
#done

@ serves as her color random
@ -i 1-number of list arrays -n 1 
@ -n = head, -n 1 = head 1
@ and the output result will be made as a random array list caller

var::command rand_1 = shuf -i 1-${#color[@]} -n1
var::command rand_2 = shuf -i 2-${#color[@]} -n1

def: banner(){
Tulis.strN "
${hi}▐█▀▀▀▀▀▀▀▀▀█▌${cy} ▄▄▄▄▄${pu} •${hi} Author   : Polygon (Bayu riski)
${hi}▐█ ${color[rand_2]}base64${hi}  █▌${hi} █▄▄▄█${pu} •${hi} username : Bayu12345677
${hi}▐█ ${color[rand_1]}encode${hi}  █▌${hi} █▄▄▄█${pu} •${hi} youtube  : pejuang kentang
${hi}▐█▄▄▄▄▄▄▄▄▄█▌${hi} █████${pu} •${hi} language : bash (bourne again shell)
${hi}   ▄▄███▄▄   ${hi} █████${st}
"
}

trap "tput cnorm; exit $?" INT SIGINT

def: Main.sys(){
	clear
	banner
	Tulis.strN "${ku}▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬${st}"
	Tulis.str "${pu}your files   ${me}:${st} "
	read files
	Tulis.str "${pu}output files ${me}:${st} "
	read out

	if [[ ! -f "$files" ]]; then
		Tulis.strN "${me}x${st} File not found"
		exit 45
	fi
	tput civis
		global: name_encode = ${out:-enc_.sh}
	Tulis.str "\n"
	stdout.write "${ku}Encoding ${me}:${pu} " "...."
	if (encode "$files" "$name_encode"); then @ if the command returns a value that does not constitute the number 0 it will be considered a failure
		run.text "${cy}Result ${me}:${pu} " "done"
		tput cnorm; wait
		echo
		exit $?
	else
		run.text "${cy}Result ${me}:${pu} " "Failed"
		tput cnorm; wait
		echo
		exit $?
	fi
}

begin:
	this=$(IO.func)
	$this.NAME Main.sys

	if [[ "$__FUNCNAME__" == "main" ]]; then
		Main.sys
	fi
__bash__
