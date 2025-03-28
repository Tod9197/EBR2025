<?php

/** 
 * * Template Name: トップページ
 * @package WordPress
 * @Template Post Type: post, page,
 */
get_header(); ?>

<!-- メインビジュアル -->
<section class="mainVisual">
    <h1 class="mainVisual__title">Shohokan's<br><span class="title__gold">E</span>nglish<br><span class="title__gold">B</span>attle<br><span class="title__gold">R</span>oyale</h1>

    <!-- 応援金 -->
<!-- <div class="fundingModal__layer">
  <div class="fundingWrap">
    <div class="funding">
      <div class="fundingInner">
        <div class="fundingTitle__wrap">
        <span class="fundingTitle__span"></span>
        <h2 class="fundingTitle"> 応援金のご協力お願いします!!</h2>
        <button class="fundingModal__close">×</button>
        </div>
        <p class="fundingText">皆様、こんにちは！<br>
私たち英語道場升砲館は、国際人としての成長を目指す門下生一同によるスピーチコンテストを12月14日（土）に開催いたします。このコンテストは、日々の稽古の成果を発表し、英語発音の重要性を広める貴重な機会です。<br class="pc-only">しかしながら、コンテスト開催には多額の費用が必要です。<br class="pc-only">当日参加する方の参加費だけで賄うには参加費が高額となり、参加者の負担が大きくなるため、皆様に応援金のお願いをしております。皆様のご支援により、英語のスキル向上を目指す仲間たちが力を発揮できる場を作りたいと思います。<br class="pc-only">どうぞご協力いただきますようよろしくお願いいたします。</p>

 <p class="fundingButton__text">詳しくは下記のリンクをクリックしてください。</p>
 <div class="fundingButton__flex">
  <a class="fundingButton -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSfpg-h2_HX_NzEDAngFNsBK8tVygYj_ox8XTKMN_toTxZMV4Q/viewform" target="_blank" rel="noopener noreferrer">ゲストの方はこちら</a>
  <a class="fundingButton -student" href="https://docs.google.com/forms/d/e/1FAIpQLSeFABwtbdj6jb9XoogbIfdcJ5Sd_2CbGZvDfFTDcVAGwWg3EQ/viewform" target="_blank" rel="noopener noreferrer">門下生はこちら</a>
  </div>
    <p class="fundingText -second">升砲館EBR実行委員会</p>
        </div>
      </div>
    </div>
</div> -->
 <!-- 応援金ここまで -->
</section>

<!-- タイマー -->
<section class="Timer">
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
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLScz-y88pjXqvP2gWjCGlr7LqggBdRvFXqW9cdBiWuRk3Pxg8Q/viewform" id="js-request-guest"
    target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLSdB7oQH7ayFtWY23RTtxR809xoHlZo_noQ2SdcgFE87GA0DIw/viewform" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
  <a href="#" class="backToTop__button -mobile" id="backToTop">↑</a>
