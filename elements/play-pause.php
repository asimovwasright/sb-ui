<?php

/*
  Only function of this is to handle the AJAX call from the play/pause button and execute the relevant
  Bash script. Only one parameter ?ask - 2 possible values: "play" or "pause"
*/

$ask = $_GET['ask'];

if ($ask == "pause")
{
  shell_exec("/bin/bash -c 'sudo su sbadmin /home/sbadmin/play-pause.sh pause > /dev/null 2>&1 &'");
} else
{
  shell_exec("/bin/bash -c 'sudo su sbadmin /home/sbadmin/play-pause.sh play > /dev/null 2>&1 &'");
}


?>
