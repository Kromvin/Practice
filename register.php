<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<?php require_once("includes/connection.php"); ?>
	<?php include("includes/header.php"); ?>
	<?php
	
	if(isset($_POST["register"])){
	
	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $full_name= htmlspecialchars($_POST['full_name']);
	$email=htmlspecialchars($_POST['email']);
 $username=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 $query = mysqli_query($conn, "SELECT * FROM usertbl WHERE username='".$username."'");
  $numrows=mysqli_num_rows($query);
if($numrows==0)
   {
	$sql="INSERT INTO usertbl
  (full_name, email, username,password)
	VALUES('$full_name','$email', '$username', '$password')";
  $result=mysqli_query($conn, $sql);
 if($result){
	$message = "Account Successfully Created";
} else {
 $message = "Failed to insert data information!";
  }
	} else {
	$message = "That username already exists! Please try another one!";
   }
	} else {
	$message = "All fields are required!";
	}
	}
	?>

	<?php if (!empty($message)) {echo "<p class=error>" . "MESSAGE: ". $message . "</p>";} ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
	</head>
	<body>
<div class="container mregister">
<div id="login">
<form action="register.php" id="registerform" method="post"name="registerform">
 <link rel="stylesheet" href="css/style2.css">
    <div>
      <link href="css/index.css" rel="stylesheet">
      <div class="login3-register-container">
        <div class="login3-register-login3-register">
          <span class="login3-register-text"><span>Shayrmen.nyam</span></span>
          <div class="login3-register-group33">
            <div class="login3-register-group45">
              <div class="login3-register-group31">
                <div class="login3-register-group1">
                  <span class="login3-register-text02"><span>Shayrmen</span></span>
                  <span class="login3-register-text04"><span>Лучшее желудку!</span></span>
                </div>
              </div>
            </div>
            <img alt="IMAGE11645" src="public2/external/image11645-968g-700w.png" class="login3-register-image1">
          </div>
          <div class="login3-register-group44">
            <div class="login3-register-group34">
              <span class="login3-register-text06"><span>Регистрация</span></span>
              <div class="login3-register-container1">
                <div class="login3-register-group2">
                  <div class="login3-register-group2">
                        <span class="login3-register-text08"><span>Если вы уже имеете свой аккаунт</span></span>
                        <span class="login3-register-text10"><span class="login3-register-text11">Вы можете зайти в него </span><a href= "login.php">Тут</a>!</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="login3-register-group37">
				<p><label for="user_pass">E-mail<br>
					<input class="input" class="login3-register-text13" id="email" name="email" size="32"type="email" value="Your email" class="login3-register-textinput input"></label>
				</p>
            </div>
            <div class="login3-register-group43">
				<p><label for="user_pass">Имя пользователя<br>
					<input class="input" class="login3-register-text15" class="login3-register-textinput1 input" id="username" name="username"size="20" type="text" value="Your name"></label>
				</p>
            </div>
            <div class="login3-register-group41">
			<p><label for="user_login">Полное имя<br>
 				<input class="input" class="login3-register-text17" class="login3-register-textinput2 input" id="full_name" name="full_name"size="32"  type="text" value="your full name"></label>
			</p>
            </div>
            <div class="login3-register-group36">
			<p><label for="user_pass">Пароль<br>
				<input class="input" class="login3-register-text19" class="login3-register-textinput3 input" id="password" name="password"size="32"   type="password" value="Your Password"></label>
			</p>
            </div>
            <div class="login3-register-group39">
			<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
              </button>
          </div>
        </div>
      </div>
    </div>
	</form>
  </body>
</html>