</div> -->
<!-- 申し込みリンクここまで -->
  <div class="Timer__wrap">
  <div class="inner">  
    <h2 class="Timer__title"><span>NEXT <br class="Timer__title__spOnly">STAGE</span><br>次の闘いまで</h2>
    <div class="Timer__section">
    あと<span class="Timer__text" id="timer-day"></span>日
    <span class="Timer__text" id="timer-hours"></span>時間
    <span class="Timer__text" id="timer-min"></span>分
    <span class="Timer__text" id="timer-sec"></span>秒
  </div>
  <div class="Timer__scheduleWrap">
    <p class="Timer__scheduleText">【開催日時】<br class="sp-only02">2026年01月31日(土)時間未定</p>
    <!-- <p class="Timer__scheduleText -second">（16時定刻スタートのため、<br class="sp-only02">15時45分集合にご協力ください。）</p> -->
    <p class="Timer__schedulePrice">【参加費用】未定</p>
    <p class="Timer__schedulePlace">【開催場所】未定
      <!-- ザ・グラン銀座 -->
      <br class="sp-only02">
    </p>
  </div>
  <!-- 申し込み -->

   <div class="requestWrap">
    <div class="requestInner__line">
  <p class="requestText"><span>大人</span>が<span>本気</span>で<br><span>学び、遊び、挑み、魅せる</span></p>
  <div class="appreciateText__wrap">
  <p class="appreciateText">2025年<span>升砲館</span>は<span>創立10周年</span>を迎えます。<br>節目の年に行われる<span>EBR2025(English Battle Royal 2025)</span> <br>創立以来、<span>館長Shawn</span>の教えのもと、多くの門下生が本気で英語を学び、自身の限界に挑み、成長してきました。<br>今年は10周年を迎える記念すべきEBR2025を原点に立ち返り、門下生が今まで以上に真剣にコンテストに向けて稽古を行っていきます。そして私達EBR実行委員会は記念すべきEBR2025年に一つのスローガンを掲げました！<br><span class="text-center">「大人が本気で<br class="sp-only">学び、遊び、挑み、魅せる」</span>
  大人になってからでもネイティブ文化に根ざした英語を話せることを目指して本気で学ぶ、
  大人であっても照れることなく本気で遊戯性を楽しむ、大人がそれぞれ本気で勝利獲得を目指して挑戦する、
  そうやって、大人が本気でやっているEBRで、観客を余すところなく魅了する。
  <br>そうそれこそが升砲館門下生のあり方。大人達が子供のように無邪気に楽しみ、まるでネイティブ、いやネイティブを超える英語のスピーチを披露し、熱い闘いを繰り広げる。この記念すべきEBR2025に参加することは必ずあなたのこれからの人生に良い影響を与えます！ぜひご参加ください！
  </p>
  <p class="appreciateText -second">升砲館EBR実行委員会</p>
  </div>
  </div> 
  </div>
  
  <!-- <div class="requestWrap">
    <div class="requestInner__line">
  <p class="requestText">EBRに申し込む</p>
  <div class="requestButton__flex">
  <a class="requestButton -guest" href="https://docs.google.com/forms/d/e/1FAIpQLScz-y88pjXqvP2gWjCGlr7LqggBdRvFXqW9cdBiWuRk3Pxg8Q/viewform" target="_blank" rel="noopener noreferrer">ゲストの方はこちら</a>
  <a class="requestButton -student" href="https://docs.google.com/forms/d/e/1FAIpQLSdB7oQH7ayFtWY23RTtxR809xoHlZo_noQ2SdcgFE87GA0DIw/viewform" target="_blank" rel="noopener noreferrer">門下生はこちら</a>
  </div>
  </div> 
  </div> -->
   <!-- 申し込みここまで -->

<!-- 応援金ここから -->
  <!-- <div class="supportWrap">
    <div class="supportInner__line">
      <p class="supportText">EBR応援金</p>
      <p class="supportDescription">EBRでは皆様からの応援金を募集しています。<br class="sp-only">応援金額に応じて素敵な特典もございます。<br>詳しくは下記のリンクをクリックしてください。</p>
      <div class="supportButton__flex">
        <a class="supportButton -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSfpg-h2_HX_NzEDAngFNsBK8tVygYj_ox8XTKMN_toTxZMV4Q/viewform" target="_blank" rel="noopener noreferrer">ゲストの方はこちら</a>
        <a class="supportButton -student" href="https://docs.google.com/forms/d/e/1FAIpQLSeFABwtbdj6jb9XoogbIfdcJ5Sd_2CbGZvDfFTDcVAGwWg3EQ/viewform" target="_blank" rel="noopener noreferrer">門下生はこちら</a>
      </div>
    </div> 
</div> -->
<!-- 応援金ここまで -->
  </div>
  </div>

  <div class="TimerImg__wrap">
    <img class="TimerImg" src="<?php echo esc_url(get_theme_file_uri('img/ebr2024/ebr2024-02.jpg')); ?>" alt="EBR2024">
     <img class="TimerImg" src="<?php echo esc_url(get_theme_file_uri('img/ebr2024/ebr2024-01.jpeg')); ?>" alt="EBR2024">
    <img class="TimerImg" src="<?php echo esc_url(get_theme_file_uri('img/ebr2024/ebr2024-03.jpg')); ?>" alt="EBR2024">
  </div>
</section>

<!-- Topics -->
<section class="topics" id="topics">

