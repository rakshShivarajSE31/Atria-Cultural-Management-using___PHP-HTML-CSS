<html>
<head>
<style>
table,td,th 
{
background-color:yellow;
width:50%
border: 1px solid black;
text-align:center;
}
table{margin:auto;}
input,p{text-align:right;}
</style>
</head>
<body>
<form method="post">
<table>
<caption><h2>CAL</h2></caption>
<tr><td>FIRST NUMBER</td><td><input type="text" name="num1"/><td rowspan="2"><input type="submit" name="submit" value="caluculate"/></td></tr>
<tr><td>SECOND NUMBER</td><td><input type="text" name="num2"/><td></tr>
</form>
<?php
if(isset($_POST['submit']))
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if(is_numeric($num1) and is_numeric($num2))
{
echo "<tr><td>Addidtion</td><td><p>".($num1+$num2)."</p></td>";
echo "<tr><td>subtraction</td><td><p>".($num1-$num2)."</p></td>";
echo "<tr><td>multipliactaion</td><td><p>".($num1*$num2)."</p></td>";
echo "<tr><td>division</td><td><p>".($num1/$num2)."</p></td>";
echo "</table>";
}
else
{
echo"<script type='text/javascript' > alert(' ENTER VALID NUMBER');</script>";
}
}
?>
</body></html>

