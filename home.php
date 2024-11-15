<?php
    session_start();
    $dba = $_SESSION['db'];
    $logo = $_SESSION['logo'];
    $name = $_SESSION['Name'];
    $conn = mysqli_connect("localhost","", "","$dba");
    $query = "SELECT * FROM `live` ORDER BY sn";
    $dat = mysqli_query($conn,$query);
    if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <title>Dashboard - <?php echo $_SESSION['name']?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/logo/favicon-16x16.png">
    <link rel="manifest" href="/logo/site.webmanifest">
    <link rel="mask-icon" href="/logo/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/logo/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/logo/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap");
:root {
  --primary: #eeeeee;
  --secondary: #227c70;
  --green: #82cd47;
  --secondary-light: rgb(34, 124, 112, 0.2);
  --secondary-light-2: rgb(127, 183, 126, 0.1);
  --white: #fff;
  --black: #393e46;

  --shadow: 0px 2px 8px 0px var(--secondary-light);
}

* {
  margin: 0;
  padding: 0;
  list-style-type: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  height: 100vh;
  width: 100%;
  background-color: var(--primary);
}

.navbar {
  display: flex;
  align-items: center;
  height: 70px;
  background-color: var(--white);
  padding: 0 8%;
  box-shadow: var(--shadow);
}

.navbar-logo {
  cursor: pointer;
}

.navbar-list {
  width: 100%;
  text-align: right;
  padding-right: 2rem;
}

.navbar-list li {
  display: inline-block;
  margin: 0 1rem;
}

.navbar-list li a {
  font-size: 1rem;
  font-weight: 500;
  color: var(--black);
  text-decoration: none;
}

.profile-dropdown {
  position: relative;
  width: fit-content;
}

.profile-dropdown-btn {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-right: 1rem;
  font-size: 0.9rem;
  font-weight: 500;
  width: 150px;
  border-radius: 50px;
  color: var(--black);
  /* background-color: white;
  box-shadow: var(--shadow); */

  cursor: pointer;
  border: 1px solid var(--secondary);
  transition: box-shadow 0.2s ease-in, background-color 0.2s ease-in,
    border 0.3s;
}

.profile-dropdown-btn:hover {
  background-color: var(--secondary-light-2);
  box-shadow: var(--shadow);
}

.profile-img {
  position: relative;
  width: 3rem;
  height: 3rem;
  border-radius: 50%;
  background-size: cover;
}

.profile-img i {
  position: absolute;
  right: 0;
  bottom: 0.3rem;
  font-size: 0.5rem;
  color: var(--green);
}

.profile-dropdown-btn span {
  margin: 0 0.5rem;
  margin-right: 0;
}

.profile-dropdown-list {
  position: absolute;
  top: 68px;
  width: 220px;
  right: 0;
  background-color: var(--white);
  border-radius: 10px;
  max-height: 0;
  overflow: hidden;
  box-shadow: var(--shadow);
  transition: max-height 0.5s;
}

.profile-dropdown-list hr {
  border: 0.5px solid var(--green);
}

.profile-dropdown-list.active {
  max-height: 500px;
}

.profile-dropdown-list-item {
  padding: 0.5rem 0rem 0.5rem 1rem;
  transition: background-color 0.2s ease-in, padding-left 0.2s;
}

.profile-dropdown-list-item a {
  display: flex;
  align-items: center;
  text-decoration: none;
  font-size: 0.9rem;
  font-weight: 500;
  color: var(--black);
}

.profile-dropdown-list-item a i {
  margin-right: 0.8rem;
  font-size: 1.1rem;
  width: 2.3rem;
  height: 2.3rem;
  background-color: var(--secondary);
  color: var(--white);
  line-height: 2.3rem;
  text-align: center;
  margin-right: 1rem;
  border-radius: 50%;
  transition: margin-right 0.3s;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

.container{
    background:linear-gradient(45deg, blueviolet, lightgreen);
    padding:15px 9%;
    padding-bottom: 100px;
}

.container .heading{
    text-align: center;
    padding-bottom: 15px;
    color:#fff;
    text-shadow: 0 5px 10px rgba(0,0,0,.2);
    font-size: 50px;
}

.container .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap:15px;
    margin: 10px;
}

