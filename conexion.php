<?php
$con = mysqli_connect("localhost", "root", "", "banco");

if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
} 

?>