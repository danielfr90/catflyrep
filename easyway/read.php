<?php
   $con=mysqli_connect("den1.mysql5.gear.host","catflyscore","Bn1F_75w1?tr","catflyscore");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $result = mysqli_query($con,"SELECT * FROM globalhighscore");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){
      echo $data;
   }
   mysqli_close($con);
?>