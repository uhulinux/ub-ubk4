### /usr/local/src/hoc/hoc-7.0.2.beta/find-missing-help.awk, Mon Jan 28 05:45:35 2002
### Edit by Nelson H. F. Beebe <beebe@math.utah.edu>
### ======================================================================
### Find hoc functions and procedures for which a corresponding help_xxx()
### function has not been seen, writing a report on stdout.
###
### Hidden names (i.e., those beginning with three underscores) are
### ignored.
###
### Usage:
###	awk -f find-missing-help.awk hoc-file(s)
###
### [28-Jan-2002]
### ======================================================================

$1 == "func"	{ save_name($2); next }

$1 == "proc"	{ save_name($2); next }

END		{ check() }

### ======================================================================

function check( name)
{
	for (name in FP_Names)
	{
		if (name ~ "^___")		# ignore hidden names
			continue
		if (name ~ "^__internal_")	# ignore internal names
			continue
		if (FP_Count[name] > 1)
			report(FP_Names[name] ":" name " used " FP_Count[name] " times")
		if ((substr(name,1,5) != "help_") && !(("help_" name) in FP_Names))
			report(FP_Names[name] ":" name " lacks help procedure")
	}
}

function report(message)
{
	print message
}

function save_name(name)
{
	gsub("[^A-Za-z0-9_]","",name)
	FP_Count[name]++
	FP_Names[name] = FILENAME ":" FNR
}
