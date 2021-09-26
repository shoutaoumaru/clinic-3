<?php
 /* Template Name: recruit
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>採用情報 | 医院テンプレート3</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div id="main-wrapper" class="recruit-wrapper animsition">
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
    <div class="contents-recruit">
      <section class="recruit-message">
        <div class="c-topview appear up">
          <div class="c-topview__img item">
            <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/reception@pc.jpg" alt="">
            <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/reception@pc.jpg" alt="">
          </div>
        </div>
        <div class="c-container">
          <h1 class="recruit-message__title">
            <p class="contents-title">採用情報</p>
            <p class="contents-subtitle">Recruit</p>
          </h1>
          <h2 class="recruit-subtitle">当院の特徴
          </h2>
          <div class="recruit-message__wrap">
            <div class="recruit-message__block">
              <h3 class="recruit-message-subtitle">
                <p class="c-txt-md">1. 充実した研修で安心してスタートできます</p>
              </h3>
              <div class="recruit-message-desc">
                <p class="c-txt-sm">
                  経験者は歓迎いたしますが、未経験やブランクがあるという方もご安心ください。入社後はまず、研修をおこない一通りのスキルを身に着けていただきます。<br>研修後も、しっかりフォローするので、安心してスタートできます。
                </p>
              </div>
            </div>
            <div class="recruit-message__block">
              <h3 class="recruit-message-subtitle">
                <p class="c-txt-md">2. あなたのスキルアップを応援します</p>
              </h3>
              <div class="recruit-message-desc">
                <p class="c-txt-sm">より高いスキルを修得したいという方は、外部研修への参加も可能です。<br
                    class="u-view-sp">費用も当院で負担(最大9割)いたしますので、希望される方は、気軽に声をあげてください。もちろんスキルが上がれば、それに応じて昇給など、給与で還元します。
                </p>
              </div>
            </div>
            <div class="recruit-message__block">
              <h3 class="recruit-message-subtitle">
                <p class="c-txt-md">3. 笑顔とありがとうを大切にします</p>
              </h3>
              <div class="recruit-message-desc">
                <p class="c-txt-sm">患者さまにもスタッフにも、常に笑顔で接します。そして「ありがとう」の気持ちはきちんと言葉に出してスタッフへ伝えます。笑顔とありがとうがあふれる、明るい医院です。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.recruit-message -->
      <section class="recruit-detaiil">
        <div class="c-container">
          <section class="recruit-sec">
            <h3 class="recruit-subtitle">
              募集内容</h3>
            <div class="c-table01 is-top">
              <table>
                <tbody>
                  <tr>
                    <th>職種/仕事内容</th>
                    <td>[1]看護師<br class="u-view-sp">看護業務、医院内雑務、備品管理など<br><br>[2]受付<br>窓口対応、診療補助、備品管理など
                    </td>
                  </tr>
                  <tr>
                    <th>対象となる方</th>
                    <td>[1]看護師免許をお持ちの方<br>[2]経験者大歓迎！未経験・第二新卒・ブランクもOK<br><span class="c-note01">喫煙に関しては、当社服務規程あり</span>
                    </td>
                  </tr>
                  <tr>
                    <th>勤務地</th>
                    <td>福岡県福岡市博多区博多駅前3-27-25-9F</td>
                  </tr>
                  <tr>
                    <th>アクセス</th>
                    <td>博多駅前博多口徒歩5分<br>★車、自転車、バイク通勤OK</td>
                  </tr>
                  <tr>
                    <th>勤務時間</th>
                    <td>
                      【午前】8:40~13:10<br>【午後】14:20~18:50<br>★変形労働時間制/週40時間以内<br>★休診日…木曜・日曜・祝日(土曜日は隔週)<br>★診療時間は18:30まで。片付けの時間を考えて勤務は<br
                        class="u-view-pc">18:50までに設定しているので、残業ほぼなしの予定です♪<br>★[P]勤務時間や曜日など、ご相談下さい。</td>
                  </tr>
                  <tr>
                    <th>給与</th>
                    <td>
                      <dl class="c-table01__salary">
                        <dt>&lt;看護師&gt;</dt>
                        <dd>[社]月給27万円~ <br class="u-view-sp"><span
                            class="c-note01">新卒1年以内26万</span><br>[P]時給1600円~(土曜:1700円)</dd>
                      </dl>
                      <dl class="c-table01__salary">
                        <dt>&lt;受付&gt;</dt>
                        <dd>[社]19万円~<br>[P]時給1000円~(土曜:1100円)</dd>
                      </dl>
                      <span class="c-note01">年齢・経験・能力など考慮の上、優遇します</span><br><span class="c-note01">残業代別途支給</span>
                    </td>
                  </tr>
                  <tr>
                    <th>休日休暇</th>
                    <td>&lt;&lt;年間休日134日&gt;&gt;<br>木曜・日曜・祝日(土曜日は隔週)<br><span
                        class="c-note01">祝日がある週は土曜日に振替出勤あり</span><br><span
                        class="c-note01">GW(4/29~5/6)、お盆(8/11~8/15)</span><br><span
                        class="c-note01">誕生日特別休暇あり</span><br><span
                        class="c-note01">有給休暇10日(うち5日指定有給)<br>2週間前に申請してもらえればOK!</span></td>
                  </tr>
                  <tr>
                    <th>待遇・福利厚生</th>
                    <td>昇給年1回、交通費全額支給、雇用・労災・<br class="u-view-sp">歯科医師国保(※任意適用事業)、<br>制服貸与、自転車・バイク・車通勤◎、<br
                        class="u-view-sp">試用期間3ヶ月(同条件)<br>[社]賞与年2回、産休・育休制度、セミナー費用90％当院負担</td>
                  </tr>
                  <tr>
                    <th>応募方法</th>
                    <td>
                      まずはお電話にてご応募ください。<br>追ってこちらから面接日等の詳細をお知らせします。<br>お仕事や職場のことをもっと知りたいという方は、お気軽にお問合せ下さい。<br>面接日・入社日のご相談もお気軽にどうぞ。現在お仕事中の方もぜひご検討下さい。
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
          <section class="recruit-sec is-bottom">
            <h3 class="recruit-subtitle">医院情報</h3>
            <div class="c-table01">
              <table>
                <tbody>
                  <tr>
                    <th>医院名</th>
                    <td>RivRoundクリニック</td>
                  </tr>
                  <tr>
                    <th>設立</th>
                    <td>2020年12月1日(水)</td>
                  </tr>
                  <tr>
                    <th>代表者</th>
                    <td>院長：利部 翔太</td>
                  </tr>
                  <tr>
                    <th>所在地住所</th>
                    <td>〒812-0011 <br class="u-view-sp">福岡県福岡市博多区博多駅前3-27-25-9F</td>
                  </tr>
                  <tr>
                    <th>電話番号</th>
                    <td><a href="tel:092-686-7954">092-686-7954</a></td>
                  </tr>
                  <tr>
                    <th>メール</th>
                    <td><a href="mailto:info@riv-round.com">info@riv-round.com</a></td>
                  </tr>
                  <tr>
                    <th>事業内容</th>
                    <td>耳鼻咽喉科</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </section>
      <!-- /#essentials -->
    </div>
    <!-- /.contents-recruit -->
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
  <!-- /#main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>