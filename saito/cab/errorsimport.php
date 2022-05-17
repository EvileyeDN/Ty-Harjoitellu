<?php

//upload.php

if(isset($_POST['hidden_field']))
{
if(isset($_POST['importSubmit']))
{
$Type='1';
}
else
{
$Type='2';
}
$error = '';
$total_line = '';
session_start();
if($_FILES['file']['name'] != '')
{
$_SESSION['razdelitel']=$_POST['razdelitel'];
$allowed_extension = array('csv');
$file_array = explode(".", $_FILES["file"]["name"]);
$extension = end($file_array);
if(in_array($extension, $allowed_extension))
{
$new_file_name = rand() . '.' . $extension;
$_SESSION['csv_file_name'] = $new_file_name;
move_uploaded_file($_FILES['file']['tmp_name'], "$new_file_name");
$file_content = file("$new_file_name", FILE_SKIP_EMPTY_LINES);
$uniqe = array_unique($file_content);
$total_line_uniqe = count ($uniqe);
$total_line = count($file_content);

}
else
{
$error = 'Only CSV file format is allowed';
}
}
else
{
$error = 'Please Select File';
}

if($error != '')
{
$output = array(
'error' => $error
);
}
else
{
Global $Type;
if ($Type=='2')
{
$output = array(
'success' => true,
'total_line' => ($total_line_uniqe - 1)

);
}
if ($Type=='1')
{
$output = array(
'success' => true,
'total_line' => ($total_line - 1)

);
}

}

echo json_encode($output);
}

?>
