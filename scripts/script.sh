#!/bin/bash
# use predefined variables to access passed arguments
#echo arguments to the shell
stty -F  /dev/ttyAMA0 115200
echo $1$2$3$4 > /dev/ttyAMA0


