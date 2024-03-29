<?php get_header(); ?>
<body class="container-fluid">
  <!-- Facebook Page Plugin -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <header class="container">
    <h1>スマイルアーティストPomu</h1>
  </header>

  <div id="cover">
    <div class="overlay-video-whtdot">
      <div class="message carousel">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/image/big0.jpg"></div>
        <!-- <div class="hidden"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/big1.jpg"></div> -->
	<!-- <div class="hidden"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/big2.jpg"></div> -->
        <!-- <div class="hidden"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/big3.jpg"></div> -->
      </div>
    </div>
  </div><!-- /#cover -->

  <div class="container">
    <nav id="global">
      <ul class="nav nav-justified">
        <li role="presentation"><a href="#">TOP</a></li>
        <li role="presentation"><a href="#works">作品</a></li>
        <li role="presentation"><a href="#info">出演情報</a></li>
        <li role="presentation"><a href="#order">ご依頼</a></li>
        <li role="presentation"><a href="#media">メディア掲載</a></li>
        <li role="presentation"><a href="#profile">Pomuについて</a></li>
        <li role="presentation"><a href="#contact">お問い合わせ</a></li>
      </ul>
    </nav><!-- /nav -->
  </div><!-- /.container -->

  <section id="works">
    <div class="cards">
      <div class="container">
        <h2>作品</h2>
        <div class="smile-art col-xs-12 col-md-6">
          <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/smile_work.png"></div>
          <h3><span>Smile Art</span></h3>
          <div class="desc">
            <p>スマイルアートは、Pomuが路上でイラストを描くことを通じて生まれました。広島の路上でも、オーストラリアの路上でも、同じように絵と言葉で人を笑顔にすることができました。「やっぱり世界を平和にするのは笑顔じゃ！」と、活動を続けています。</p>
          </div>
        </div>
        <div class="sand-art col-xs-12 col-md-6">
          <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/sand_work.png"></div>
          <h3><span>Sand Art</span></h3>
          <div class="desc">
            <p>2013年に「サンドアーティストPomu」の活動を開始。イラストとはまた違う方法で、物語や想いを伝えることの可能性と壮大さを感じました。制作だけでなく、パフォーマーとして全国・世界を飛び回ります。</p>
          </div>
        </div>
      </div><!-- /.container -->
    </div>
    <div class="product-edge-bg"></div>
    <div class="products clearfix">
      <div class="carousel">
        <div>
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic15.jpg" title="２人の好きなものや仕事に関するものを取り入れて。">
            <div class="title">ウェルカムボード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic15.jpg" alt="">
          </a>
        </div>
        <div>
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic11.jpg" title="（似顔絵ことば）退職される方へ。制服姿で。">
            <div class="title">退職祝い</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic11.jpg" alt="">
          </a>
        </div>
        <div>
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic1.jpg" title="（種類：絵ことば）お名前と、誕生の日付を入れた作品。体重や身長もお入れ出来ます♪">
            <div class="title">出産祝い</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic1.jpg" alt="">
          </a>
        </div>
        <div>
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic5.jpg" title="（似顔絵ことば）お気に入りのバイクにみんなで乗っている作品。">
            <div class="title">お誕生日プレゼント</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic5.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic2.jpg" title="（絵ことば）桜の花に包まれた、入学にぴったりの作品。夢いっぱいの未来に、贈りたい気持ちを込めて。">
            <div class="title">入学祝い</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic2.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic3.jpg" title="（絵ことば）牧場を経営されているとのことで、のんびりした背景で。">
            <div class="title">ご家族用</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic3.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic4.jpg" title="（絵ことば）あったかい色で、おうちの絵を入れて。">
            <div class="title">ご家族用</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic4.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic6.jpg" title="（似顔絵ことば）お子さん、お孫さんあわせて30人。感謝のことばを贈りたい。">
            <div class="title">金婚式お祝い</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic6.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic7.jpg" title="（似顔絵ことば）カープのガンちゃんに描かせていただきました。ラーメン好きのガンちゃんへ。">
            <div class="title">お誕生日プレゼント</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic7.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic8.jpg" title="（似顔絵ことば）卒業する部員へ。ユニフォーム姿の似顔絵。">
            <div class="title">卒業祝い</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic8.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic9.jpg" title="（似顔絵ことば）お父さんお母さんと、お孫さんの似顔絵を一緒に。">
            <div class="title">母の日・父の日贈り物</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic9.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic10.jpg" title="（似顔絵ことば）退職される職員さんへ。制服姿で。">
            <div class="title">退職祝い</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic10.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic12.jpg" title="２人の思い出の水族館を背景に。">
            <div class="title">ウェルカムボード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic12.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic13.jpg" title="当日来られるゲストの方に感謝の気持ちを伝える作品。和装で、大好きなひまわりに囲まれている絵。">
            <div class="title">ウェルカムボード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic13.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic14.jpg" title="地元の風景とカープっぽさを取り入れて。ワンちゃんと一緒に。和装で。">
            <div class="title">ウェルカムボード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic14.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic16.jpg" title="お花に包まれてしあわせそうな背景。">
            <div class="title">ウェルカムボード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic16.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic17.jpg" title="よく釣に行く２人なので、家族を海の生き物に見立てた作品。">
            <div class="title">ウェルカムボード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic17.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery1" href="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic18.jpg" title="国際結婚する２人へ。日本好きな旦那さんなので和装で、日本とオーストラリアの背景。">
            <div class="title">ウェルカムボード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/smileart-pic18.jpg" alt="">
          </a>
        </div>
      </div><!-- /.carousel smile-art -->
      <div class="carousel sand-art-pic">
        <div>
          <a class="thumbnail fancybox" rel="gallery2" href="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic3.jpg" title="（サンドアート）三次市の伝統的な人形。">
            <div class="title">三次人形</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic3.jpg" alt="">
          </a>
        </div>
        <div>
          <a class="thumbnail  various fancybox.iframe" rel="gallery2" href="https://www.youtube.com/embed/Vk0sw3t2mUQ" title="（サンドアート）お２人の出会いやエピソードを１つのストーリーに。https://www.youtube.com/watch?v=Vk0sw3t2mUQ">
            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
            <div class="title">Wedding Movie</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic5.jpg" alt="">
          </a>
        </div>
        <div>
          <a class="thumbnail fancybox" rel="gallery2" href="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic8.jpg" title="（サンドアート）思い出の場所を描いたもの。">
            <div class="title">Wedding Movie</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic8.jpg" alt="">
          </a>
        </div>
        <div>
          <a class="thumbnail fancybox" rel="gallery2" href="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic11.jpg" title="（サンドアート）プロポーズ用にとご依頼。">
            <div class="title">Wedding Movie</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic11.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail  various fancybox.iframe" rel="gallery2" href="https://www.youtube.com/embed/hVFo-IR69LQ" title="（サンドアート）世界に伝えたい、美しい景色。
          https://www.youtube.com/watch?v=hVFo-IR69LQ">
            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
            <div class="title">美しい日本の景色『宮島』</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic1.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery2" href="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic2.jpg" title="（サンドアート）はまだの伝統芸能、神楽。">
            <div class="title">はまだ灯2013</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic2.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail  various fancybox.iframe" rel="gallery2" href="https://www.youtube.com/embed/9mfWGXgz0A4" title="（サンドアート）春、いのち、成長をテーマに製作した作品。https://www.youtube.com/watch?v=9mfWGXgz0A4">
            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
            <div class="title">春。(TSS放送用に製作)</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic4.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail various fancybox.iframe" rel="gallery2" href="https://www.youtube.com/embed/MGza09VbTg4" title="（サンドアート）パーティーで流して頂いた作品。https://www.youtube.com/watch?v=MGza09VbTg4">
            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
            <div class="title">ライオンズクラブ広島</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic6.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery2" href="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic7.jpg" title="（サンドアート）パーティーで流して頂いた作品。">
            <div class="title">ライオンズクラブ広島</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic7.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery2" href="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic9.jpg" title="（サンドアート）">
            <div class="title">ウェルカムボード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic9.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery2" href="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic10.jpg" title="（サンドアート）">
            <div class="title">イベント用ポストカード</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic10.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail fancybox" rel="gallery2" href="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic12.jpg" title="（サンドアート）ロゴをサンドアートにおこしました。">
            <div class="title">祭會ロゴ</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic12.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail various fancybox.iframe" rel="gallery2" href="https://www.youtube.com/embed/_seP2LPt63M" title="（サンドアート）結婚式『雄介さん＆麻美子さん』https://www.youtube.com/watch?v=_seP2LPt63M">
            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
            <div class="title">『雄介さん＆麻美子さん』</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic13.jpg" alt="">
          </a>
        </div>
        <div class="hidden">
          <a class="thumbnail various fancybox.iframe" rel="gallery2" href="https://www.youtube.com/embed/S2YEmXEueM4" title="（サンドアート）『崇宏さん＆智美さん』https://www.youtube.com/watch?v=S2YEmXEueM4">
            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
            <div class="title">『崇宏さん＆智美さん』</div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/sandart-pic14.jpg" alt="">
          </a>
        </div>
      </div><!-- /.carousel sand-art -->
    </div>
  </section><!-- /#works -->

  <section id="info">
    <h2>出演情報</h2>
    <ol class="container">
      <!-- Start WP LOOP -->
      <?php query_posts(array(
              'posts_per_page' => '3',
              'category_name'  => 'event-info',
              'post_status'    => 'publish',
              'orderby'        => 'date')); ?>
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
      <li>
        <div class="event-date">
          <p>
            <?php echo get_the_date('n月j日(D)'); ?>
            <?php
              // 投稿の「時刻」からイベントの終了時刻を表示させる
              // 「時」が月、「分」が日を表す
              // 以下で投稿時刻が正しい日付になっているか判定
              $month = intval(get_the_time('H'));
              $date  = intval(get_the_time('i'));
              if(
                // 1. 時刻がゼロになっていないか
                get_the_time('Hi') != '0000' &&
                // 2. 「時」が0より大きく、かつ12以下か
                ($month > 0 && $month <= 12) &&
                // 3. 「分」が0より大きく、かつ31以下か
                ($date > 0 && $date <= 31)
              ) :
                $year  = get_the_date('Y');
                $dt  = new DateTime($year . '-' . $month . '-' . $day);
                $week  = array("日", "月", "火", "水", "木", "金", "土");
                $w     = (int)$dt->format('w');
                echo '<br/><span>▼</span><br/>';
                echo $month . '月' . $date . '日' . '(' . $week[$w] . ')'; 
            endif; ?>
          </p>
        </div>
        <div class="event-detail">
          <p class="title"><?php echo the_title(); ?></p>
          <?php echo the_content('', false); ?>
        </div>
	<div class="event-more"></div>
      </li>
      <?php
        endwhile;
        else:
          echo
            "<p>イベントなどへの出演については、</p>".
            "<p>詳細が決まり次第こちらでお知らせいたします！</p>"
          ;
        endif;
      ?>
      <!-- End WP LOOP -->
    </ol>
  </section><!-- /#info -->

  <section id="order" class="clearfix">
    <h2>ご依頼</h2>
    <div class="container">
      <div class="art-header smile-art">
        <h3>スマイルアート制作</h3>
        <div class="line"></div>
        <div class="pig-tale"></div>
      </div>
      <div class="smile-art row">
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <span class="pictwords">たとえば、記念日に！</span>
              <div class="sample-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_smileart_sample1.jpg" alt="">
              </div>
              <div class="caption">
                <h4>絵ことば</h4>
                <p>お名前と、ことばとお好きなイラストと、人数分のくまちゃんをお入れします。お名前の由来やイメージを教えていただければ、それに因んだイラストも可能です。世界で１枚の、オリジナルな絵ことば、お描きします。</p>
              </div>
            </div>
            <a href="http://pomu.base.ec/category/絵ことば" class="btn to_shop" role="button" target="_blank">依頼する</a>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <span class="portrait">たとえば、卒業祝いに！</span>
              <div class="sample-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_smileart_sample2.jpg" alt="">
              </div>
              <div class="caption">
                <h4>似顔絵ことば</h4>
                <p>とびっきりの笑顔と、あなたの想いをことばにしてお入れします。大切な方へ、普段伝えられない気持ちを伝えたり、どんな子どもたちでいてほしいなぁという想いを込めた作品や、ご自身の夢や目標をお入れした作品など、想いのつまった作品を描かせていただきます。</p>
              </div>
            </div>
            <a href="http://pomu.base.ec/category/似顔絵ことば" class="btn to_shop" role="button" target="_blank">依頼する</a>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <span class="welcomeboard">たとえば、結婚式に！</span>
              <div class="sample-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_smileart_sample3.jpg" alt="">
              </div>
              <div class="caption">
                <h4>ウェルカムボード</h4>
                <p>お２人の最幸の１日を、そっと彩るお手伝い。そんな作品を描かせていただければと思います。素敵なお２人の笑顔と、ゲストの方に伝えたいメッセージやお２人の決意を、作品にぎゅっと込めて。</p>
              </div>
            </div>
            <a href="http://pomu.base.ec/category/ウェルカムボード" class="btn to_shop" role="button" target="_blank">依頼する</a>
          </div>
        </div>
      </div><!-- /.smile-art .row -->
      <div class="order-note">
        <h3>注文の際の注意点</h3>
        <div class="row">
          <div class="about-photo col-xs-12 col-md-6">
            <h4>1. 似顔絵作成に使用する写真について</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon_order_note_photo.png" height="54" width="67" alt="">
            <p>分かりやすく正面から写っていらっしゃるお写真を、それぞれ２～３枚お送りいただきます。プリクラや加工の激しいお写真はNGです。</p>
          </div>
          <div class="about-costume col-xs-12 col-md-6">
            <h4>2. イラストに描き入れる衣装について</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon_order_note_cosutume.png" height="46" width="69" alt="">
            <p>前撮りや衣装合わせのお写真があれば、その衣装で描かせていただきます。ない場合は、ご希望の衣装の画像をご添付いただくか、おまかせで描かせていただきます。おまかせの場合は、仕上がりイメージが違っていても変更できませんので、出来るだけお写真をご用意頂ければと思います。</p>
          </div>
        </div>
      </div><!-- /.order-note -->
      <div class="art-header sand-art">
        <h3>サンドアート制作</h3>
        <div class="line"></div>
        <div class="pig-tale"></div>
      </div>
      <div class="sand-art row">
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <span class="festival">たとえば、お祭りで！</span>
              <div class="sample-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_sandart_sample1.jpg" alt="">
              </div>
              <div class="caption">
                <h4>イベント出演</h4>
                <p>全国各地、どこでも出張致します。イベント内容や出演時間に合わせてオリジナルのパフォーマンスも製作可能です。</p>
              </div>
            </div>
            <a href="#contact" class="btn to_contact" role="button" select="1">依頼する</a>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <span class="cm">たとえば、企業CMに！</span>
              <div class="sample-picture">
                <a class="various fancybox.iframe" href="https://www.youtube.com/embed/MGza09VbTg4">
                  <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_sandart_sample2.jpg" alt="">
                </a>
              </div>
              <div class="caption">
                <h4>ムービー制作</h4>
                <p>その場でのパフォーマンスでなく、予め撮影・編集→DVDでお渡し→当日会場で流して頂くサンドアートになります。時間をかけて撮影を行うので、描き込める内容やストーリーも濃く、影絵の濃淡の表現もより深く、１シーン１シーンをより美しく描写できます。</p>
              </div>
            </div>
            <a href="#contact" class="btn to_contact" role="button" select="1">依頼する</a>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <span class="wedding-sand">たとえば、結婚式に！</span>
              <div class="sample-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_sandart_sample3.jpg" alt="">
              </div>
              <div class="caption">
                <h4>ウェルカムボード</h4>
                <p>お２人の似顔絵を描き、額装してお届けさせていただきます。他のアートにはない温かみを持ったサンドアートウェルカムボードも人気です。もちろん、ウェディング用以外の『一枚絵(動画でないもの)』のご依頼もお受けしておりますのでご相談ください。</p>
              </div>
            </div>
            <a href="#contact" class="btn to_contact" role="button" select="1">依頼する</a>
          </div>
        </div>
      </div><!-- /.sand-art .row -->
      <div class="art-header event-offer">
        <h3>イベント・出演</h3>
        <div class="line"></div>
        <div class="pig-tale"></div>
      </div>
      <div class="event-offer row">
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <div class="sample-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_eventoffer_sample1.jpg" alt="">
              </div>
              <div class="caption">
                <h4>描きおろしイベント</h4>
                <p>似顔絵など、お呼び頂ければ全国どこでも出張しておりますので、お気軽にご連絡ください。</p>
              </div>
            </div>
            <a href="#contact" class="btn to_contact" role="button" select="2">依頼する</a>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <div class="sample-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_eventoffer_sample2.jpg" alt="">
              </div>
              <div class="caption">
                <h4>学校への出張授業</h4>
                <p>小・中学校での１日先生として、楽しくお絵かき教室をしたり、これまでの活動のスライドショーなどを披露して授業させていただきました。絵を描く楽しさを知ってもらえるきっかけになれば嬉しいです。</p>
              </div>
            </div>
            <a href="#contact" class="btn to_contact" role="button" select="2">依頼する</a>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <div class="thumbs-container">
              <div class="sample-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_eventoffer_sample3.jpg" alt="">
              </div>
              <div class="caption">
                <h4>福祉施設訪問</h4>
                <p>お１人ずつの、好きな色や性格などを教えていただき、作品を描かせていただきました。好きなものがイラストになって、特別な、自分だけの１枚に仕上がる様子を見て、とても喜んで頂けました。</p>
              </div>
            </div>
            <a href="#contact" class="btn to_contact" role="button" select="2">依頼する</a>
          </div>
        </div>
        <div class="gallery">
          <span>イベントの様子</span>
          <div class="carousel">
            <div><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/1409018956738.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/1409018956738.jpg" alt=""></a></div>
            <div><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/1415331587753.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/1415331587753.jpg" alt=""></a></div>
            <div><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/2014-01-29-08-05-53_deco.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/2014-01-29-08-05-53_deco.jpg" alt=""></a></div>
            <div><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/2014-08-19-12-43-54_deco.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/2014-08-19-12-43-54_deco.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/2014-08-19-22-04-32_deco.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/2014-08-19-22-04-32_deco.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5979306998259269762.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5979306998259269762.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5979329064935506978.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5979329064935506978.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5979330864779582002.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5979330864779582002.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5979347938367536050.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5979347938367536050.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5979358257574323618.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5979358257574323618.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984220011978328002.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984220011978328002.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984220496611188354.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984220496611188354.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984220701933400194.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984220701933400194.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984220766982534610.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984220766982534610.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984220829610510962.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984220829610510962.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984223391663805074.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984223391663805074.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984223465219203378.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984223465219203378.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984227119500343298.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984227119500343298.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984234341997485282.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984234341997485282.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984235392415982434.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984235392415982434.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5984237480334862690.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5984237480334862690.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/5985902876857489170.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/5985902876857489170.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/6008345317698185202.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/6008345317698185202.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/6008345476899615794.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/6008345476899615794.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/6008345644864673698.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/6008345644864673698.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/6008345875411489858.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/6008345875411489858.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/6008346053094194866.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/6008346053094194866.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/6008346671181755042.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/6008346671181755042.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0090.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0090.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0123.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0123.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0135.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0135.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0151.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0151.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0506.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0506.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0512.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0512.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0674.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0674.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0675.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0675.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0680.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0680.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0681.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0681.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0694.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0694.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0697.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0697.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0713.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0713.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0716.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0716.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0734.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0734.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0737.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0737.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0740.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0740.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0759.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0759.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0803.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0803.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0820.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0820.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0830.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0830.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0894.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0894.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0933.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_0933.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_1832_2.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_1832_2.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2486.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2486.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2491.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2491.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2511.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2511.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2513.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2513.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2515.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2515.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2536.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2536.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2541.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2541.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2563.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2563.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2569.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2569.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2571.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2571.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2683.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2683.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2695.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2695.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2710.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2710.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2714.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2714.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2731.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2731.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2732.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2732.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2955.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2955.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2965.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2965.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2967.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_2967.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_3506.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_3506.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_4090.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_4090.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_4230.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/DSC_4230.jpg" alt=""></a></div>
            <div class="hidden"><a class="fancybox"  rel="gallery3" href="<?php echo get_template_directory_uri(); ?>/assets/image/IMG_0476.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/IMG_0476.jpg" alt=""></a></div>
          </div><!-- /.carousel -->
        </div><!-- /.gallery -->
      </div><!-- /.event-offer .row -->
      <div class="and-more">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="art-header postcard">
              <h3>ポストカード</h3>
              <div class="line"></div>
              <div class="pig-tale"></div>
            </div>
            <div class="thumbnail">
              <div class="thumbs-container">
                <span class="many-types-cards">80種類以上！</span>
                <div class="sample-picture">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/order_postcard_sample1.png" alt="">
                </div>
                <div class="caption">
                  <p>日々の考え事、ゆるーい一言など、ポストカードにしています。ばり濃いぃ広島弁ポストカードも大人気です( o´・ω・)！！小さなしあわせ、いっぱい転がっとるなぁと思って描いてます。</p>
                </div>
              </div>
              <a href="http://pomu.base.ec/category/ポストカード" class="btn to_shop" role="button" target="_blank">購入する</a>
            </div>
          </div>
          <div class="col-xs-12 col-md-8">
            <div class="ask">
              <h3>そのほかにも、なんでもご相談ください☆</h3>
              <p>決まった形の作品以外にも、ご相談に応じて様々なものに描かせていただきます☆<br/>
              名刺や広告、Tシャツなどのデザインも承りますので、「こんなのも描いてもらえるかな？」と思われた場合は、お気軽にご相談ください！</p>

              <p><span>今までご依頼のあった作品</span><br/>
              スノボの板にウェルカムボード、パズルにウェルカムボード、結婚式引き出物用作品、巨大キャンバス作品(1455×1120mm)、看板デザイン、名刺デザイン、Tシャツデザイン、結婚式招待状、席次表、席札デザイン、会社ロゴデザイン、ＣＤジャケット、結婚式ムービーの挿し絵　...など</p>
              <div class="carousel">
                <div><a class="fancybox" rel="etc-gallery" href="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic1.jpg" title="広告デザイン"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic1.jpg"></a></div>
                <div><a class="fancybox" rel="etc-gallery" href="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic2.jpg" title="名刺デザイン"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic2.jpg"></a></div>
                <div><a class="fancybox" rel="etc-gallery" href="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic3.jpg" title="はがきデザイン"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic3.jpg"></a></div>
                <div><a class="fancybox" rel="etc-gallery" href="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic4.v2.jpg" title="結婚式はがき"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic4.jpg"></a></div>
                <div class="hidden"><a class="fancybox" rel="etc-gallery" href="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic5.v2.jpg" title="結婚式席次表"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic5.jpg"></a></div>
                <div class="hidden"><a class="fancybox" rel="etc-gallery" href="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic6.v2.jpg" title="結婚式プロフィール"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic6.jpg"></a></div>
                <div class="hidden"><a class="fancybox" rel="etc-gallery" href="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic7.jpg" title="時計"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic7.jpg"></a></div>
                <div class="hidden"><a class="fancybox link-title" rel="etc-gallery" href="http://ameblo.jp/pomu29/theme32-10065613539.html#main" title="巨大キャンパス作品"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/etc_pic8.jpg"></a></div>
              </div>
              <a href="#contact" class="btn to_contact" role="button" select="3">相談する</a>
            </div>
          </div>
        </div>
      </div><!-- /.and-more -->
    </div><!-- /.container -->
  </section><!-- /#order -->

  <section id="media">
    <div class="container">
      <h2>メディア掲載</h2>
      <!-- Start WP LOOP -->
      <?php query_posts(array(
              'posts_per_page' => '8',
              'category_name'  => 'media-pub',
              'post_status'    => 'publish',
              'orderby'        => 'date',
              'order'          => 'ASC')); ?>
      <div class="row">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <div class="col-xs-12 col-md-3">
            <div class="thumbnail">
              <div class="header">
                <span><?php echo get_the_date('Y.m.d'); ?></span>
              </div>
              <?php echo the_content('', false); ?>
            </div>
          </div>
        <?php
          endwhile;
          else:
            echo
              "<p>メディアへの掲載があった場合には、</p>".
              "<p>こちらでお知らせしていきます！</p>"
            ;
          endif;
        ?>
        <!-- End WP LOOP -->
      </div>
    </div><!-- /.container -->
  </section><!-- /#media -->

  <section id="profile">
    <div class="paper container">
      <h2>Pomuについて</h2>
      <div class="message">
        <p class="jp">
          この一筆で　世界が繋がり<br/>
          あなたが笑ってくれるなら<br/>
          それはとても<br/>
          すてきなこと
        </p>
        <p class="en">
          If one brush stroke could link hearts to hearts,<br/>
          people to people and the world together,<br/>
          It would be lovely and I would be so happy.
        </p>
      </div><!-- /.message -->
      <div class="history">
        <h3>生い立ち</h3>
        <dl>
          <dt>1986年</dt><dd>広島県三次市。3km行ってやっと自販機があるとんでもない田舎にて誕生。</dd>
          <dt>2004年〜</dt><dd>大学４回生で旅に出る。日記代わりの絵はがきを 「私にも描いて」と言ってもらえることが嬉しくて、「これでみんなが喜んでくれるんじゃ！！」とアートに目覚める。
