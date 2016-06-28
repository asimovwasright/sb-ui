<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../graphics/css/elements.css" />

</head>
<body id="play-light">
  <br /><br />
  <?php
    $playstate = file_get_contents("/home/sbadmin/PLAYSTATE");
    if ($playstate == "TRUE")
    {
      $light = "BlueLED.gif";
      $text = "";
    } else if ($playstate == "PAUSED")
    {
      $light = "OrangeLED.gif";
      $text = "MUTED!";
    } else
    {
      $light = "RedLED.gif";
      $text = "No Scheduled Playback";
    }
  echo '
  <img src="../graphics/images/'.$light.'" width="25px" /><br/> <strong><i>'.$text.'</i></strong>
  ';
  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/crc32.js"></script>
</body>
</html>
