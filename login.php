<?php
    session_start();
    require 'dbconfig/config.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style4.css" type="text/css">
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

       <div class="container">
             <form action="login.php" method="post" class="myform">
                 <img src="images/logo.png" alt="">
                <h2>LOGIN TO ACCOUNT</h2>
                <div class="inputs">
                    <div class="input_one">
                        <label for="username"><b>Username</b></label>
                        <input type="text" name="username" placeholder="Please Enter Your Username" required>
                    </div>
                    <div class="input_two">
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" placeholder="Please Enter Your Password" required>
                    </div>
                </div>
                <button type="submit" class="registerbtn" name="login">Login</button>

                <div class="container_signin">
                    <p>Don't have an account? <a href="register.php">Register Here</a>.</p>
                </div>
            </form>
            <a href="index.html">
                <button class="home_button">Go Home 🏠</button>
            </a>
       </div> 

        <?php
            if(isset($_POST['login']))
            {
                $username=$_POST['username'];
                $password=$_POST['password'];

                $query="select * from users WHERE username='$username' AND password='$password'";
 
                $query_run = mysqli_query($con,$query);
                if(mysqli_num_rows($query_run)>0)
                {
                    $row = mysqli_fetch_assoc($query_run);
                    // valid
                    $_SESSION['fullname']= $row['fullname'];
                    // $_SESSION['imglink']= $row['imglink'];
                    header('location:account.php');
                }
                else
                {
                    // invalid
                    echo '<script type="text/javascript"> alert("Invalid credentials") </script> ';
                }

            }

        ?>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>