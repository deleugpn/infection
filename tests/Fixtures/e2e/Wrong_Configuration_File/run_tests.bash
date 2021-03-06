#!/usr/bin/env bash

set -e

run () {
    local INFECTION=${1}
    local PHPARGS=${2}

    if [ "$PHPDBG" = "1" ]
    then
        phpdbg $PHPARGS -qrr $INFECTION
    else
        php $PHPARGS $INFECTION
    fi
}

test -x $(which tput) && tput setaf 2 # green
if run "../../../../bin/infection --configuration=fake-file.json" "" < /dev/null 2>&1 | grep -s 'The file/folder "fake-file.json" does not exist'; then
	exit 0;
fi

test -x $(which tput) && tput setaf 1 # red
echo "Infection did not error when provided with a non-existent configuration file,"

exit 1;
