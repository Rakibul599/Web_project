<?php
include('./db/dbconect.php');
$sql = "select * from donate";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./Style/project_admin.css"> -->
    <link rel="stylesheet" href="./Style/nav_ad.css">
    <title>Donate List</title>
</head>

<body>
    <section>
        <header class="headr">
            <ul>
                <li><a href="../upload_project/project_admin.php">UploadProject</a></li>
                <li><a href="../newsfeed/newsfeed_admin.php">NewsUpdate</a></li>
                <li><a href="./donate_admin.php">DonateList</a></li>
                <li><a href="../Registrationform/Registration_admin/registration_admin.php">Reg_Info</a></li>
            </ul>
        </header>
    </section>
    <div class="container">
        <div class="main">
            <h1>Donate Information </h1>
            <table class="donate_info">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Amount</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <tr>
                        <td><?php echo $row["Name"] ?></td>
                        <td><?php echo $row["Email"] ?></td>
                        <td><?php echo $row["Phone"] ?></td>
                        <td><?php echo $row["Amount"] ?></td>
                    </tr>

                <?php
                }
                ?>

            </table>

        </div>
    </div>
</body>

</html>