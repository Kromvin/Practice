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
<meta
      name="viewport"
      content="width=device-width, initial-scale=1.0" /><meta
      charset="utf-8" /><meta
      property="twitter:card"
      content="summary_large_image" /><style data-tag="reset-style-sheet">  
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted В корзинуText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
      </style>
</head>
<body>
<link rel="stylesheet" href="css/style3.css" />
      <div>
        <link href="css/index3.css" rel="stylesheet" /><div
        class="homepage21460-container"
        ><div class="homepage21460-homepage21460"
          ><div class="homepage21460-new"
            ><span class="homepage21460-text"><span>Новинки</span></span
            ><div class="homepage21460-group212"
              ><div class="homepage21460-group239"
                ><span class="homepage21460-text002"><span>250 ₽</span></span
                ><span class="homepage21460-text004"
                  ><span>Шаурма смешанная</span></span
                ></div
              ><div class="homepage21460-group339"
                ><img
                  src="pbl/public3/external/image551364-xhk5-200h.png"
                  alt="image551364"
                  class="homepage21460-image55" /><img
                  src="pbl/public3/external/exclude1365-x5cu.svg"
                  alt="Exclude1365"
                  class="homepage21460-exclude" /></div></div
            ><div class="homepage21460-group223"
              ><div class="homepage21460-group2391"
                ><span class="homepage21460-text006"><span>1500 ₽</span></span
                ><span class="homepage21460-text008"
                  ><span>Шашлык XXXL</span></span
                ></div
              ><img
                src="pbl/public3/external/exclude5728-89pm.svg"
                alt="Exclude5728"
                class="homepage21460-exclude01" /><div
                class="homepage21460-group3391"
                ><img
                  src="pbl/public3/external/image385736-18es-200h.png"
                  alt="image385736"
                  class="homepage21460-image38" /><img
                  src="pbl/public3/external/exclude5733-m8v.svg"
                  alt="Exclude5733"
                  class="homepage21460-exclude02" /></div></div
            ><div class="homepage21460-group224"
              ><div class="homepage21460-group2392"
                ><span class="homepage21460-text010"><span>120 ₽</span></span
                ><span class="homepage21460-text012"
                  ><span>Картофель </span><br /><span>по деревенски</span></span
                ></div
              ><div class="homepage21460-group340"
                ><img
                  src="pbl/public3/external/image501359-c9g-200w.png"
                  alt="image501359"
                  class="homepage21460-image50" /><img
                  src="pbl/public3/external/exclude1360-4loe.svg"
                  alt="Exclude1360"
                  class="homepage21460-exclude03" /></div></div
            ><div class="homepage21460-group225"
              ><div class="homepage21460-group2393"
                ><span class="homepage21460-text016"><span>70 ₽</span></span
                ><span class="homepage21460-text018"
                  ><span>Морс лесные ягоды</span></span
                ></div
              ></div
            ></div
          ><div class="homepage21460-shava"
            ><span class="homepage21460-text020"><span>Шаурма</span></span
            ><div class="homepage21460-group219"
              ><span class="homepage21460-text022"><span>250 ₽</span></span
              ><span class="homepage21460-text024"><span>С курицей</span></span
              ><div class="homepage21460-group338"
                ><img
                  src="pbl/public3/external/image54655-uach-300h.png"
                  alt="image54655"
                  class="homepage21460-image54" /><img
                  src="pbl/public3/external/exclude634-xi3.svg"
                  alt="Exclude634"
                  class="homepage21460-exclude04" /></div
              ><span type="button" class="homepage21460-button Button"> <a href= "register.php">В корзину</a></span
              ><span class="homepage21460-text026"
                ><span
                  >Рубленый шашлык из курицы со свежими овощами и ароматным
                  соусом в лаваше, 400гр.</span
                ></span
              ></div
            ><div class="homepage21460-group246"
              ><span class="homepage21460-text028"><span>300 ₽</span></span
              ><span class="homepage21460-text030">С говядиной</span
              ><div class="homepage21460-group33801"
                ><img
                  src="pbl/public3/external/image57661-ypq6-300h.png"
                  alt="image57661"
                  class="homepage21460-image57" /><img
                  src="pbl/public3/external/exclude639-836.svg"
                  alt="Exclude639"
                  class="homepage21460-exclude05" /></div
              ><button type="button" class="homepage21460-button01 Button" onclick=Vkorziny()
                >В корзину</button
              ><span class="homepage21460-text032"
                ><span
                  >Рубленый шашлык из говядины со свежими овощами и ароматным
                  соусом в лаваше, 400гр.</span
                ></span
              ></div
            ><div class="homepage21460-group247"
              ><span class="homepage21460-text034"><span>250 ₽</span></span
              ><span class="homepage21460-text036">Смешанная</span
              ><div class="homepage21460-group33802"
                ><img
                  src="pbl/public3/external/image55657-4966-300h.png"
                  alt="image55657"
                  class="homepage21460-image551" /><img
                  src="pbl/public3/external/exclude644-iy29.svg"
                  alt="Exclude644"
                  class="homepage21460-exclude06" /></div
              ><button type="button" class="homepage21460-button02 Button" onclick=Vkorziny()
                >В корзину</button
              ><span class="homepage21460-text038"
                ><span
                  >Рубленый шашлык из курицы и говядины со свежими овощами и
                  ароматным соусом в лаваше, 400гр.</span
                ></span
              ></div
            ><div class="homepage21460-group248"
              ><span class="homepage21460-text040"><span>600 ₽</span></span
              ><span class="homepage21460-text042">Шаурма XXXL</span
              ><div class="homepage21460-group33803"
                ><img
                  src="pbl/public3/external/image56659-1f0s-300h.png"
                  alt="image56659"
                  class="homepage21460-image56" /><img
                  src="pbl/public3/external/exclude649-po4r.svg"
                  alt="Exclude649"
                  class="homepage21460-exclude07" /></div
              ><button type="button" class="homepage21460-button03 Button" onclick=Vkorziny()
                >В корзину</button
              ><span class="homepage21460-text044"
                ><span
                  >Рубленый шашлык из курицы/говядины со свежими овощами и
                  ароматным соусом в лаваше, 800гр.</span
                ></span
              ></div
            ></div
          ><div class="homepage21460-kebab"
            ><span class="homepage21460-text046"><span>Люля-кебаб</span></span
            ><div class="homepage21460-group3392"
              ><div class="homepage21460-group249"
                ><span class="homepage21460-text048">300 ₽</span
                ><span class="homepage21460-text050">Из курица</span
                ><button type="button" class="homepage21460-button04 Button" onclick=Vkorziny()
                  >В корзину</button
                ><span class="homepage21460-text052"
                  ><span
                    >люля из мяса курицы(200 гр.), лук репчатый,лук
                    зеленый,помидор,лаваш,петрушка</span
                  ></span
                ></div
              ><div class="homepage21460-group33804"
                ><img
                  src="pbl/public3/external/image39363-n756-300w.png"
                  alt="image39363"
                  class="homepage21460-image39" /><img
                  src="pbl/public3/external/exclude359-pbu7.svg"
                  alt="Exclude359"
                  class="homepage21460-exclude08" /></div>
                  </div
            ><div class="homepage21460-group254"
              ><span class="homepage21460-text054">320 ₽</span
              ><span class="homepage21460-text056">Из говядина</span
              ><div class="homepage21460-group33805"
                ><img
                  src="pbl/public3/external/image40380-xtsg-300w.png"
                  alt="image40380"
                  class="homepage21460-image40" /><img
                  src="pbl/public3/external/exclude366-va6e.svg"
                  alt="Exclude366"
                  class="homepage21460-exclude09" /></div
              ><button type="button" class="homepage21460-button05 Button" onclick=Vkorziny()>В корзину</button
              ><span class="homepage21460-text058"
                ><span
                  >люля из говядины(200 гр.), лук
                  маринованный,,помидор,лаваш,огурец,салат,соус пушка</span
                ></span
              ></div
            ><div class="homepage21460-group255"
              ><span class="homepage21460-text060">350 ₽</span
              ><span class="homepage21460-text062">Из баранина</span
              ><div class="homepage21460-group33806"
                ><img
                  src="pbl/public3/external/image41382-uvzk-300h.png"
                  alt="image41382"
                  class="homepage21460-image41" /><img
                  src="pbl/public3/external/exclude371-q3yw.svg"
                  alt="Exclude371"
                  class="homepage21460-exclude10" /></div

              ><button type="button" class="homepage21460-button06 Button" onclick=Vkorziny()>В корзину</button
              ><span class="homepage21460-text064"
                ><span
                  >люля из баранины(200 гр.), лук
                  маринованный,помидор,лаваш,укроп,морковь</span
                ></span
              ></div
            ><div class="homepage21460-group256"
              ><span class="homepage21460-text066">от 1200 ₽</span
              ><span class="homepage21460-text068">Кибер Люля</span
              ><div class="homepage21460-group33807"
                ><img
                  src="pbl/public3/external/image42384-w5d9-300h.png"
                  alt="image42384"
                  class="homepage21460-image42" /><img
                  src="pbl/public3/external/exclude376-0fk.svg"
                  alt="Exclude376"
                  class="homepage21460-exclude11" /></div

              ><button type="button" class="homepage21460-button07 Button" onclick=Vkorziny()
                >В корзину</button
              ><span class="homepage21460-text070"
                ><span
                  >люля из баранины, говядины, курицы(1 кг.), лук маринованный,
                  помидор,лаваш,перец болгарский,соус пушка</span
                ></span
              ></div
            ></div
          ><div class="homepage21460-group3393"
            ><img
              src="pbl/public3/external/image431354-309h-200h.png"
              alt="image431354"
              class="homepage21460-image43" /><img
              src="pbl/public3/external/exclude1355-0qjo.svg"
              alt="Exclude1355"
              class="homepage21460-exclude12" /></div
          ><div class="homepage21460-sok"
            ><span class="homepage21460-text072"><span>Напитки</span></span
            ><div class="homepage21460-group257"
              ><span class="homepage21460-text074">70 ₽</span
              ><span class="homepage21460-text076">Морс лесные ягоды</span
              ><div class="homepage21460-group33808"
                ><img
                  src="pbl/public3/external/image433107-ds6i-300h.png"
                  alt="image433107"
                  class="homepage21460-image431" /><img
                  src="pbl/public3/external/exclude388-bqnv.svg"
                  alt="Exclude388"
                  class="homepage21460-exclude13" /></div

              ><button type="button" class="homepage21460-button08 Button" onclick=Vkorziny()
                >В корзину</button
              ><span class="homepage21460-text078"
                ><span
                  >Ягоды лично собирал мой брат на севере! Приятно кислый вкус
                  освежает как никогда 0,25л
                </span></span
              ></div
            ><div class="homepage21460-group258"
              ><span class="homepage21460-text080">120 ₽</span
              ><span class="homepage21460-text082">Сок</span
              ><div class="homepage21460-group33809"
                ><img
                  src="pbl/public3/external/image443109-lvh-300w.png"
                  alt="image443109"
                  class="homepage21460-image44" /><img
                  src="pbl/public3/external/exclude393-0bp6.svg"
                  alt="Exclude393"
                  class="homepage21460-exclude14" /></div
              ><button type="button" class="homepage21460-button09 Button" onclick=Vkorziny()
                >В корзину</button
              ><span class="homepage21460-text084"
                ><span
                  >Ваааааай сок вообще разный естьКакой душе угодно заказывай,
                  любой привезем</span
                ></span
              ></div
            ><div class="homepage21460-group259"
              ><span class="homepage21460-text086">300 ₽</span
              ><span class="homepage21460-text088">Чай</span
              ><div class="homepage21460-group33810"
                ><img
                  src="pbl/public3/external/image453111-ffim-300h.png"
                  alt="image453111"
                  class="homepage21460-image45" /><img
                  src="pbl/public3/external/exclude398-0rbp.svg"
                  alt="Exclude398"
                  class="homepage21460-exclude15" /></div
              ><button type="button" class="homepage21460-button10 Button" onclick=Vkorziny()
                >В корзину</button
              ><span class="homepage21460-text090"
                ><span
                  >Этот чай моя мама заваривает, бери не пожалеешь, да! 0,5л
                </span></span
              ></div
            ><div class="homepage21460-group260"
              ><span class="homepage21460-text092">120 ₽</span
              ><span class="homepage21460-text094">Кофе</span
              ><img
                src="pbl/public3/external/image583041-agm-300h.png"
                alt="image583041"
                class="homepage21460-image58"
              /><div class="homepage21460-group33811"
                ><img
                  src="pbl/public3/external/exclude3022-zujr.svg"
                  alt="Exclude3022"
                  class="homepage21460-exclude16" /></div

              ><button type="button" class="homepage21460-button11 Button" onclick=Vkorziny()
                >В корзину</button
              ><span class="homepage21460-text096"
                ><span>Черный молотый сами делаем 0.4</span></span
              ></div
            ></div
          ><div class="homepage21460-head"
            ><div class="homepage21460-cart"
              ><span class="homepage21460-text098"><a href= "korzin.php">Корзина</a><span></span></span
              ><button type="button" class="homepage21460-button12"> 
                </button
              ><span class="homepage21460-text100">0</span
              ><img
                src="pbl/public3/external/rectangle531299-dg2h-200w.png"
                alt="Rectangle531299"
                class="homepage21460-rectangle53" /></div
            ><span class="homepage21460-text101"></span
            ><span class="homepage21460-text103"
              ></span
            ><span class="homepage21460-text105"
              ><span>8 999 999-55-66</span></span
            ><div class="homepage21460-group325"
              ><span class="homepage21460-text107"><span>Shayrmen</span></span
              ><span class="homepage21460-text109"
                ><span>Ханты-Мансийск</span></span
              ><span class="homepage21460-text111"
                ><span>Лучшее желудку!</span></span
              ></div
            ></div
          ><div class="homepage21460-shash"
            ><span class="homepage21460-text113"><span>Шашлык</span></span
            ><div class="homepage21460-group3394"
                ><span class="homepage21460-text115">600 ₽</span
                ><span class="homepage21460-text117">Из курица</span
                ><button type="button" class="homepage21460-button13 Button" onclick=Vkorziny()
                  >В корзину</button
                ><span class="homepage21460-text119"
                  ><span
                    >Шашлык из мяса курицы(300 гр.), петрушка,перец
                    болгарский</span
                  ></span
                ><div class="homepage21460-group33812"
                ><img
                  src="pbl/public3/external/image3538-8yt-300h.png"
                  alt="image3538"
                  class="homepage21460-image35" /><img
                  src="pbl/public3/external/exclude36-mlma.svg"
                  alt="Exclude36"
                  class="homepage21460-exclude17" /></div></div
            ><div class="homepage21460-group3401"
                ><span class="homepage21460-text121">650 ₽</span
                ><span class="homepage21460-text123">Из говядина</span
                ><button type="button" class="homepage21460-button14 Button" onclick=Vkorziny()
                  >В корзину</button
                ><span class="homepage21460-text125"
                  ><span>шашлык из говядины(300 гр.), лист салата </span></span
                ><div class="homepage21460-group33813"
                ><img
                  src="pbl/public3/external/image36320-p80a-300h.png"
                  alt="image36320"
                  class="homepage21460-image36" /><img
                  src="pbl/public3/external/exclude316-6zkn.svg"
                  alt="Exclude316"
                  class="homepage21460-exclude18" /></div></div
            ><div class="homepage21460-group342"
                ><span class="homepage21460-text127">700 ₽</span
                ><span class="homepage21460-text129">Из баранина</span
                ><button type="button" class="homepage21460-button15 Button" onclick=Vkorziny()
                  >В корзину</button
                ><span class="homepage21460-text131"
                  ><span>шашлык из баранины(300 гр.),петрушка,томат</span></span
                ><div class="homepage21460-group341"
                ><img
                  src="pbl/public3/external/image37323-ci8t-300h.png"
                  alt="image37323"
                  class="homepage21460-image37" /><img
                  src="pbl/public3/external/exclude337-jeph.svg"
                  alt="Exclude337"
                  class="homepage21460-exclude19" /></div></div
            ><div class="homepage21460-group344">
              <span class="homepage21460-text133">от 2200 ₽</span>
              <span class="homepage21460-text135">Шашлык XXXL</span>
              <button type="button" class="homepage21460-button16 Button">В корзину</button>
              <div class="homepage21460-group343">
                  <img src="pbl/public3/external/image38343-wv5o-300h.png" alt="image38343" class="homepage21460-image381">
                  <img src="pbl/public3/external/exclude344-e1m.svg" alt="Exclude344" class="homepage21460-exclude20">
                  <div class="homepage21460-group252">
                      <span class="homepage21460-text137"><span>Ваааай бомба вообще,шашлык из баранины,говядины,курицы(1 кг.),там лучёк,перчик чили,зелень-мелень,кукуруза есть,соус пушка ваааще</span></span>
                  </div>
              </div>
          </div>
          
      </div>
    </div>
  </body>
</body>	
<?php endif; ?>
</html>
