<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "iot1";

$konek = mysqli_connect( $server, $username, $password, $database);

if($konek == TRUE){
        echo " terhubung";
}else{
        echo " tidak terhubung";
}
?>