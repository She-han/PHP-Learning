<?php
//array count and sort

  $values = array(5,63,78,90,15,9,58,12,66,44,68,201,66,25,14,8,67);

  $count = 0;
  foreach($values as $value){
    $count++; // Count the total number of values in the array
  }

  echo "Total count of values is $count";

  for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
      if($values[$i]>$values[$j]){
        $tmp = $values[$i];
        $values[$i] = $values[$j];
        $values[$j] = $tmp;
      }
    }
  }

  echo "<br>Sorted values are: ";

  foreach($values as $value){
    echo "$value ";
  }

?>