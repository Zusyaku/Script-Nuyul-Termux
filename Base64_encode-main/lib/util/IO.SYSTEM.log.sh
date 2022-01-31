#!/bin/bash

# author : Bayu riski (speedrun)
Bash.import: text_display/IO.ECHO
Bash.import: util/IO.TYPE

declare -Ag __lol__logscopes

IO.LOG.Namescope(){
	local scopeName="$1"
	local __source__="${BASH_SOURCE[0]}"
	__lol__logscopes["$__source__"]="$scopeName"
}

SYSTEM.sleep(){
	local times="${@}"

	while read -t ${times}; do
	   DEBUG "its, work"
	 done
}

IO.AS "IO.LOG.Namescope" to "Namespace.self:"
IO.AS "SYSTEM.sleep" to "time.sleep:"
IO.AS "#" to "@"

Namespace.self: util/IO.SYSTEM.log
