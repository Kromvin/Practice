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
        html { line-height: 1.15; }
        body { margin: 0; }
        * { box-sizing: border-box; border-width: 0; border-style: solid; }
        p, li, ul, pre, div, h1, h2, h3, h4, h5, h6, figure, blockquote, figcaption { margin: 0; padding: 0; }
        button { background-color: transparent; }
        button, input, optgroup, select, textarea { font-family: inherit; font-size: 100%; line-height: 1.15; margin: 0; }
        button, [type="button"], [type="reset"], [type="submit"] { -webkit-appearance: button; }
        button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner { border-style: none; padding: 0; }
        button:-moz-focus, [type="button"]:-moz-focus, [type="reset"]:-moz-focus, [type="submit"]:-moz-focus { outline: 1px dotted ButtonText; }
        a { color: inherit; text-decoration: inherit; }
        input { padding: 2px 4px; }
        img { display: block; }
        </style>
</head>
  <body>
  <link rel="stylesheet" href="css/style6.css" />
    <div>
      <link href="css/index6.css" rel="stylesheet" />
      <div class="cart1440-container">
        <div class="cart1440-cart1440">
          <img src="pbl/public6/external/rectangle821625-omis-200h.png" alt="Rectangle821625" class="cart1440-rectangle82" />
          <div class="cart1440-group341">
            <div class="cart1440-group338">
              <div class="cart1440-group281">
                <img src="pbl/public6/external/ellipse101727-wzz8-200h.png" alt="Ellipse101727" class="cart1440-ellipse10" />
                <span class="cart1440-text">1</span>
              </div>
              <span class="cart1440-text01"><span>Корзина</span></span>
            </div>
            <div class="cart1440-group339">
              <span class="cart1440-text03"><span>Оформление заказа</span></span>
              <div class="cart1440-group2811">
                <img src="pbl/public6/external/ellipse101727-wzz8-200h.png" alt="Ellipse101727" class="cart1440-ellipse101" />
                <span class="cart1440-text05">2</span>
              </div>
            </div>
            <div class="cart1440-group340">
              <span class="cart1440-text06"><span>Заказ принят</span></span>
              <div class="cart1440-group280">
                <img src="pbl/public6/external/ellipse101721-eltn-200h.png" alt="Ellipse101721" class="cart1440-ellipse102" />
                <span class="cart1440-text08">3</span>
              </div>
            </div>
            <img src="pbl/public6/external/line11626-7jlg.svg" alt="Line11626" class="cart1440-line1" />
            <img src="pbl/public6/external/line21626-6ukp.svg" alt="Line21626" class="cart1440-line2" />
          </div>
          <div class="cart1440-container1">
            <span class="cart1440-text09"><span>Shayrmen</span></span>
            <span class="cart1440-text11"><span>Лучшее желудку!</span></span>
          </div>
          <div class="cart1440-group345">
            <span class="cart1440-text13"><span>Мы в соцсетях</span></span>
            <div class="cart1440-group337">
              <span class="cart1440-text15"><span>YouTube</span></span>
              <span class="cart1440-text17"><span>Instagram</span></span>
            </div>
            <div class="cart1440-group336">
              <span class="cart1440-text19"><span>Facebook</span></span>
              <span class="cart1440-text21"><span>ВКонтакте</span></span>
            </div>
            <span class="cart1440-text23"><span>Правовая информация</span></span>
            <span class="cart1440-text25"><span>Ханты-Мансийск ул. Студенческая 7 </span></span>
            <span class="cart1440-text27"><span>Остались вопросы? А мы всегда на связи: </span></span>
            <span class="cart1440-text29"><span>Написать нам</span></span>
            <img src="pbl/public6/external/rectangle671746-ee0e-200h.png" alt="Rectangle671746" class="cart1440-rectangle67" />
            <img src="pbl/public6/external/rectangle681747-4dmc-200h.png" alt="Rectangle681747" class="cart1440-rectangle68" />
            <img src="pbl/public6/external/rectangle691748-9q4j-200h.png" alt="Rectangle691748" class="cart1440-rectangle69" />
            <img src="pbl/public6/external/rectangle701749-qnyv-200h.png" alt="Rectangle701749" class="cart1440-rectangle70" />
            <img src="pbl/public6/external/rectangle711750-e8gs-200h.png" alt="Rectangle711750" class="cart1440-rectangle71" />
            <img src="pbl/public6/external/rectangle721751-j2vp-200h.png" alt="Rectangle721751" class="cart1440-rectangle72" />
            <img src="pbl/public6/external/rectangle741752-vth-300w.png" alt="Rectangle741752" class="cart1440-rectangle74" />
            <span class="cart1440-text31"><span>8 999 999-55-66</span></span>
            <img src="pbl/public6/external/image171754-ehzd-200h.png" alt="image171754" class="cart1440-image17" />
            <img src="pbl/public6/external/image181755-dn5u-200h.png" alt="image181755" class="cart1440-image18" />
            <img src="pbl/public6/external/image211756-mv3b-200h.png" alt="image211756" class="cart1440-image21" />
            <img src="pbl/public6/external/image221757-ra1-200h.png" alt="image221757" class="cart1440-image22" />
            <img src="pbl/public6/external/image191758-tvqk-200h.png" alt="image191758" class="cart1440-image19" />
            <img src="pbl/public6/external/image201759-1c5c-200h.png" alt="image201759" class="cart1440-image20" />
            <div class="cart1440-group266">
              <img src="pbl/public6/external/rectangle751761-ts1i.svg" alt="Rectangle751761" class="cart1440-rectangle75" />
              <span class="cart1440-text33"><span>Заказать звонок</span></span>
            </div>
            <span class="cart1440-text35"><span>Shayrmen.nyam</span></span>
            <span class="cart1440-text37"><span>Shayrmen.nyam Все права защищены © 2024</span></span>
            <div class="cart1440-group328">
              <img src="pbl/public6/external/image231765-zsj-200h.png" alt="image231765" class="cart1440-image23" />
            </div>
            <div class="cart1440-group327">
              <img src="pbl/public6/external/image241768-1sp7-200h.png" alt="image241768" class="cart1440-image24" />
            </div>
            <div class="cart1440-group326">
              <img src="pbl/public6/external/image251771-vzdr-200h.png" alt="image251771" class="cart1440-image25" />
            </div>
          </div>
          <div class="cart1440-group349">
            <span class="cart1440-text39">статус заказа</span>
            <div class="cart1440-group294">
              <input type="text" placeholder="placeholder" value="принят" class="cart1440-textinput input" />
              <span class="cart1440-text40">статус заказа</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
<?php endif; ?>
</html>
