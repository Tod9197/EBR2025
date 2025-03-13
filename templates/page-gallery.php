<?php  

/*
Template Name: 画像一覧ページ
*/
get_header();

?>

<!-- メインビジュアル -->
<section class="mainVisual -gallery">
    <h1 class="mainVisual__title -gallery">gallery</h1>
</section>

<!-- 申し込みリンク -->
<!-- <div class="requestLink">
  <div class="requestLink__flex">
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLScz-y88pjXqvP2gWjCGlr7LqggBdRvFXqW9cdBiWuRk3Pxg8Q/viewform" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">(ゲストの方)<br>　申し込む</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLSdB7oQH7ayFtWY23RTtxR809xoHlZo_noQ2SdcgFE87GA0DIw/viewform" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text -student">(門下生)<br>申し込む</p>
    </a>
  </div>
  <a href="#" class="backToTop__button" id="backToTop">↑</a>
</div>

<div class="requestLink -mobile">
  <div class="requestLink__flex -mobile">
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLScz-y88pjXqvP2gWjCGlr7LqggBdRvFXqW9cdBiWuRk3Pxg8Q/viewform" id="js-request-guest" target="_blank" rel="noopener noreferrer" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLSdB7oQH7ayFtWY23RTtxR809xoHlZo_noQ2SdcgFE87GA0DIw/viewform" id="js-request-student" target="_blank">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
  <a href="#" class="backToTop__button -mobile" id="backToTop">↑</a>
</div> -->
<!-- 申し込みリンクここまで -->

<!-- 2024年度画像 -->
<div class="galleryArchive__wrap">
  <div class="inner -galleryArchive">
    <div class="galleryTab">
      <div class="galleryTab__buttonWrap">
        <button class="galleryTab__button -active" id="js-gallery-tab2024">2024年</button><button class="galleryTab__button" id="js-gallery-tab2023">2023年</button>
    </div>
  </div>
  <section class="galleryArchive -show" id="js-gallery2024">
    <h2 class="galleryArchive__title">2024年度EBR</h2>
    <div class="galleryArchive__list">
      <?php  
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => 16,
        'category_name' => 'ebr2024',
        'paged' => $paged
      );
      $gallery_query = new WP_Query($args);

      if ($gallery_query->have_posts()) :
        while ($gallery_query->have_posts()) : $gallery_query->the_post();
          if (has_post_thumbnail()) : ?>
      
            <div class="galleryArchive__listItem">
              <?php the_post_thumbnail('full', array('class' => '')); ?>
            </div>
      
          <?php  
          endif;
        endwhile; 
      ?>
    </div>
    <p class="galleryImg__listItem__text">※クリックで拡大できます</p>
    <!-- ページネーション -->
    <div class="galleryArchive__pagination">
      <?php  
      echo paginate_links(array(
        'total' => $gallery_query->max_num_pages,
        'current' => $paged,
        'prev_text' => __('←'),
        'next_text' => __('→'),
      ));
      ?>
    </div>

    <?php
      wp_reset_postdata();
      else :
    ?>
      <p>ギャラリー画像はありません。</p>
    <?php endif; ?>
  
  <!-- モーダル -->
  <!-- <div class="modal" id="imageModal" >
    <div class="modal__wrap">
    <span class="modal__close">&times;</span>
    <img class="modal__content" id="modalImage">
    <div id="caption"></div>
    </div>
  </div> -->
</section>
<!-- 2024年度画像ここまで -->

<!-- 2023年度画像 -->
<section class="galleryArchive -off" id="js-gallery2023">
    <h2 class="galleryArchive__title">2023年度EBR</h2>
    <div class="galleryArchive__list">
      <?php  
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => 20,
        'category_name' => 'ebr2023',
        'paged' => $paged
      );
      $gallery_query = new WP_Query($args);

      if ($gallery_query->have_posts()) :
        while ($gallery_query->have_posts()) : $gallery_query->the_post();
          if (has_post_thumbnail()) : ?>
      
            <div class="galleryArchive__listItem">
              <?php the_post_thumbnail('full', array('class' => '')); ?>
            </div>
      
          <?php  
          endif;
        endwhile; 
      ?>
    </div>
    <p class="galleryImg__listItem__text">※クリックで拡大できます</p>
    <!-- ページネーション -->
    <div class="galleryArchive__pagination">
      <?php  
      echo paginate_links(array(
        'total' => $gallery_query->max_num_pages,
        'current' => $paged,
        'prev_text' => __('←'),
        'next_text' => __('→'),
      ));
      ?>
    </div>

    <?php
      wp_reset_postdata();
      else :
    ?>
      <p>ギャラリー画像はありません。</p>
    <?php endif; ?>
  </div>
</section>

<!-- モーダル -->
  <div class="modal" id="imageModal" >
    <div class="modal__wrap">
    <span class="modal__close">&times;</span>
    <img class="modal__content" id="modalImage">
    <div id="caption"></div>
    </div>
  </div>

</div>


<!-- 2023年度画像ここまで -->

<?php get_footer(); ?>
