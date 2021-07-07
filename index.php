<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header">
    <section class="p-header c-flex c-flex_spaceBetween-center">
      <h1 class="p-header_logo">Shiro</h1>
      <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
        <span class="p-hamburger__line">
          <span class="u-visuallyHidden">
            メニューを開閉する
          </span>
        </span>
      </button>
    </section>
  </header>
  <main class="l-main">
    <section class="p-mv p-mv-bgImg ">
      <p class="p-mv_title">Shiro</p>
      <p class="p-mv_text">- White flower shop -</p>
    </section>
    <section class="l-wrapper">
      <div class="l-container">
        <div class="c-content l-wrapper_content">
          <h2 class="c-content_title">Concept</h2>
          <hr class="c-content_line">
          <p class="c-content_text">
            私たちShiroは、白いお花だけを取り扱うフラワーショップです。
            色とりどりの花束も素敵だけれど、洗練された「白」の美しさを感じてほしい。
            「白」に対する愛から生まれた静寂な時間が流れる店へ、ぜひお越しください。
          </p>
        </div>
      </div>
      <div class="c-cotent l-background l-background-pt u-position">
        <div class="c-content_img u-position_absolute-topCenter">
          <img src="<?php echo get_template_directory_uri(); ?>/img/concept.jpg" alt="concept">
        </div>
      </div>
    </section>
    <div class="l-container">
      <section class="l-wrapper">
        <div class="c-content">
          <h2 class="c-content_title">Works</h2>
          <hr class="c-content_line">
          <p class="c-content_text">
            オーダーメイドでのブーケ・アレンジメントのデザインのほか、
            ウェディングやイベントの装花なども行なっています。
            一人一人にあったご提案をさせていただきます。
          </p>
        </div>
        <div class="c-card">
          <div class="c-card_item">
            <div class="c-card_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/gift.jpg" alt="">
            </div>
            <h3 class="c-card_title">Gift</h3>
            <p class="c-card_text">
              花束をお送りしたいお相手、伝えたいお気持ちに合わせたプレゼント用花束のアレンジメントをさせていただきます。花言葉などの豆知識もお伝えします。
            <div>
              </p>
            </div>
          </div>
          <div class="c-card_item ccard-right">
            <div class="c-card_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/decoration.jpg" alt="">
            </div>
            <div>
              <h3 class="c-card_title">Decoration</h3>
              <p class="c-card_text">
                花束をお送りしたいお相手、伝えたいお気持ちに合わせたプレゼント用花束のアレンジメントをさせていただきます。花言葉などの豆知識もお伝えします。
              </p>
            </div>
          </div>
          <div class="c-card_item">
            <div class="c-card_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/wedding.jpg" alt="">
            </div>
            <div>
              <h3 class="c-card_title">Wedding</h3>
              <p class="c-card_text">
                ウエディングドレスに合わせたブーケや式場の雰囲気に合う装花をご提案。お打ち合わせの流れや回数、費用などにつきましてはお問い合わせください。
              </p>
            </div>
          </div>
          <div class="c-card_item ccard-right">
            <div class="c-card_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/yourself.jpg" alt="">
            </div>
            <div>
              <h3 class="c-card_title">For yourself</h3>
              <p class="c-card_text">
                お部屋の雰囲気やライフスタイルをお聞きしてご自宅用の花束をご提案し、少しでも長く咲かせるコツもお教えします。花束に合った花瓶をご提案することも可能です。
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section class="l-background l-background-florist u-position">
      <div class="u-position-florist">
        <div class="">
          <div class="c-content ">
            <h2 class="c-content_title">Florist</h2>
            <hr class="c-content_line">
            <p class="c-content_text">
              <span class="c-contact_text-span"></span>Shiro専属のフローリストたちをご紹介。<span class="c-contact_text-span">得意の分野であなたのオーダーを最大限に叶えます。</span>
            </p>
          </div>
        </div>
        <div>
          <div class="p-florist">
            <div class="p-florist_avatar c-avatar">
              <div class="c-avatar_img u-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/img/shiyu.jpg" alt="">
              </div>
              <div class="c-group">
                <h3 class="c-group_title u-group">Shiyu</h3>
                <p class="c-group_text u-group">
                  お花茶屋大学フラワーアレンジメント科を卒業後、さまざまな白い花を探すために世界を一周し、Shiroの創業者となる。
                </p>
              </div>
            </div>
            <div class="p-florist_avatar c-avatar">
              <div class="c-avatar_img u-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mao.jpg" alt="">
                </div">
                <div class="c-group">
                  <h3 class="c-group_title u-group">Mao</h3>
                  <p class="c-group_text u-group">
                    花の魅力に惹かれ、空間デザインの世界からフローリストの道を歩む。主に結婚式やイベントで使用するお花のディレクション担当。 </p>
                </div>
              </div>
              <div class="p-florist_avatar c-avatar">
                <div class="c-avatar_img u-avatar">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/omichan.jpg" alt="">
                </div>
                <div class="c-group">
                  <h3 class="c-group_title u-group">Omichan</h3>
                  <p class="c-group_text u-group">
                    フローリスト兼ガーデナーという特殊な経歴をもつ。豊富な知識と技術でお客様のオーダーを叶える。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="l-wrapper">
        <div class="c-content">
          <h2 class="c-content_title">Shop information</h2>
          <hr class="c-content_line">
          <p class="c-content_text">
            Shiroの店舗情報をご紹介します。
          </p>
        </div>
        <div class="p-shop l-container">
          <div class="p-shop_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/access.jpg" alt="">
          </div>
          <div class="p-access">
            <dl class="p-access_list">
              <div class="c-list_item c-flex">
                <dt class="c-item_title">住所</dt>
                <dd class="c-item_text">〒810-0001</br>
                  福岡県福岡市中央区天神0-0-0
                </dd>
              </div>
              <div class="c-list_item c-flex">
                <dt class="c-item_title">電話番号</dt>
                <dd class="c-item_text">0120-000-000</dd>
              </div>
              <div class="c-list_item c-flex">
                <dt class="c-item_title">営業時間</dt>
                <dd class="c-item_text">11:00-20:30 （定休日：水曜日）</dd>
              </div>
              <div class="c-list_item c-flex">
                <dt class="c-item_title">アクセス</dt>
                <dd class="c-item_text">天神駅12a出口から徒歩6分、東京駅8b出口から徒歩12分</dd>
              </div>
            </dl>
          </div>
        </div>
    </section>
    </div>
    <section class="l-wrapper">
      <div class="c-content p-contact">
        <div class="l-container">
          <div class="p-contact_inner">
            <h2 class="c-content_title">Contact us</h2>
            <hr class="c-content_line">
            <p class="c-content_text">
              <span class="c-contact_text-span"></span>イベントや結婚式でご利用する装花のご相談や、<span class="c-contact_text-span">フラワーアレンジメントのご予約などはこちらからお問い合わせください。</span>
            </p>
          </div>
          <p class="p-contact_btn">
            <a class="c-btn c-btn_contact" href="" target="blank">
              <i class="far fa-envelope">お問い合わせ</i>

              <!-- <span></span> -->
            </a>
          </p>
        </div>
      </div>
    </section>
  </main>
  <footer class="l-footer">
    <div class="l-footer_iner">
      <small class="p-copyright">Copyright © Shiro All Rights Reserved.</small>
    </div>
  </footer>
</body>
<?php wp_footer(); ?>

</html>