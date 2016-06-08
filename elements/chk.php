<?php
$try = $_POST['passCode'];
$pass = intval($try);

$actual = file_get_contents("/home/sbadmin/chk.dat");
$chk = intval($actual);

if ($pass == $chk)
{
  echo "ok";
} else
{
  echo "NO";
}

?>
