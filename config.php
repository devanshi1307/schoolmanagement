<?php
$host='localhost';
$user='root';
$pass='';
$dbname="schoolmanagement";


$conn=mysqli_connect($host,$user,$pass,$dbname);
session_start();

if( !$conn ){
    echo('could not connect'. mysqli_connect_error() );
}

?>