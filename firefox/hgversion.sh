#!/bin/bash

UB_VERSION=$(<version)

if [ ! -f SOURCE ]; then
wget http://ftp.mozilla.org/pub/firefox/releases/${UB_VERSION/~/}/SOURCE
fi

tarbz=$(grep "tar.bz2:" SOURCE | sed -e "s,tar.bz2: https://hg.mozilla.org/releases/mozilla-release/archive/,," | sed -e "s/[[:space:]]//g")
hgversion=${tarbz:0:12}

echo $hgversion

rm -f SOURCE
