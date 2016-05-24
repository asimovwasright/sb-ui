<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../graphics/css/elements.css" />
</head>
<body>
<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  shell_exec("/bin/bash -c 'sudo su sbadmin /home/sbadmin/skip.sh > /dev/null 2>&1 &'");
}
?>
<a href="?run=true"><div id="buttonSkip" class="coolButton">Skip Track</div></a>
</body>
</html>

