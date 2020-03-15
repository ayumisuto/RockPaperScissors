<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/testt.css">
    <title>RockPaperScissors</title>
  </head>

  <body>
  <div class="site">

  <header class="header">
<div class="imgbox">
  <img src="img/1.png" alt="">
  <img src="img/1.png" alt="">
  <img src="img/1.png" alt="">

</div>
  </header>

  <div class= "vs">
    <?php

    //1 ~ 3のランダムの数字
    $jibun = mt_rand(1, 3);
    $teki = mt_rand(1, 3);

    $jibunguu = '<p>YOU<img src="img/gu.png"></p>';
    $jibunchoki = '<p>YOU<img src="img/choki.jpg"></p>';
    $jibunpar = '<p>YOU<img src="img/par.png"></p>';


    //gu
    if($jibun == 1 && $teki == 1){
        //あいこ
        echo '<p class="aiko">GUDGE<img src="img/aiko.jpg"></p>';
        echo $jibunguu;
        echo '<p>OPPONENT<img src="img/gu.png"></p>';

    }elseif($jibun == 1 && $teki == 2){
        //勝ち
        echo '<p>GUDGE<img src="img/win.png"></p>';
        echo '<p>YOU<img src="img/gu.png"></p>';
        echo '<p>OPPONENT<img src="img/choki.jpg"></p>';

    }elseif($jibun == 1 && $teki == 3){
        //負け
        echo '<p>GUDGE<img src="img/make.png"></p>';
        echo '<p>自分<img src="img/gu.png"></p>';
        echo '<p>OPPONENT<img src="img/par.png"></p>';
    }


    //choki
    if($jibun == 2 && $teki == 1){
        //負け
        echo '<p>GUDGE<img src="img/make.png"></p>';
        echo '<p>YOU<img src="img/choki.jpg"></p>';
        echo '<p>OPPONENT<img src="img/gu.png"></p>';


    }elseif($jibun == 2 && $teki == 2){
        //あいこ
        echo '<p class="aiko">GUDGE<img src="img/aiko.jpg"></p>';
        echo $jibunchoki;
        echo '<p>YOU<img src="img/choki.jpg"></p>';

    }elseif($jibun == 2 && $teki == 3){
        //勝ち
        echo '<p>GUDGE<img src="img/win.png"></p>';
        echo '<p>YOU<img src="img/choki.jpg"></p>';
        echo '<p>OPPONENT<img src="img/par.png"></p>';


    }


    //par
    if($jibun == 3 && $teki == 1){
        echo '<p>GUDGE<img src="img/win.png"></p>';
        echo '<p>YOU<img src="img/par.png"></p>';
        echo '<p>OPPONENT<img src="img/gu.png"></p>';


    }elseif($jibun == 3 && $teki == 2){
        echo '<p>GUDGE<img src="img/make.png"></p>';
        echo '<p>YOU<img src="img/par.png"></p>';
        echo '<p>OPPONENT<img src="img/choki.jpg"></p>';


    }elseif($jibun == 3 && $teki == 3){
        echo '<p class="aiko">GUDGE<img src="img/aiko.jpg"></p>';
        echo $jibunpar;
        echo '<p>OPPONENT<img src="img/par.png"></p>';
    }


    ?>
    </div>
</div>

<footer class="footer">

<h1 class="rsp">RockPaperScissors</h1>

</footer>

</body>
</html>
