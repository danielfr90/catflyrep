<?php
   $con=mysqli_connect("den1.mysql5.gear.host","catflyscore","Bn1F_75w1?tr","catflyscore");
//if (mysqli_connect_errno($con)) {
//      echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

//$sqla="TRUNCATE TABLE globalhighscore";
//$resulta = mysqli_query($con,$sqla);

	

	//$score1 = $_POST["Score1"];
	//$score2 = $_POST["Score2"];
	//$score3 = $_POST["Score3"];
	//$score4 = $_POST["Score4"];
	//$score1 = 11;
	//$score2 = 11;
	//$score3 = 11;
	//$score4 = 11;
   $sqlb="INSERT INTO globalhighscore (Score1, Score2, Score3, Score4) VALUES (1,1,1,1)"; 
//. $score1 . "," . $score2 . "," .$score3 . "," .$score4 . ")";
//$resultb = mysqli_query($con,$sqlb);
//mysqli_close($con);
if ($con->query($sqlb) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>