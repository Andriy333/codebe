<?php
include ('lang.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>codebe.agency</title>
    <meta charset="utf-8">
    <meta name="description" content="Codebe | Розробка веб-сайтів">
    <meta name="keywords" content="розробка веб-сайтів, сайти, дизайн, інтернет-магазини">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Codebe | Розробка веб-сайтів"/>
    <meta property="og:description" content="Codebe | Розробка веб-сайтів"/>
    <meta property="og:image" content="./image/cover.png"/>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./image/favicon.png">

</head>

<body>



<header>
    <img src="./image/logo.svg" alt="Logo" class="logo">


    <div class="lang">Eng <img src="./image/dropdown.svg" alt=""></div>

    <form   class="lang" method="get" action="index.php" >
        <select class="lang"  name="lang" onchange="this.form.submit()">
            <option value="ru">ru</option>
            <option  class="lang" value="eng" >Eng </div></option>

        </select>
    </form>



</header>
<div class="content">
    <span class="hello"><?=$lang['title']?></span>
    <h1><?=$lang['param']?></h1>
    <div class="email">
        <img src="./image/right.svg" alt="">
        <span><?=$lang['email']?></span>
    </div>
</div>
<footer class="social">
    <a href="#"><img src="./image/fb.svg" alt="facebook"></a>
    <a href="#"><img src="./image/in.svg" alt="instagram"></a>
    <a href="#"><img src="./image/be.svg" alt="behance"></a>
    <a href="#"><img src="./image/dr.svg" alt="dribbble"></a>
    <a href="#"><img src="./image/up.svg" alt="uplabs"></a>
</footer>
</body>
</html>