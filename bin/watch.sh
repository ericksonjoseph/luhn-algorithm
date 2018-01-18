#!/bin/bash

set -u

# Just a command to help test this on the command line
fswatch -e ".*.log" -o ./ | xargs -n1 php index.php $1
