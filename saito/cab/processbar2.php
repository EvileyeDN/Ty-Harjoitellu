<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rabota";
	$conn5 = new mysqli($servername, $username, $password, $dbname);

 $result2=$conn5->query("SELECT * FROM work2");

echo $result2->num_rows;
?>