<?php
        //local database configuration

         $con = mysqli_connect("localhost", "root", "",) or die("unable to connect");
         mysqli_select_db($con, "epicasset");

        // Remote database one
        // $con = mysqli_connect("https://www.db4free.net/phpMyAdmin", "arcasine2007", "#Arcasine2007",) or die("unable to connect");
        // mysqli_select_db($con, "coding2021db");
        // Remote database two
        // $servername = "https://www.db4free.net/phpMyAdmin/index.php?route=/";
        // $database = "coding2021db";
        // $username = "arcasine2007";
        // $password = "#Arcasine2007";
        // // Create connection
        // $conn = mysqli_connect($servername, $username, $password, $database);
        // // Check connection
        // if (!$conn) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }
        // echo "Connected successfully";
        // mysqli_close($conn);

        // new
//                 $servername = "localhost";
//                 $username = "yourusername"; // For MYSQL the predifined username is root
//                 $password = "yourpassword"; // For MYSQL the predifined password is " "(blank)

//                 // Create connection
//                 $conn = new mysqli($servername, $username, $password);
//                 // Check connection

//                 if ($conn->connect_error) {

//                 die("Connection failed: " . $conn->connect_error);
//                 }

//                 echo "Connected successfully";


// ?>