<footer class="footer">
  <div class="inner">
    <div class="footerFlex">
    <a class="footer__logo" href="<?php echo esc_url(home_url('/')); ?>">
    <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr-logo.png')); ?>" alt="EBRロゴ">
    </a>
    <ul class="footerList">
      <li class="footerList__item">
        <p class="footerList__itemTitle">ABOUT</p>  
        <a href="<?php echo esc_url(home_url('/#about')); ?>">EBRについて</a>
        <p class="footerList__itemTitle -interview">SHOHOKAN WEBSITE</p>
        <a href="https://shohokan.net/" target="_blank" rel="noopener noreferrer">英語道場 升砲館 公式ウェブサイト</a>
      </li>
      <li class="footerList__item">
        <p class="footerList__itemTitle">ACCESS</p>
        <a href="<?php echo esc_url(home_url('/#access')); ?>">開催場所</a>
        <p class="footerList__itemTitle -gallery">GALLERY</p>
        <a href="<?php echo esc_url(home_url('/gallerylist')); ?>">過去開催の画像</a>
      </li>
      <li class="footerList__item">
        <p class="footerList__itemTitle">POINTS</p>
        <a href="<?php echo esc_url(home_url('/points')); ?>">年間ポイント</a>
          <p class="footerList__itemTitle -contest">CONTEST</p>
        <a href="<?php echo esc_url(home_url('/contest')); ?>">競技種目一覧</a>
      </li>
      <li class="footerList__item">
        <p class="footerList__itemTitle">TOPICs</p>
        <a href="#topics">お知らせ</a>
        <p class="footerList__itemTitle  -sponsors">SPONSORs</p>
        <a href="<?php echo esc_url(home_url('/sponsors')); ?>">協賛</a>
      </li>
      
    </ul>
    </div>

    <p class="footer__copyRight">&copy;<?php echo date('Y'); ?> EBR実行員会
    All rights reserved.</p>
  </div>
</footer>

<script src="<?php echo esc_url(get_theme_file_uri('/js/main.js')); ?>?v=<?php echo filemtime(get_theme_file_path('/js/main.js')); ?>"></script>
<script src="<?php echo esc_url(get_theme_file_uri('/js/hamburger.js')); ?>?v=<?php echo filemtime(get_theme_file_path('/js/hamburger.js')); ?>"></script>
<script src="<?php echo esc_url(get_theme_file_uri('/js/gallery.js')); ?>?v=<?php echo filemtime(get_theme_file_path('/js/gallery.js')); ?>"></script>
</body>
</html>