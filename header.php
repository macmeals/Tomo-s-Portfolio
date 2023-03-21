<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="/css/style.css" /> -->
    <!-- ?php echo get_template_directory_uri(); ? -->
    <!-- Goolefont適応 Noto Sans JP/ Slabo27 -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Slabo+27px&display=swap"
      rel="stylesheet"
    />
    <title>Tomo's Portfolio</title>
  </head>
  <body>
    <div class="l-body">
      <header class="l-header">
        <div class="p-header">
          <div>
            <a href="#"
              ><img
                src="<?php echo get_template_directory_uri(); ?>/img/Portfolio_logo2.png"
                alt="portfolioのlogo"
                class="c-img__logo c-fadeTriger"
            /></a>
          </div>
          <div class="p-header__under">
            <ul class="p-header__menu c-square c-fadeTriger">
              <li><a class="c-underline__white" href="#">About</a></li>
              <li><a class="c-underline__white" href="#">Work</a></li>
              <li><a class="c-underline__white" href="#">Skill</a></li>
              <li><a class="c-underline__black" href="#">Contact</a></li>
            </ul>
            <ul class="p-header__icon c-square c-fadeTriger">
              <li>
                <a href="#"
                  ><img
                    class="c-icon__instagram"
                    src="<?php echo get_template_directory_uri(); ?>/img/instagram_white.png"
                    alt="instagram"
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img
                    class="c-icon__twitter"
                    src="<?php echo get_template_directory_uri(); ?>/img/twitterlogo_white.png"
                    alt="Twitter"
                /></a>
              </li>
            </ul>
          </div>
          <button class="c-btn p-hamberger c-fadeTriger">MENU</button>
          <!-- ハンバーガー用の「✖️」ボタン -->
          <button class="c-btn__cross p-hamberger"><img class="c-icon__cross" src="<?php echo get_template_directory_uri(); ?>/img/test.png" alt="batu"></button>
        </div>
        <div class="c-hamburger__header"></div>

        <!-- All in one SEO Pack等のプラグインで設定したmeta情報や、プラグイン固有のスタイルシート、CSSやjavascriptファイルなんかも出力されることになります。 -->
        <?php wp_head(); ?>
      </header>