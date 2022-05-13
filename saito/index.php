<?php
include "ydin/mysql.php";
include "ydin/assets/php/marker.php";
include "ydin/assets/tags/tags.php";
include "ydin/assets/Functions/Functions.php";
$myClass = new Login();	 
$conn=connect_me();
if(!isset($_GET['act'])){
$_GET['act']='';
}
switch($_GET['act']){
	case 'rega':include "rega/index.php";$title="Регистрация"; break;
	case 'login':include "login/index.php";$title="Логин"; break;
	case 'search':include "search/index.php";$title="Поиск"; break;
	case 'cab':include "cab/index.php";$title="Кабинет"; break;
	case 'psw':include "pswchange/index.php";$title="смена пароля"; break;
    case 'work':include "work/index.php";$title="работа"; break;
	case 'osoite':include "osoite/index.php";$title="osoite"; break;
	case 'updatebd':include "updatebd/index.php";$title="updatebd"; break;
	case 'admin':include "admin/index.php";$title="admin"; break;
	default: include "ydin/index.php";$title="О, ну привет";
}
?>