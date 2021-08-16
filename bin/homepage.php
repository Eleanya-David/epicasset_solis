<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style2.css">
</head>
<body style="background-color:#bdc3c7">

    <div id="main-wrapper">
            <center>
                <h2>Home Page</h2>
                <h3>Welcome 
                    <?php echo $_SESSION['username'] ?>
                </h3>
                <img src="img/owner.jpg" alt="" class="avatar">
            </center>
    

        <form action="homepage.php" method="post" class="myform">

            <input name="logout" type="submit" id="logout_btn" value="Log Out"><br>        
        
        </form>

        <?php
        if(isset($_POST['logout']))
        {
            session_destroy();
            header('location:login.php');
        }    
        ?>
    </div>

</body>
</html>