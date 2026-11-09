<?php
$requestLinkGuestUrl = 'https://forms.gle/QkQUU6Ur1MdaYC8JA';
$requestLinkStudentUrl = 'https://forms.gle/bdRU7PPUq3AUaRpp9';
?>

<!-- PC/タブ -->
<div class="requestLink">
  <div class="requestLink__flex">
    <a class="requestLink__item -guest" href="<?php echo esc_url($requestLinkGuestUrl); ?>" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <div class="requestLink__text">(ゲストの方)申し込む</div>
    </a>
    <a class="requestLink__item -student" href="<?php echo esc_url($requestLinkStudentUrl); ?>" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <div class="requestLink__text -student">(門下生)申し込む</div>
    </a>
  </div>
  <a href="#" class="backToTop__button" id="backToTop">↑</a>
</div>


<!-- モバイル -->
<div class="requestLink -mobile">
  <div class="requestLink__flex -mobile">
    <a class="requestLink__item -guest" href="<?php echo esc_url($requestLinkGuestUrl); ?>" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="<?php echo esc_url($requestLinkStudentUrl); ?>" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
  <a href="#" class="backToTop__button -mobile" id="backToTop">↑</a>
</div>
