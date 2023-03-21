<?php get_header(); ?>
    <main class="l-container">
        <article class="p-article">
            <div class="p-article__contents">

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
