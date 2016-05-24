<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../graphics/css/elements.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body id="schedule" >  

<!-- 

Needs to be a form that can take:

	Per day - Start Time and End Time
	Ideally can select multiple days per time.

-->

<div id="currentSchedule">

<table>
 <tr>
  <th>Monday</th>
  <th>Tuesday</th>
  <th>Wednesday</th>
  <th>Thursday</th>
  <th>Friday</th>
  <th>Saturday</th>
  <th>Sunday</th>
 </tr>
 <tr>
  <td colspan="7"><hr></hr></td>
 </tr>
 <tr>
  <td>
	<?php
	  $dir = '/var/www/html/elements/';
	  foreach(glob($dir."scheduleMonday*") as $file) {
	    echo file_get_contents($file);
	  }
	?>
  </td>
  <td>
	<?php
	  $dir = '/var/www/html/elements/';
	  foreach(glob($dir."scheduleTuesday*") as $file) {
	    echo file_get_contents($file);
	  }
	?>
  </td>
  <td>
	<?php
	  $dir = '/var/www/html/elements/';
	  foreach(glob($dir."scheduleWednesday*") as $file) {
	    echo file_get_contents($file);
	  }
	?>
  </td>
  <td>
	<?php
	  $dir = '/var/www/html/elements/';
	  foreach(glob($dir."scheduleThursday*") as $file) {
	    echo file_get_contents($file);
	  }
	?>
  </td>
  <td>
	<?php
	  $dir = '/var/www/html/elements/';
	  foreach(glob($dir."scheduleFriday*") as $file) {
	    echo file_get_contents($file);
	  }
	?>
  </td>
  <td>
	<?php
	  $dir = '/var/www/html/elements/';
	  foreach(glob($dir."scheduleSaturday*") as $file) {
	    echo file_get_contents($file);
	  }
	?>
  </td>
  <td>
	<?php
	  $dir = '/var/www/html/elements/';
	  foreach(glob($dir."scheduleSunday*") as $file) {
	    echo file_get_contents($file);
	  }
	?>
  </td>
 </tr>
 <tr>
  <td colspan="7"><hr></hr></td>
 </tr>
</table>

<div id="openScheduleAdd" onclick="popupSchedule('up')">+</div>


</div>

<drag id="popupSchedule">
<div id="closeScheduleAdd" onclick="popupSchedule('down')">&#215;</div>
<form method="post" action="scheduleChange.php">
<br /><br />
<fieldset style="display: none"><legend>Days</legend>
  <input type="checkbox" name="day[]" value="1" id="scheduleCheckBoxMO">
  <input type="checkbox" name="day[]" value="2" id="scheduleCheckBoxTU">
  <input type="checkbox" name="day[]" value="3" id="scheduleCheckBoxWE">
  <input type="checkbox" name="day[]" value="4" id="scheduleCheckBoxTH">
  <input type="checkbox" name="day[]" value="5" id="scheduleCheckBoxFR">
  <input type="checkbox" name="day[]" value="6" id="scheduleCheckBoxSA">
  <input type="checkbox" name="day[]" value="0" id="scheduleCheckBoxSU">
</fieldset>

<div class="scheduleDays"> 
  <div onclick="scheduleDaySelect('MO')" class="scheduleDay" id="scheduleMO"><span class="scheduleTick" id="scheduleTickMO">&#9989;</span>MO</div>
  <div onclick="scheduleDaySelect('TU')" class="scheduleDay" id="scheduleTU"><span class="scheduleTick" id="scheduleTickTU">&#9989;</span>TU</div>
  <div onclick="scheduleDaySelect('WE')" class="scheduleDay" id="scheduleWE"><span class="scheduleTick" id="scheduleTickWE">&#9989;</span>WE</div>
  <div onclick="scheduleDaySelect('TH')" class="scheduleDay" id="scheduleTH"><span class="scheduleTick" id="scheduleTickTH">&#9989;</span>TH</div>
  <div onclick="scheduleDaySelect('FR')" class="scheduleDay" id="scheduleFR"><span class="scheduleTick" id="scheduleTickFR">&#9989;</span>FR</div>
  <div onclick="scheduleDaySelect('SA')" class="scheduleDay" id="scheduleSA"><span class="scheduleTick" id="scheduleTickSA">&#9989;</span>SA</div> 
  <div onclick="scheduleDaySelect('SU')" class="scheduleDay" id="scheduleSU"><span class="scheduleTick" id="scheduleTickSU">&#9989;</span>SU</div>
