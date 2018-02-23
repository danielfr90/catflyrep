<?php
   $con=mysqli_connect("den1.mysql5.gear.host","catflyscore","Bn1F_75w1?tr","catflyscore");
   $result = mysqli_query($con,"SELECT * FROM globalhighscore");
   $row = mysqli_fetch_array($result);
   $data = $row[0] . "," . $row[1] . "," .$row[2] . "," . $row[3];

   if($data){
      echo $data;
   }
   mysqli_close($con);
?>