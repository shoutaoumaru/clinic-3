<?php
 /* Template Name: faq
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>よくあるご質問 | 医院テンプレート3</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div class="main-wrapper animsition">
    <!-- /.mobile-container -->
    <header id="header" class="c-header sp-nav-hid">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
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
    <div class="faq-contents">
      <div class="c-topview">
        <div class="c-topview__img">
          <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/c-topview__pc.jpg" alt="">
          <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/c-topview__pc.jpg" alt="">
        </div>
      </div>
      <div class="c-container">
        <div class="faq">
          <div class="faq__inner">
            <h2 class="faq__title">
              <p class="c-title">よくあるご質問</p>
            </h2>
            <div class="c-txtarea01">
              <p class="c-txt-sm">当院に今までにお寄せいただきましたご質問を掲載いたします。もし、お求めのご質問が見当たらないようでしたら、お気軽に当院までお問い合わせください。</p>
            </div>
            <dl class="faq__block">
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">診療時間を予約することは出来ますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      はい。定期的な受診に際し、可能な限りお待たせする時間を少なくするため、また適切な診療時間を確保するため、当院では予約制を採用させていただいております。
                      初診の際しても、事前のご連絡でご予約をお取りすることができます。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">今、困っているのですが、当日診てもらえますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      当院は予約制ですので、予約の方が優先になりますが、当日キャンセルにて空きが出る場合もございますので直接クリニックまでお問い合わせください。緊急性の高い処置が必要な場合は、優先して拝見いたします。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">駐車場はありますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">はい。クリニック裏に10台分の駐車スペースがございます。駐輪場もございますので、お近くの方は自転車でもお越しいただけます。</p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">クレジットカードは使えますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      保険診療は使えません。<br>自由診療のみお使え致します。
                    </p>
                  </div>
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- /.fq-contents -->
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
  <!-- /.main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/accordion.js"></script>
</body>

</html>