</div>

<div id="scheduleChannel">
 <div id="channelSelectDrop">
  <select name="channel" required>
      <option value="" readonly disabled selected>Channel ?</option>
 	<?php
	echo file_get_contents( "channelSelect.txt" ); 
	?> 
  </select>
 </div>
</div>
<div>
<fieldset id="startTime"><legend>From</legend>
<select name="startHour" required>
  <option value="08" readonly>08</option>
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

</select> <sup style="font-size: 15px"><strong>:</strong></sup>
<select name="startMin"required>
  <option value="00" readonly>00</option>
  <option value="00">00</option>
  <option value="15">15</option>
  <option value="30">30</option>
  <option value="45">45</option>
</select>
</fieldset>
</div>






<br /><br />
<input type="submit" class="scheduleButton" value="Add To Schedule">
</form>

</drag><!-- End of popschedule -->


<script>

function scheduleDaySelect(day) 
{
  var box = document.getElementById('schedule'+day);
  var tick = document.getElementById('scheduleTick'+day);
  // Is this selecting or deselecting?
  if (tick.style.opacity > '0') 
  {
    // Already selected, needs to deselect
    box.style.color = "#821025";
    box.style.borderColor = "#821025";
    tick.style.opacity = "0";
    document.getElementById("scheduleCheckBox"+day).checked = false;
  } else 
  {
    // Not yet selected  
    // First change the color to green.
    box.style.color = "green";
    box.style.borderColor = "green";
    tick.style.opacity = ".3";
    document.getElementById("scheduleCheckBox"+day).checked = true;
  }

}
//-->

function popupSchedule(direction)
{
  var popbox = document.getElementById('popupSchedule');
  if ( direction == "up" )
  {
    popbox.style.display = 'block';
  } else
  {
    popbox.style.display = 'none';
  }
}

</script>

<script>

(function($) {
    $.fn.drags = function(opt) {

        opt = $.extend({handle:"",cursor:"move"}, opt);

        if(opt.handle === "") {
            var $el = this;
        } else {
            var $el = this.find(opt.handle);
        }

        return $el.css('cursor', opt.cursor).on("mousedown", function(e) {
            if(opt.handle === "") {
                var $drag = $(this).addClass('draggable');
            } else {
                var $drag = $(this).addClass('active-handle').parent().addClass('draggable');
            }
            var z_idx = $drag.css('z-index'),
                drg_h = $drag.outerHeight(),
                drg_w = $drag.outerWidth(),
                pos_y = $drag.offset().top + drg_h - e.pageY,
                pos_x = $drag.offset().left + drg_w - e.pageX;
            $drag.css('z-index', 1000).parents().on("mousemove", function(e) {
                $('.draggable').offset({
                    top:e.pageY + pos_y - drg_h,
                    left:e.pageX + pos_x - drg_w
                }).on("mouseup", function() {
                    $(this).removeClass('draggable').css('z-index', z_idx);
                });
            });
            //e.preventDefault(); // disable selection
        }).on("mouseup", function() {
            if(opt.handle === "") {
                $(this).removeClass('draggable');
            } else {
                $(this).removeClass('active-handle').parent().removeClass('draggable');
            }
        });

    }
})(jQuery);

$('drag').drags();

</script>


<script src="../js/crc32.js"></script>
</body>
</html>
