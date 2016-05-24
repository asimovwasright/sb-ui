
<?php


$startMin = $_POST['startMin'];
$startHour = $_POST['startHour'];
$channel = $_POST['channel'];

$complete = $startMin." ".$startHour. " ".$channel;

$days = $_POST['day'];

// Schedular expects the arg eg: Sunday from 8AM All-Music = '0 00 08 All-Music' one per day.  
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
  shell_exec("sudo /home/sbadmin/schedular.sh $arg");
  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
