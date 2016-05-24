<?php

$block = $_GET['block'];

// Execute the schedular-delete and return.
  shell_exec("sudo /home/sbadmin/jingleDelete.sh $block");
  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
