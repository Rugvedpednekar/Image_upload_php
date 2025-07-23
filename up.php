<?php
//Database Connection
$servername = "localhost";
$username ="root";
$password="";
$dbname = "job";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn -> connect_error){
    die("Connection Error : ".$conn->connect_error);
}
//After the connection is established

//check if the form was submitted 

if($_SERVER["REQUEST_METHOD"] == "POST"){

}
?>
