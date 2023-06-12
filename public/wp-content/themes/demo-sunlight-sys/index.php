<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<?php get_template_part('inc/head', 'head'); ?>
</head>
<body id="top" class="front_page">
<?php get_template_part('inc/body_action'); ?>
<div <?php body_class() ?>>
<div id="g-container" class="g-container">
<div id="g-container__inner" class="g-container__inner">
<div class="g-container__bg"></div>
<?php get_header(); ?>
<div id="g-fix-ttl" class="g-fix-ttl">
  <p class="g-fix-ttl-txt"></p>
</div>
<div class="c-contents-container">
  <section id="mv" class="mv c-section js-fix-ttl" data-name="index">
    <div class="js-mv-slider">
      <ul class="mv-list swiper-wrapper">
        <li class="list__item --01 swiper-slide">
          <div class="item__contents">
            <div class="item__photo">
              <div class="item__photo-bg"></div>
            </div>
            <div class="mv-cp-container">
              <h1 class="mv-cp">
                <span class="mv-cp__inner --01">心豊かにする</span>
                <span class="mv-cp__inner --02">暖かい空間作り</span>
              </h1>
              <p class="mv-cp-sub">ソファ・テーブルといったコミュニケーションを豊かにする家具、<br class="u-show-pc">本棚やチェストといった収納ツール、アンティークからモダンをも問わず、<br class="u-show-pc">ライフスタイルを豊かにするための幅広いインテリアを取り揃えております。<br class="u-show-pc">Nordicはあなたらしいライフスタイルを北欧家具という観点から<br class="u-show-pc">最適な空間デザインをご提案することをお約束致します。
              </p>
            </div>
          </div>
        </li>
        <li class="list__item --02 swiper-slide">
          <div class="item__contents">
            <div class="item__photo">
              <div class="item__photo-bg"></div>
            </div>
            <div class="mv-cp-container">
              <h1 class="mv-cp">
                <span class="mv-cp__inner --01">オーダーメイドで</span>
                <span class="mv-cp__inner --02">北欧家具を製作</span>
              </h1>
              <p class="mv-cp-sub">長年の経験を培った職人が、世界であなただけのオリジナル北欧家具を製作。<br>ご要望を丁寧にヒアリングし、ご自宅までお届け致します。<br>素材からこだわりたい方もお気軽にご相談ください。</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="mv-sub-container">
      <ul class="mv-sub-list">
        <li class="list__item --01">
          <div class="item__frame">
            <div class="item__photo">
              <div class="item__photo-mask"></div>
              <div class="item__photo-bg"></div>
            </div>
          </div>
        </li>
        <li class="list__item --02">
          <div class="item__frame">
            <div class="item__photo">
              <div class="item__photo-bg"></div>
            </div>
          </div>
        </li>
        <li class="list__item --03">
          <div class="item__frame">
            <div class="item__photo">
              <div class="item__photo-bg"></div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section id="news" class="news c-section js-fix-ttl" data-name="news">
    <div class="c-outer">
      <div class="c-head-container --news">
        <h2 class="c-head-vl-2">
          <span class="c-head-vl-2__inner">
            <span class="c-head-vl-2__en">NEWS</span>
          </span>
        </h2>
      </div>
      <div class="c-inner">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3
        );
        get_template_part('template-parts/loop-news', 'news', $args);
    ?>
      </div>
      <div class="c-btn-container">
        <div class="c-btn">
          <a class="c-btn-link" href="<?php echo esc_url( home_url() ); ?>/news/">
            <span class="c-btn-lbl">READ MORE</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="concept" class="concept c-section js-fix-ttl" data-name="concept">
    <div class="c-outer">
      <div class="c-inner">
        <div class="c-head-container --concept">
          <h2 class="c-head-vl-2">
            <span class="c-head-vl-2__inner">
              <span class="c-head-vl-2__en">CONCEPT</span>
            </span>
          </h2>
        </div>
        <div class="concept-contents">
          <div class="c-lead-container">
            <p class="c-lead">多様化する社会の中で、ストレスを感じなくなる日はもはやないと<br class="u-show-pc">言っても過言ではありません。<br>お仕事や日々の生活の中で溜まり続ける疲れを解消するため、<br class="u-show-pc">家族とのほっとできる団欒で安らぐためのそんな素敵なお家を自身で<br class="u-show-pc">作り上げることが必要になってきています。</p>
            <p class="c-lead">椅子やテーブルなど毎日使う家具を何となく<br class="u-show-pc">無難な値段やデザインで決めていませんか。<br>毎日使う家具だからこそ、その家具を買うことによってどんな気分になり、<br class="u-show-pc">どんなコミュニケーションが生まれるか。<br>また自分に本当に合ったサイズ・形状の家具を適切に選択することにより、<br class="u-show-pc">健康を守ることにもつながることでしょう。</p>
            <p class="c-lead">Nordicでは、あなたがお住まいの家、ご予算、ライフスタイルに合った家具を提案し、<br class="u-show-pc">スピーディーにお届け致します。<br>毎日を彩る暖かみのある素敵な家具たちと一緒にあなたらしい素敵な<br class="u-show-pc">人生をスタートさせましょう。</p>
          </div>
          <div class="concept-list-container">
            <ul class="concept-list">
              <li class="list__item --01">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/concept/img_01.jpg" alt="家の中でコミュニケーションを取る家族のイメージ画像">
              </li>
              <li class="list__item --02">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/concept/img_02.jpg" alt="一人用のソファのイメージ画像">
              </li>
              <li class="list__item --03">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/concept/img_03.jpg" alt="卓上ランプのイメージ画像">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about c-section js-fix-ttl" data-name="about">
    <div class="c-outer">
      <div class="c-head-container --about">
        <h2 class="c-head-vl-2">
          <span class="c-head-vl-2__inner">
            <span class="c-head-vl-2__en">ABOUT</span>
          </span>
        </h2>
      </div>
      <div class="about-contents">
        <div class="about-list-container">
          <ul class="about-list">
            <li class="list__item --01">
              <div class="item__contents">
                <div class="item__photo">
                  <div class="item__photo-bg"></div>
                </div>
                <div class="item__info">
                  <div class="item__info-container">
                    <div class="item__ttl">
                      <h3 class="item__ttl-name">Original Nordic Furniture Order Made</h3>
                    </div>
                    <div class="c-lead-container">
                      <p class="c-lead">オリジナル北欧家具のオーダーメイド製作</p>
                    </div>
                    <div class="item__des-container">
                      <div class="item__des-inner">
                        <p class="item__des">Nordic proposes a new life that enriches the mind through Scandinavian furniture.<br>
                        For example, antique furniture that has been handed down over the years can be handed down to the next generation by adding a new restoration. You will be able to color it.</p>
                        <p class="item__des">We believe that Scandinavian furniture of a wide range of ages, from antique to modern, is a
                        lifestyle choice that nurtures a warm heart.</p>
                      </div>
                      <div class="item__des-inner">
                        <p class="item__des">Nordicは、北欧家具を通すことにより、心を豊かにする新生活を提案します。例えば長い年月を経て受け継がれてきたアンティーク家具に、新たにレストアを加えることで次世代に引き継ぐことができ、物を大切にする心を養えるだけでなく、その暖かい心が人々のコミュニケーションをも彩ってくれることでしょう。</p>
                        <p class="item__des">アンティークからモダンまで幅広い年代の北欧家具こそ、暖かい心を育むライフスタイルの選択であると私たちは信じております。</p>
                      </div>
                    </div>
                    <div class="c-btn-container">
                      <div class="c-btn">
                        <a class="c-btn-link" href="#" target="_blank">
                          <span class="c-btn-lbl">ONLINE SHOP</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item --02">
              <div class="item__contents">
                <div class="item__photo">
                  <div class="item__photo-bg"></div>
                </div>
                <div class="item__info">
                  <div class="item__info-container">
                    <div class="item__ttl">
                      <h3 class="item__ttl-name">Spatial Design Consulting</h3>
                    </div>
                    <div class="c-lead-container">
                      <p class="c-lead">北欧家具による空間デザインコンサルティング</p>
                    </div>
                    <div class="item__des-container">
                      <div class="item__des-inner">
                        <p class="item__des">Simply installing Scandinavian furniture in your home does not mean that you will be able to bring out the best in each piece of furniture.<br>Proper layout of related interiors, such as sofas and tables, bookcases and chests of drawers, will bring out the best in them.</p>
                        <p class="item__des">Nordic offers a free consultation on the interior coordination of the home of the customer who purchased it.<br>We promise to make the best proposals for living a lifestyle that suits you by comprehensively judging
                        the color of the walls, the floor plan, and the interior of your home, including the interior that you already have.</p>
                      </div>
                      <div class="item__des-inner">
                        <p class="item__des">北欧家具をただ設置するだけではそのそれぞれの家具の良さを出し切れているとは言えません。ソファとテーブル、本棚とチェストといった関連するインテリアを適切なレイアウトにすることで本来の良さを発揮できることでしょう。</p>
                        <p class="item__des">Nordicでは、ご購入されたお客様宅のインテリアコーディネートのご相談を無料でお受け致します。元々所持されているインテリアを含め、ご自宅の壁の色、間取り、インテリアを総合的に判断してあなたらしいライフスタイルを送るための最適な提案をお約束致します。</p>
                      </div>
                    </div>
                    <div class="c-btn-container">
                      <div class="c-btn">
                        <a class="c-btn-link" href="#" target="_blank">
                          <span class="c-btn-lbl">ONLINE SHOP</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="products" class="products c-section js-fix-ttl" data-name="products">
    <div class="c-outer">
      <div class="c-head-container --products">
        <h2 class="c-head-vl-2">
          <span class="c-head-vl-2__inner">
            <span class="c-head-vl-2__en">PRODUCTS</span>
          </span>
        </h2>
      </div>
      <div class="products-contents">
        <div class="c-products-container products-list-container">
          <ul class="c-products products-list">
            <li class="list__item">
              <div class="item__contents">
                <a class="item__link" href="#">
                  <div class="item__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/img_3seater.jpg" alt="3 Seater Sofaのイメージ画像">
                  </div>
                  <div class="item__info">
                    <div class="item__name">
                      <p class="item__name-en">3 Seater Sofa</p>
                      <p class="item__name-jp">3シーターソファ</p>
                    </div>
                    <p class="item__price">¥582,000</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="list__item">
              <div class="item__contents">
                <a class="item__link" href="#">
                  <div class="item__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/img_inlayovalcofeetable.jpg" alt="Inlay Oval Coffee Tableのイメージ画像">
                  </div>
                  <div class="item__info">
                    <div class="item__name">
                      <p class="item__name-en">Inlay Oval Coffee Table</p>
                      <p class="item__name-jp">インレイオーバルコーヒーテーブル</p>
                    </div>
                    <p class="item__price">¥145,000</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="list__item">
              <div class="item__contents">
                <a class="item__link" href="#">
                  <div class="item__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/img_bookshelf.jpg" alt="Bookshelfのイメージ画像">
                  </div>
                  <div class="item__info">
                    <div class="item__name">
                      <p class="item__name-en">Bookshelf</p>
                      <p class="item__name-jp">ブックシェルフ</p>
                    </div>
                    <p class="item__price">¥421,000</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="list__item">
              <div class="item__contents">
                <a class="item__link" href="#">
                  <div class="item__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/img_floorlamp.jpg" alt="Floor Lampのイメージ画像">
                  </div>
                  <div class="item__info">
                    <div class="item__name">
                      <p class="item__name-en">Floor Lamp</p>
                      <p class="item__name-jp">フロアランプ</p>
                    </div>
                    <p class="item__price">¥102,000</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="list__item">
              <div class="item__contents">
                <a class="item__link" href="#">
                  <div class="item__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/img_convexmirror.jpg" alt="Convex Mirrorのイメージ画像">
                  </div>
                  <div class="item__info">
                    <div class="item__name">
                      <p class="item__name-en">Convex Mirror</p>
                      <p class="item__name-jp">コンベックスミラー</p>
                    </div>
                    <p class="item__price">¥58,000</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="list__item">
              <div class="item__contents">
                <a class="item__link" href="#">
                  <div class="item__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/img_g-planextensiontable.jpg" alt="G-Plan Extension Tableのイメージ画像">
                  </div>
                  <div class="item__info">
                    <div class="item__name">
                      <p class="item__name-en">G-Plan Extension Table</p>
                      <p class="item__name-jp">G-PLAN エクステンションテーブル</p>
                    </div>
                    <p class="item__price">¥235,000</p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="c-btn-container">
          <div class="c-btn">
            <a class="c-btn-link" href="#" target="_blank">
              <span class="c-btn-lbl">ONLINE SHOP</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="shop" class="shop c-section js-fix-ttl" data-name="shop">
    <div class="c-outer">
      <div class="c-head-container --shop">
        <h2 class="c-head-vl-2">
          <span class="c-head-vl-2__inner">
            <span class="c-head-vl-2__en">SHOP</span>
          </span>
        </h2>
      </div>
      <div class="c-inner">
        <div class="shop-contents">
          <div class="shop-main">
            <div class="shop-main-img"></div>
          </div>
          <div class="shop-info-contents">
            <div class="shop-header">
              <p class="shop-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_black.svg" alt="NORDICのロゴ">
              </p>
              <?php get_template_part('inc/shop_sns', 'shop_sns'); ?>
            </div>
            <div class="shop-info">
              <ul class="shop-info-list">
                <li class="list__item">
                  <p class="item__ttl">代表</p>
                  <p class="item__des">磴 悟（いしばし さとる）／磴 紀子（いしばし のりこ）</p>
                </li>
                <li class="list__item">
                  <p class="item__ttl">所在地</p>
                  <p class="item__des">〒565-0875 大阪府吹田市青山台3丁目3−15</p>
                </li>
                <li class="list__item">
                  <p class="item__ttl">TEL</p>
                  <p class="item__des">
                    <a href="tel:0000000000">06-2610-5905</a>
                  </p>
                </li>
              </ul>
              <ul class="shop-info-list">
                <li class="list__item">
                  <p class="item__ttl">Open</p>
                  <p class="item__des">10:00 - Close 19:00</p>
                </li>
                <li class="list__item">
                  <p class="item__des">水曜定休・日曜予約制</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="g-contact" class="g-contact c-section js-fix-ttl" data-name="contact">
    <div class="g-contact-bg"></div>
    <div class="c-outer">
      <div class="c-head-container --g-contact">
        <h2 class="c-head-vl-2">
          <span class="c-head-vl-2__inner">
            <span class="c-head-vl-2__en">CONTACT</span>
          </span>
        </h2>
      </div>

      <div class="c-inner">
        <div class="g-contact-contents">  
          <div class="g-contact-frame --input">
            <div class="g-contact-lead --input">
              <p class="g-contact-lead-txt">お問い合わせはフォームよりお願いいたします。<br>2、3営業日内に、ご返信させていただきます。<br class="u-show-sp">尚、お急ぎの方は<br
                  class="u-show-sp">お電話にてお問い合わせください。</p>
            </div>
            <div class="g-contact-lead --confirm">
              <p class="g-contact-lead-txt">以下の入力内容で送信しても<br class="u-show-sp">よろしいでしょうか。<br>問題なければ送信ボタンを押してください。</p>
            </div>
            <div class="g-contact-lead --thanks">
              <p class="g-contact-lead-txt">送信完了致しました。<br>担当者から返信があるまでお待ちください。</p>
            </div>
      
            <div class="g-contact-form-container">
              <form id="g-contact-form" class="g-contact-form" method="post">
                <div class="g-contact-form-contents">
                  <div class="g-contact-form-blk --type">
                    <div class="form-blk-lbl">
                      <label class="form-blk-lbl-name">お問い合わせ種別</label>
                      <span class="form-blk-lbl-status --required">必須</span>
                    </div>
                    <div class="form-blk-input --input">
                      <div id="type">
                        <div class="form-blk-input__inner">
                          <label>
                            <input id="type-1" class="type form-blk-radio-field" type="radio" name="type" value="商品について"
                              checked>
                            <span class="form-blk-input-name">商品について</span>
                          </label>
                        </div>
                        <div class="form-blk-input__inner">
                          <label>
                            <input id="type-2" class="type form-blk-radio-field" type="radio" name="type" value="オンラインショップについて">
                            <span class="form-blk-input-name">オンラインショップについて</span>
                          </label>
                        </div>
                        <div class="form-blk-input__inner">
                          <label>
                            <input id="type-3" class="type form-blk-radio-field" type="radio" name="type" value="オーダーメイドについて">
                            <span class="form-blk-input-name">オーダーメイドについて</span>
                          </label>
                        </div>
                        <div class="form-blk-input__inner">
                          <label>
                            <input id="type-4" class="type form-blk-radio-field" type="radio" name="type" value="その他">
                            <span class="form-blk-input-name">その他</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <p class="form-blk-input-err"></p>
                    <div class="form-blk-input --confirm">
                      <p class="form-blk-confirm">ここにお問い合わせ種別が入ります。</p>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --name">
                    <div class="form-blk-lbl">
                      <label class="form-blk-lbl-name" for="name">お名前</label>
                      <span class="form-blk-lbl-status --required">必須</span>
                    </div>
                    <div class="form-blk-input --input">
                      <input id="name" class="name form-blk-input-field" type="text" name="name" value="" data-type="text">
                      <p class="form-blk-input-err"></p>
                    </div>
                    <div class="form-blk-input --confirm">
                      <p class="form-blk-confirm">ここに名前が入ります。</p>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --kana">
                    <div class="form-blk-lbl">
                      <label class="form-blk-lbl-name" for="kana">ふりがな</label>
                      <span class="form-blk-lbl-status --required">必須</span>
                    </div>
                    <div class="form-blk-input --input">
                      <input id="kana" class="kana form-blk-input-field" type="text" name="kana" value="" data-type="text">
                      <p class="form-blk-input-err"></p>
                    </div>
                    <div class="form-blk-input --confirm">
                      <p class="form-blk-confirm">ここにふりがなが入ります。</p>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --tel">
                    <div class="form-blk-lbl">
                      <label class="form-blk-lbl-name" for="tel">TEL</label>
                      <span class="form-blk-lbl-status --free">任意</span>
                    </div>
                    <div class="form-blk-input --input">
                      <input id="tel" class="tel form-blk-input-field" type="text" name="tel" value="" data-type="text">
                      <p class="form-blk-input-err"></p>
                    </div>
                    <div class="form-blk-input --confirm">
                      <p class="form-blk-confirm">ここにTELが入ります。</p>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --email">
                    <div class="form-blk-lbl">
                      <label class="form-blk-lbl-name" for="email">メールアドレス</label>
                      <span class="form-blk-lbl-status --required">必須</span>
                    </div>
                    <div class="form-blk-input --input">
                      <input id="email" class="email form-blk-input-field" type="text" name="email" value="" data-type="text">
                      <p class="form-blk-input-err"></p>
                    </div>
                    <div class="form-blk-input --confirm">
                      <p class="form-blk-confirm">ここにメールアドレスが入ります。</p>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --message">
                    <div class="form-blk-lbl">
                      <label class="form-blk-lbl-name" for="message">お問い合わせ内容</label>
                      <span class="form-blk-lbl-status --required">必須</span>
                    </div>
                    <div class="form-blk-input --input">
                      <textarea id="message" class="message form-blk-textarea-field" name="message"
                        data-type="textarea"></textarea>
                      <p class="form-blk-input-err"></p>
                    </div>
                    <div class="form-blk-input --confirm">
                      <p class="form-blk-confirm">ここにお問い合わせ内容が入ります。</p>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --privacy-policy">
                    <div class="form-blk-input --input">
                      <textarea id="privacy-policy" class="privacy-policy form-blk-textarea-field" readonly>NORDIC（ノルディック）オフィシャルサイト（以下「当店」）では、以下のとおり個人情報保護方針を定め、ご利用者様の個人情報の適切な保護に努めます。
      
        1．個人情報の定義
      
        個人情報とは、以下の情報により特定の個人を識別できるもの、または個人識別符号が含まれるものをいいます。
            ・氏名、年齢、性別、住所、電話番号、職業、メールアドレス
            ・個人別に付与されたID、パスワード、その他の記号など
            ・その情報のみでは特定の個人を識別できないものの、他の情報と容易に照合することができ、これにより特定の個人を識別できることとなる情報
      
        2．個人情報の収集、利用目的
      
        当サイトの個人情報の収集・利用目的は、以下のとおりです。
            ・当サイトサービスの提供・運営のため
            ・お問い合わせに回答するため
            ・情報提供のため
            ・上記の利用目的に付随する目的
      
        3．第三者への開示・提供
      
        当サイトでは、個人情報の収集は、利用目的を出来る限り特定し、必要範囲でこれを行い、利用目的以外の利用及び提供を行いません。
        但し、以下に該当する場合この限りではありません。
            ・お客様から同意をいただいた場合
            ・法令に基づき開示することが必要である場合
            ・不正アクセス、脅迫等の違法行為があった場合
            ・その他特別な理由のある場合
      
        4．ご利用者様の個人情報の管理
      
        当サイトは、ご利用者様の個人データへの不正なアクセスや漏洩、滅失、毀損等を防止するため、必要な安全対策を講じます。
        また、保有を継続しない個人情報は、適切な方法で確実に廃棄または消去します。
      
        5．プライバシーポリシーの変更および告知について
      
        当サイトのプライバシーポリシーの内容は、必要に応じて変更することがありますが、その都度ご利用者様に個別のご連絡はいたしません。
        ご利用の際には当ウェブサイトの最新の内容をご参照ください。
      
        6．ご利用者様の個人データ照会
      
        当サイトに保有されているご利用者様の個人データについて、ご利用者様ご自身が照会、修正、追加、利用停止、消去の各請求を要望される場合は、ご本人であることを確認の上、対応させていただきます。
      
        7．免責
      
        当サイトにリンクされている他のWEBサイトにおけるご利用者様の個人情報等の保護、取扱い等については、一切の責任を負うものではありません。
      
        8．お問い合わせ先
      
        当作業所の個人情報に関するお問い合わせ先は、下記までお願い致します。
      
        ■Webの場合
        お問合わせフォームよりお問合わせ下さい。
      
        ■郵送の場合
        ▼所在地
        〒565-0875 大阪府吹田市青山台3丁目3−15
        NORDICオフィシャルサイト
                                    </textarea>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --privacy-agree">
                    <div class="form-blk-input --input">
                      <div class="form-blk-input">
                        <div class="form-blk-input__inner">
                          <label>
                            <input id="privacy-agree" class="privacy-agree form-blk-checkbox-field" type="checkbox"
                              name="privacy-agree" value="プライバシーポリシーに同意する" data-type="privacy-agree">
                            <span class="form-blk-input-name">プライバシーポリシーに同意する</span>
                          </label>
                        </div>
                        <p class="form-blk-input-err"></p>
                      </div>
                    </div>
                    <div class="form-blk-input --confirm">
                      <p class="form-blk-confirm">ここにプライバシーポリシーに同意するが入ります。</p>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --submit-area --input">
                    <div class="form-blk-input">
                      <div class="form-blk-input">
                        <div class="c-submit-btn-outer --col-1">
                          <div class="c-submit-btn-container">
                            <button id="g-form-input" class="c-submit-btn" type="button">
                              <span class="c-submit-btn__lbl">確認画面へ</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="g-contact-form-blk --submit-area --confirm">
                    <div class="form-blk-input">
                      <div class="form-blk-input">
                        <div class="c-submit-btn-outer">
                          <div class="c-submit-btn-container --prev">
                            <button id="g-form-back" class="c-submit-btn" type="button">
                              <span class="c-submit-btn__lbl">戻る</span>
                            </button>
                          </div>
                          <div class="c-submit-btn-container">
                            <button id="g-form-submit" class="c-submit-btn" type="button">
                              <span class="c-submit-btn__lbl">送信する</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
</div>
</div>
</div>
</div>
</body>
</html>