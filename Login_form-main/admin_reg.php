<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="admin_reg.css">
</head>
<body>
    <div class="container">
        
        <div class="formm">
            <div class="log">Admin Sing Up</div>
        <div class="inputt" >
            <form  action="" method="post">
               <label for="rakib"><img height="20px"  src="user-g.svg" alt=""></label>
                <input name="email" id="rakib" class="inp" type="text" placeholder="Enter your Email"  required>
                <br> <br>
               <label for="rakibul"><img height="20px" src="padlock-g.svg" alt=""></label>
                <input name="pass" id="rakibul" class="inp" type="password" placeholder="Enter your Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&_=+~-]).{8,16}" required> <br> <br>
                <input name="signup" class="login" type="submit" value="Sign Up">
            </form>
            
        </div>
        <p class="ntr">Already have an account? <a href="./index.php">Sign in</a></p>
    </div>
   
    </div>
</body>
</html>
<?php
include('./db/dbconect.php');
    if(isset($_POST['signup']))
    {
        $sql="INSERT INTO `adminreg`(`Email`, `Passwordd`) VALUES ('$_POST[email]','$_POST[pass]')";
        if($con->query($sql))
        {
            echo "<script>alert('Sign Up Successfull')</script>";
        }
        else echo "<script>alert('Try Again')</script>";

    }
?>
