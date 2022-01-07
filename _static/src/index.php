<?php
$pageId = 'home';
include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'); ?>

<main class="p-home">
  <div class="inner-block">

    <div class="media">
      <div class="media__img-wrapper">
        <img class="media__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
      </div>
      <div class="media__body">
        <h3 class="media__title">level3-heading</h3>
        <p class="media__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div><!-- /.media__body-->
    </div><!-- /.media-->

    <div class="space"></div>

    <div class="media media--reverse">
      <div class="media__img-wrapper">
        <img class="media__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
      </div>
      <div class="media__body">
        <h3 class="media__title">level3-heading</h3>
        <p class="media__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div><!-- /.media__body-->
    </div><!-- /.media-->

    <div class="space"></div>

    <div class="half-media">
      <div class="half-media__img-wrapper">
        <img class="half-media__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
      </div>
      <div class="half-media__body">
        <h3 class="half-media__title">level3-heading</h3>
        <p class="half-media__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div><!-- /.half-media__body-->
    </div><!-- /.half-media-->

    <div class="space"></div>

    <div class="cards cards--col3">
      <div class="cards__item card">
        <div class="card__img-wrapper">
          <img class="card__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
        </div>
        <div class="card__body">
          <h3 class="card__title">level3-heading</h3>
          <p class="card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div><!-- /.card__body -->
      </div><!-- /.card -->

      <div class="cards__item card">
        <p class="card__badge">
          <span class="card__badge-text">New</span>
        </p>
        <div class="card__img-wrapper">
          <img class="card__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
        </div>
        <div class="card__body">
          <h3 class="card__title">level3-heading</h3>
          <p class="card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div><!-- /.card__body -->
      </div><!-- /.card -->

      <a class="cards__item card card--link" href="#">
        <div class="card__img-wrapper">
          <img class="card__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
        </div>
        <div class="card__body">
          <h3 class="card__title">level3-heading</h3>
          <p class="card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div><!-- /.card__body -->
      </a><!-- /.card -->
    </div><!-- /.cards -->

    <div class="space"></div>

    <div class="horizontal-table horizontal-table--md-scroll">
      <table class="horizontal-table__inner">
        <tbody class="horizontal-table__body">
          <tr class="horizontal-table__row">
            <th class="horizontal-table__header">名前</th>
            <td class="horizontal-table__text">名無し</td>
          </tr>
          <tr class="horizontal-table__row">
            <th class="horizontal-table__header">所属</th>
            <td class="horizontal-table__text">無所属</td>
          </tr>
          <tr class="horizontal-table__row">
            <th class="horizontal-table__header">職種</th>
            <td class="horizontal-table__text">テキストテキストテキストテキストテキスト</td>
          </tr>
          <tr class="horizontal-table__row">
            <th class="horizontal-table__header">特技</th>
            <td class="horizontal-table__text">テキストテキストテキストテキストテキスト</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.horizontal-table -->

    <div class="space"></div>

    <div class="vertical-table">
      <table class="vertical-table__inner">
        <thead class="vertical-table__headers">
          <tr class="vertical-table__header-row">
            <th class="vertical-table__header">名前</th>
            <th class="vertical-table__header">所属</th>
            <th class="vertical-table__header">職種</th>
            <th class="vertical-table__header">特技</th>
          </tr>
        </thead>
        <tbody class="vertical-table__body">
          <tr class="vertical-table__body-row">
            <td class="vertical-table__text">名無し</td>
            <td class="vertical-table__text">無所属</td>
            <td class="vertical-table__text">テキスト</td>
            <td class="vertical-table__text">テキスト</td>
          </tr>
          <tr class="vertical-table__body-row">
            <td class="vertical-table__text">名無し</td>
            <td class="vertical-table__text">無所属</td>
            <td class="vertical-table__text">テキスト</td>
            <td class="vertical-table__text">テキスト</td>
          </tr>
          <tr class="vertical-table__body-row">
            <td class="vertical-table__text">名無し</td>
            <td class="vertical-table__text">無所属</td>
            <td class="vertical-table__text">テキスト</td>
            <td class="vertical-table__text">テキスト</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.vertical-table -->

    <div class="space"></div>

    <div class="cross-table">
      <table class="cross-table__inner">
        <thead class="cross-table__headers">
          <tr class="cross-table__header-row">
            <th class="cross-table__header cross-table__header--md-sticky">名前</th>
            <th class="cross-table__header cross-table__header--md-sticky">職種</th>
            <th class="cross-table__header cross-table__header--md-sticky">所属</th>
            <th class="cross-table__header cross-table__header--md-sticky">特技</th>
          </tr>
        </thead>
        <tbody class="cross-table__body">
          <tr class="cross-table__body-row">
            <th class="cross-table__header cross-table__header--md-sticky">名無し</th>
            <td class="cross-table__text">無所属</td>
            <td class="cross-table__text">テキスト</td>
            <td class="cross-table__text">テキスト</td>
          </tr>
          <tr class="cross-table__body-row">
            <th class="cross-table__header cross-table__header--md-sticky">名無し</th>
            <td class="cross-table__text">無所属</td>
            <td class="cross-table__text">テキスト</td>
            <td class="cross-table__text">テキスト</td>
          </tr>
          <tr class="cross-table__body-row">
            <th class="cross-table__header cross-table__header--md-sticky">名無し</th>
            <td class="cross-table__text">無所属</td>
            <td class="cross-table__text">テキスト</td>
            <td class="cross-table__text">テキスト</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.cross-table -->

    <div class="space"></div>

    <nav class="pager">
      <ul class="pager__inner">
        <li class="pager__item">
          <a class="pager__link" href="#"><i class="fas fa-angle-double-left"></i></a>
        </li>
        <li class="pager__item">
          <a class="pager__link" href="#"><i class="fas fa-angle-left"></i></a>
        </li>
        <li class="pager__item">
          <span class="pager__link pager__link--active">1</span>
        </li>
        <li class="pager__item">
          <a class="pager__link" href="">2</a>
        </li>
        <li class="pager__item">
          <a class="pager__link" href="">3</a>
        </li>
        <li class="pager__item">
          <a class="pager__link" href="#"><i class="fas fa-angle-right"></i></a>
        </li>
        <li class="pager__item">
          <a class="pager__link" href="#"><i class="fas fa-angle-double-right"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.pager -->

    <div class="space"></div>

    <nav class="tab-navigation">
      <ul class="tab-navigation__inner">
        <li class="tab-navigation__item">
          <span class="tab-navigation__link tab-navigation__link--active">テキストについて</span>
        </li>
        <li class="tab-navigation__item">
          <a href="#" class="tab-navigation__link">テキストについて</a>
        </li>
        <li class="tab-navigation__item">
          <a href="#" class="tab-navigation__link">テキストについて</a>
        </li>
        <li class="tab-navigation__item">
          <a href="#" class="tab-navigation__link">テキストについて</a>
        </li>
        <li class="tab-navigation__item">
          <a href="#" class="tab-navigation__link">テキストについて</a>
        </li>
      </ul>
    </nav>

    <div class="space"></div>

    <div class="cta-area">
      <h2 class="cta-area__title">
        お気軽にお問い合わせください
      </h2>
      <p class="cta-area__text">
        弊社のサービスや製品のことできになることがございましたら、お気軽にお問い合わせください<br>
        <a href="#">→問い合わせする</a>
      </p>
    </div>
    <!-- /.cta-area -->

    <div class="space"></div>

    <ul class="price-boxes">
      <li class="price-boxes__item price-box">
        <div class="price-box__header">
          <p class="price-box__title">STARTER</p>
          <p class="price-box__price">6000 <span class="price-box__price-unit">円/月</span> </p>
        </div><!-- /.price-box__header -->
        <div class="price-box__body">
          <p class="price-box__lead">初めてのインバウンドマーケティングを行う企業向けのスタートアッププラン</p>
          <dl class="price-box__features">
            <dt class="price-box__features-header">費用に含まれるコンタクト数</dt>
            <dd class="price-box__features-text">1000件</dd>
            <dt class="price-box__features-header">月間サイト訪問者数</dt>
            <dd class="price-box__features-text">3000</dd>
            <dt class="price-box__features-header">月間Eメール送信数上限</dt>
            <dd class="price-box__features-text">最大コンタクト数の5倍</dd>
          </dl>
        </div><!-- /.price-box__body -->
      </li>
      <li class="price-boxes__item price-box">
        <div class="price-box__header">
          <p class="price-box__title">STARTER</p>
          <p class="price-box__price">6000 <span class="price-box__price-unit">円/月</span> </p>
        </div><!-- /.price-box__header -->
        <div class="price-box__body">
          <p class="price-box__lead">初めてのインバウンドマーケティングを行う企業向けのスタートアッププラン</p>
          <dl class="price-box__features">
            <dt class="price-box__features-header">費用に含まれるコンタクト数</dt>
            <dd class="price-box__features-text">1000件</dd>
            <dt class="price-box__features-header">月間サイト訪問者数</dt>
            <dd class="price-box__features-text">3000</dd>
            <dt class="price-box__features-header">月間Eメール送信数上限</dt>
            <dd class="price-box__features-text">最大コンタクト数の5倍</dd>
          </dl>
        </div><!-- /.price-box__body -->
      </li>
      <li class="price-boxes__item price-box">
        <div class="price-box__header">
          <p class="price-box__title">STARTER</p>
          <p class="price-box__price">6000 <span class="price-box__price-unit">円/月</span> </p>
        </div><!-- /.price-box__header -->
        <div class="price-box__body">
          <p class="price-box__lead">初めてのインバウンドマーケティングを行う企業向けのスタートアッププラン</p>
          <dl class="price-box__features">
            <dt class="price-box__features-header">費用に含まれるコンタクト数</dt>
            <dd class="price-box__features-text">1000件</dd>
            <dt class="price-box__features-header">月間サイト訪問者数</dt>
            <dd class="price-box__features-text">3000</dd>
            <dt class="price-box__features-header">月間Eメール送信数上限</dt>
            <dd class="price-box__features-text">最大コンタクト数の5倍</dd>
          </dl>
        </div><!-- /.price-box__body -->
      </li>
    </ul>
    <!-- /.price-boxes -->

    <div class="space"></div>

    <div class="price-table">
      <table class="price-table__inner">
        <thead class="price-table__headers">
          <tr class="price-table__header-row">
            <th>&nbsp;</th>
            <th class="price-table__header">
              <p class="price-table__header-title">STARTER</p>
              <p class="price-table__price">6,000 <span class="price-table__price-unit">円/月</span></p>
            </th>
            <th class="price-table__header">
              <p class="price-table__header-title">STARTER</p>
              <p class="price-table__price">6,000 <span class="price-table__price-unit">円/月</span></p>
            </th>
            <th class="price-table__header">
              <p class="price-table__header-title">STARTER</p>
              <p class="price-table__price">6,000 <span class="price-table__price-unit">円/月</span></p>
            </th>
          </tr>
        </thead>
        <tbody class="price-table__body">
          <tr class="price-table__body-row">
            <th class="price-table__body-title">費用に含まれる<br class="only-md">コンタクト数</th>
            <td class="price-table__body-text">1,000件</td>
            <td class="price-table__body-text">1,000件</td>
            <td class="price-table__body-text">1,000件</td>
          </tr>
          <tr class="price-table__body-row">
            <th class="price-table__body-title">月間サイト<br class="only-md">訪問者数</th>
            <td class="price-table__body-text">3,000</td>
            <td class="price-table__body-text">3,000</td>
            <td class="price-table__body-text">3,000</td>
          </tr>
          <tr class="price-table__body-row">
            <th class="price-table__body-title">月間Eメール<br class="only-md">送信者上限</th>
            <td class="price-table__body-text">最大コンタクト数の5倍</td>
            <td class="price-table__body-text">最大コンタクト数の5倍</td>
            <td class="price-table__body-text">最大コンタクト数の5倍</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.price-table -->

    <div class="space"></div>

    <dl class="faq">
      <dt class="faq__row faq__row--question">
        <span class="faq__icon faq__icon--question">Q</span>
        <span class="faq__question-text">どのようなCMS開発の実績がありますか？</span>
      </dt>
      <dd class="faq__row faq__row--answer">
        <span class="faq__icon faq__icon--answer">A</span>
        <div class="faq__answer-body">
          <p class="faq__answer-text">WordPress,Movable Type,HubSpot CMS,Sitecoreの開発実績がございます。</p>
        </div><!-- ./faq__answer-body -->
      </dd>
      <dt class="faq__row faq__row--question">
        <span class="faq__icon faq__icon--question">Q</span>
        <span class="faq__question-text">どのようなCMS開発の実績がありますか？</span>
      </dt>
      <dd class="faq__row faq__row--answer">
        <span class="faq__icon faq__icon--answer">A</span>
        <div class="faq__answer-body">
          <p class="faq__answer-text">WordPress,Movable Type,HubSpot CMS,Sitecoreの開発実績がございます。</p>
        </div><!-- ./faq__answer-body -->
      </dd>
    </dl>
    <!-- /.faq -->

    <div class="space"></div>

    <dl class="accordion">
      <dt class="accordion__title">
        <button class="accordion__btn" type="button">どのようなCMS開発の実績がありますか？</button>
      </dt>
      <dd class="accordion__body">
        <p class="accordion__text">WordPress,Movable Type,HubSpot CMS,Sitecoreの開発実績がございます。</p>
      </dd>
      <!-- コンテンツが開閉する要素 -->
      <dt class="accordion__title">
        <button class="accordion__btn accordion__btn--active" type="button">どのようなCMS開発の実績がありますか？</button>
      </dt>
      <dd class="accordion__body accordion__body--active">
        <p class="accordion__text">WordPress,Movable Type,HubSpot CMS,Sitecoreの開発実績がございます。</p>
      </dd>
    </dl>

    <div class="space"></div>

    <div class="jumbotron" style="background-image:url('https://picsum.photos/1200/600')">
      <div class="jumbotron__inner">
        <p class="jumbotron__title">貴社のビジネスに適切な戦略をご提案し<br class="only-lg">「成果」に貢献いたします。</p>
      </div> <!-- ./jumbotron__inner -->
    </div> <!-- ./jumbotron -->

    <div class="space"></div>

    <ul class="vertical-posts">
      <li class="vertical-posts__item">
        <div class="vertical-posts__header">
          <time class="vertical-posts__date" datetime="2020-01-01">2020/01/01</time>
        </div>
        <!-- ./vertical-posts__header -->
        <a href="#" class="vertical-posts__title">【多言語サイトを構築する】①対象言語・地域とURL方式の選定</a>
      </li>
      <li class="vertical-posts__item">
        <div class="vertical-posts__header">
          <time class="vertical-posts__date" datetime="2020-01-01">2020/01/01</time>
        </div>
        <!-- ./vertical-posts__header -->
        <a href="#" class="vertical-posts__title">【多言語サイトを構築する】①対象言語・地域とURL方式の選定</a>
      </li>
      <li class="vertical-posts__item">
        <div class="vertical-posts__header">
          <time class="vertical-posts__date" datetime="2020-01-01">2020/01/01</time>
        </div>
        <!-- ./vertical-posts__header -->
        <a href="#" class="vertical-posts__title">【多言語サイトを構築する】①対象言語・地域とURL方式の選定</a>
      </li>
    </ul>

    <div class="space"></div>

    <ul class="bullet-list">
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト</li>
    </ul>

    <div class="space"></div>

    <ul class="bullet-list bullet-list--horizontal">
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト</li>
    </ul>

    <div class="space"></div>

    <ul class="bullet-list">
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト</li>
      <li class="bullet-list__item">テキストテキスト
        <!--ここからネスト-->
        <ul class="child-bullet-list">
          <li class="child-bullet-list__item">テキスト</li>
          <li class="child-bullet-list__item">テキスト</li>
          <li class="child-bullet-list__item">テキスト</li>
        </ul>
      </li>
    </ul>

    <div class="space"></div>

    <ol class="order-list">
      <li class="order-list__item">テキストテキスト</li>
      <li class="order-list__item">テキストテキスト</li>
      <li class="order-list__item">テキストテキスト</li>
      <li class="order-list__item">テキストテキスト</li>
    </ol>

    <div class="space"></div>

    <ol class="order-list">
      <li class="order-list__item">テキストテキスト</li>
      <li class="order-list__item">テキストテキスト</li>
      <li class="order-list__item">テキストテキスト</li>
      <li class="order-list__item">テキストテキスト
        <!--ここからネストパターン-->
        <ol class="child-order-list">
          <li class="child-order-list__item">テキスト</li>
          <li class="child-order-list__item">テキスト</li>
          <li class="child-order-list__item">テキスト</li>
        </ol>
      </li>
    </ol>

    <div class="space"></div>

    <ul class="horizontal-btn-list">
      <li class="horizontal-btn-list__item">
        <a href="#" class="horizontal-btn-list__btn btn btn--warning">戻る</a>
      </li>
      <li class="horizontal-btn-list__item">
        <a href="#" class="horizontal-btn-list__btn btn">進む</a>
      </li>
    </ul>

    <div class="space"></div>

    <div class="half-media">
      <div class="half-media__img-wrapper">
        <img class="half-media__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
      </div>
      <div class="half-media__body">
        <h3 class="half-media__title">level3-heading</h3>
        <p class="half-media__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <a href="#" class="half-media__button btn">テキスト</a>
      </div><!-- /.half-media__body-->
    </div><!-- /.half-media-->

    <div class="space"></div>

    <div class="cta-area">
      <h2 class="cta-area__title">
        お気軽にお問い合わせください
      </h2>
      <p class="cta-area__text">
        弊社のサービスや製品のことできになることがございましたら、お気軽にお問い合わせください</p>
      <a href="#" class="btn">→問い合わせする</a>
    </div>
    <!-- /.cta-area -->

    <div class="space"></div>

    <ul class="vertical-posts">
      <li class="vertical-posts__item">
        <div class="vertical-posts__header">
          <time class="vertical-posts__date" datetime="2020-01-01">2020/01/01</time>
          <ul class="vertical-posts__labels">
            <li class="vertical-posts__label">
              <span class="label">海外向けマーケティング</span>
            </li>
          </ul>
        </div>
        <!-- ./vertical-posts__header -->
        <a href="#" class="vertical-posts__title">【多言語サイトを構築する】①対象言語・地域とURL方式の選定</a>
      </li>
      <li class="vertical-posts__item">
        <div class="vertical-posts__header">
          <time class="vertical-posts__date" datetime="2020-01-01">2020/01/01</time>
          <ul class="vertical-posts__labels">
            <li class="vertical-posts__label">
              <span class="label">海外向けマーケティング</span>
            </li>
          </ul>
        </div>
        <!-- ./vertical-posts__header -->
        <a href="#" class="vertical-posts__title">【多言語サイトを構築する】①対象言語・地域とURL方式の選定</a>
      </li>
      <li class="vertical-posts__item">
        <div class="vertical-posts__header">
          <time class="vertical-posts__date" datetime="2020-01-01">2020/01/01</time>
          <ul class="vertical-posts__labels">
            <li class="vertical-posts__label">
              <span class="label">海外向けマーケティング</span>
            </li>
          </ul>
        </div>
        <!-- ./vertical-posts__header -->
        <a href="#" class="vertical-posts__title">【多言語サイトを構築する】①対象言語・地域とURL方式の選定</a>
      </li>
    </ul>

    <div class="space"></div>

    <dl class="faq">
      <dt class="faq__row faq__row--question">
        <span class="faq__icon faq__icon--question">Q</span>
        <span class="faq__question-text">どのようなCMS開発の実績がありますか？</span>
      </dt>
      <dd class="faq__row faq__row--answer">
        <span class="faq__icon faq__icon--answer">A</span>
        <div class="faq__answer-body">
          <p class="faq__answer-text">WordPress,Movable Type,HubSpot CMS,Sitecoreの開発実績がございます。</p>
          <ul class="bullet-list">
            <li class="bullet-list__item">テキストテキスト
              <ul class="child-bullet-list">
                <li class="child-bullet-list__item">テキスト</li>
                <li class="child-bullet-list__item">テキスト</li>
                <li class="child-bullet-list__item">テキスト</li>
                <li class="child-bullet-list__item">テキスト</li>
              </ul>
            </li>
            <li class="bullet-list__item">テキストテキスト
              <ul class="child-bullet-list">
                <li class="child-bullet-list__item">テキスト</li>
                <li class="child-bullet-list__item">テキスト</li>
                <li class="child-bullet-list__item">テキスト</li>
              </ul>
            </li>
          </ul>
        </div><!-- ./faq__answer-body -->
      </dd>
    </dl>
    <!-- /.faq -->

    <div class="space"></div>

    <dl class="accordion">
      <!-- コンテンツが開閉する要素 -->
      <dt class="accordion__title">
        <button class="accordion__btn accordion__btn--active" type="button">サービスのご紹介</button>
      </dt>
      <dd class="accordion__body accordion__body--active">
        <p class="accordion__text">弊社では下記のサービスを主軸とし、これらにまつわる周辺業務も提供しております。</p>
        <div class="accordion__cards cards cards--col3">
          <div class="cards__item card">
            <div class="card__img-wrapper">
              <img class="card__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
            </div>
            <div class="card__body">
              <h3 class="card__title">level3-heading</h3>
              <p class="card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div><!-- /.card__body -->
          </div><!-- /.card -->
          <div class="cards__item card">
            <div class="card__img-wrapper">
              <img class="card__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
            </div>
            <div class="card__body">
              <h3 class="card__title">level3-heading</h3>
              <p class="card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div><!-- /.card__body -->
          </div><!-- /.card -->
          <div class="cards__item card">
            <div class="card__img-wrapper">
              <img class="card__img" src="https://picsum.photos/seed/picsum/1600/900" alt="">
            </div>
            <div class="card__body">
              <h3 class="card__title">level3-heading</h3>
              <p class="card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div><!-- /.card__body -->
          </div><!-- /.card -->
        </div><!-- /.cards -->
        <div class="cta-area">
          <h2 class="cta-area__title">
            お気軽にお問い合わせください
          </h2>
          <p class="cta-area__text">
            弊社のサービスや製品のことできになることがございましたら、お気軽にお問い合わせください</p>
          <a href="#" class="btn">→問い合わせする</a>
        </div>
        <!-- /.cta-area -->
      </dd>
    </dl>

  </div><!-- /.inner-block -->
</main>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'); ?>
