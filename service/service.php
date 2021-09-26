<?php
 /* Template Name: service
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>診療について | 医院テンプレート3</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/swiper.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div id="main-wrapper" class="service-wrapper animsition">
    <!-- /.mobile-container -->
    <header id="header" class="c-header sp-nav-hid">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
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
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/')); ?>"><span>ホーム</span></a>
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
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('faq')); ?>"><span>よくあるご質問</span></a>
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
    <div class="service-contents">
      <div class="c-topview appear up">
        <div class="c-topview__img item">
          <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/counseling-2.jpg" alt="">
          <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/counseling-2.jpg" alt="">
        </div>
      </div>
      <div class="c-container">
        <div class="service-desc appear up">
          <div class="service-desc__title item">
            <h1 class="c-title clip-js1 left">SERVICE</h1>
            <h2 class="c-subtitle">すべての治療は、<br />“予防”の観点から。</h2>
          </div>
          <div class="service-desc__text item">
            <p class="c-txt-sm">
              患者さんの訴えに真摯に耳を傾け、信頼できる仲間たちと共に、患者さんにとって最良の道を一生懸命探っていきたい。一期一会の出会いから、安心して健やかな毎日を過ごすことのできるよう、皆様と一緒になって、その答を考えていきたいと思います
            </p>
          </div>
        </div>
        <section class="service-sec">
          <div class="title-set appear up">
            <h2 class=" clip-js left">
              <strong class="c-txt-lr">Our Service</strong>
            </h2>
            <p class="c-txt-md item">
              RivRound医院では、一般内科・耳鼻咽喉科・各種検診・予防接種の診療を行なっています。
            </p>
          </div>
        </section>
        <div id="service1" class="sec-service appear up">
          <figure class="sec-service__img item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/clinic__1@pc.jpg" alt="一般内科" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling-2.jpg" alt="一般内科" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling.jpg" alt="一般内科" />
          </figure>
          <div class="sec-service__desc item">
            <h2 class="title-circle"><strong class="c-txt-md">一般内科</strong></h2>
            <h3 class="c-subtitle">「あって良かった」から、<br class="view-pc">「ないと困る」診療所へ</h3>
            <p class="c-txt-sm">
              ざっと診察して薬を処方するのではなく、今の症状がなぜ起きているのかを分かりやすく患者様にお伝えをし、症状がよくなった後も出来るかぎり再発しないように予防策を丁寧にお伝えしていきます。その場しのぎの治療ではなく、しっかりとご自身の健康に向き合いメインテナンスをしていく。それが私たちが取り組む予防医療です。
            </p>
          </div>
        </div>
        <div id="service2" class="sec-service appear up">
          <figure class="sec-service__img item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/medical__3@pc.jpg" alt="耳鼻咽喉科" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/c-topview__sp.jpg" alt="耳鼻咽喉科" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/naisikyo.jpg" alt="耳鼻咽喉科" />
          </figure>
          <div class="sec-service__desc item">
            <h2 class="title-circle"><strong class="c-txt-md">耳鼻咽喉科</strong></h2>
            <h3 class="c-subtitle">聴覚、嗅覚、味覚と3つの感覚をつかさどる耳鼻咽喉科。<br>患者さんに優しい診療を心がけてます。</h3>
            <p class="c-txt-sm">
              耳鼻咽喉科というのは、命にかかわるような疾患を扱うわけではないのですが、「聞こえにくい」「のどが痛くてご飯が食べられない」というのは、患者さまの生活の質にかかわる大事な部分だと思うんです。とくに聞こえに関しては、少し処置をしたりちょっとしたアドバイスをしたりするだけで、ガラッと生活がしやすくなることもあります。患者さまの生活の質を少しでも改善することができる大切なものです。少しでも患者さまの生活が豊かになるよう、お手伝いができればと思います。
            </p>
          </div>
        </div>
        <div id="service3" class="sec-service appear up">
          <figure class="sec-service__img item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/ct.jpg" alt="各種検診・診察" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/tumiki.jpg" alt="各種検診・診察" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/rentogen.jpg" alt="各種検診・診察" />
          </figure>
          <div class="sec-service__desc item">
            <h2 class="title-circle"><strong class="c-txt-md">各種検診・診察</strong></h2>
            <h3 class="c-subtitle">治療の繰り返しにならないように。<br>
              早期発見、早期治療。</h3>
            <p class="c-txt-sm">
              レントゲンよりもより詳細な情報が得られる、みみ・はな用のCT検査を予約なしに10分程度の短時間で行うことができます。
              また内視鏡検査は刺激の少ない径3.3㎜の細いファイバースコープと異物摘出や 組織検査も可能な鉗子付きファイバースコープの両方を導入しています
            </p>
            <p class="c-txt-sm">
              どんなに良い治療を施したとしても、それを維持する方法を知らない、あるいは実践しなければいずれ不具合が生じてしまいます。治療の繰り返しにならないよう、予防を軸とした診療の流れに沿って治療を進めていきます。
            </p>
          </div>
        </div>
        <div id="service4" class="sec-service appear up">
          <figure class="sec-service__img item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/clinic-vactin.jpg" alt="予防接種" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/medical__4@pc.jpg" alt="予防接種" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/doctor__women.jpg" alt="予防接種" />
          </figure>
          <div class="sec-service__desc item">
            <h2 class="title-circle"><strong class="c-txt-md">予防接種</strong></h2>
            <h3 class="c-subtitle">病気になりにくい免疫づくり。</h3>
            <p class="c-txt-sm">
              感染症にかかると体の中で抗体などが作られ、新たに外から侵入する病原体を攻撃するしくみができます。このしくみを「免疫」といいます。免疫のしくみを利用したのが「ワクチン」です。ワクチンを接種することにより、あらかじめウイルスや細菌(病原体)に対する免疫(抵抗力)を作り出し、病気になりにくくするのです。まれに熱や発しんなどの副反応がみられますが、実際に感染症にかかるよりも症状が軽いことや、まわりの人にうつすことがない、という利点があります。
            </p>
          </div>
        </div>
        <div class="sec-machine">
          <div class="sec-machine__inner">
            <h2 class="title-line clip-js left">
              <p class="c-txt-lr">検査機器・器具</p>
            </h2>
            <ul class="machine-list appear up">
              <li class="item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/ct.jpg" />
                </figure>
                <h3>CT検査</h3>
                <p class="c-txt-sm">
                  レントゲンよりもより詳細な情報が得られる、みみ・はな用のCT検査を予約なしに10分程度の短時間で行うことができます。
                </p>
              </li>
              <li class="item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/naisikyo.jpg" alt="検知液" />
                </figure>
                <h3>内視鏡検査</h3>
                <p class="c-txt-sm">
                  刺激の少ない径3.3㎜の細いファイバースコープと異物摘出や 組織検査も可能な鉗子付きファイバースコープの両方を導入しています
                </p>
              </li>
              <li class="item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/img-point4@2x.jpg" alt="赤外線CCDカメラ" />
                </figure>
                <h3>赤外線CCDカメラ</h3>
                <p class="c-txt-sm">
                  めまいの際に出現する『眼振』という異常な眼球運動を画像で確認することができます。
                </p>
              </li>
              <li class="item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/img-point3@2x.jpg" alt="遠心分離機" />
                </figure>
                <h3>聴力検査室</h3>
                <p class="c-txt-sm">
                  防音構造の聴力検査室でより正確な聴力検査が可能です。
                </p>
              </li>
              <li class="item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/service/img-machine5@2x.jpg" alt="" />
                </figure>
                <h3>滅菌器</h3>
                <p class="c-txt-sm">
                  患者さまの治療に使った道具は、終わり次第、こちらの機器で滅菌をします。RivRound医院では、滅菌器の中でも最上位機器にあたる「クラスB」を使用。一つひとつの道具にも最善の注意を払って、快適な治療環境を患者さまに提供しています。
                </p>
              </li>
              <li class="item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/service/img-machine6@2x.jpg" alt="" />
                </figure>
                <h3>滅菌器</h3>
                <p class="c-txt-sm">
                  患者さまの治療に使った道具は、終わり次第、こちらの機器で滅菌をします。RivRound医院では、滅菌器の中でも最上位機器にあたる「クラスB」を使用。一つひとつの道具にも最善の注意を払って、快適な治療環境を患者さまに提供しています。
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
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
    <!-- /.service-contents -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">ホーム</a>
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
            <a class="animsition-link" href="<?php echo esc_url( home_url('faq')); ?>">よくある質問</a>
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
  <!-- /#main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>