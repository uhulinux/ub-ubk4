if [[ -f /etc/locale.conf && -r /etc/locale.conf ]]; then
	. <(sed 's/^/ENVFEED_/' /etc/locale.conf)
fi
