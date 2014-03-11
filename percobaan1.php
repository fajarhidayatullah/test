<?

echo"hello world";
echo"<br>";

 for ($i=1; $i<=10; $i++) {
	echo"$i"; 
	 
 }

echo "<br>";
 $x=1;
 while ($x<=10){
	echo $x;
	$x++;
}
?>

<table name="tabel1" border="1">
<tr><td>K1B1</td><td colspan=2>K2B1</td></tr>
<tr><td>K1B2</td><td>K2B2</td><td>K3B2</td></tr>
<tr><td>K1B3</td><td>K2B3</td><td>K3B3</td></tr>
</table> 

<?
 $a=1;
 echo "<table border=1 >";
 while ($a<=100){
	 echo "<tr><td>K1B".$a."</td><td>K2B".$a."</td></tr>";
	 $a++;
 }
 echo "</table>";
 ?>
 <?
 $b=1;
 echo "<table border=1 >";
 for ($b=1; $b<=100; $b++) {
	echo "<tr><td>K1B".$b."</td><td>K2B".$b."</td></tr>";
	$b+1;
 }
 echo "</table>";
 ?>
 ?>
