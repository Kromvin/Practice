<!DOCTYPE html>
	<html lang="en">
	<head>
<meta charset="utf-8">
<?php require_once("includes/connection.php"); ?>
<?php
	session_start();
	?>
	<?php include("includes/header.php"); ?>	 
	<?php
	
	if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: intropage.php");
	}

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query = mysqli_query($conn, "SELECT * FROM usertbl WHERE username = '$username' AND password = '$password'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
 {
while($row=mysqli_fetch_assoc($query))
 {
	$dbusername=$row['username'];
  $dbpassword=$row['password'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {
	// старое место расположения
	//  session_start();
	 $_SESSION['session_username']=$username;	 
 /* Перенаправление браузера */
   header("Location: intropage.php");
	}
	} else {
	//  $message = "Invalid username or password!";
 }
	} else {
    $message = "All fields are required!";
	}
	}
	?>
<?php include("includes/header.php"); ?>
<link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head> 
<body>
<link rel="stylesheet" href="./style.css">
<div class="container mlogin">
<div id="login">
<form action="" id="loginform" method="post"name="loginform">
    <div>
        <link href="css/index1.css" rel="stylesheet">
        <div class="login3-register-container">
            <div class="login3-register-login3-register">
                <span class="login3-register-text"><span>Shayrmen.nyam</span></span>
                <div class="login3-register-group33">
                    <div class="login3-register-group45">
                        <div class="login3-register-group31">
                            <div>
                                <span class="login3-register-text02"><span>Shayrmen</span></span>
                                <span class="login3-register-text04"><span>Лучшее желудку!</span></span>
                            </div>
                        </div>
                    </div>
                    <img alt="IMAGE11650" src="pbl/public/external/image11650-n6fk-700w.png" class="login3-register-image1">
                </div>
                
            </div>
            <div class="login3-register-group44">
                <div class="login3-register-group34">
                    <span class="login3-register-text06"><span>Вход</span></span>
                    <div class="login3-register-group2">
                        <span class="login3-register-text08"><span>Если вы ещё не имеете свой аккаунт</span></span>
                        <span class="login3-register-text10"><span class="login3-register-text11">Вы можете завести его </span><a href= "register.php">Тут</a>!</p>
                    </div>
                </div>
                <div class="login3-register-group37">
                    <div class="login3-register-message1">
                        <div class="login3-register-group">
                        </div>
                    </div>
                    <p><label for="user_login">Имя опльзователя<br>
                    <input class="input" id="username" name="username"size="20" type="text" value="Your name" class="login3-register-textinput input"></label></p>  
                </div>
                <div class="login3-register-group371">
                <p><label for="user_pass">Пароль<br>
                <input class="input" id="password" name="password"size="20" type="password" value="Your password"class="login3-register-textinput1 input"></label></p>  
                </div>
                <div class="login3-register-group39">
                    <input class="button" name="login"type= "submit" value="Log In" class="login3-register-button button" class="login3-register-text16"> </snap>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
