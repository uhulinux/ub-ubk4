#!/bin/bash

if [ ! -d ~/.smokinguns ];then
mkdir -p ~/.smokinguns/smokinguns
cp /usr/share/games/smokinguns/q3config.cfg ~/.smokinguns/smokinguns/
fi
smokinguns
