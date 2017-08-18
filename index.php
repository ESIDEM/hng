<?php
$connect = new mysqli("localhost","root","","hotels");

$sql="SELECT fname,lname FROM users";
$query=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($query)){
	$first_name=$row["fname"];
	$last_name=$row["lname"];
	echo "My Name is ".$first_name." ".$last_name."<br>";
}

?>