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

    <div class="galleryImg__list -lower">
      <?php  
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $galleryArgs = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => 5,
        'paged'          => $paged,
        'orderby'        => 'rand',
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


</section>

<?php get_footer(); ?>
