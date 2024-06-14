<?php
include('./db/dbconect.php');
$sql = "select * from projectlist";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porjects</title>

    <!-- <link rel="stylesheet" href="./Style/project.css"> -->

    <link rel="stylesheet" href="./Style/project.css">
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
                                    <li><a href="./project.php">New</a></li>
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
                        <input type="text" name="" id="searchInput" placeholder="Search" onkeyup="searchCards()">
                    </div>
                    <div class="search-icon">
                        <!-- <input type="text" name="" id="">  -->
                        <i onclick="search()" class="fa-solid fa-magnifying-glass fa-xl"></i>
                    </div>
                    <div class="donate-button">
                        <button><a href="../donate/donate.php">Sponsor A People</a></button>
                    </div>
                    <div>
                        <li class="var-text"> <select id="dropdown" onchange="window.location.href=this.value" name="profession">
                                <option value="Signin">Sign In</option>
                                <option value="../Registrationform/serveyform.html">Sign Up</a></option>
                            </select></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <div class="main">

            <div class="card">
                <div class="imge"><img src="./uploads/OIP.jpeg" alt=""></div>
                <div class="title_r">ZAKAT FOR MUSLIMS</div>
                <div class="des">Just imagine the smiles on the faces of the little kids. Some of them were abused at home and so were placed in homes with other children. And as for the adults who are financially underprivileged, giving them a gift would show that they haven't been forgotten! Whether you're 3, 7, 16, 25, 40, or 60 years old, we all need some love!</div>
            </div>
            <div class="card">
                <div class="imge"><img src="./uploads/OI.jpeg" alt=""></div>
                <div class="title_r">ZAKAT FOR MUSLIMS</div>
                <div class="des">Just imagine the smiles on the faces of the little kids. Some of them were abused at home and so were placed in homes with other children. And as for the adults who are financially underprivileged, giving them a gift would show that they haven't been forgotten! Whether you're 3, 7, 16, 25, 40, or 60 years old, we all need some love!</div>
            </div>
            <div class="card">
                <div class="imge"><img src="./uploads/OI.jpeg" alt=""></div>
                <div class="title_r">ZAKAT FOR MUSLIMS</div>
                <div class="des">Just imagine the smiles on the faces of the little kids. Some of them were abused at home and so were placed in homes with other children. And as for the adults who are financially underprivileged, giving them a gift would show that they haven't been forgotten! Whether you're 3, 7, 16, 25, 40, or 60 years old, we all need some love!</div>
            </div>
            <div class="card">
                <div class="imge"><img src="./uploads/OI.jpeg" alt=""></div>
                <div class="title_r">ZAKAT FOR MUSLIMS</div>
                <div class="des">Just imagine the smiles on the faces of the little kids. Some of them were abused at home and so were placed in homes with other children. And as for the adults who are financially underprivileged, giving them a gift would show that they haven't been forgotten! Whether you're 3, 7, 16, 25, 40, or 60 years old, we all need some love!</div>
            </div>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="card">
                    <div class="imge"><img src="./uploads/<?php echo $row["Imagename"]; ?>" alt=""></div>
                    <div class="title_r"><?php echo $row["Title"]; ?></div>
                    <div class="des"><?php echo $row["Description"]; ?></div>
                </div>

            <?php
            }
            ?>

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