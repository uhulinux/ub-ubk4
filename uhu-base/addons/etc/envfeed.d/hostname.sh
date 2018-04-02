_HOSTNAME="$(hostname)"
if [[ -n "$_HOSTNAME" ]]; then
	ENVFEED_HOSTNAME="$_HOSTNAME"
fi
