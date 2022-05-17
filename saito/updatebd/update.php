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
			$prevQuery2="TRUNCATE TABLE work";
$prevResult2 = $conn4->query($prevQuery2);

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
				$prevQuery = "SELECT id FROM work WHERE tunnus = '".$data[':tunnus']."' AND company = '".$data[':company']."' AND Toimiala = '".$data[':toimiala']."' AND Kayntiosoite = '".$data[':kayntiosoite']."' AND Osoite = '".$data[':osoite']."' AND Postitoimipaikka = '".$data[':postitoimipaikka']."' AND Puhelin = '".$data[':puhelin']."' AND postiosoite = '".$data[':postiosoite']."' AND kotisivu = '".$data[':kotisivu']."' AND Yhteyshenkilö = '".$data[':yhteyshenkilö']."' AND YhteyshenkilöPuhelin = '".$data[':yhteyshenkilöpuhelin']."' AND Yhteyshenkilönsähköpostiosoite = '".$data[':yhteyshenkilönsähköpostiosoite']."' AND Yhteyshenkilönasema = '".$data[':yhteyshenkilönasema']."' AND Kurssi1 = '".$data[':kurssi1']."' AND Kurssi2 = '".$data[':kurssi2']."' AND Kurssi3 = '".$data[':kurssi3']."' AND Kurssi4 = '".$data[':kurssi4']."' AND Kurssi5 = '".$data[':kurssi5']."'";
                $prevResult = $conn4->query($prevQuery);
                
				if($prevResult->num_rows > 0){
					// update
                    $query = "UPDATE work SET  Toimiala = '".$data[':toimiala']."', tunnus = '".$data[':tunnus']."', company = '".$data[':company']."', Kayntiosoite = '".$data[':kayntiosoite']."', Osoite = '".$data[':osoite']."', Postitoimipaikka = '".$data[':postitoimipaikka']."', Puhelin = '".$data[':puhelin']."', postiosoite = '".$data[':postiosoite']."', kotisivu = '".$data[':kotisivu']."', Yhteyshenkilö = '".$data[':yhteyshenkilö']."', YhteyshenkilöPuhelin = '".$data[':yhteyshenkilöpuhelin']."', Yhteyshenkilönsähköpostiosoite = '".$data[':yhteyshenkilönsähköpostiosoite']."', Yhteyshenkilönasema = '".$data[':yhteyshenkilönasema']."', Kurssi1 = '".$data[':kurssi1']."', Kurssi2 = '".$data[':kurssi2']."', Kurssi3 = '".$data[':kurssi3']."', Kurssi4 = '".$data[':kurssi4']."', Kurssi5 = '".$data[':kurssi5']."' WHERE tunnus = '".$data[':tunnus']."' AND company = '".$data[':company']."' AND Toimiala = '".$data[':toimiala']."' AND Kayntiosoite = '".$data[':kayntiosoite']."' AND Osoite = '".$data[':osoite']."' AND Postitoimipaikka = '".$data[':postitoimipaikka']."' AND Puhelin = '".$data[':puhelin']."' AND postiosoite = '".$data[':postiosoite']."' AND kotisivu = '".$data[':kotisivu']."' AND Yhteyshenkilö = '".$data[':yhteyshenkilö']."' AND YhteyshenkilöPuhelin = '".$data[':yhteyshenkilöpuhelin']."' AND Yhteyshenkilönsähköpostiosoite = '".$data[':yhteyshenkilönsähköpostiosoite']."' AND Yhteyshenkilönasema = '".$data[':yhteyshenkilönasema']."' AND Kurssi1 = '".$data[':kurssi1']."' AND Kurssi2 = '".$data[':kurssi2']."' AND Kurssi3 = '".$data[':kurssi3']."' AND Kurssi4 = '".$data[':kurssi4']."' AND Kurssi5 = '".$data[':kurssi5']."'";
					$statement = $conn4->prepare($query);

					$statement->execute();		
                }
				else{
					$query = "INSERT INTO work (tunnus, company, Kayntiosoite, Osoite, Postitoimipaikka, Puhelin, postiosoite, kotisivu, Yhteyshenkilö, YhteyshenkilöPuhelin, Yhteyshenkilönsähköpostiosoite, Yhteyshenkilönasema, Toimiala, Kurssi1, Kurssi2, Kurssi3, Kurssi4, Kurssi5) VALUES ('".$data[':tunnus']."', '".$data[':company']."', '".$data[':kayntiosoite']."', '".$data[':osoite']."', '".$data[':postitoimipaikka']."','".$data[':puhelin']."' ,'".$data[':postiosoite']."', '".$data[':kotisivu']."', '".$data[':yhteyshenkilö']."', '".$data[':yhteyshenkilöpuhelin']."', '".$data[':yhteyshenkilönsähköpostiosoite']."','".$data[':yhteyshenkilönasema']."' ,'".$data[':toimiala']."' ,'".$data[':kurssi1']."' ,'".$data[':kurssi2']."' ,'".$data[':kurssi3']."' ,'".$data[':kurssi4']."' ,'".$data[':kurssi5']."' )";
					$statement = $conn4->prepare($query);

					$statement->execute();
				}
				
				if(ob_get_level() > 0)
  {
   ob_end_flush();
  }	
  unlink("../cab/$file"); 
}
}
?>
