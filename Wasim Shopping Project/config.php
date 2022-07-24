<?php 
    $server = "localhost";
    $user =  "root";
    $pass = "";
    $databaseName = "wasim_shopping";

    $con = mysqli_connect($server, $user, $pass, $databaseName);
    
    if(!$con) {
        echo "<span style='color: #fff; background-color: red; text-align: cneter; padding: 20px'>alert('Not Successfully Connected!')</span>";
    }
?>