<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <div class="formm">
            <div class="log">Admin Login</div>
        <div class="inputt" >
            <form  action="" method="post">
               <label for="rakib"><img height="20px"  src="user-g.svg" alt=""></label>
                <input name="email" id="rakib" class="inp" type="text" placeholder="Username or Email"   required>
                <br> <br>
               <label for="rakibul"><img height="20px" src="padlock-g.svg" alt=""></label>
                <input name="pass" id="rakibul" class="inp" type="password" placeholder="Enter your Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&_=+~-]).{8,16}" required> <br> <br>
                <input name="login" class="login" type="submit" value="Login">
            </form>
            
        </div>
        <p class="ntr">Don't have an account? <a href="./admin_reg.php">Sing up</a></p>
    </div>
   
    </div>
</body>
</html>
<?php
include('./db/dbconect.php');
if(isset($_POST['login']))
{
    $sql="select Email,Passwordd from adminreg where Email='$_POST[email]' and Passwordd='$_POST[pass]'";
    $res=$con->query($sql);
    $result=mysqli_fetch_array($res);
    $row=mysqli_num_rows($res);
    if($row==1)
    {
        header("Location: ../upload_project/project_admin.php");
    }
    else echo "<script>alert('Login Failed Try Again')</script>";

}


?>