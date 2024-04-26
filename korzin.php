<!DOCTYPE html>
	<html lang="en">
	<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:login.php");
else:
?>
	
<?php include("includes/header.php"); ?>
<div id="welcome">
<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
  <p><a href="logout.php">Выйти</a> из системы</p>
</div>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
</head>
<body>
<link rel="stylesheet" href="css/style4.css" />
    <div>
      <link href="css/index4.css" rel="stylesheet" />
      
      <div class="cart1440-container">
        <div class="cart1440-cart1440">
          <span class="cart1440-text"><span>Сумма заказа:</span></span>
          <span class="cart1440-text02"><span>1 450 ₽</span></span>
          <img
            src="public4/external/rectangle821110-9fec-200h.png"
            alt="Rectangle821110"
            class="cart1440-rectangle821"
          />

            <span class="cart1440-text16">Корзина</span>
            <div class="cart-container"></div>
          <div class="cart1440-group220">
            <img
              src="public4/external/rectangle521111-uq6-200h.png"
              alt="Rectangle521111"
              class="cart1440-rectangle52"
            />
            <span type="button" class="cart1440-button1 button"><a href= "korzin2.php">Оформить заказ</a></span>
            <span type="button" class="cart1440-button2 button"><a href= "intropage.php">Вернуться в магазин</a></span>
          </div>
          <div class="cart1440-group341">
            <div class="cart1440-group338">
              <div class="cart1440-group280">
                <img
                  src="public4/external/ellipse101112-bsa8-200h.png"
                  alt="Ellipse101112"
                  class="cart1440-ellipse10"
                />
                <span class="cart1440-text20">1</span>
              </div>
              <span class="cart1440-text21"><span>Корзина</span></span>
            </div>
            <div class="cart1440-group339">
              <div class="cart1440-group281">
                <img
                  src="public4/external/ellipse101113-3xm5-200h.png"
                  alt="Ellipse101113"
                  class="cart1440-ellipse101"
                />
                <span class="cart1440-text23">2</span>
              </div>
              <span class="cart1440-text24"><span>Оформление заказа</span></span>
            </div>
            <div class="cart1440-group340">
              <div class="cart1440-group2811">
                <img
                  src="public4/external/ellipse101113-95q9-200h.png"
                  alt="Ellipse101113"
                  class="cart1440-ellipse102"
                />
                <span class="cart1440-text26">3</span>
              </div>
              <span class="cart1440-text27"><span>Заказ принят</span></span>
            </div>
            <img src="public4/external/line11113-0yrg.svg" alt="Line11113" class="cart1440-line1" />
            <img src="public/external/line21113-fpns.svg" alt="Line21113" class="cart1440-line2" />
          </div>
          <span class="cart1440-text29"><span>Shayrmen</span></span>
          <span class="cart1440-text31"><span>Лучшее желудку!</span></span>
          <img
            src="public4/external/image11225-n7cz-600w.png"
            alt="IMAGE11225"
            class="cart1440-image1"
          />
          <div class="cart1440-group353">
            <div class="cart1440-group268">
              <span class="cart1440-text33"><span>Мы в соцсетях</span></span>
              <div class="cart1440-group337">
                <span class="cart1440-text35"><span>YouTube</span></span>
                <span class="cart1440-text37"><span>Instagram</span></span>
              </div>
              <div class="cart1440-group336">
                <span class="cart1440-text39"><span>Facebook</span></span>
                <span class="cart1440-text41"><span>ВКонтакте</span></span>
              </div>
              <span class="cart1440-text43"><span>Правовая информация</span></span>
              <span class="cart1440-text45"><span>Ханты-Мансийск ул. Студенческая 7 </span></span>
              <span class="cart1440-text47"><span>Остались вопросы? А мы всегда на связи: </span></span>
              <span class="cart1440-text49"><span>Написать нам</span></span>
              <img
                src="public4/external/rectangle674992-6op-200h.png"
                alt="Rectangle674992"
                class="cart1440-rectangle67"
              />
              <img
                src="public4/external/rectangle684993-pvue-200h.png"
                alt="Rectangle684993"
                class="cart1440-rectangle68"
              />
              <img
                src="public4/external/rectangle694994-azan-200h.png"
                alt="Rectangle694994"
                class="cart1440-rectangle69"
              />
              <img
                src="public4/external/rectangle704995-mnyr-200h.png"
                alt="Rectangle704995"
                class="cart1440-rectangle70"
              />
              <img
                src="public4/external/rectangle714996-l7zv-200h.png"
                alt="Rectangle714996"
                class="cart1440-rectangle71"
              />
              <img
                src="public4/external/rectangle724997-4wve-200h.png"
                alt="Rectangle724997"
                class="cart1440-rectangle72"
              />
              <img
                src="public4/external/rectangle744998-oc49-300w.png"
                alt="Rectangle744998"
                class="cart1440-rectangle74"
              />
              <span class="cart1440-text51"><span>8 999 999-55-66</span></span>
              <img
                src="public4/external/image174910-4dyh-200h.png"
                alt="image174910"
                class="cart1440-image17"
              />
              <img
                src="public4/external/image184910-gx8b-200h.png"
                alt="image184910"
                class="cart1440-image18"
              />
              <img
                src="public4/external/image214910-b9o-200h.png"
                alt="image214910"
                class="cart1440-image21"
              />
              <img
                src="public4/external/image224910-y4pi-200h.png"
                alt="image224910"
                class="cart1440-image22"
              />
              <img
                src="public4/external/image194910-1s8-200h.png"
                alt="image194910"
                class="cart1440-image19"
              />
              <img
                src="public4/external/image204910-2kup-200h.png"
                alt="image204910"
                class="cart1440-image20"
              />
              <div class="cart1440-group266">
                <img
                  src="public4/external/rectangle754910-0grs.svg"
                  alt="Rectangle754910"
                  class="cart1440-rectangle75"
                />
                <span class="cart1440-text53"><span>Заказать звонок</span></span>
              </div>
              <span class="cart1440-text55"><span>Shayrmen.nyam Все праав защищены © 2024</span></span>
            </div>
            <span class="cart1440-text57"><span>Shayrmen.nyam</span></span>
          </div>
        </div>
      </div>
    </div>
</body>	
<?php endif; ?>
</html>