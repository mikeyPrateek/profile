<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
    //echo"connection Ok";
}
else{
    echo"bhai frr error"; //.mysqli_connect_error();  this line help me to get error from which line
}

?>