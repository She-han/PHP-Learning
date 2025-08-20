<?php

  $marks = array(array("Dulani",35,67,60),array("Nimal",45,78,80),array("Kamal",55,88,90));

 // echo $marks[0][0] . ":" . $marks[0][1] . "," . $marks[0][2] . "," . $marks[0][3];


  for($i=0;$i<count($marks);$i++){

    $total[$i] = 0;

    for($j=0;$j<count($marks[$i]);$j++){
      echo $marks[$i][$j] . " ";
      if($j>0){
        $total[$i] += $marks[$i][$j]; // Calculate total marks for each student
      }
    }
    echo "\n";
  }

  for($i=0;$i<count($total);$i++){
    echo "Total marks of ". $marks[$i][0] . " is " . $total[$i] . "\n";
  }

?>