<?php  
$paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
$args = [
  'page_type' => 'post',
  'posts_per_page' => 3,
  'order' => 'DESC',
  'paged' => $paged
];
$the_query = new WP_Query($args);
?>

  <div class="inner">
  <h2 class="topicsTitle" data-en="お知らせ">TOPICs</h2>
  <div class="topicsSubTitle">お知らせ</div>
  <?php if($the_query -> have_posts()) : ?>
    
    <ul class="topicsPost__list">
    <?php while($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <li class="topicsPost__listItem">
    <a class="topicsPost__listLink" href="<?php the_permalink(); ?>">
    <?php if(has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('thumbnail',['class' => 'topicsPost__img']) ?>
    <?php else: ?>
        <img class="topicsPost__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ebr2023-33.png" alt="代替画像">
    <?php endif; ?>
    <div class="topicsPost__wrap">
    <div class="topicsPost__flex">
      <div class="topicsPost__date"><?php echo get_the_date('Y.m.d') ?></div>
      <?php  
        $custom_author = get_post_meta(get_the_ID(), 'custom_author_name',true);
        if($custom_author) : 
        ?>
        <div class="topicsPost__author">投稿者: <?php echo esc_html($custom_author); ?></div>
        <?php else : ?>
        <div class="topicsPost__author">投稿者: <?php the_author(); ?></div>
        <?php endif; ?>
      </div>
      <div class="topicsPost__title">
        <?php $title = get_the_title(); 
        if(mb_strlen($title) > 27){
          echo mb_strimwidth($title,0,40,'...');
        } else {
          echo esc_html($title);
        }
        ?>
      </div>
      </div>
    </a>
    </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    </ul>

    <!-- ページネーション -->
    <div class="galleryArchive__pagination">
      <?php  
      echo paginate_links(array(
        'total' => $the_query ->max_num_pages,
        'current' => max(1,get_query_var('paged')),
        'prev_text' => __('←'),
        'next_text' => __('→'),
      ));
      ?>
    </div>

    <?php else: ?>
      <p class="topicsPost__noPost">まだ投稿はありません。</p>
  <?php endif; ?>
  </div>
</section>

<section class="ourGoals">
  <div class="inner">
    <h2 class="ourGoals__title">GOALs
    </h2>
    <p class="ourGoals__subTitle">EBRを通して目指すもの</p>
    <p class="ourGoals__text">2026年1月31日に開催されるEBR。升砲館門下生はこの1日に向けて1年間稽古を繰り返し、英語発音、スピーチ、プレゼンの技術などを向上させていきます。ただ単にうまくなるだけではなく、升砲館門下生にしか目指せない領域を狙い日々研鑽を積んでいます。そしてEBRへの活動を通して私たち門下生が目指しているところは次の2点に集約されます。</p>
    <ul class="ourGoals__list">
      <li class="ourGoals__item">① 1年に一度の大きな舞台「EBR」での勝利を目標に据えることで、自身の成長を加速する</li>
      <li class="ourGoals__item">② ネイティブを超える英語プレゼン力をEBRで披露し、升砲館の凄さを世に見せつける</li>
    </ul>
    <p class="ourGoals__text">ネイティブを超える英語なんて人によっては冗談だと思うかもしれません。<br>しかし升砲館に一度でも触れたことのある方はそれが冗談ではないと知っています。大人になって英語を習得するのが難しいという世間的な考えをよそ目に私たち升砲館門下生は今この瞬間も英語話者として日々を生きています。<br>そしてネイティブを超えるといったからには半端なことはできません。最高の晴れ舞台であるEBR2025に向けて楽しみながら猛稽古を繰り返しているのです。ここまで読んでもうEBR2025を見に来たくなったのではないですか？<br>さあ、升砲館創立10周年を迎える特別な年に開催されるEBR2025。</p>
  </div>
</section>

<!-- 昨年の声 -->
<section class="impression">
  <div class="impression__inner">
  <h2 class="impression__title">VOICEs</h2>
  <p class="impression__subTitle"> 2024年参加者の声</p>
  <div class="impressionWords">
    <ul class="impressionList">
      <li class="impressionList__item">
      <div class="impressionWords__itemContent">
        <p class="impressionWords__itemText">本番に向けてのデリバリー出場者との密な稽古がとても楽しかったです。<br>通常稽古ではない、同じ目標に向けて頑張る、時には12時を超えたこともありましたが、学生時代の文化祭のような感じでとても楽しかったです。<br>楽しいだけではなく、ネイティブならではのリズムやアクセントが身につき、今でも夢に見ることがあります笑 EBRを通じて英語話者としての感覚も身につけられる貴重な機会でした。</p>
        <span class="impressionWords__itemName">升砲館門下生 M</span>
      </div>
      </li>
      <li class="impressionList__item">
      <div class="impressionWords__itemContent">
        <p class="impressionWords__itemText">EBRに、参加するなら、やはり勝ちたい。前年は、負けているので尚更勝ちたい。<br>通常の稽古とは違い、グループでポイントを競い勝ち負けがつきます。 勝負なので、競技種目が難しい。難しいけれど、それをどのようにしたら上手くできるのかと考え、稽古するので、私にとっては、なかなか良い刺激になりました。<br>競技種目は、アテレコでしたが、会話の間、声のトーンなど俳優になりきってやってみるのが面白かったです。</p>
        <span class="impressionWords__itemName">升砲館門下生 J</span>
      </div>
      </li>
      <li class="impressionList__item">
      <div class="impressionWords__itemContent">
        <p class="impressionWords__itemText">EBRは1年に1度の体育祭のようでした。個人戦も団体戦もあり､自分1人のためではなく､チームが勝つための作戦を練り練習をしました。その場で考えて､それを形にしていくことの楽しさと団結力で勝ち抜こうとする気持ちが芽生え、第二の青春を味わうことができました。</p>
        <span class="impressionWords__itemName">升砲館門下生 H</span>
      </div>
      </li>
      <li class="impressionList__item">
      <div class="impressionWords__itemContent">
        <p class="impressionWords__itemText">初めて参加したEBRを一言で言うなら、間違いなく「最高！！」でした。よくわからないまま音節分化にエントリーすると、あっという間にチームのメンバーが「一緒に稽古しない？」と声をかけてくださる、この環境。学生時代みたいでとても楽しいと思いました。そして稽古を続けているうちに楽しいだけではなく、ドラマを見ている時にゴニョゴニョとしか聞こえなかった英語のセリフが、ところどころ英語として聞こえる時があることに気が付きました。音節分化って、すごい！！個人の向上を目指して始めた稽古も、EBRが近づくにつれてチームの勝利の為にとより熱が入りました。この一体感も、体育祭や文化祭的で楽しめました。</p>
        <span class="impressionWords__itemName">升砲館門下生 A</span>
      </div>
      </li>
      <li class="impressionList__item">
      <div class="impressionWords__itemContent">
         <p class="impressionWords__itemText">何よりよかったのはやはり本番です。
          仲間たちがあの立派なステージ上やモニターの中で
          自分の種目を堂々と、かっこよく、ぶっ放していく姿に心躍りました。
          そして、いざ自分の番。残念ながら、音節分化の注意点は頭から抜けてしまって
          「しゃべれる人間のフリをする」「ぺこぺこしない、場の支配権を取りに行け」
          この二つだけをよりどころに、"k_ar_as_um_i" をぶっ放しました。
          もちろん、気分は最高！でした。
          さあ、来年のEBRではどんな自分になれるだろうか。
          そんなワクワクと成長を与えてくれるのが私にとってのEBRです。</p>
        <span class="impressionWords__itemName">升砲館門下生 A</span>
      </div>
      </li>
       <li class="impressionList__item">
      <div class="impressionWords__itemContent">
         <p class="impressionWords__itemText">EBRまでの稽古で自身にとってブレイクスルーとなる出来事が2つありました。1つ目はEBRに向けたShawnによる特別稽古でご指導いただいた時、ネイティヴが話す英語とは何ぞやということが真に腹に落ちました。2つ目はEBRに向けたチーム対抗の歌の稽古をしている時、門下生の仲間がくれたアドバイスで喉を開くことができ、以来軽々とお腹から発声できるようになりました。当日は素晴らしく楽しいものであったのは言うまでもなく、本番に向かうまでに師匠と門下生の仲間と過ごした時間は財産です。今年も昨年を上回る濃い時間を過ごしていきたいですね。</p>
        <span class="impressionWords__itemName">升砲館門下生 T</span>
      </div>
      </li>
    </ul>
  </div>
  </div>
</section>

<!-- About -->
<section class="about" id="about">
  <div class="inner">
      <h2 class="aboutTitle">ABOUT <span>EBR</span></h2>
      <p class="aboutSubTitle -first">
    What's <span>E</span>nglish<span>B</span>attle<span>R</span>oyale(EBR) ?
    </p>
      <div class="aboutFlex -first">
      <div class="aboutContents -first">
      <p class="aboutText">東京・京都(比叡平)に本拠を置く唯一無二の英語道場<br class="pc-only">「升砲館」 <br>
      師匠である館長Shawnの教えのもと今までに多くの<br class="pc-only">「英語の達人」を生み出してきました。</p>
      <p class="aboutText">升砲館門下生の英語を聞いた人は皆<br>
    「え！?あの人英語上手くない！？」<br class="sp-only02">と息巻きます。</p>
    <p  class="aboutText">そんな英語の達人たちが年に1度日頃の稽古の成果を披露する場</p>
    <p class="aboutText">チーム対抗スピーチコンテスト <br class="sp-only01">
    「English Battle Royale」<br class="sp-only02">(通称EBR)</p>
    <p class="aboutText">2つのチームに分かれた門下生が5つの種目にエントリーし優勝をかけて熱戦を繰り広げます。<br>升砲館門下生の話す英語はまさにネイティブそのもの！！<br>その威風堂々とした話しぶりに驚嘆し感動を覚えることでしょう！</p>
    <p class="aboutText">英語、スピーチの概念を一変させる記念すべき1日。ぜひご参加ください！</p>
    </div>
    <div class="aboutImg__box -first">
     <div class="aboutImg -first"></div>
     <div class="aboutImg -second"></div>
     </div>
  </div>

   <p class="aboutSubTitle -second">
    EBRは他のスピーチコンテストとはここが違う！！
  </p>
  <div class="aboutFlex -second">
    <div class="aboutContents">
      <ul class="aboutContents__list">
        <li class="aboutContents__listItem">
          <span>1</span>チーム対抗戦
        <p class="aboutText -second">
          一般的にスピーチと言えば一人で話す「個人戦」が普通。
          <br class="pc-only02">
          EBRでは2チームに分かれて優勝を争う「団体戦」を採用。
          <br class="pc-only02">
          個人の力量に加え、チームワークが試されるEBRは
          <br class="pc-only02">
          普通のスピーチより楽しく、興奮、感動します。
        </p>
        <img class="aboutContents__img" src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-36.jpg')); ?>" alt="コンテスト画像1">
        </li>
        <li class="aboutContents__listItem">
          <span>2</span>多様な競技種目
        <p class="aboutText -second">
          スピーチだけでなく、洋楽をチーム毎に合唱する「歌合戦」や
          <br class="pc-only02">
          有名な洋画の英語を吹き替える「アテレコ」を上映するなど
          <br class="pc-only02">
          多様な競技種目があり、やる方も見る方もみんなが楽しめます。
        </p>
          <!-- 詳細ページリンク -->
          <img class="aboutContents__img" src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-35.jpg')); ?>" alt="コンテスト画像">
    <a class="contestContents__link -about" href="<?php echo esc_url(home_url('/contest')); ?>">競技詳細ページは<br class="sp-only">こちら</a>
        </li>
        <li class="aboutContents__listItem">
          <span>3</span>パーティー
        <p class="aboutText -second">
          コンテストの後はフォーマルパーティー！
          <br class="pc-only02">
          国際基準の振る舞いを楽しく学べる場であり
          <br class="pc-only02">
          色んなバックグラウンドを持つ方々と交流ができます。
        </p>
        <img class="aboutContents__img" src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-37.jpg')); ?>" alt="パーティー画像">
        </li>
      </ul>
    </div>
    <div class="aboutImg__box -second">
    <div class="aboutImg -fourth"></div>
    <div class="aboutImg -third"></div>
    <div class="aboutImg -fifth"></div>
    <div class="aboutImg -sixth"></div>
    </div>
  </div>

  <div class="aboutPictures">
    <ul class="aboutPictures__list">
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-05.jpg')); ?>" alt="パーティー画像2">
      </li>
       <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-15.jpg')); ?>" alt="パーティー画像1">
      </li>
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-13.jpg')); ?>" alt="パーティー画像3">
      </li>
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-21.jpg')); ?>" alt="パーティー画像3">
      </li>
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-18.jpg')); ?>" alt="パーティー画像3">
      </li>
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-20.jpg')); ?>" alt="パーティー画像3">
      </li>
    </ul>
    <p class="aboutPrice">【参加費】未定
        <!-- <br>コンテスト＆パーティ：20,000円 -->
  </p>
  </div>
  <!-- <div class="requestWrap -about">
    <div class="requestInner__line">
  <p class="requestText -about">EBRに申し込む</p>
  <div class="requestButton__flex -about">
  <a class="requestButton -guest" href="https://docs.google.com/forms/d/e/1FAIpQLScz-y88pjXqvP2gWjCGlr7LqggBdRvFXqW9cdBiWuRk3Pxg8Q/viewform" target="_blank" rel="noopener noreferrer">ゲストの方はこちら</a>
  <a class="requestButton -student" href="https://docs.google.com/forms/d/e/1FAIpQLSdB7oQH7ayFtWY23RTtxR809xoHlZo_noQ2SdcgFE87GA0DIw/viewform" target="_blank" rel="noopener noreferrer">門下生はこちら</a>
  </div>
  </div>
  </div> -->

  </div>
</section>

<!-- ShowDown -->
<div class="showDown__bar">
      <div class="showDown__barWrap">
        <div class="showDown__Flex">
          <p class="showDown__barTitle -third">Team e-Go!</p> 
          <p class="showDown__barTitle -second">VS</p>
          <p class="showDown__barTitle -first">Team<br class="sp-only02"> H. Blacks</p>
        </div>
        <div class="showDown__barImg"></div>
      <div class="showDown__barImg -second"></div>

      <div class="showDown__barImg -third"></div>
      </div>
</div>

<!-- <section class="showDown__Description">
  <div class="inner">
    <h2 class="showDown__title">連覇か!!王座奪還か!?</h2>
    <div class="showDown__textRight">
      <div class="showDown__textWrap">
    <p class="showDown__text -first">昨年のEBRで大接戦の末<br>見事優勝を果たしたTeam e-Go!<br>今年はさらなる上達を目論み、<br>リーダーSherryを筆頭に<br>メンバー全員が貪欲に猛稽古に励む。<br>昨年よりパワーアップした<br>Team e-Go!は前回王者のプライド
    <br>を胸に大会連覇を狙う。<br>
    ２度目の大輪の華を<br class="sp-only">咲かせることができるか！？</p>
    </div>
    <div class="showDown__DescriptionImg"></div>
    </div>

    <div class="showDown__textLeft">
      <div class="showDown__textWrap">
    <p class="showDown__text -second">対して僅かの差で優勝を逃した<br>Team H. Blacks<br>
    このまま黙っていられない！<br>
    リーダーKirkを中心に想いは一つ。<br>
    昨年の悔しさをバネに<br class="sp-only02">今年こそはとリベンジを誓う。<br>
    持ち前の腹黒さで虎視眈々と優勝を狙う。<br>
    1年間の稽古の成果を発揮し<br>
    見事王座奪還となるか！？
    </p>
</div>
<div class="showDown__DescriptionImg -second"></div>
    </div>
  </div>
</section> -->

<!-- 当日のスケジュール -->
<!-- <section class="timeTable" id="timetable">
  <div class="inner">
    <div class="timeTable__contents">
  <div class="timeTable__wrap">
    <div class="timeTable__outline">
      <div class="timeTable__inline">
         <h2 class="timeTableTitle" data-en="当日の流れ">TIME TABLE</h2>
         <p class="timeTable__subTitle">当日の流れ</p>
         <ul class="timeTable__list">
          <li class="timeTable__listItem">15:00 <br><span>門下生集合・コンテスト会場設営・準備</span></li>
          <li class="timeTable__listItem">16:00 ~ 18:00 <br><span>コンテスト</span></li>
          <li class="timeTable__listItem">18:00 ~ 18:30 <br><span>ゲスト休憩・着替え<br>実行委員会パーティー会場設営・準備</span></li>
          <li class="timeTable__listItem">18:30 ~ 19:00 <br><span>パーティー受付</span></li>
          <li class="timeTable__listItem">19:00 ~ 21:30 <br><span>パーティー</span></li>
        </ul> -->

        <!-- 詳細ページリンク -->
    <!-- <a class="contestContents__link" href="<?php echo esc_url(home_url('/contest')); ?>">競技詳細ページは<br class="sp-only">こちら</a>
      </div>
    </div>

  </div>
  </div>
  </div>
</section> -->


<!-- Gallery -->
<section class="gallery" id="gallery">
  <div class="inner">
    <h2 class="galleryTitle" data-en="画像集">GALLERY</h2>
    <p class="gallery__text">過去開催の写真</p>
       <!-- 年代を選択 -->
    <div class="galleryCategory">
      <a class="galleryCategory__link" href="<?php echo esc_url(add_query_arg('category', 'ebr2024', home_url('/gallerylist2024'))); ?>">EBR2024の画像を<br class="sp-only">もっと見る</a>
      <a class="galleryCategory__link" href="<?php echo esc_url(add_query_arg('category', 'ebr2023', home_url('/gallerylist2023'))); ?>">EBR2023の画像を<br class="sp-only">もっと見る</a>
    </div>

<div class="galleryImg__list">
  <?php  
  $galleryArgs = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'post_status' => 'inherit',
    'posts_per_page' => 6,
    'orderby' => 'rand',
    'tax_query' => array(
      array(
        'taxonomy' => 'media_category',
        'field' => 'slug',
        'terms' => 'ebr2024'
      ),
    ),
  );
  $media_items = get_posts($galleryArgs);
  
  if($media_items):
    foreach($media_items as $media) :
      $img_url = wp_get_attachment_url($media->ID, 'full');
  ?>
  <div class="galleryImg__listItem">
    <img src="<?php echo esc_url($img_url); ?>" alt="当日の画像">
  </div>
<?php
endforeach;
else :
?>
</div>
<p>ギャラリー写真はありません</p>
<?php endif; ?>
  </div>
  <p class="galleryImg__listItem__text">※クリックで拡大できます</p>
  <a class="galleryImg__link" href="<?php echo esc_url(home_url('/gallerylist')) ?>">写真をもっと見る</a>

  <!-- モーダル -->
  <div class="modal" id="imageModal" >
    <div class="modal__wrap">
     <span class="modal__close">&times;</span>
    <img class="modal__content" id="modalImage">
    <div id="caption"></div>
    </div>
  </div>

</section>

<!-- Access -->
<section class="access" id="access">
  <div class="inner">
    <h2 class="accessTitle">ACCESS</h2>
    <div class="accessSubTitle">開催場所</div>
    <h3 class="accessText">未定</h3>
    <!-- <h3 class="accessText">ザ・グラン銀座<br class="sp-only02">（GINZA SIX 13階）</h3> -->
    <!-- <div class="accessMap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12965.18691448534!2d139.7636564!3d35.669695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be639f83e41%3A0x480b874be69c390e!2sTHE%20GRAND%20GINZA!5e0!3m2!1sja!2sjp!4v1731926963464!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <p class="accessText -second">東京都中央区銀座六丁目10番1号　GINZA SIX 13階</p>
    <p class="accessText -second">東京メトロ 銀座線・丸ノ内線・日比谷線「銀座駅」A3 出口より徒歩2分</p>
    <p class="accessText -second">東京メトロ 日比谷線、都営地下鉄 浅草線「東銀座駅」A1出口より徒歩3分</p>
    <a class="accessLink" href="https://www.grandginza.com/#page1" target="_blank" rel="noopener noreferrer">ザ・グラン銀座公式HPはこちら</a>
  </div> -->
</section>

<!-- 応援金 -->
<!-- <section class="support">
  <div class="inner">
  <div class="supportWrap">
    <div class="supportInner__line">
      <p class="supportText">EBR応援金</p>
      <p class="supportDescription">EBRでは皆様からの応援金を募集しています。<br class="sp-only">応援金額に応じて素敵な特典もございます。<br>詳しくは下記のリンクをクリックしてください。</p>
      <div class="supportButton__flex">
        <a class="supportButton -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSfpg-h2_HX_NzEDAngFNsBK8tVygYj_ox8XTKMN_toTxZMV4Q/viewform" target="_blank" rel="noopener noreferrer">ゲストの方はこちら</a>
        <a class="supportButton -student" href="https://docs.google.com/forms/d/e/1FAIpQLSeFABwtbdj6jb9XoogbIfdcJ5Sd_2CbGZvDfFTDcVAGwWg3EQ/viewform" target="_blank" rel="noopener noreferrer">門下生はこちら</a>
      </div>
    </div> 
  </div>
</div>
</section> -->
<!-- 応援金ここまで -->


<!-- フッター -->
<?php get_footer(); ?>
