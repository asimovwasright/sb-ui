<?php

/*
This script will only be called by AJAX call from dashboard, and will need to execute its bash couterpart, wait for return
and then give appropriate feeback via AJAX result.
*/

exec("/bin/bash -c 'sudo su sbadmin /home/sbadmin/sos.sh  > /dev/null 2>&1'", $output, $return_var);
if ($return_var == '0')
{
  echo '<h2>Sent!</h2><span>You should be contacted ASAP.</span>';
}
elseif ($return_var == '2')
{
  echo '<h2>Sent!</h2><span>If you are not contacted shortly, please feel free to call us directly: <br /><br />084-236-7161</span>';
}
else
{
  echo '<h2>Oops...</h2><span>Sorry, the SOS signal could not be sent, there may be no internet? <br />Could you contact us directly:<br /><br />084-236-7161</span>';
}


 ?>
