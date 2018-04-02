#!/bin/sh
# The next line runs wish, while wish thinks the comment continues.\
exec wish $0 $@

# bclock
#
# Copyright 1996, Scott Hess, shess@winternet.com or scott@nic.gac.edu.
# Use as you will, just don't take credit for my work.
#
# This program is a Tk version of a clock program I originally
# wrote for NeXTSTEP, years ago.  The cute part was the use of a
# bezier curve to draw the hands.  To tell time, look at the
# endpoints.  The hour point is closer to the center, the minute
# further out.  You can't tell where the second hand belongs, unless
# you really know your curves, but seconds don't count anyhow.
#
# There's no real user interface.  Hack this file if you want to
# change the defaults.  Clicking Button-1 on the clock face switches
# between clock types, clicking Button-3 modifies the drawing width.

    # The length of hands and tickmarks (from center), and the
    # width.  These sizes will be scaled by scale.  type gives the
    # hand-type, choose from types.
array set hand {
    hour        0.40
    minute      0.75
    second      0.85
    0           0.00
    intick      0.95
    outtick     1.00
    width       0.15
    scale       100

    type        bezier
    types       {normal curve angle bezier}
    normal      {minute 0 0 second 0 0 hour 0 0 minute}
    curve       {minute 0 second 0 hour 0 minute}
    bezier      {minute second 0 hour}
    angle       {minute second second hour}
    
    tick        {intick outtick}
}

    # Calculate the set of points for the current hand type and
    # the angles in the passed array.
proc hands {anglesName} {
    upvar $anglesName aa
    global hand
    set ss $hand(scale)
    set points {}
    foreach desc [set hand($hand(type))] {
        lappend points [expr {sin($aa($desc))*$hand($desc)*$ss+$ss}]
        lappend points [expr {$ss-cos($aa($desc))*$hand($desc)*$ss}]
    }
    return $points
}

    # Calculate the angles for the second, minute, and hour hands,
    # and then update the .clock hands to match.
proc setclock {hour minute second} {
    global hand
    set pi180 [expr {asin(1)/90.0}]
    set angles(0)       0
    set angles(second)  [expr {$second*6*$pi180}]
    set angles(minute)  [expr {$minute*6*$pi180}]
    set angles(hour)    [expr {$hour*30*$pi180+$angles(minute)/12}]
    set sector [expr {round($angles(second))}]
    switch $sector {
	0 {.clock itemconfigure hands -fill AntiqueWhite4}
	1 {.clock itemconfigure hands -fill green}
	2 {.clock itemconfigure hands -fill blue}
	3 {.clock itemconfigure hands -fill purple}
	4 {.clock itemconfigure hands -fill red}
	5 {.clock itemconfigure hands -fill yellow}
	6 {.clock itemconfigure hands -fill bisque}
	default {.clock itemconfigure hands -fill white}
    }
    eval .clock coords hands [hands angles]
}

    # Draw the clock for the current time, and reschedule.  The
    # regsub is to prevent times like "08", which don't work in
    # expr, since leading 0 indicates octal.
proc updateclock {} {
    after cancel updateclock
    set hms [clock format [clock seconds] -format "%I %M %S"]
    regsub -all "(^| )0" $hms "\\1" hms
    eval setclock $hms
    after 1000 updateclock
}

    # Build the clock.  Puts tickmarks every 30 degrees, tagged
    # "ticks", and prefill the "hands" line.
proc buildclock {} {
    global hand
    set pi180 [expr {asin(1)/90.0}]
    
    catch {.clock delete marks}
    set hand(scale) [expr {[winfo width .clock]/2.0}]
    
        # This is a horrid hack.  Use the hands procedure to
        # calculate the tickmark positions by temporarily changing
        # the clock type.
    set type $hand(type)
    set hand(type) tick
    for {set ii 0} {$ii<12} {incr ii} {
        set angles(intick) [expr {$ii*30*$pi180}]
        set angles(outtick) $angles(intick)
        eval .clock create line [hands angles] -tags {{ticks marks}}
    }
    set hand(type) $type
    
    .clock create line 0 0 0 0 -tags {hands marks} -smooth 1
    .clock itemconfigure marks -capstyle round \
	-width [expr {$hand(width)*$hand(scale)}]
    
    updateclock
}

    # Increment the clock type.
proc incrtype {} {
    global hand
    set ii [lsearch $hand(types) $hand(type)]
    incr ii
    if {$ii==[llength $hand(types)]} {
        set ii 0
    }
    set hand(type) [lindex $hand(types) $ii]
}

    # Increment the width of the hands.
proc incrwidth {} {
    global hand
    set ii [expr {int($hand(width)*100.0)}]
    incr ii 5
    if {$ii>25} {
        set ii 0
    }
    set hand(width) [expr {$ii/100.0}]
    .clock itemconfigure marks -width [expr {$hand(width)*$hand(scale)}]
}

    # Destroy an existing clock (useful when I was sourcing into
    # wish).
catch {destroy .clock}

    # Create an elastic canvas to hold the clock, in a window that
    # stays square.
canvas .clock -width 200 -height 200
pack .clock -expand 1 -fill both

    # Catch resize (Configure) to let us rescale the clock face.
    # Button-1 increments through the clock types, Button-3 increments
    # through the clock widths.
bind . <Configure> "buildclock"
bind . <Button-1> "incrtype"
bind . <Button-3> "incrwidth"

buildclock

