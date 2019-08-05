<?php
 session_start();
$con = mysqli_connect("localhost","root","","login");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"select email from account");

$row = mysqli_fetch_array($result);
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  } else {
    // They are not logged in, redirect them
  header('Location: login.php');
  }
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Dreamers Forums | Profile</title>
</head>
<body>
<nav>
        <div class="Logo">
            <h1>Dreamers<c style="color: orange">Forums</c></h1>
        </div>
        <ul class="nav-links">
            <li><a href="home.php"><i class="fa fa-home mr-1"></i>Home</a></li>
            <li><a href="profile.php"><i class="fa fa-home mr-1"></i>Profile</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-in-alt"></i>Sign Out</a></li>
        </ul>
    </nav>
    <div class="under-navbar-rainbow"></div>

	<div class="Login-Page-class">
		<div class="profile-form">
			<!--Login Page Code Below!-->
			<form class="Login-form">
			<input class="profile-username" type="text" value="<?php echo $_SESSION['username'];?>" id="username1" name="LoginUsername" disabled="disabled">
            <div class="box-line2"></div>
            <h2 class="username-text">Your Username:</h2>
            <!-----------------------------------Above is my username!------------------------------------->
            <!-----------------------------------Under is My Email!---------------------------------------->
            <input class="profile-username" type="text" value="<?php echo  $row['email'];?>" id="username1" name="LoginUsername" disabled="disabled">
            <div class="box-line2"></div>
            <h2 class="username-text">Your Email:</h2>
			</form>
		</div>
	</div>
</body>
</html>


<?php
include('css/Login-Style.php');
?>

<?php
include('css/background.php');
?>