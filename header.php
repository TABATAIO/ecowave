<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick-theme.css" />

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <!-- mycss -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    
    <!-- js -->
    <!-- jquery.js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- slick.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>
    <!-- myscript -->
    <script src="<?php echo get_template_directory_uri(); ?>/myscript.js" type="text/javaScript" charset="utf-8"></script>
    <title>練習"Eco Wave"</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <!-- 上側 -->
      <nav class="top_nav">
        <p>・自然に優しい選択、エコの波を広げよう</p>
        <ul class="SNS_icon">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt=""></li>
        </ul>
      </nav>
      <!-- 下側 -->
      <div class="lower_nav">
        <div class="com_name_icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img/EcoWave Ventures_logo.svg" alt="" />
          <p>EcoWave</p>
        </div>
        <!-- ハンバーガー用コード -->
        <div class="ham">
          <input id="drawer_input" class="drawer_hidden" type="checkbox" />
          <!-- ハンバーガーのアイコン -->
          <label for="drawer_input" class="drawer_open"><span></span></label>
          <!-- オーバーレイ内容 -->
          <nav class="ham_content">
            <ul class="ham_list">
              <li class="ham_item"><a href="">home</a></li>
              <li class="ham_item"><a href="">solution</a></li>
              <li class="ham_item"><a href="">projects</a></li>
              <li class="ham_item"><a href="./about.html">about us</a></li>
              <li class="ham_item"><a href="">Get Involved</a></li>
              <li class="ham_item"><a href="">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="FV">

        <div class="slick">
           <div class="bg bg01"></div>
           <div class="bg bg02"></div>
           <div class="bg bg03"></div>
           <div class="bg bg04"></div>
        </div>
       
        <!-- <img src="./static/img/FV.png" class="FV_img" alt="FV_img"> -->
        <div class="text_box">
          <p>For the</p>
          <h1>Next Generation</h1>
          <p>持続可能エネルギーと<br>環境保護ソリューションで</p>
        </div>

        <div class="scroll_bar">
          <p class="en">scroll</p>
          <span></span>
        </div>
      </div>
    </header>