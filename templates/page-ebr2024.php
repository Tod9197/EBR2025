<?php  
/*
Template Name: EBR2024 ギャラリー
*/
get_header();
?>

<!-- メインビジュアル -->
<section class="mainVisual -gallery">
    <h1 class="mainVisual__title -gallery">gallery</h1>
</section>

<section class="gallery" id="gallery">
  <div class="inner">
    <h2 class="galleryTitle -lower">GALLERY (EBR2024)</h2>
    <p class="gallery__text -lower">過去開催の写真 (EBR2024)</p>

     <!-- 年代を選択 -->
    <div class="galleryCategory">
      <a class="galleryCategory__link" href="<?php echo esc_url(add_query_arg('category', 'ebr2024', home_url('/gallerylist2024'))); ?>">EBR2024の画像を<br class="sp-only">もっと見る</a>
      <a class="galleryCategory__link" href="<?php echo esc_url(add_query_arg('category', 'ebr2023', home_url('/gallerylist2023'))); ?>">EBR2023の画像を<br class="sp-only">もっと見る</a>
    </div>

    <div class="galleryImg__list -lower">
      <?php  
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $galleryArgs = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => 20,
        'paged'          => $paged,
        'orderby'        => 'DESC',
        'tax_query'      => array(
          array(
            'taxonomy' => 'media_category',
            'field'    => 'slug',
            'terms'    => 'ebr2024', // 固定
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
<a class="toTop__button" href="../">TOPへ戻る</a>
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

<?php get_footer(); ?>
