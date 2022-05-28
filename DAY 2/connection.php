<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn) {
        echo "<h1> error in connect to database</h1>";
    }
?>