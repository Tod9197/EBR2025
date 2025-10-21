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
    <a class="requestLink__item -guest" href="https://forms.gle/CANfPHXf7euAwXPv5" id="js-request-guest" target="_blank" rel="noopener noreferrer" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="https://forms.gle/heiLwP3w1VTeM9XM7" id="js-request-student" target="_blank">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
  <a href="#" class="backToTop__button -mobile" id="backToTop">↑</a>
</div>
<!-- 申し込みリンクここまで -->

<!-- 画像集 -->
<section class="gallery" id="gallery">
  <div class="inner">
    <h2 class="galleryTitle -lower" data-en="画像集">GALLERY</h2>
    <p class="gallery__text -lower">過去開催の写真</p>

    <!-- 年代を選択 -->
    <div class="galleryCategory">
      <a class="galleryCategory__link" href="<?php echo esc_url(add_query_arg('category', 'ebr2024', home_url('/gallerylist2024'))); ?>">EBR2024の画像を<br class="sp-only">もっと見る</a>
      <a class="galleryCategory__link" href="<?php echo esc_url(add_query_arg('category', 'ebr2023', home_url('/gallerylist2023'))); ?>">EBR2023の画像を<br class="sp-only">もっと見る</a>
    </div>
    
    <!-- 2024年画像集 -->
    <?php  
      // 選択されたカテゴリを取得（デフォルト: ebr2024）
      $selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'ebr2024';

      // カテゴリの情報を取得
      $category_term = get_term_by('slug', $selected_category, 'media_category');
      if ($category_term) :
      ?>
        <h3 class="galleryCategory__title"><?php echo esc_html($category_term->name); ?></h3>
      <?php endif; ?>
    <div class="galleryImg__list -lower">
      <?php  
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'ebr2024';
      $galleryArgs = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => 8, 
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
  <!-- 2024年画像集ここまで-->


  <!-- 2023年画像集 -->
  <?php  
      // 選択されたカテゴリを取得（デフォルト: ebr2023）
      $selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'ebr2023';

      // カテゴリの情報を取得
      $category_term = get_term_by('slug', $selected_category, 'media_category');
      if ($category_term) :
      ?>
        <h3 class="galleryCategory__title"><?php echo esc_html($category_term->name); ?></h3>
      <?php endif; ?>
    <div class="galleryImg__list -lower">
      <?php  
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'ebr2023';
      $galleryArgs = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => 8, 
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
  <!-- 2023年画像集ここまで -->

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

<?php get_footer(); ?>
