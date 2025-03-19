<?php  

/*
Template Name: 協賛者一覧ページ
*/
get_header();

?>

<!-- メインビジュアル -->
<section class="mainVisual -sponsors">
    <h1 class="mainVisual__title -sponsors">sponsors</h1>
</section>

<!-- 申し込みリンク -->
<!-- <div class="requestLink">
  <div class="requestLink__flex">
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSeN66tRCIuVy8_pssjk8pJMNnZeN5tHjHtCJwJsNybvOeVeBw/viewform" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">(ゲストの方)<br>　申し込む</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLScj2b2ZH2SKMyr6FCwwrMk-jblrtCCySUv3Il8_u3893Rt24w/viewform" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text -student">(門下生)<br>申し込む</p>
    </a>
  </div>
  <a href="#" class="backToTop__button" id="backToTop">↑</a>
</div>

<div class="requestLink -mobile">
  <div class="requestLink__flex -mobile">
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSeN66tRCIuVy8_pssjk8pJMNnZeN5tHjHtCJwJsNybvOeVeBw/viewform" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLScj2b2ZH2SKMyr6FCwwrMk-jblrtCCySUv3Il8_u3893Rt24w/viewform" id="js-request-student">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
  <a href="#" class="backToTop__button -mobile" id="backToTop">↑</a>
</div> -->
<!-- 申し込みリンクここまで -->

