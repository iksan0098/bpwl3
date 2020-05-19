<?php 

$databaseHost = 'localhost';
$databaseName = 'pmb';
$databaseUsername = 'root';
$databasePassword = '' ;

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($conn -> connect_errno){
echo die("Gagal Menghubungkan ke Databasees ".$conn->connect_error);
}

?>