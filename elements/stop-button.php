<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../graphics/css/elements.css" />
<style type="text/css">

  div.stop-start {
    display: inline-block;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    line-height: 148px;
    margin: 25px;
    -webkit-transition: all .4s;
    transition: all .4s;
    cursor: pointer !important;
  }

  div.pause {
    color: white;
    border: 2px solid #F77795;
    background-color: #AD072E;
    box-shadow: 10px 15px 55px #F77795 inset;
  }

    div.pause:hover {
      box-shadow: 10px 15px 25px #F77795 inset;
    }

  div.play {
    color: white;
    border: 2px solid #FFDAB5;
    background-color: #E67505;
    box-shadow: 10px 15px 55px #FFDAB5 inset;
  }

    div.play:hover {
      box-shadow: 10px 15px 25px #FFDAB5 inset;
    }

</style>
</head>
<body>

<div onclick="changeNow()" id="button" class="stop-start pause">MUTE</div>
<!-- href="?pause=test" -->

<?php
$stateCHK = file_get_contents("/home/sbadmin/PLAYSTATE");
echo '
<script>

  window.onload = (function()
  {
    var button = document.getElementById("button");
    var pos = "'.$stateCHK.'";
    if (pos == "PAUSED")
    {
      button.className="stop-start play";
      button.innerHTML = "UN-MUTE";
      //ajax("pause");
    }
  })();
</script>';
?>
<script>
  function changeNow()
  {
    var button = document.getElementById('button');
    var pos = button.className;
    if (pos == "stop-start pause")
    {
      button.className="stop-start play";
      button.innerHTML = "UN-MUTE";
      ajax('pause');
    } else
    {
      button.className="stop-start pause";
      button.innerHTML = "MUTE";
      ajax('play')
    }
  }
</script>
<script>
function ajax(STATE){
	var ajaxRequest;
	var ajax_request="play-pause.php?ask=" + STATE;

	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function()
  {
		if(ajaxRequest.readyState == 4)
    {
			//$(\'#yelp_load\').html(ajaxRequest.responseText);

		}

	}
	ajaxRequest.open("GET", ajax_request, true);
	ajaxRequest.send(null);
}
</script>

</body>
</html>
