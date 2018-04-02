#! /bin/sh
### ====================================================================
### Check all *.hoc files for missing help procedures.
###
### Usage:
###	./find-missing-help.sh [files]
###
### [28-Jan-2002]
### ====================================================================
libdir=`dirname $0`
FILES="$@"
test -z "$FILES" && FILES="*.hoc"
for f in $FILES
do
	echo ==================== $f
	awk -f $libdir/find-missing-help.awk $f
done
