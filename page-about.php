<?php
/*
Template Name: about
*/
?>


<?php get_header(); ?>
    <main class="l-container">
        <article class="p-article">
            <div class="p-article__contents">

            <div class="p-aboutcontent u-margin__work">
              <div class="p-aboutcontent__header c-fadeTriger">
                <img
                  class="c-img__workheader"
                  src="<?php echo get_template_directory_uri(); ?>/img/sankaku_red.png"
                  alt="Aboutのコンテンツヘッダ"
                />
                <h3 class="c-character__subtitlenum c-underline__subtitle">
                  01
                </h3>
              </div>
              <p class="c-fadeTriger">
                大学卒業後、情報システム部門に配属されました。<br />
                そもそもPCの基本的な操作やExcel Word
                の使い方さえもわかっておらず、基礎の基礎から始める毎日・・・。教えてくれる人も周りにはおらず、意味不明な専門用語の連続に「？」マークを頭に浮かべながら、自分で考えて自分なりに努力する孤独な日常を過ごしていました。
                文系の出身だった私は、情報システム分野に疎く、スタート地点のレベルが他の方よりも低かったため、かなり苦労をしたことを覚えています。精神的に疲弊してしまい「もうダメだ・・・」と思ったことも何度もありましたが、それでもなんとか必死でこなしているうちに、1年後にはネットワークやサーバに関する知識や技術を身につけ、外部インフラ基盤構築会社の人と信頼関係を築いて、いつの間にか一人前に仕事ができるようになっていました。
              </p>
            </div>

<!-- 固定ページ用のメインループ -->
                <?php if ( have_posts()) : 
                  while ( have_posts()) :  the_post();
                    the_content();
                  endwhile;
                endif;
                ?>
<!-- 固定ページ用のメインループ -->
            <div>
       </article>
       <?php get_sidebar(); ?>
    </main>

    <?php get_footer(); ?>

<!-- ハンバーガーメニューを開く時の背景を指定 -->
      <div class="c-hamburger__background"></div>
      </div>

       <!-- これがないと必要なScript等が排出されないので、注意！！ 位置にも！-->
       <?php wp_footer(); ?>
    </body>
</html>