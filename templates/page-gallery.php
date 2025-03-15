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

<!-- 2023年度画像 -->
<section class="gallery" id="gallery">
  <div class="inner">
    <h2 class="galleryTitle" data-en="画像集">GALLERY</h2>
    <p class="gallery__text">過去開催の写真</p>

    <!-- カテゴリの選択 -->
    <div class="gallery__category">
      <a href="<?php echo esc_url(add_query_arg('category', 'ebr2023', home_url('/gallery'))); ?>">EBR2023</a> |
      <a href="<?php echo esc_url(add_query_arg('category', 'ebr2024', home_url('/gallery'))); ?>">EBR2024</a>
    </div>

    <div class="galleryImg__list">
      <?php  
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'ebr2023';

      $galleryArgs = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => 10, 
        'paged'          => $paged,
        'orderby'        => 'rand',
        'tax_query'      => array(
          array(
            'taxonomy' => 'media_category',
            'field'    => 'slug',
            'terms'    => $selected_category,
          ),
        ),
      );

      $media_query = new WP_Query($galleryArgs);

      if ($media_query->have_posts()):
        while ($media_query->have_posts()): $media_query->the_post();
          $img_url = wp_get_attachment_url(get_the_ID());
      ?>
          <div class="galleryImg__listItem">
            <img src="<?php echo esc_url($img_url); ?>" alt="ギャラリー画像">
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else:
      ?>
    </div>
    <p>ギャラリー写真はありません</p>
    <?php endif; ?>
  </div>

  <p class="galleryImg__listItem__text">※クリックで拡大できます</p>

  <!-- ページネーション -->
  <div class="galleryArchive__pagination">
    <?php  
    echo paginate_links(array(
      'total'     => $media_query->max_num_pages,
      'current'   => $paged,
      'prev_text' => __('←'),
      'next_text' => __('→'),
    ));
    ?>
  </div>

  <!-- モーダル -->
  <div class="modal" id="imageModal">
    <div class="modal__wrap">
      <span class="modal__close">&times;</span>
      <img class="modal__content" id="modalImage">
      <div id="caption"></div>
    </div>
  </div>

</section>
<?php get_footer(); ?>
