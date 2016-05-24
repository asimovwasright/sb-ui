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
  <td style="background-color:#16c6c2" id="active">
    All-Music
  </td>
 </tr>
</table>
<table>
 <tr>
  <td id="Christmas-Special" style="background-color:#368726" onclick="changeChannel('Christmas-Special');">
    Christmas-Special
  </td>
 </tr>
</table>
<table>
 <tr>
  <td id="Closing-Time" style="background-color:#36c6f7" onclick="changeChannel('Closing-Time');">
    Closing-Time
  </td>
 </tr>
</table>
<table>
 <tr>
  <td id="Custom" style="background-color:#375737" onclick="changeChannel('Custom');">
    Custom
  </td>
 </tr>
</table>
<table>
 <tr>
  <td id="Easy-Going" style="background-color:#561737" onclick="changeChannel('Easy-Going');">
    Easy-Going
  </td>
 </tr>
</table>
<table>
 <tr>
  <td id="Energetic" style="background-color:#56e657" onclick="changeChannel('Energetic');">
    Energetic
  </td>
 </tr>
</table>
<table>
 <tr>
  <td id="St-Paddys-Day" style="background-color:#3742d5" onclick="changeChannel('St-Paddys-Day');">
    St-Paddys-Day
  </td>
 </tr>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/crc32.js"></script>
</body>
</html>
