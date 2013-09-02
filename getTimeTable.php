<?php
?>
<html>
<head>
<title>
TimeTable --> Manikanta !
</title>
<style>
#column_width
{
	height:55px;
	 width:150px;
	text-align:center;
}
</style>
</head>
<body>
<fieldset>
<?php
if($_POST['temp2']==0)
{
header( 'Location: index.php' ) ;
}
else
{
include('analytics.php');
?>
<br>
<br>
<table border="1" align="center">
<tr>
  <th id="column_width">DAY</th>
<?php
for($m=1;$m<=$_POST[maxslot];$m++)
{
?>
  <td id="column_width">Slot-<?php  echo $m;?></td>
<?php
}
?>
</tr>
<!-- Monday -->
<tr>
  <th >Monday</th>
<?php
for($x1=1;$x1<=$_POST[maxslot];$x1++)
{
?>
  <td  id="column_width"><?php echo $_POST['mf'.$x1].'-'.$_POST['mt'.$x1]?><br><br>
  <?php echo $_POST['mc'.$x1]?></td>
<?php }
?>
</tr>
<!-- Tuesday -->
<tr>
  <th >Tuesday</th>
<?php
for($x1=1;$x1<=$_POST[maxslot];$x1++)
{
?>
  <td  id="column_width"><?php echo $_POST['tf'.$x1].'-'.$_POST['tt'.$x1]?><br><br>
  <?php echo $_POST['tc'.$x1]?></td>
<?php }
?>
</tr>

<!-- Wednesday -->
<tr>
  <th >Wednesday</th>
<?php
for($x1=1;$x1<=$_POST[maxslot];$x1++)
{
?>
  <td  id="column_width"><?php echo $_POST['wf'.$x1].'-'.$_POST['wt'.$x1]?><br><br>
  <?php echo $_POST['wc'.$x1]?></td>
<?php }
?>
</tr>

<!-- Thursday -->
<tr>
  <th>Thursday</th>
<?php
for($x1=1;$x1<=$_POST[maxslot];$x1++)
{
?>
  <td  id="column_width"><?php echo $_POST['thf'.$x1].'-'.$_POST['tht'.$x1]?><br><br>
  <?php echo $_POST['thc'.$x1]?></td>
<?php }
?>
</tr>

<!-- Friday -->
<tr>
  <th >Friday</th>
<?php
for($x1=1;$x1<=$_POST[maxslot];$x1++)
{
?>
  <td  id="column_width"><?php echo $_POST['ff'.$x1].'-'.$_POST['ft'.$x1]?><br><br>
  <?php echo $_POST['fc'.$x1]?></td>
<?php }
?>
</tr>

<!-- Saturday -->
<tr>
  <th >Saturday</th>
<?php
for($x1=1;$x1<=$_POST[maxslot];$x1++)
{
?>
  <td  id="column_width"><?php echo $_POST['sf'.$x1].'-'.$_POST['st'.$x1]?><br><br>
  <?php echo $_POST['sc'.$x1]?></td>
<?php }
?>
</tr>
<!-- Sunday -->
<tr>

  <th >Sunday</th>
<?php
for($x1=1;$x1<=$_POST[maxslot];$x1++)
{
?>
  <td  id="column_width"><?php echo $_POST['suf'.$x1].'-'.$_POST['sut'.$x1]?><br><br>
  <?php echo $_POST['suc'.$x1]?></td>
<?php }
?>
</tr>

</table>
<h4 style="text-align:center"> Make it Full screen , Take a Screenshot !</h4>
<?php
include('footer.php');
}
?>
</fieldset>
</body>
</html>