</dd>
          <dt>2008年春</dt><dd>就職３日でどうしても納得いかんことがあり社長と大げんかして辞め、なぜか夏から路上で絵と言葉を描きはじめる。いつの間にか、生活の真ん中、こころの真ん中に『絵』と『ことば』があった。でも、外国人のお客さんに話しかけられても、言葉の意味やニュアンスが伝えられん。
</dd>
          <dt>2009年夏</dt><dd>１年間Australiaへ。</dd>
          <dt>2010年</dt><dd>描けんで断っとった似顔絵も、Australiaの路上で描き始める</dd>
          <dt>2013年</dt><dd>オーストラリア生活を終えて帰国。サンドアートと出会い、『サンドアーティストPomu』としての活動開始。</dd>
        </dl>
      </div><!-- /.history -->
      <div class="sns row">
        <div class="left col-xs-12 col-md-12 col-lg-7">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/profile_pomu_photo.jpg" width="220px" alt="Pomuの写真">
          <ul>
            <li>
              <strong>\ 応援お願いします /</strong>
              <a href="https://www.facebook.com/smileartist.pomu" class="btn fb" role="button" target="_blank">Facebook</a>
            </li>
            <li>
              <strong>\ ほぼ毎日更新 /</strong>
              <a href="http://ameblo.jp/pomu29/" class="btn am" role="button" target="_blank">ブログ</a>
            </li>
          </ul>
          <ul>
            <li>
              <strong>\ 作品をアップしてます /<br/></strong>
              <a href="https://www.instagram.com/smileartist_pomu/" class="btn instagram first" role="button" target="_blank">@smileartist_pomu</a>
            </li>
            <li>
              <strong>\ 日常の写真 /<br/></strong>
              <a href="https://www.instagram.com/pomu29/" class="btn instagram second" role="button" target="_blank">@pomu29</a>
            </li>
          </ul>
        </div><!-- /.left -->
        <div class="fb-wrapper col-xs-12 col-md-12 col-lg-5">
          <div class="fb-page" data-href="https://www.facebook.com/smileartist.pomu" data-width="270" data-height="460" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/smileartist.pomu"><a href="https://www.facebook.com/smileartist.pomu">Smile Artist Pomu -想い絵描き人-</a></blockquote></div></div>
        </div>
      </div><!-- /.sns -->
    </div><!-- /.paper -->
  </section><!-- /#profile -->

  <section id="contact">
    <div class="container">
      <h2>お問い合わせ</h2>
      <p>イベント出演や作成のことなど、なんでもお気軽にご相談ください。<br/>内容に応じて、順次お返事させていただきます。</p>
      <?php echo do_shortcode('[contact-form-7 id="64" title="コンタクトフォーム"]'); ?>
    </div>
  </section><!-- /#contact -->
 <?php get_footer(); ?> 
