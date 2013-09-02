<!--  Source Code-->


















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































<html>
<head>
<link rel="stylesheet" type="text/css" href="./Css/style.css">
<script>
function validateform1()
{
        var x=document.forms["fillform"]['maxslot'].value
	if(x=="0")
	{
		alert("Fill maxslot");
		return false;
	}
}
</script>
<body>
<fieldset>
<?php
if($_POST['temp1']==0)
{ 
header( 'Location: index.php' ) ;
} 
else
{

include('analytics.php');
include('intro.php');
?>

<form action="getTimeTable.php"  name="fillform" onsubmit="return validateform1()"  method="POST">
<div>
<h3>#Fill Process-2</h3>
<table align="center">
<tr>
<td>
<b>Maximum Slot </b>
<td>
:
</td>
</td>
<?php
     echo " <td>
<select name='maxslot'>
<option value='0'></option>
<option value='$_POST[mslots]'>$_POST[mslots]</option>
<option value='$_POST[tuslots]'>$_POST[tuslots]</option>
<option value='$_POST[wslots]'>$_POST[wslots]</option>
<option value='$_POST[thslots]'>$_POST[thslots]</option>
<option value='$_POST[frslots]'>$_POST[frslots]</option>
<option value='$_POST[sslots]'>$_POST[sslots]</option>
<option value='$_POST[sunslots]'>$_POST[sunslots]</option>
</select>
</td>";
     echo "<td><input type='hidden' name='temp2'  value='1'></input></td>";
     echo "<td><input type='hidden' name='mslot'  value='$_POST[mslots]'></input></td>";
     echo "<td><input type='hidden' name='tslot'  value='$_POST[tuslots]'></input></td>";
     echo "<td><input type='hidden' name='wslot'  value='$_POST[wslots]'></input></td>";
     echo "<td><input type='hidden' name='thslot'  value='$_POST[thslots]'></input></td>";
     echo "<td><input type='hidden' name='fslot'  value='$_POST[frslots]'></input></td>";
     echo "<td><input type='hidden' name='sslot'  value='$_POST[sslots]'></input></td>";
     echo "<td><input type='hidden' name='suslot'  value='$_POST[sunslots]'></input></td>";
?>
</tr>
<tr>
<td>
</td>
<td>
</td>
<td>
<b>From</b>
</td>
<td>
<b>To</b>
</td>
<td>
<b>Course</b>
</td>
</tr>
<!-- Days beginging -->
<!-- MOnday -->
<tr>
<td>
<b>Monday</b>
</td>
<td>
:
</td>
<?php

for($i=1;$i<=$_POST[mslots];$i++)
{
	if($i==1)
	{
	echo "<td><input name='mf$i' type='textbox' ></input></td> ";
	echo "<td><input name='mt$i' type='textbox' ></input></td> ";
	echo "<td><input name='mc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	}
	else
{
echo "<tr><td></td><td></td>";
	echo "<td><input name='mf$i' type='textbox' ></input></td> ";
	echo "<td><input name='mt$i' type='textbox' ></input></td> ";
	echo "<td><input name='mc$i' type='textbox' ></input></td> ";
echo "<td>-->Slot $i</td>";
echo "</tr>";
}
}
?>

</tr>
<tr></tr>
<!-- Tuesday -->
<tr>
<td>
<b>Tuesday</b>
</td>
<td>
:
</td>
<?php
for($i=1;$i<=$_POST[tuslots];$i++)
{
	if($i==1)
	{
	echo "<td><input name='tf$i' type='textbox' ></input></td> ";
	echo "<td><input name='tt$i' type='textbox' ></input></td> ";
	echo "<td><input name='tc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	}
	else
	{
	echo "<tr><td></td><td></td>";
	echo "<td><input name='tf$i' type='textbox' ></input></td> ";
	echo "<td><input name='tt$i' type='textbox' ></input></td> ";
	echo "<td><input name='tc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	echo "</tr>";
	}
}
?>

</tr>
<tr></tr>
<!-- Wednesday -->
<tr>
<td>
<b>Wednesday</b>
</td>
<td>
:
</td>
<?php
for($i=1;$i<=$_POST[wslots];$i++)
{
	if($i==1)
	{
	echo "<td><input name='wf$i' type='textbox' ></input></td> ";
	echo "<td><input name='wt$i' type='textbox' ></input></td> ";
	echo "<td><input name='wc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	}
	else
	{
	echo "<tr><td></td><td></td>";
	echo "<td><input name='wf$i' type='textbox' ></input></td> ";
	echo "<td><input name='wt$i' type='textbox' ></input></td> ";
	echo "<td><input name='wc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	echo "</tr>";
	}
}
?>

</tr>
<tr></tr>
<!-- Thursday  -->
<tr>
<td>
<b>Thursday</b>
</td>
<td>
:
</td>
<?php
for($i=1;$i<=$_POST[thslots];$i++)
{
	if($i==1)
	{
	echo "<td><input name='thf$i' type='textbox' ></input></td> ";
	echo "<td><input name='tht$i' type='textbox' ></input></td> ";
	echo "<td><input name='thc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	}
	else
	{
	echo "<tr><td></td><td></td>";
	echo "<td><input name='thf$i' type='textbox' ></input></td> ";
	echo "<td><input name='tht$i' type='textbox' ></input></td> ";
	echo "<td><input name='thc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	echo "</tr>";
	}
}
?>

</tr>
<tr></tr>
<!-- Friday -->
<tr>
<td>
<b>Friday</b>
</td>
<td>
:
</td>
<?php
for($i=1;$i<=$_POST[frslots];$i++)
{
	if($i==1)
	{
	echo "<td><input name='ff$i' type='textbox' ></input></td> ";
	echo "<td><input name='ft$i' type='textbox' ></input></td> ";
	echo "<td><input name='fc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	}
	else
	{
	echo "<tr><td></td><td></td>";
	echo "<td><input name='ff$i' type='textbox' ></input></td> ";
	echo "<td><input name='ft$i' type='textbox' ></input></td> ";
	echo "<td><input name='fc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	echo "</tr>";
	}
}
?>

</tr>
<tr></tr>
<!-- Saturday -->
<tr>
<td>
<b>Saturday</b>
</td>
<td>
:
</td>
<?php
for($i=1;$i<=$_POST[sslots];$i++)
{
	if($i==1)
	{
	echo "<td><input name='sf$i' type='textbox' ></input></td> ";
	echo "<td><input name='st$i' type='textbox' ></input></td> ";
	echo "<td><input name='sc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	}
	else
	{
	echo "<tr><td></td><td></td>";
	echo "<td><input name='sf$i' type='textbox' ></input></td> ";
	echo "<td><input name='st$i' type='textbox' ></input></td> ";
	echo "<td><input name='sc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	echo "</tr>";
	}
}
?>

</tr>
<!-- Sunday -->
<tr>
<td>
<b>Sunday</b>
</td>
<td>
:
</td>
<?php
for($i=1;$i<=$_POST[sunslots];$i++)
{
	if($i==1)
	{
	echo "<td><input name='suf$i' type='textbox' ></input></td> ";
	echo "<td><input name='sut$i' type='textbox' ></input></td> ";
	echo "<td><input name='suc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	}
	else
	{
	echo "<tr><td></td><td></td>";
	echo "<td><input name='suf$i' type='textbox' ></input></td> ";
	echo "<td><input name='sut$i' type='textbox' ></input></td> ";
	echo "<td><input name='suc$i' type='textbox' ></input></td> ";
	echo "<td>-->Slot $i</td>";
	echo "</tr>";
	}
}
?>

</tr>
<tr>
<td></td>
<td>
<input type="submit" name="submit" value="submit" style="align:center"></input>
</td>
</tr>
</table>
</div>
</form>
<?php
}?>
</fieldset>
</body>
</html>
