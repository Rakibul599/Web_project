<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/project_admin.css">
    <link rel="stylesheet" href="./Style/nav_ad.css">
    <title>News update</title>
</head>
<body>
<section>
        <header class="headr">
            <ul>
                <li><a href="../upload_project/project_admin.php">UploadProject</a></li>
                <li><a href="./newsfeed_admin.php">NewsUpdate</a></li>
                <li><a href="../donate/donate_admin.php">DonateList</a></li>
                <li><a href="../Registrationform/Registration_admin/registration_admin.php">Reg_Info</a></li>
            </ul>
        </header>
    </section>
    <div class="container">
    <div class="main">
    <h1>Upload news </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="title">Project Title:</label><br> <br>
        <input class="title" type="text" name="title" id="title" required><br> <br>
        <label for="de">Project Description:</label><br> <br>
        <textarea name="des" id="de" rows="4" cols="50" required></textarea><br> <br>
        <label for="up">Project file upload:</label><br> <br>
        <input type="file" name="fileup" id="up" required><br> <br>
        <input class="bttn" type="submit" name="submit" id="" value="Upload">
        <p class="output" id="out"></p>
    </form>
    </div>
    </div>
</body>
</html>

<?php
include('./db/dbconect.php');

if(isset($_POST["submit"]))
    {
        $target_dir="uploads/";
        $file_name=basename($_FILES['fileup']['name']);
        $target_file=$target_dir.basename($_FILES['fileup']['name']);
        $uploadok=0;
        $imagetype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $ck=getimagesize($_FILES['fileup']['tmp_name']);
        if($ck==true)
        {
            //echo  "File is an image - " . $ck["mime"] . ".";
            $uploadok=1;
        }
        else{
            echo "File is not image";
            $uploadok=0;
        }
         if(file_exists($target_file))
         {
            echo "This file already exist";
            $uploadok=0;
         }
         if($imagetype!="jpg" && $imagetype!="png" && $imagetype!="jpeg")
         {
            echo "Please upload jpg,jpeg and png";
            $uploadok=0;
         }
    
         $sql="insert into newsfeed values(
            '$_POST[title]','$_POST[des]','$file_name'
         )";
         
        if($uploadok==1)
        {
            if(move_uploaded_file($_FILES['fileup']['tmp_name'],$target_file))
            {
                echo "The file ". htmlspecialchars( $file_name). " has been uploaded."."<br>";
                if($con->query($sql))
                {
                    echo "<script>document.getElementById('out').innerHTML=\"Record Added successfully\";</script>";
                   
                    
                }
                else $con->error;
            }
            else
            echo "<script>document.getElementById('out').innerHTML=\"Sorry not upload please try again\";</script>";
        }

    }


?>