<?php
require 'dbconfig/config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style3.css">
<!-- <script type="text/javascript">

function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById('imglink').files[0]);

        oFReader.onload = function (oFREvent) 
        {
            var img = document.getElementById('uploadPreview');
            img.style.width = '132px';
            document.getElementById('uploadPreview').src = oFREvent.target.result;
        };
    };

</script> -->
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f81a7654704467e89f64ca3/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
<body>
    <form action="register.php" method="post" class="myform" enctype="multipart/form-data">
      <div class="container">
                <img src="images/logo.png" alt="">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <!-- <label for="imglink"><b>Upload Profile Picture</b></label><br>
                <img src="images/avatar.jpg" alt="" class="avatar" id="uploadPreview"><br>
                <input type="file" id="imglink" name="imglink" accept=".jpg, .jpeg, .png" onchange="PreviewImage();"/><br> -->
            <div class="upper">
                <div class="upper_one">
                    <label for="text"><b>Fullname</b></label>
                    <input type="text" placeholder="Enter Full name" name="fullname" required>
                </div>
                <div class="upper_two">
                        <label for="text"><b>Username</b></label>
                        <input type="text" placeholder="Enter name" name="username" required>
                </div>
            </div>
            <div class="lower">
                <div class="lower_one">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="mail" required>
                </div>
                <div class="lower_two">
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                </div>
            </div>
                <label for="cpassword"><b>Confirm Password</b></label>
                <input type="password" placeholder="Repeat Password" name="cpassword" required>
                <hr>
                <p>By creating an account you agree to our <a>Terms & Privacy</a>.</p>

                <button type="submit" class="registerbtn" name="submit_btn">Register</button>

                <div class="container_signin">
                    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                </div>
        </div>
    </form>
    <a href="index.html">
        <button class="home_button">Go Home 🏠</button>
    </a>

        <?php

            if(isset($_POST['submit_btn']))
            {
                // echo '<script type="text/javascript"> alert("Signup button clicked") </script> ';

                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                $mail = $_POST['mail'];

                // $img_name = $_FILES['imglink'] ['name'];
                // $img_size = $_FILES['imglink'] ['size'];
                // $img_tmp = $_FILES['imglink'] ['tmp_name'];

                // $directory = 'uploads/';
                // $target_file = $directory.$img_name;

                if($password==$cpassword)
                {

                    $query = "select * from users WHERE username='$username'";
                    $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        // there is already a user with the same username
                        echo '<script type="text/javascript"> alert("user already exists.. try another username") </script>';
                    }
                    // else if(file_exists($target_file))
                    // {
                    //     echo '<script type="text/javascript"> alert("Image file already exists.. try another image) </script> ';
                    // }
                    // else if($img_size>2097152) 
                    // {   
                    //     echo '<script type="text/javascript"> alert("Image file size is larger than 2MB.. Try another image file") </script> ';
                    // }

                    else
                    {
                        // move_uploaded_file($img_tmp,$target_file);
                        $query = "insert into users values('', '$username', '$password', '$fullname',  '$mail')";
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                            // echo '<script type="text/javascript"> alert("User Registered.. Go to Login page to login") </script> ';
                            header('location:login.php');
                        }
                        else
                        {
                            echo '<script type="text/javascript"> alert("error") </script> ';
                        }
                    }
                    }
                    else{

                        echo '<script type="text/javascript"> alert("Password and confirm password does not match") </script> ';

                    }
                }
        ?>


        <script>
            function myFunction() {
                var x = document.getElementById('myInput2');
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }

            function myFunction2() {
                var x = document.getElementById('myInput3');
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }

        </script>
</body>