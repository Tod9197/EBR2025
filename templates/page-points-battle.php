<?php  
/*
Template Name: 年間ポイント速報
*/
get_header();

?>

<section class="mainVisual -pointsBattle">
    <h1 class="mainVisual__title -pointsBattle">Points</h1>
</section>

<section class="pointsBattle">
  <div class="inner">
    <h2 class="pointsBattle__title">
      <span class="ego">Team e-Go!</span><br class="tab-only "> VS <br class="tab-only "><span class="hb">Team H.Blacks</span></h2>
    <div class="pointsBattle__area">
      <ul class="pointsBattle__chart">
        <li class="pointsBattle__chartItem -ego">
          <span class="pointsBattle__chartText -ego">Team e-Go!</span>
          <p class="pointsBattle__chartBar -ego">
          <span class="pointsBattle__chartPointWrapper">
          <span class="pointsBattle__chartPoint">2258.0</span>
          </span>
          </p>
        </li>
        <li class="pointsBattle__chartItem -hb">
          <span class="pointsBattle__chartText -hb">Team H.Blacks</span>
          <p class="pointsBattle__chartBar -hb">
          <span class="pointsBattle__chartPointWrapper">
          <span class="pointsBattle__chartPoint">2176.0</span>
          </span>
          </p>
        </li>
      </ul>
    </div>
    <p class="pointsBattle__anotation">※2026年01月20日時点</p>
    <a class="toPointLink" href="<?php echo esc_url(home_url('/points')); ?>">ポイントの換算方法はこちら</a>
    <a class="toPointLink -toTop" href="../">TOPへ戻る</a>
  </div>
</section>

<!-- 申し込みリンク -->
<div class="requestLink">
  <div class="requestLink__flex">
    <a class="requestLink__item -guest" href="https://forms.gle/CANfPHXf7euAwXPv5" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <div class="requestLink__text">(ゲストの方)申し込む</div>
    </a>
    <a class="requestLink__item -student" href="https://forms.gle/heiLwP3w1VTeM9XM7" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <div class="requestLink__text -student">(門下生)申し込む</div>
    </a>
  </div>
  <a href="#" class="backToTop__button" id="backToTop">↑</a>
</div>

<div class="requestLink -mobile">
  <div class="requestLink__flex -mobile">
    <a class="requestLink__item -guest" href="https://forms.gle/CANfPHXf7euAwXPv5" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="https://forms.gle/heiLwP3w1VTeM9XM7" id="js-request-student" target="_blank">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
  <a href="#" class="backToTop__button -mobile" id="backToTop">↑</a>
</div>
<!-- 申し込みリンクここまで -->

<!-- フッター -->
<?php get_footer(); ?>