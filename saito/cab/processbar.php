<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rabota";
	$conn3 = new mysqli($servername, $username, $password, $dbname);

 $result=$conn3->query("SELECT * FROM work");

echo $result->num_rows;
?>