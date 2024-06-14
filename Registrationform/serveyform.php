<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Form</title>
  <link rel="stylesheet" href="./servey style.css" />
  <link rel="stylesheet" href="Regi.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
</head>

<body>
  <header class="header-section">
    <div class="containeri">
      <div class="surjo-logo">
        <a href="Home.html"><img width="80px" height="80px" src="logo.png" alt></a>
      </div>
      <div class="navi-class">
        <nav class="navi-bar">
        <ul>
                            <li class="var-text"><a href="../Home/Home.html">Home</a></li>
                            <li class="var-text" onmouseover="show('project')" onmouseout="hide('project')">
                                Projects <img src="sort-down-solid.svg" alt="">
                                <ul class="cld" id="project">
                                    <li><a href="../upload_project/project.php">New</a></li>
                                    <li>Upcoming</li>
                                    <li>Old</li>
                                </ul>
                            </li>
                            <li class="var-text" onmouseover="show('update')" onmouseout="hide('update')">
                                Updates <img src="sort-down-solid.svg" alt="">
                                <ul class="cld" id="update">
                                    <li><a href="../newsfeed/newsfeed.php">News</a></li>
                                    <li>Blog</li>

                                </ul>
                            </li>
                            <li class="var-text" onmouseover="show('about')" onmouseout="hide('about')">
                                About Us<img src="sort-down-solid.svg" alt="">
                                <ul class="cld" id="about">
                                    <li><a href="../Home/Member.html">Member</a></li>
                                    <li><a href="../photo_gallery/photo_gallery.php">Gallery</a></li>
                                </ul>

                            </li>
                        </ul>
        </nav>
        <div class="search-icon">
          <i class="fa-solid fa-magnifying-glass fa-xl"></i>
        </div>
        <div class="donate-button">
          <button>Sponsor A People</button>
        </div>
      </div>
    </div>
  </header>


  <section class="full">
    <div class="container">
      <div class="headerr">
        <h1 style="font-size: 35px;" id="title"> Registration Form</h1>
      </div>

      <form action="" method="post" id="survey-form">
        <div class="group">
          <label id="name-label" for="name">Full Name<input name="name" id="name" type="text" placeholder="Enter your full name" required /></label>
        </div>
        <div class="group">
          <label id="email-label" for="email">Email<input id="email" type="email" name="email" placeholder="Email" required /></label>
        </div>
        <div class="group">
          <label id="email-label" for="email">Phone Number<input id="phone" type="number" name="phone" placeholder="Phone" required /></label>
        </div>
        <div class="group">
          <label id="Password-lebel" for="password">Password<input id="pass" type="password" name="pass" placeholder="Enter Password at least 8 cheracter" required /></label>
        </div>
        <div class="group">
          <label id="number-label" for="age">Age<span></span>
            <input id="number" type="date" name="age" max="99" min="13" placeholder="Age" required /></label>
        </div>
        <div class="group">
          <div class="group">
            <label id="name-label" for="name">Address
              <input name="address" id="name" type="text" placeholder="Enter your full Address" required /></label>
          </div>
        </div>
        <div class="group">
          <label id="head-text" for="head-text">
            Select Your profession
            <select id="dropdown" name="profession">
              <option value="">Select current role</option>
              <option value="Student">Student</option>
              <option value="Full Time Job">Full Time Job</option>
              <option value="Full Time Learner">Full Time Learner</option>
              <option value="Others">Others</option>
            </select>
          </label>
        </div>

        <div class="group">
          <label id="other-head" for="other-head">Gender
          </label>
          <label id="spesific" for="spesific"><input id="radio-button" type="radio" name="butt" value="Male" class="inline" checked />
            <span id="span1">Male</span>
          </label>
          <label id="spesific" for="spesific">
            <input id="radio-button" type="radio" name="butt" value="Female" class="inline" />
            <span id="span1">Female</span>
          </label>
        </div>
        <div class="group">
          <label id="other-text" for="other-text">
            What type of work you want to do?
            <select id="dropdown" name="work">
              <option value="">Select an option</option>
              <option value="Challenges">Challenges</option>
              <option value="Projects Work">Projects Work</option>
              <option value="Community">Community</option>
              <option value="Volunterrism">Volunterrism</option>
            </select>
          </label>
        </div>

        <div class="group">
          <label>Your Skills
            <span>(Check all that apply)</span></label>
          <label id="check-lebel" for="check-label"><input class="check" type="checkbox" name="chackbox" value="Leadership Quality" />Leadership Quality</label>
          <label id="check-lebel" for="check-label"><input class="check" type="checkbox" name="chackbox" value="Digital Skills" />Digital Skills</label>
          <label id="check-lebel" for="check-label"><input class="check" type="checkbox" name="chackbox" value="Social Media Work" />Social Media Work</label>
          <label id="check-lebel" for="check-label"><input class="check" type="checkbox" name="chackbox" value="Designing" />Designing</label>
          <label id="check-lebel" for="check-label"><input class="check" type="checkbox" name="chackbox" value="Management" />Management</label>
        </div>

        <div class="group">
          <label id="description-area" for="description-area">Write about your within 50-100 words</label>
          <label id="area-label" for="area-label">
            <textarea id="area" name="area" placeholder="Enter your comment here..." cols="30" rows="3"></textarea>
          </label>
        </div>

        <div class="group">
          <label id="button" for="button"><input id="button" type="submit" name="button" />
          </label>
        </div>
      </form>
    </div>
  </section>
  <script src="./project.js"></script>
</body>

</html>
<?php
if (isset($_POST['button'])) {



  $servername = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "webproject";

  $conn = new mysqli($servername, $user, $pass, $dbname);

  $sql = "INSERT INTO registration VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[age]','$_POST[address]','$_POST[profession]','$_POST[butt]','$_POST[work]','$_POST[chackbox]','$_POST[area]','$_POST[pass]')";


  if ($conn->query($sql) === true) {
    echo "<script>alert('Registration sucessfull');</script>";
  } else {
    echo "<script>alert('Registration Not sucessfull');</script>";
  }
}


?>