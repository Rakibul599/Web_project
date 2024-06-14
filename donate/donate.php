<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate List</title>

    <!-- <link rel="stylesheet" href="./Style/project.css"> -->

    <link rel="stylesheet" href="./Style/donate.css">
    <link rel="stylesheet" href="./Style/nav.css">
    <link rel="stylesheet" href="./Style/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
</head>

<body>
    <div class="container_main">
        <header class="header-section">
            <div class="container">
                <div class="surjo-logo">
                    <a href="Home.html"><img width="80px" height="80px" src="./img/logo.png" alt=""></a>
                </div>
                <div class="nav-class">
                    <nav class="nav-bar">
                    <ul>
                            <li class="var-text"><a href="../Home/Home.html">Home</a></li>
                            <li class="var-text" onmouseover="show('project')" onmouseout="hide('project')">
                                Projects <img src="./img/sort-down-solid.svg" alt="">
                                <ul class="cld" id="project">
                                    <li><a href="../upload_project/project.php">New</a></li>
                                    <li>Upcoming</li>
                                    <li>Old</li>
                                </ul>
                            </li>
                            <li class="var-text" onmouseover="show('update')" onmouseout="hide('update')">
                                Updates <img src="./img/sort-down-solid.svg" alt="">
                                <ul class="cld" id="update">
                                    <li><a href="../newsfeed/newsfeed.php">News</a></li>
                                    <li>Blog</li>

                                </ul>
                            </li>
                            <li class="var-text" onmouseover="show('about')" onmouseout="hide('about')">
                                About Us<img src="./img/sort-down-solid.svg" alt="">
                                <ul class="cld" id="about">
                                    <li><a href="../Home/Member.html">Member</a></li>
                                    <li><a href="../photo_gallery/photo_gallery.php">Gallery</a></li>
                                </ul>

                            </li>
                        </ul>
                    </nav>
                    <div id="show" class="inp">
                        <input type="text" name="" id="" placeholder="Search">
                    </div>
                    <div class="search-icon">
                        <!-- <input type="text" name="" id="">  -->
                        <i onclick="search()" class="fa-solid fa-magnifying-glass fa-xl"></i>
                    </div>
                    <div class="donate-button">
                        <button>Sponsor A People</button>
                    </div>
                </div>
            </div>
        </header>


        <div class="main">
            <div class="card">
                <h1>Personal Information</h1>
                <form class="fr" action="" method="post">
                    <label for="">Name :</label>
                    <input type="text" name="name" id="" required>
                    <label for="">Email :</label>
                    <input type="email" name="email" id="" required>
                    <label for="">Phone :</label>
                    <input type="number" name="phone" id="" required>
                    <label for="">Amount :</label>
                    <input type="number" name="amount" id="" required>
                    
                    <input class="btn" type="submit" name="" id="" value="Donate Now">
                    <p id="out"></p>
                </form>
            </div>

        </div>

        <!-- Footer -->
        <section>
            <div class="footer1">
                <div class="outer">
                    <div class="container">
                        <div class="headtitle">
                            <div class="title ">
                                <h1>Build a Community </h1>
                            </div>
                            <div class="senonddiv">
                                <div class="button1 but"><button>Donate</button></div>
                                <div class="style">
                                    <hr id="hr1">
                                    <img src="sunpic.png" alt>
                                    <hr>
                                </div>
                                <div class="button2 but"><button>Sponsor
                                        People</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="firstfot">
                    <div class="fourthtext">
                        <h3>OUR AIM</h3>
                        <p>Mauris Mattis Auctor Tellus Imperdiet Eu Ut Imperdiet
                            Tellus, Imperdiet Ut Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum rerum culpa excepturi
                            voluptatum corporis adipisci atque consequatur, temporibus maiores autem necessitatibus nam id eveniet
                            quia! Et odio laborum reprehenderit quibusdam.</p>
                        <button>READ MORE>></button>
                    </div>
                </div>
                <div class="secondfot">
                    <div class="fourthtext">
                        <div>
                            <h3>PAGES</h3>
                        </div>
                        <div class="pageslink">
                            <div class="uslink"><a href="#">>> About us</a></div>
                            <div class="uslink"><a href="#">>> Contact us</a></div>
                            <div class="uslink"><a href="#">>> Sign Up</a></div>
                            <div class="uslink"><a href="#">>> Update News</a></div>
                        </div>
                    </div>
                </div>
                <div class="thirdfot">
                    <div class="fourthtext">

                        <div>
                            <h3>USEFUL LINKS</h3>
                        </div>
                        <div class="usfullink">
                            <div class="uslink"><a href="#">>> Sponsor People</a></div>
                            <div class="uslink"><a href="#">>> Donate</a></div>
                            <div class="uslink"><a href="#">>> Gallary</a></div>
                            <div class="uslink"><a href="#">>> Video</a></div>
                        </div>
                    </div>
                </div>
                <div class="fourfot">
                    <div class="fourthtext">
                        <div>
                            <h3>SOCIAL MEDIA</h3>
                        </div>
                        <div class="socaldiv">
                            <div class="social soione"><a href="#"><i class="fa-brands fa-facebook fa-2xl"></i></i></a></div>
                            <div class="social soitwo"><a href="#"><i class="fa-brands fa-twitter fa-2xl"></i></div>
                            <div class="social soithree"><a href="#"><i class="fa-brands fa-linkedin fa-2xl"></i></div>
                            <div class="social soifour"><a href="#"><i class="fa-brands fa-youtube fa-2xl"></i></a></div>
                            <div class="social soifive"><a href="#"><i class="fa-brands fa-instagram fa-2xl"></i></a></div>
                            <div class="social soisix"><a href="#"><i class="fa-brands fa-instagram fa-2xl"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <hr>
        <section class="last">
            <div class="copy">
                <h1>Copyright&copy;by SS Softwere</h1>
            </div>
        </section>
    </div>
    <script src="./js/project.js"></script>
</body>

</html>
<?php
include('./db/dbconect.php');
$sql = "INSERT INTO `donate`(`Name`, `Email`, `Phone`, `Amount`) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[amount]')";
if($con->query($sql))
{
    echo "<script>document.getElementById('out').innerHTML='Donate successfull';</script>";
    echo "<script>alert('Donate successfull');</script>";
}
else echo "<script>document.getElementById('out').innerHTML='Donate Failed';</script>";

?>

