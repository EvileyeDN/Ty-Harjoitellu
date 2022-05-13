<?php     
function connect_me(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rabota";

return new mysqli($servername, $username, $password, $dbname);
}