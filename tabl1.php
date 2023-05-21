<?php 
$firstDayofMonth = date("1-m-y");
$totalDaysInMonth= date("t", strtotime($firstDayofMonth));

$totalEmpl=5;

?>
<table border="1" cellspacing="0">
<?php 
for($i=1; $i<=$totalEmpl; $i++){
if($i==1){
   
  echo "<tr>";
 echo "<td>Id</td>";
 echo "<td>Time</td>";
  for($j=1; $j<=$totalDaysInMonth; $j++){
    echo " <td>$j</td>";
  }

echo "</tr>";

}
}

?>


</table>




