





<!-- 

   Dont act smart 





































































































-->




























































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































<html>
<head>
<title>
*TimeTable*
</title>
<link rel="stylesheet" type="text/css" href="./Css/style.css">
<script>

function validateform()
{
	var x=document.forms["slotvalue"]["mslots"].value;
	if(x=="0")
	{
		alert("Check Monday slot !\n");
		return false;
	}
	var x=document.forms["slotvalue"]["tuslots"].value;
	if(x=="0")
	{
		alert("Check Tuesday slot!\n");
		return false;
	}
	var x=document.forms["slotvalue"]["wslots"].value;
	if(x=="0")
	{
		alert("Check Wednesday slot !\n");
		return false;
	}
	var x=document.forms["slotvalue"]["thslots"].value;
	if(x=="0")
	{
		alert("Check Thursday slot !\n");
		return false;
	}
	var x=document.forms["slotvalue"]["frslots"].value;
	if(x=="0")
	{
		alert("Check Friday slot !\n");
		return false;
	}
	var x=document.forms["slotvalue"]["sslots"].value;
	if(x=="0")
	{
		alert("Check Saturday slot !\n");
		return false;
	}
	var x=document.forms["slotvalue"]["sunslots"].value;
	if(x=="0")
	{
		alert("Check Sunday slot!\n");
		return false;
	}
	
}</script>
</head>
<body>

<fieldset>
<?php
include('intro.php');
?>
<form action="fill.php" name="slotvalue" onsubmit="return validateform()" method="POST" >
<div>
<h3>
<?php 
     echo "<input type='hidden' name='temp1'  value='1'></input></td>";
?>
#Fill Section-1(Number of slots)
</h3>
<table align="center">

<!-- Monday -->
<tr>
<td>
Monday 
</td>
<td>
:
</td>
<td>
<select name="mslots">
<option value="0"> </option>
<option value="NIL">Nil</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</td>
</tr>

<!-- Tuesday -->
<tr>
<td>
Tuesday 
</td>
<td>
:
</td>
<td>
<select name="tuslots">
<option value="0"></option>
<option value="NIL">Nil</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</td>
</tr>
<!-- Wednesday -->
<tr>
<td>
Wednesday 
</td>
<td>
:
</td>
<td>
<select name="wslots">
<option value="0"></option>
<option value="NIL">Nil</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</td>
</tr>
<!-- Thursday -->
<tr>
<td>
Thursday
</td>
<td>
:
</td>
<td>
<select name="thslots">
<option value="0"></option>
<option value="NIL">Nil</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</td>
</tr>
<!-- Friday -->
<tr>
<td>
Friday 
</td>
<td>
:
</td>
<td>
<select name="frslots">
<option value="0"></option>
<option value="NIL">Nil</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</td>
</tr>
<!-- Saturday -->
<tr>
<td>
Saturday 
</td>
<td>
:
</td>
<td>
<select name="sslots">
<option value="0"></option>
<option value="NIL">Nil</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</td>
</tr>
<!-- Sunday -->
<tr>
<td>
Sunday
</td>
<td>
:
</td>
<td>
<select name="sunslots">
<option value="0"></option>
<option value="NIL">Nil</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</td>

</tr>
<tr>
<td>
</td>
<td>
<input type="submit" value="Submit" > </input>
</td>
</tr>
<!-- End of Rows -->
</table>

</div>

</form>
<?php 
include('footer.php');
?>
</fieldset>
</body>
</html>
