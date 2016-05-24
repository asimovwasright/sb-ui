<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../graphics/css/elements.css" />
<script type="text/JavaScript">
function changeChannel(a)
{
  var url = "./change-channel.php?channel=" + encodeURIComponent(a);
  http = new XMLHttpRequest(); 
  http.open("GET", url, true);
  http.send(null);
}
</script>
</head>
<body id="channel-dial" style="background-color: black;">
	<br /><h1>Channel Box</h1><p><i>Override Buttons<br />Channel schedule will resume at the next scheduled change.</i></p><br />

<table>
 <tr>
  <td id="active">
    playlist1
  </td>
 </tr>
</table>
<table>
 <tr>
  <td onclick="changeChannel('playlist2');">
    playlist2
  </td>
 </tr>
</table>
<table>
 <tr>
  <td onclick="changeChannel('playlist3');">
    playlist3
  </td>
 </tr>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/crc32.js"></script>
</body>
</html>
