<?php
  $channel = ($_GET['channel']);
  shell_exec("/bin/bash -c 'sudo su sbadmin /home/sbadmin/channelBox.sh $channel > /dev/null 2>&1 &'");
?>
