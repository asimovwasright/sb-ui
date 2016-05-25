<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../graphics/css/elements.css" />
<script type="text/JavaScript">
function changeChannel(a)
{
  var buttons = document.getElementsByTagName("td");
  for(var i = 0; i < buttons.length; i++){
    buttons[i].className += " noclick";
    buttons[i].onclick = function() {
     return false;
   }
  }
  var pressed = document.getElementById(a);
  pressed.className += " pressed";
  var url = "./change-channel.php?channel=" + encodeURIComponent(a);
  http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send(null);
}
</script>
</head>
<body id="channel-dial" >
	<p><i>Channel schedule will resume at the next scheduled change.</i></p><br />

<table>
 <tr>
  <td id="St-Paddys-Day" style="background-color:#3742d5";">
    No Channels Yet
  </td>
 </tr>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/crc32.js"></script>
</body>
</html>
