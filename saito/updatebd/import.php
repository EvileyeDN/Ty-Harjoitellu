<?php
header('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");

set_time_limit(1000);

ob_implicit_flush(1);
session_start();
//1 import button
if(isset($_SESSION['csv_file_name'])){
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rabota";
	$conn4 = new mysqli($servername, $username, $password, $dbname);
    $razdelitel=$_SESSION['razdelitel'];
	$file = $_SESSION['csv_file_name'];
            $csvFile = fopen("../cab/$file", "r");
			// skip 1 line
			fgetcsv($csvFile);
            // parsing data from a file
            while($line = fgetcsv($csvFile, 0, $razdelitel)){
				// screening of received data
				$data = array(
                ':tunnus' =>$line[0],
                ':company' => $line[1],
                ':kayntiosoite' => $line[2],
                ':osoite' => $line[3],
				':postitoimipaikka' => $line[4],
				':puhelin' => $line[5],
				':postiosoite' => $line[6],
				':kotisivu' => $line[7],
				':yhteyshenkilö' => $line[8],
				':yhteyshenkilöpuhelin' => $line[9],
				':yhteyshenkilönsähköpostiosoite' =>$line[10],
				':yhteyshenkilönasema' => $line[11],
				':toimiala' => $line[12],
				':kurssi1' => $line[13],
				':kurssi2' => $line[14],
				':kurssi3' => $line[15],
				':kurssi4' => $line[16],
				':kurssi5' => $line[17],
				);
				foreach($data as &$str){
					$str = mysqli_real_escape_string($conn4, $str);
				}
				// import
                    $query = "INSERT INTO work (tunnus, company, Kayntiosoite, Osoite, Postitoimipaikka, Puhelin, postiosoite, kotisivu, Yhteyshenkilö, YhteyshenkilöPuhelin, Yhteyshenkilönsähköpostiosoite, Yhteyshenkilönasema, Toimiala, Kurssi1, Kurssi2, Kurssi3, Kurssi4, Kurssi5) VALUES ('".$data[':tunnus']."', '".$data[':company']."', '".$data[':kayntiosoite']."', '".$data[':osoite']."', '".$data[':postitoimipaikka']."','".$data[':puhelin']."' ,'".$data[':postiosoite']."', '".$data[':kotisivu']."', '".$data[':yhteyshenkilö']."', '".$data[':yhteyshenkilöpuhelin']."', '".$data[':yhteyshenkilönsähköpostiosoite']."','".$data[':yhteyshenkilönasema']."' ,'".$data[':toimiala']."' ,'".$data[':kurssi1']."' ,'".$data[':kurssi2']."' ,'".$data[':kurssi3']."' ,'".$data[':kurssi4']."' ,'".$data[':kurssi5']."' )";
					$statement = $conn4->prepare($query);

					$statement->execute();
				sleep(1);

  if(ob_get_level() > 0)
  {
   ob_end_flush();
  }	
  unlink("../cab/$file"); 
}
}
?>