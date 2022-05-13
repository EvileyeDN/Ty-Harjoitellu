<?php
set_time_limit(1000);
global $conn;
//1 import button
if(isset($_POST['importSubmit'])){
    $razdelitel=$_POST['razdelitel'];
	// allowed upload file types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    // checking the type of uploaded file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        // if the file size is greater than 0 then open the file in read-only mode
        if($_FILES['file']['size'] > 0){
            
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
			// skip 1 line
			fgetcsv($csvFile);
            // parsing data from a file
            while(($line = fgetcsv($csvFile, 0, $razdelitel)) !== FALSE){
				// screening of received data
                $tunnus = mysqli_real_escape_string($conn, $line[0]);
                $company = mysqli_real_escape_string($conn, $line[1]);
                $kayntiosoite = mysqli_real_escape_string($conn, $line[2]);
                $osoite = mysqli_real_escape_string($conn, $line[3]);
				$postitoimipaikka = mysqli_real_escape_string($conn, $line[4]);
				$puhelin = mysqli_real_escape_string($conn, $line[5]);
				$postiosoite = mysqli_real_escape_string($conn, $line[6]);
				$kotisivu = mysqli_real_escape_string($conn, $line[7]);
				$yhteyshenkilö = mysqli_real_escape_string($conn, $line[8]);
				$yhteyshenkilöpuhelin = mysqli_real_escape_string($conn, $line[9]);
				$yhteyshenkilönsähköpostiosoite = mysqli_real_escape_string($conn, $line[10]);
				$yhteyshenkilönasema = mysqli_real_escape_string($conn, $line[11]);
				$toimiala = mysqli_real_escape_string($conn, $line[12]);
				$kurssi1 = mysqli_real_escape_string($conn, $line[13]);
				$kurssi2 = mysqli_real_escape_string($conn, $line[14]);
				$kurssi3 = mysqli_real_escape_string($conn, $line[15]);
				$kurssi4 = mysqli_real_escape_string($conn, $line[16]);
				$kurssi5 = mysqli_real_escape_string($conn, $line[17]);
				// import
                    $conn->query("INSERT INTO work (tunnus, company, Kayntiosoite, Osoite, Postitoimipaikka, Puhelin, postiosoite, kotisivu, Yhteyshenkilö, YhteyshenkilöPuhelin, Yhteyshenkilönsähköpostiosoite, Yhteyshenkilönasema, Toimiala, Kurssi1, Kurssi2, Kurssi3, Kurssi4, Kurssi5) VALUES ('".$tunnus."', '".$company."','".$kayntiosoite."', '".$osoite."', '".$postitoimipaikka."', '".$puhelin."', '".$postiosoite."', '".$kotisivu."', '".$yhteyshenkilö."', '".$yhteyshenkilöpuhelin."', '".$yhteyshenkilönsähköpostiosoite."', '".$yhteyshenkilönasema."', '".$toimiala."', '".$kurssi1."', '".$kurssi2."', '".$kurssi3."', '".$kurssi4."', '".$kurssi5."')");
					
            }
            // closing an open file
            fclose($csvFile);
            //assigning value to message after import
            $qstring = '&status=succ';
        }else{
            $qstring = '&status=err';
        }
    }else{
        $qstring = '&status=invalid_file';
    }
}
// 2 update button
if(isset($_POST['importUpdateSubmit'])){
    $razdelitel=$_POST['razdelitel'];
	// allowed upload file types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    // checking the type of uploaded file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        // 	if the file size is greater than 0 then open the file in read-only mode
        if($_FILES['file']['size'] > 0){
            
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
			// skip 1 line
			fgetcsv($csvFile);
             // parsing data from a file
            while(($line = fgetcsv($csvFile, 0, $razdelitel)) !== FALSE){
				// shielding received data
                $tunnus = mysqli_real_escape_string($conn, $line[0]);
                $company = mysqli_real_escape_string($conn, $line[1]);
                $kayntiosoite = mysqli_real_escape_string($conn, $line[2]);
                $osoite = mysqli_real_escape_string($conn, $line[3]);
				$postitoimipaikka = mysqli_real_escape_string($conn, $line[4]);
				$puhelin = mysqli_real_escape_string($conn, $line[5]);
				$postiosoite = mysqli_real_escape_string($conn, $line[6]);
				$kotisivu = mysqli_real_escape_string($conn, $line[7]);
				$yhteyshenkilö = mysqli_real_escape_string($conn, $line[8]);
				$yhteyshenkilöpuhelin = mysqli_real_escape_string($conn, $line[9]);
				$yhteyshenkilönsähköpostiosoite = mysqli_real_escape_string($conn, $line[10]);
				$yhteyshenkilönasema = mysqli_real_escape_string($conn, $line[11]);
				$toimiala = mysqli_real_escape_string($conn, $line[12]);
				$kurssi1 = mysqli_real_escape_string($conn, $line[13]);
				$kurssi2 = mysqli_real_escape_string($conn, $line[14]);
				$kurssi3 = mysqli_real_escape_string($conn, $line[15]);
				$kurssi4 = mysqli_real_escape_string($conn, $line[16]);
				$kurssi5 = mysqli_real_escape_string($conn, $line[17]);
				
				// checking if company and area values already exist with the same value as in the uploaded file
				$prevQuery = "SELECT id FROM work WHERE company = '".$company."' AND Toimiala = '".$toimiala."'";
                $prevResult = $conn->query($prevQuery);
                
				if($prevResult->num_rows > 0){
					// update
                    $conn->query("UPDATE work SET Kayntiosoite = '".$kayntiosoite."', Osoite = '".$osoite."', Postitoimipaikka = '".$postitoimipaikka."', Puhelin = '".$puhelin."', kotisivu = '".$kotisivu."', Yhteyshenkilö = '".$yhteyshenkilö."', YhteyshenkilöPuhelin = '".$yhteyshenkilöpuhelin."', Yhteyshenkilönsähköpostiosoite = '".$yhteyshenkilönsähköpostiosoite."', Yhteyshenkilönasema = '".$yhteyshenkilönasema."', Kurssi1 = '".$kurssi1."', Kurssi2 = '".$kurssi2."', Kurssi3 = '".$kurssi3."', Kurssi4 = '".$kurssi4."', Kurssi5 = '".$kurssi5."' WHERE tunnus = '".$tunnus."' AND  company = '".$company."' AND Toimiala = '".$toimiala."'");
                }else{
					// import
                    $conn->query("INSERT INTO work (tunnus, company, Kayntiosoite, Osoite, Postitoimipaikka, Puhelin, postiosoite, kotisivu, Yhteyshenkilö, YhteyshenkilöPuhelin, Yhteyshenkilönsähköpostiosoite, Yhteyshenkilönasema, Toimiala, Kurssi1, Kurssi2, Kurssi3, Kurssi4, Kurssi5) VALUES ('".$tunnus."', '".$company."','".$kayntiosoite."', '".$osoite."', '".$postitoimipaikka."', '".$puhelin."', '".$postiosoite."', '".$kotisivu."', '".$yhteyshenkilö."', '".$yhteyshenkilöpuhelin."', '".$yhteyshenkilönsähköpostiosoite."', '".$yhteyshenkilönasema."', '".$toimiala."', '".$kurssi1."', '".$kurssi2."', '".$kurssi3."', '".$kurssi4."', '".$kurssi5."')");
					}
            }
            // closing an open file
            fclose($csvFile);
            //assigning value to message after import
            $qstring = '&status=succ';
        }else{
            $qstring = '&status=err';
        }
    }else{
        $qstring = '&status=invalid_file';
    }
}
header("Location: /saito/index.php?act=cab".$qstring);