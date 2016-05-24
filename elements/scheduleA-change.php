
<?php


$startMin = $_POST['startMin'];
$startHour = $_POST['startHour'];
$stopMin = $_POST['stopMin'];
$stopHour = $_POST['stopHour'];

$completeTime = $startMin." ".$startHour. " ".$stopMin." ".$stopHour;

$days = $_POST['day'];

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
      $arg .= "'".$days[$i]." ".$completeTime."' ";
    }
  }

// Execute the schedular and return.
  shell_exec("sudo /home/sbadmin/schedular.sh $arg");
  header('Location: ' . $_SERVER['HTTP_REFERER']);
//echo "Full Arg: ".$arg;

?>