<!-- Sponser -->
<section class="sponsors">
  <div class="inner">

    <div class="sponsors__contents">
      <div class="sponsors__contents">
        <div class="sponsors__outline">
          <div class="sponsors__inline">
            <h2 class="sponsors__title">SPONSORs</h2>
            <p class="sponsors__subTitle">協賛一覧</p>
            <div class="sponsors__inner">
              <h3 class="sponsors__innerTitle">2023年度EBR <br class="sp-only02">協賛企業様・個人様</br></h3>
               <ul class="sponsors__list -first">
                <li class="sponsors__listItem -first">
                  株式会社 Baggio 様
                </li>
                <li class="sponsors__listItem -first">
                  株式会社 バーテック 様
                 <a class="sponsors__link" href="https://burrtec.co.jp/" target="_blank" rel="noopener noreferrer">https://burrtec.co.jp/</a>
                </li>
                <li class="sponsors__listItem -first">
                  易選流 様
                <a class="sponsors__link" href="https://www.ekisenryu.com/" target="_blank" rel="noopener noreferrer">https://www.ekisenryu.com/</a>
                </li>
                <li class="sponsors__listItem -first">イングリッシュ・ドクター<span >®</span> 西澤ロイ 様
               <a class="sponsors__link" href="https://english-doctor.co.jp/" target="_blank" rel="noopener noreferrer">https://english-doctor.co.jp/</a>
              </li>
                <li class="sponsors__listItem -first">
                  祇園嵯峨野 様
                <a class="sponsors__link" href="https://gion-sagano.com/" target="_blank" rel="noopener noreferrer">https://gion-sagano.com/</a>
                </li>
                <li class="sponsors__listItem -first">
                  メタハンズ(株) 様
                <a class="sponsors__link" href="https://metaskin-kyoto.com/" target="_blank" rel="noopener noreferrer">https://metaskin-kyoto.com/</a>
                </li>
                <li class="sponsors__listItem -first">
                  〜特攻〜 TOKKOU 様
               <a class="sponsors__link" href="https://www.instagram.com/tokkou_bld/?igsh=cXIzZGgwYzBpZjZ4&utm_source=qr" target="_blank" rel="noopener noreferrer">
                <?php 
                $url = "https://www.instagram.com/tokkou_bld/?igsh=cXIzZGgwYzBpZjZ4&utm_source=qr";
                if(mb_strlen($url) > 50){
                  echo mb_strimwidth($url, 0, 50, '...');
                } else { echo esc_html($url);
                }
                ?>
                </a>
                </li>
                <li class="sponsors__listItem -first">
                  龍の巣 様
                <a class="sponsors__link" href="https://www.ryu-nosu.co.jp/" target="_blank" rel="noopener noreferrer">https://www.ryu-nosu.co.jp/</a>
                </li>
              </ul>
              <ul class="sponsors__list -second">
                <li class="sponsors__listItem -second">
                  足楽ぽっかぽか/mog. 様
                   <a class="sponsors__link -second" href="https://sokupoka-mog.square.site/" target="_blank" rel="noopener noreferrer">https://sokupoka-mog.square.site/</a>
                </li>
                <li class="sponsors__listItem -second">
                  ビストロ[グラッソ] 様
                <a class="sponsors__link -second" href="https://grasso.jp/" target="_blank" rel="noopener noreferrer">https://grasso.jp/</a>
                </li>
                <li class="sponsors__listItem -second">
                  BUNGE 様
                <a class="sponsors__link -second" href="https://bungelingbay.com/" target="_blank" rel="noopener noreferrer">https://bungelingbay.com/</a>
                </li>
                <li class="sponsors__listItem -second">
                  NPO法人<br class="sp-only02">DAREDEMO HERO 様
                <a class="sponsors__link -second" href="https://daredemohero.com/" target="_blank" rel="noopener noreferrer">https://daredemohero.com/</a>
                </li>
                <li class="sponsors__listItem -second">
                  EFT Kawagoe 様
                <a class="sponsors__link -second" href="https://eigonomachi.jp/" target="_blank" rel="noopener noreferrer">https://eigonomachi.jp/</a>
                </li>
                <li class="sponsors__listItem -second">
                  有限会社以心伝心 様
                <a class="sponsors__link -second" href="https://isindensin.jp/" target="_blank" rel="noopener noreferrer">https://isindensin.jp/</a>
                </li>
                <br class="sp-only02">
                <li class="sponsors__listItem -second">
                  井本化粧品店 様
                </li>
                <li class="sponsors__listItem -second">カイロ坊主 伊藤督訓(ただのり) 様</li>
                <li class="sponsors__listItem -second">
                  漢方薬ピュア 様
                <a class="sponsors__link -second" href="https://www.pure-kanpou.com/" target="_blank" rel="noopener noreferrer">https://www.pure-kanpou.com/</a>
                </li>
                <li class="sponsors__listItem -second">
                  KAY FITNESS 様
                  <a class="sponsors__link -second" href="https://kay.fitness/" target="_blank" rel="noopener noreferrer">https://kay.fitness/</a>
                </li>
                <li class="sponsors__listItem -second">
                  竹内明子(有)山下組 様
                 <a class="sponsors__link -second" href="https://yamashita-gumi.net/" target="_blank" rel="noopener noreferrer">https://yamashita-gumi.net/</a>
                </li>
                <li class="sponsors__listItem -second">PERSONAL TRAINOR <br class="sp-only02">前田新右衛門 様</li>
                <li class="sponsors__listItem -second">La chicyou 様</li>
                <li class="sponsors__listItem -second">
                  Lucky Family 京都 様
                <a class="sponsors__link -second" href="https://poodle110.com/" target="_blank" rel="noopener noreferrer">https://poodle110.com/</a>
                </li>
                <li class="sponsors__listItem -second">
                  公益社団法人日本網膜色素変性症協会 様
                <a class="sponsors__link -second" href="https://jrps.org/" target="_blank" rel="noopener noreferrer">https://jrps.org/</a></li>
                <li class="sponsors__listItem -second">
                  Refeel 様
                  <a class="sponsors__link -second" href="https://refeel-support.com/" target="_blank" rel="noopener noreferrer">https://refeel-support.com/</a>
                </li>
                <li class="sponsors__listItem -second">
                  レーシングドライバー <br class="sp-only02">太田格之進 様
                <a class="sponsors__link -second" href="https://www.kakunoshinohta.com/" target="_blank" rel="noopener noreferrer">https://www.kakunoshinohta.com/</a>
                </li>
                <li class="sponsors__listItem -second">
                  株式会社レトル 様
                <a class="sponsors__link -second" href="https://retoru.com/" target="_blank" rel="noopener noreferrer">https://retoru.com/</a>
                </li>                
                <li class="sponsors__listItem -second">
                  社長のふくろう<span >®</span> 様
                <a class="sponsors__link -second" href="https://fu-kurou.com/" target="_blank" rel="noopener noreferrer">https://fu-kurou.com/</a>
                </li>
                <li class="sponsors__listItem -second">スマイルトレーナー<span >®</span><br class="sp-only02">玉井蘭香 様</li>
                <li class="sponsors__listItem -second">
                  和Zakka 和夢兎 様
                <a class="sponsors__link -second" href="https://www.uji-wamuu.com/" target="_blank" rel="noopener noreferrer">https://www.uji-wamuu.com/</a></li>
              </ul>
              <ul class="sponsors__list -third">
              <li class="sponsors__listItem -third">新井啓介 様</li>
              <li class="sponsors__listItem -third">飯田隆志 様</li>
              <li class="sponsors__listItem -third">井尻盛太 様</li>
              <li class="sponsors__listItem -third">井龍志保 様</li>
              <li class="sponsors__listItem -third">越後希 様</li>
              <li class="sponsors__listItem -third">太田雅俊 様</li>
              <li class="sponsors__listItem -third">尾崎修子 様</li>

              <li class="sponsors__listItem -third">片岡尊顕 様</li>
              <li class="sponsors__listItem -third">兜雅章 様</li>
              <li class="sponsors__listItem -third">菊島良介 様</li>
              <li class="sponsors__listItem -third">小北雅枝 様</li>
              <li class="sponsors__listItem -third">小林大介 様</li>
              <li class="sponsors__listItem -third">小栁貴駿 様</li>

              <li class="sponsors__listItem -third">齋藤愛子 様</li>
              <li class="sponsors__listItem -third">櫻井友里江 様</li>
              <li class="sponsors__listItem -third">佐藤久美子 様</li>
              <li class="sponsors__listItem -third">澤井やすなお 様</li>
              <li class="sponsors__listItem -third">重政宇彦 様</li>
              <li class="sponsors__listItem -third">末松大幸 様</li>            
              <li class="sponsors__listItem -third">高橋智子 様</li>
              <li class="sponsors__listItem -third">竹村康子 様</li>
              <li class="sponsors__listItem -third">田中良枝 様</li>
              <li class="sponsors__listItem -third">土田那津子 様</li>
              <li class="sponsors__listItem -third">當房剛 様</li>
              <li class="sponsors__listItem -third">西村昌浩 様</li>
              <li class="sponsors__listItem -third">幡野理恵 様</li>
              <li class="sponsors__listItem -third">平野準 様</li>
              <li class="sponsors__listItem -third">前川紗智子 様</li>
              <li class="sponsors__listItem -third">前田友唯 様</li>
              <li class="sponsors__listItem -third">松井章浩 様</li>
              <li class="sponsors__listItem -third">松尾和成 様</li>
              <li class="sponsors__listItem -third">武藤直子 様</li>
              <li class="sponsors__listItem -third">麦生田沙知子 様</li>

              <li class="sponsors__listItem -third">柳沼詠美 様</li>
              <li class="sponsors__listItem -third">山懸哲也 様</li>
              <li class="sponsors__listItem -third">山口理 様</li>
              <li class="sponsors__listItem -third">山﨑望 様</li>
              <li class="sponsors__listItem -third">山下明未 様</li>
              <li class="sponsors__listItem -third">山本貴司 様</li>
              <li class="sponsors__listItem -third">山森千秋 様</li>
              <li class="sponsors__listItem -third">吉田道子 様</li>
              <li class="sponsors__listItem -third">四ッ橋奈央 様</li>
              </ul>
            <p class="sponsors__text">EBRの開催にご協力いただきました皆様、誠にありがとうございました。<br class="pc-only03">皆様の温かいご支援のおかげで、2023年度EBRは大成功を収めることができました。<br class="pc-only03">改めて心より感謝申し上げます。
            <p class="sponsors__text -second">今後とも、<span>升砲館EBR</span>をよろしくお願いいたします。</p>
            <p class="sponsors__textSecond">ー EBR2023実行委員会 ー</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- フッター -->
<?php get_footer(); ?>


