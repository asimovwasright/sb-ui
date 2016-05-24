<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../graphics/css/elements.css" />

</head>
<body id="scheduleA" >

<!-- 

Needs to be a form that can take:

	Per day - Start Time and End Time
	Ideally can select multiple days per time.

-->
<table>
 <tr>
  <th>Current</th>
  <th>Change?</th>
 </tr>
 <tr>
  <td>
	<?php
	echo file_get_contents( "scheduleMonday.txt" ); 
	echo "<br \/>";
	echo "<br \/>";
	echo file_get_contents( "scheduleTuesday.txt" ); 
	echo "<br \/>";
	echo "<br \/>";
	echo file_get_contents( "scheduleWednesday.txt" ); 
	echo "<br \/>";
	echo "<br \/>";
	echo file_get_contents( "scheduleThursday.txt" ); 
	echo "<br \/>";
	echo "<br \/>";
	echo file_get_contents( "scheduleFriday.txt" ); 
	echo "<br \/>";
	echo "<br \/>";
	echo file_get_contents( "scheduleSaturday.txt" ); 
	echo "<br \/>";
	echo "<br \/>";
	echo file_get_contents( "scheduleSunday.txt" ); 
	echo "<br \/>";
	?>
  </td>
  <td>



<form method="post" action="scheduleA-change.php">
<fieldset id="startTime"><legend>Start Time</legend>
<select  name="startHour" required>
  <option value="08" readonly>HH</option>
  <option value="00">00</option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
  <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>

</select> :
<select name="startMin"required>
  <option value="00" readonly>MM</option>
  <option value="00">00</option>
  <option value="15">15</option>
  <option value="30">30</option>
  <option value="45">45</option>
</select>
</fieldset>

<fieldset id="stopTime"><legend> Stop Time </legend>
<select name="stopHour" required>
  <option value="18" readonly>HH</option>
  <option value="00">00</option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
  <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>

</select> :
<select name="stopMin"required>
  <option value="00" readonly>MM</option>
  <option value="00">00</option>
  <option value="15">15</option>
  <option value="30">30</option>
  <option value="45">45</option>
</select>
</fieldset>

<fieldset><legend>Days</legend>
  <input type="checkbox" name="day[]" value="1"> Mo
  <input type="checkbox" name="day[]" value="2"> Tu
  <input type="checkbox" name="day[]" value="3"> We
  <input type="checkbox" name="day[]" value="4"> Th
  <input type="checkbox" name="day[]" value="5"> Fr<br />
  <input type="checkbox" name="day[]" value="6"> Sa
  <input type="checkbox" name="day[]" value="0"> Su
</fieldset>
<br /><br />
<input type="submit" class="coolButton" value="Adjust Schedule">
</form>





  </td>
 </tr>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/crc32.js"></script>
</body>
</html>
