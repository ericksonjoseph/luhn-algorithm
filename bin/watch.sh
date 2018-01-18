#!/bin/bash

# Just a command to help test this on the command line
fswatch -e ".*.log" -o ./ | xargs -I "-" php index.php 79927398713