.container .box-container .box{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 5px;
    background: #fff;
    text-align: center;
    padding:30px 20px;
}

.container .box-container .box img{
    height: 80px;
}

.container .box-container .box h3{
    color:#444;
    font-size: 22px;
    padding:10px 0;
}

.container .box-container .box p{
    color:#777;
    font-size: 15px;
    line-height: 1.8;
}

.container .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background:#333;
    color:#fff;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}

.container .box-container .box .btn:hover{
    letter-spacing: 1px;
}

.container .box-container .box:hover{
    box-shadow: 0 10px 15px rgba(0,0,0,.3);
    transform: scale(1.03);
}

@media (max-width:768px){
    .container{
        padding:20px;
    }
}
.profile-dropdown-list-item:hover {
  padding-left: 1.5rem;
  background-color: var(--secondary-light);
}

    </style>
  </head>
  <body>
    <nav class="navbar">
      <img src="img/egilogog.png" width = 5% class="navbar-logo" alt="logo" />
      <ul class="navbar-list">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>

      <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <span
            ><?php echo $_SESSION['name']?>
            <i class="fa-solid fa-angle-down"></i>
          </span>
        </div>
        <form method="post">
        <ul class="profile-dropdown-list">
          <hr />

          
          <li class="profile-dropdown-list-item"><button name="logout">
            
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Log out
            </button>
          </li>
          
        </ul></form>
      </div>
    </nav>
    <div class="container">

      <h1 class="heading">Welcome <?php echo $_SESSION['name']?></h1>
  
      <div class="box-container">
  
          <div class="box">
              <h3>Live Tracker</h3>
              <p>Here is a live score board to make your Stream look better</p>
              <a href="live.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
          <div class="box">
              <h3>Live Tracker Editor</h3>
              <p>Here is that website which handles the Live Tracker</p>
              <a href="live/index.php" class="btn" target="_blank">Let's Go!</a>
          </div>
      </div>
      <div class="box-container">
  
          <div class="box">
              <h3>Live Tracker - 2</h3>
              <p>Here is a live score board to make your Stream look better</p>
              <a href="live2.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
          <div class="box">
              <h3>Live Tracker Editor - 2</h3>
              <p>Here is that website which handles the Live Tracker</p>
              <a href="live2/index.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
  
      </div>
      <div class="box-container">
  
          <div class="box">
              <h3>Live Tracker - 3</h3>
              <p>Here is a live score board to make your Stream look better</p>
              <a href="live3.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
          <div class="box">
              <h3>Live Tracker Editor - 3</h3>
              <p>Here is that website which handles the Live Tracker</p>
              <a href="live3/index.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
  
      </div>
      <div class="box-container">
  
          <div class="box">
              <h3>Live Tracker - 4</h3>
              <p>Here is a live score board to make your Stream look better</p>
              <a href="live4.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
          <div class="box">
              <h3>Live Tracker Editor - 4</h3>
              <p>Here is that website which handles the Live Tracker</p>
              <a href="live4/index.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
  
      </div>
      <div class="box-container">
  
          <div class="box">
              <h3>Live Tracker - 5</h3>
              <p>Here is a live score board to make your Stream look better</p>
              <a href="live5.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
          <div class="box">
              <h3>Live Tracker Editor - 5</h3>
              <p>Here is that website which handles the Live Tracker</p>
              <a href="live5/index.php" class="btn" target="_blank">Let's Go!</a>
          </div>
  
  
      </div>
  
  </div>

    <script src="script.js"></script>
    <script></script>
  </body>
</html>
<?php }else{
    echo "<script>window.location.href='index.php';</script>";
}?>
<?php
  if(isset($_POST['logout'])){
    session_destroy();
    echo "<script>window.location.href='index.php';</script>";
  }
?>