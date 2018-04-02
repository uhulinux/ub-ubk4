#!/bin/bash

exec 1>>/var/log/postboot_run.log
exec 2>>/var/log/postboot_run.log

tmp="$(mktemp /tmp/${progname}XXXXXX)"

trap _exit EXIT
function _exit () {
	rm -f "$tmp"
}

function download {
	url="$1"
	i=0
	while [[ "$i" < 5 ]]; do
		if curl -fsSL -m 10 "$url" -o "$tmp"; then
			return 0
		fi
		let i++
		sleep "$i"
	done
	return 1
}

echo
date
set -- $(cat /proc/cmdline)
for param in "$@"; do
	if [[ "$param" =~ ^RUN= ]]; then
		url="${param#RUN=}"
		progname="$(basename "$0")"
		if download "$url"; then
			chmod +x "$tmp"
			"$tmp"
		else
			echo "can't download script"
			exit 1
		fi
	fi
done
