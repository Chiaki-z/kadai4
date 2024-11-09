<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>有限会社テスト</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
    <header>
        <section id="header">
            <div class="header__top">
                <div class="header__title">
                    <h1 class="header--t1">有限会社</h1>
                    <h1 class="header--t2">テスト</h1>
                </div>
                <div class="header__menu">
                        <p>有限会社テストとは<a href="#"></a></p>
                        <p>実績紹介<a href="#"></a></p>
                        <p>テストの強み<a href="#"></a></p>
                        <p>会社案内<a href="#"></a></p>
                        <p>お知らせ<a href="#"></a></p>
                </div>
            </div>
            <div class="header__content1">
                <p><b>テストとテスト</b></p>
                <p><b>正確なお仕事とともに</b></p>
            </div>
            <div class="header__content2">
                <p>テキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </section>
    </header>
    <main>
        <section id="about">
            <h2 class="sec-title">ABOUT</h2>
            <div class="about__content">
                <h3>皆様の想いを「カタチ」にする</h3>
                <p>●●県〇〇市の有限会社 テストでは、テキストテキストなどへのテキストをはじめ、</p>
                <p> テキストテキストを行っており、テキスト用からテキスト用途まで、</p>
                <p>幅広いニーズに確かな技術と品質でお応えしております。</p>
                <p>お気軽に当社へご相談ください。</p>
                <p>お客様のご希望に添えるよう、最大限ご協力させていただきます。</p>
            </div>
        </section>
        <section id="product">
            <h2 class="sec-title">PRODUCT</h2>
            <div class="product__content">
                <p>テキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="product__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product_blue.png">
                <img src="<?php echo get_template_directory_uri(); ?>/images/produce_yellow.png">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product_green.png">
            </div>
                <p class="view-more">VIEW MORE　</p>
        </section>
        <section id="service">
            <h2 class="sec-title">SERVICE</h2>
            <div id="service__content" class="wrapper">
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service_white.png">
                        <h6>テストの強みとは</h6>
                        <p>テキストテキストテキストテキストテキストテキストテキスト
                        <br>テキストテキストテキストテキスト</p>
                        <p class="view-more">VIEW MORE　</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service_green.png">
                        <h6>テキスト、及びテキスト</h6>
                        <p>テキストテキストテキストテキストテキストテキストテキスト
                        <br>テキストテキストテキストテキスト</p>
                        <p class="view-more">VIEW MORE　</p>
                    </li>
                </ul>
            </div>
        </section>
        <section id="company">
            <h2 class="company--title">COMPANY</h2>
            <div class="company__content">
                <h6>こだわりの製法
                <br>テキストテキストテキスト</h6>
                <p>テキストテキストテキストテキストテキストテキストテキスト
                <br>テキストテキストテキスト
                <br>テキストテキストテキストテキストテキスト
                <br>テキストテキストテキスト</p>
            </div>
            <p class="view-more">VIEW MORE</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/company_red.png" class="image__left">
        </section>
        <section id="news">
            <h2 class="sec-title">NEWS</h2>
            <div id="content-wrap" class="container row pt-3">
    <div id="main" class="col-md-9">
      <hr>
      
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
        <div class=news__list>
            <?php the_post_thumbnail('thumbnail'); ?>
            <div class=news__content>
            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="mb-3" id="post-meta">
            <p>作成日時：<?php echo get_the_date(); ?></p>
            <?php the_content(); ?>
            </div>
            </div>
        </div>
          <hr>
      <?php
        endwhile;
      endif;
      ?>
    </div>
        </section>
    </main>
    <?php get_footer(); ?>