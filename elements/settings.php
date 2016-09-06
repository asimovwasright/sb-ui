<?php

/*
This script will only be called by AJAX call from dashboard, update the user's info based on params.
*/

$newName = $_GET['name'];
$newVenue = $_GET['venue'];
$newPhone = $_GET['phone'];
$passNew = $_GET['passNew'];
$passOld = $_GET['passOld'];

//echo "$newName<br />$newVenue<br />$newPhone<br />$passNew<br />$passOld<br /><br />";

// First handle PIN changes.

sleep(1);

if(!empty($passNew))
{
  // User has given a new PIN code.
  // Check is the old pin given is correct.
  $CHK = intval(file_get_contents("/home/sbadmin/chk.dat"));
  if (!empty($passOld))
  {
    if ($CHK == $passOld)
    {
      if (file_put_contents('/home/sbadmin/chk.dat', $passNew))
      {
        echo "Your PIN code has been changed!<br />";
      }
    }
    else
    {
      echo "PIN <strong style='color:red;'>NOT</strong> changed. The old PIN you entered was incorrect.<br />";
    }
  }
  else
  {
    echo "You need to enter your old PIN before saving a new one...<br />";
  }
}


?>
