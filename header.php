<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('name'); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/style.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/mainvisual.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/style.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/about.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/header.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/footer.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/gallery.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/sponsors.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/topics.css')); ?>" type="text/css">
</head>

<body>
  <?php wp_body_open(); ?>
  <header class="header <?php if(is_page(array('sponsors','gallery','contest'))) echo 'black'; ?>">
    <div class="header__wrapper">
        <div class="header__menuLeft">
        <ul class="header__listLeft">
          <li class="header__listItem"><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
          <li class="header__listItem"><a href="<?php echo esc_url(home_url('/#topics')); ?>">topics</a></li>
          <!-- <li class="header__listItem"><a href="<?php echo esc_url(home_url('/#timetable')); ?>">time table</a></li> -->
        </ul>
        </div>
        <div class="header__menuRight">
        <ul class="header__listRight">
          
          <li class="header__listItem"><a href="<?php echo esc_url(home_url('/gallerylist')); ?>">gallery</a></li>
          <li class="header__listItem"><a href="<?php echo esc_url(home_url('/#access')); ?>">access</a></li>
          <li class="header__listItem"><a href="<?php echo esc_url(home_url('/sponsors')); ?>">sponsors</a></li>
        </ul>
        </div>
        <a class="header__logo" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr-logo.png')); ?>" alt="EBRロゴ">
        </a>
         
        <!-- ハンバーガーメニュー -->
        <button class="hamburgerBtn" id="js-hamburger">
          <span class="headerLine -first" id="js-hamburgerLine-first"></span>
          <span class="headerLine -second" id="js-hamburgerLine-second"></span>
          <span class="headerLine -third" id="js-hamburgerLine-third"></span>
        </button>

        <nav class="hamburgerNav" id="js-hamburger-nav">
        <ul class="hamburgerNav__list">
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/#about')); ?>" data-before="EBRについて">About</a>
          </li>
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/#topics')); ?>" data-before="トピック">topics</a>
          </li>
          <!-- <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/#timetable')); ?>" data-before="当日の流れ">time table</a>
          </li> -->
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/gallerylist')); ?>" data-before="過去開催の画像">gallery</a>
          </li>
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/#access')); ?>" data-before="開催場所">access</a>
          </li>
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/sponsors')); ?>" data-before="協賛">sponsors</a>
          </li>
        </ul>
      </nav>

    </div>
      

      <?php wp_head(); ?>
    </header>