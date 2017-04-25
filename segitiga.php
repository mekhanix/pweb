<?php
$k = 0;
for($i=1; $i<=5; $i++) {
  
for($j=1;$j<=$i;$j++) {
  if ($k<=16384) {
    echo 2**$k.' '; 
  }
$k++;
}
echo "<br>";
}  
?>