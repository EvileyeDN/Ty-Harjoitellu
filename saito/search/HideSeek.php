<?php
include "../ydin/assets/tags/tags.php";
if (!empty($_POST['search'])) {
	//removing spaces
    $search1 = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["search"]))));
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rabota";
	$conn2 = new mysqli($servername, $username, $password, $dbname);
	// delete from search bar Oy
	$search = preg_replace('/\bOy\b/i', '', $search1);
   
    $sql = "SELECT * FROM work WHERE company LIKE '%$search%' LIMIT 5";
    $result = $conn2->query($sql);
    echo mysqli_error($conn2);
	//display live search results
    while ($result1 = $result->fetch_array()) {
        echo "\n<li> <a class='ssilka' href='index.php?act=work&id=".$result1['id']."'>" . $result1["company"] . "</a></li>";
    }
}
?>

