<?php
/** 
 * *single post
 * @package WordPress
 * @Template Post Type: post, page,
 */
get_header(); ?>

<!-- メインビジュアル -->
<section class="mainVisual -topics">
  <h1 class="mainVisual__title -topics">topics</h1>
</section>

<!-- 申し込みリンク -->
<div class="requestLink">
  <div class="requestLink__flex">
    <a class="requestLink__item -guest" href="https://forms.gle/nAWdcJC6fD3E1c7y5" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">(ゲストの方)<br>　申し込む</p>
    </a>
    <a class="requestLink__item -student" href="https://forms.gle/H4oqijU9HuBd2T5ZA" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text -student">(門下生)<br>申し込む</p>
    </a>
  </div>
  <a href="#" class="backToTop__button" id="backToTop">↑</a>
</div>

<div class="requestLink -mobile">
  <div class="requestLink__flex -mobile">
    <a class="requestLink__item -guest" href="https://forms.gle/nAWdcJC6fD3E1c7y5" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="https://forms.gle/H4oqijU9HuBd2T5ZA" id="js-request-student" target="_blank">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
  <a href="#" class="backToTop__button -mobile" id="backToTop">↑</a>
</div>
<!-- 申し込みリンクここまで -->

<section class="singleTopics">
  <div class="inner">
    <div class="singleTopics__wrap">
      <div class="singleTopics__line">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1 class="singleTopics__title"><?php the_title(); ?></h1>
        <div class="singleTopics__flex">
        <?php  
        $custom_author = get_post_meta(get_the_ID(), 'custom_author_name',true);
        if($custom_author) : 
        ?>
        <div class="singleTopics__author">投稿者 : <?php echo esc_html($custom_author); ?></div>
        <?php else : ?>
        <div class="singleTopics__author">投稿者 : <?php the_author(); ?></div>
        <?php endif; ?>
        <div class="singleTopics__date">投稿日 : <?php echo get_the_date('Y.m.d'); ?></div>
        </div>
      
      <?php if(has_post_thumbnail()) : ?>
        <div class="singleTopics__img">
          <?php the_post_thumbnail('full'); ?>
        </div>
        <?php else : ?>
          <div class="singleTopics__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ebr2023-33.png" alt="代替画像">
          </div>
      <?php endif; ?>
      
      <div class="singleTopics__content">
        <?php the_content(); ?>
      </div>
      
    <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- フッター -->
<?php get_footer(); ?>