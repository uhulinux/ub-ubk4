#!/bin/bash

sysctl -a -N -r net\.ipv.\.conf\.*.accept_redirects | while read n; do sysctl -q "$n"=0; done
