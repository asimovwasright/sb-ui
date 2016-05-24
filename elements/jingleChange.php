
<?php


$startMin = $_POST['startMin'];
$startHour = $_POST['startHour'];
$jingle = $_POST['jingle'];

$complete = $startMin." ".$startHour. " ".$jingle;

$days = $_POST['day'];

// Schedular expects the arg eg: Sunday at 8AM jingleNAME = '0 00 08 jingle-1' one per day.
// Start adding the days and times into a variable.

  if(empty($days))
  {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  else
  {
    $N = count($days);
    for($i=0; $i < $N; $i++)
    {
      $arg .= "'".$days[$i]." ".$complete."' ";
    }
  }

// Execute the schedular and return.
  shell_exec("sudo /home/sbadmin/jingles.sh $arg");
  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
