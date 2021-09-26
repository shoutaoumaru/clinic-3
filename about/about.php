<?php
 /* Template Name: about
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>当院について | 医院テンプレート3</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/swiper.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div class="about-wrapper animsition">
    <header id="header" class="c-header sp-nav-hid">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <!-- /.logo -->
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img-pc">
          <a class="animsition-link" href="/">
            <div class="logo-pc"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"><span>ホーム</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link " href="<?php echo esc_url( home_url('about')); ?>"><span>当医院について</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('service')); ?>"><span>診療内容</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('doctor')); ?>"><span>医師紹介</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('faq')); ?>"><span>よくあるご質問</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('ricruit')); ?>"><span>採用情報</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://haisha-yoyaku.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.c-header -->
    <div id="main-contents">
      <div class="c-topview appear up">
        <div class="c-topview__img item">
          <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/medical__2@pc.jpg" alt="">
          <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/medical__2@pc.jpg" alt="">
        </div>
      </div>
      <section id="policy" class="c-policy">
        <div class="c-container">
          <h1 class="c-policy__title clip-js1 left">
            <p class="c-title">「あって良かった」から、<br class="view-pc">「ないと困る」診療所へ</p>
          </h1>
          <div class="c-policy__block appear up">
            <figure class="c-policy__img item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling-2.jpg" alt="診療のイメージ" />
            </figure>
            <div class="c-policy__txt item">
              <p class="c-txt-sm">
                耳鼻咽喉科疾患は、症状を何度も繰り返したり、症状が長く続くこともあります。また、お子様からご年配の方まで幅広い年齢層の方が対象となります。それ故、それぞれの患者様に合った治療方針や治療方法を十分に説明し、同意をえた上で行うことが大切であると考えています。
              </p>
              <p class="c-txt-sm">
                当院のコンセプト“健康を育み、ゆたかな未来へ”には、みなさんの健康意識を高め、より多くの方を健康的に保つことで、次世代のゆたかなまちづくりに貢献したいという想いが込められています。
              </p>
              <div class="btn-set">
                <div class="btn-link">
                  <a class="animsition-link" href="<?php echo esc_url( home_url('service')); ?>" title="診療内容">診療内容</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="simple" class="simple">
        <div class="c-container appear up">
          <figure class="simple__img item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/room@pc.jpg" alt="シンプルで清潔、開放的な院内。" />
          </figure>
          <div class="simple__desc item">
            <h2 class="c-title">
              <span>Simple indoor</span>
              <p>シンプルで清潔、開放的な院内。</p>
            </h2>
            <p class="c-txt-sm">
              RivRound医院は、モノが少ないクリニックをめざしています。<br />さまざまな道具が目につく診療台や、<br />清潔感を感じられない院内では、<br />患者さまの緊張感やストレスを生み出してしまうからです。
            </p>
            <p class="c-txt-sm">
              作業台や棚などは極力減らし、<br />コードレスの電子機器を採用するなどして、<br />開放感と清潔感のある院内を保つことで、<br />リラックスして受診いただける環境を整えています。
            </p>
          </div>
        </div>
      </section>
      <section class="kids">
        <div class="c-container appear up">
          <figure class="kids__img item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/kid-room.jpg" alt="診療室にも、キッズルーム。" />
          </figure>
          <div class="kids__desc item">
            <h2 class="c-title">
              <span class="font-b">Kids room</span>
              <p>診療室にも、キッズルーム。</p>
            </h2>
            <p class="c-txt-sm">
              RivRound医院には、待合室が２箇所あります。<br />ひとつは、当院に入ってすぐの受付に面した、一般的な待合室。
            </p>
            <p class="c-txt-sm">
              もうひとつは、お子さまとそのご家族のために、診療室内に設けています。<br />それは、親が診療中でも、子供がすぐ近くにいることができ、<br />お互いに安心して時間を過ごしてもらえるようにするためです。<br />親子連れでも、気兼ねなく通えるクリニックをめざしています。
            </p>
          </div>
        </div>
      </section>
      <div class="policy-contents">
        <div class="c-container">
          <section class="policy1 appear up">
            <div class="policy1__desc item">
              <h1>CLINIC POLICY</h1>
              <h2 class="c-txt-lr">RivRound医院の3つの特徴</h2>
              <p class="c-subtitle">緻密で、丁寧に。<br />確実な治療をめざして。</p>
            </div>
            <div class="feature">
              <div class="feature__item">
                <div class="feature__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/medical__2@pc.jpg" alt="">
                </div>
                <div class="feature__desc">
                  <h3 class="feature__subtitle">
                    <i>1</i><span class="c-txt-md">耳鼻咽喉科の専門医として</span>
                  </h3>
                  <p class="c-txt-sm">
                    当クリニックでは、専門医の強みを活かして早期発見、早期治療につながる内視鏡検査や超音波検査を行うことができます。また、CTやMRIなども、診察室で画像を見ながら、わかりやすく結果を説明することができます。
                    万一、紹介が必要となった際でも、疾患に合わせて信頼できる医療機関をご紹介しています。 わからないことやご不安がありましたらご相談ください。
                  </p>
                </div>
              </div>
              <div class="feature__item">
                <div class="feature__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/naisikyo.jpg" alt="">
                </div>
                <div class="feature__desc">
                  <h3 class="feature__subtitle">
                    <i>2</i><span class="c-txt-md">くつろぎの環境で行う、からだに優しい内視鏡検査</span>
                  </h3>
                  <p class="c-txt-sm">
                    「病気の早期発見、早期治療に内視鏡検査はとてもメリットがある」、ということは知っているものの、どうしても「苦しそう」「怖そう」「痛いらしい」などのイメージがあり、先延ばしにしている方は多いのではないでしょうか？

                    当クリニックでは、より楽に、より安心して検査を受けていただくために、患者さまがくつろげる環境を整え、確かな観察力をご提供します。
                  </p>
                </div>
              </div>
              <div class="feature__item">
                <div class="feature__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling.jpg" alt="">
                </div>
                <div class="feature__desc">
                  <h3 class="feature__subtitle">
                    <i>3</i><span class="c-txt-md">皆様のかかりつけ医として</span>
                  </h3>
                  <p class="c-txt-sm">
                    感冒やワクチン接種などの一般的な内科診療のほか、健康長寿の妨げになる生活習慣病（高血圧や高脂血症、骨粗しょう症など）を早期に発見し、大病にならないよう継続的に診療を行います。
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- /.policy-contents -->
      <section class="p-service appear up">
        <div id="pagination" class="swiper-container item">
          <div class="swiper-wrapper">
            <!-- item01 -->
            <div id="swiper-slide" class="swiper-slide">
              <div class="swiper-slide__box">
                <img class="pagination-img" src="<?php echo get_template_directory_uri(); ?>/images/home/counseling-2.jpg" />
                <h3 class="p-service__name">一般内科</h3>
                <p class="c-txt-sm">
                  ざっと診察して薬を処方するのではなく、今の症状がなぜ起きているのかを分かりやすく患者様にお伝えをし、症状がよくなった後も出来るかぎり再発しないように予防策を丁寧にお伝えしていきます。
                </p>
                <div class="btn-link2">
                  <a class="animsition-link" href="<?php echo esc_url( home_url('service')); ?>#service1" title="一般内科について"
                    tabindex="0"><span>一般内科について</span></a>
                </div>
              </div>
            </div>
            <!-- item02 -->
            <div id="swiper-slide" class="swiper-slide">
              <div class="swiper-slide__box">
                <img class="pagination-img" src="<?php echo get_template_directory_uri(); ?>/images/home/counseling.jpg" />
                <h3 class="p-service__name">耳鼻咽喉科</h3>
                <p class="c-txt-sm">
                  耳鼻咽喉科というのは、命にかかわるような疾患を扱うわけではないのですが、患者さまの生活の質にかかわる大事な部分です。患者さまの生活の質を少しでも改善することができる大切なものです。少しでも患者さまの生活が豊かになるよう、お手伝いができればと思います。
                </p>
                <div class="btn-link2">
                  <a class="animsition-link" href="<?php echo esc_url( home_url('service')); ?>#service2" title="耳鼻咽喉科について"
                    tabindex="0"><span>耳鼻咽喉科について</span></a>
                </div>
              </div>
            </div>
            <!-- item03 -->
            <div id="swiper-slide" class="swiper-slide">
              <div class="swiper-slide__box">
                <img class="pagination-img" src="<?php echo get_template_directory_uri(); ?>/images/home/rentogen.jpg" />
                <h3 class="p-service__name">各種検診・診察</h3>
                <p class="c-txt-sm">
                  どんなに良い治療を施したとしても、それを維持する方法を知らない、あるいは実践しなければいずれ不具合が生じてしまいます。治療の繰り返しにならないよう、予防を軸とした診療の流れに沿って治療を進めていきます。
                </p>
                <div class="btn-link2">
                  <a class="animsition-link" href="<?php echo esc_url( home_url('service')); ?>#service3" title="各種検診・診察について"
                    tabindex="0"><span>各種検診・診察について</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div id="swiper-pagination" class="swiper-pagination"></div> -->
          <div class="swiper-button-prev"><button>PREV</button></div>
          <div class="swiper-button-next"><button>NEXT</button></div>
        </div>
      </section>
      <!-------- /.p-service -------->
      <footer class="p-footer">
        <div class="c-container">
          <div class="p-footer-wrap">
            <div class="logo">
              <a href="/" title="トップページ"><img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" alt="rivround" /></a>
            </div>
            <div class="p-footer__schedule">
              <table class="table-schedule">
                <tbody>
                  <tr class="font-b">
                    <th>診療時間</th>
                    <th>月</th>
                    <th>火</th>
                    <th>水</th>
                    <th>木</th>
                    <th>金</th>
                    <th>土</th>
                    <th>日・祝</th>
                  </tr>
                  <tr>
                    <td>9:30-13:00</td>
                    <td>◯</td>
                    <td>◯</td>
                    <td>−</td>
                    <td>◯</td>
                    <td>◯</td>
                    <td>◯</td>
                    <td>−</td>
                  </tr>
                  <tr>
                    <td>14:00-18:30</td>
                    <td>◯</td>
                    <td>◯</td>
                    <td>−</td>
                    <td>◯</td>
                    <td>◯</td>
                    <td>△</td>
                    <td>−</td>
                  </tr>
                </tbody>
              </table>
              <p>※土曜日の午後診療は〜17:30となります。</p>
            </div>
            <div class="inner">
              <address>
                <p>
                  812-0011 福岡県福岡市博多区博多駅前3-27-25-9F<br /><span>TEL
                    <a href="tel:092-686-7954" title="電話をかける">092-686-7954</a></span>
                </p>
              </address>
              <p class="font-b">
                一般内科・耳鼻咽喉科・予防接種・各種検診
              </p>
            </div>
          </div>
          <ul class="sns-list">
            <li>
              <a href="https://www.facebook.com/" target="_blank" rel="noopener" title="facebook"><img
                  src="<?php echo get_template_directory_uri(); ?>/images/common/facebook.svg" alt="facebook" /></a>
            </li>
            <li>
              <a href="https://www.instagram.com/" target="_blank" rel="noopener" title="instagram"><img
                  src="<?php echo get_template_directory_uri(); ?>/images/common/insta-black.svg" alt="instagram" /></a>
            </li>
            <li>
              <a href="https://line.me/ja/" title="line"><img src="<?php echo get_template_directory_uri(); ?>/images/common/LINE_black.svg" alt="line" /></a>
            </li>
          </ul>
          <small class="copyright">
            &copy;RivRound.inc
          </small>
        </div>
      </footer>
      <!-------- /.p-footer -------->
    </div>
    <!-- /#main-contents -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="/">ホーム</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('about')); ?>">当医院について</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('service')); ?>">診療内容</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('doctor')); ?>">医師紹介</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('faq')); ?>">よくある質問</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('news')); ?>">お知らせ</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('ricruit')); ?>">採用情報</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.mobile-menu -->
  </div>
  <!-- /.about-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/swiper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/pagination.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>