<?php
  ini_set('display_errors', true);
  error_reporting(E_ALL);

  session_start();
  //$_SESSION['selected_menu'] = 'selected_menu';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['selected_menu'])) {
        // 選択されたメニューの値をセッションに保存
        $_SESSION['selected_menu'] = $_POST['selected_menu'];
    }
  }

  require 'database2.php';

  $err = [];

  $maker_id = $_POST["selected_menu"];
  var_dump($maker_id);
    // 「登録」ボタンが押されて、POST通信のとき
  if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
  $model_name = filter_input(INPUT_POST, 'model_name');
  $color = filter_input(INPUT_POST, 'color');
  $price_24h = filter_input(INPUT_POST, 'price_24h');
  $capacity = filter_input(INPUT_POST, 'capacity');
  $handle = filter_input(INPUT_POST, 'handle');
  $displacement = filter_input(INPUT_POST, 'displacement');
  $fuel = filter_input(INPUT_POST, 'fuel');
  $size_l = filter_input(INPUT_POST, 'size_l');
  $size_w = filter_input(INPUT_POST, 'size_w');
  $size_h = filter_input(INPUT_POST, 'size_h');
  $insurance_deductible_property = filter_input(INPUT_POST, 'insurance_deductible_property');
  $insurance_deductible_vehicle = filter_input(INPUT_POST, 'insurance_deductible_vehicle');
  $noc_self_propelled = filter_input(INPUT_POST, 'noc_self_propelled');
  $noc_not_self_drive = filter_input(INPUT_POST, 'noc_not_self_drive');
  $model_year = filter_input(INPUT_POST, 'model_year');
  $remarks = filter_input(INPUT_POST, 'remarks');

    if ($model_name === '') {
        $err['model_name'] = 'モデル名は入力必須です。';
    }
    if ($color === '') {
        $err['color'] = '車体色は入力必須です。';
    }
    if ($price_24h === '') {
        $err['price_24h'] = '24時間利用料金は入力必須です。';
    }
    if ($capacity === '') {
        $err['capacity'] = '定員は入力必須です。';
    }
    if ($handle === '') {
        $err['handle'] = 'ハンドルは入力必須です。';
    }
    if ($displacement === '') {
        $err['displacement'] = '排気量は入力必須です。';
    }
    if ($fuel === '') {
        $err['fuel'] = '燃料は入力必須です。';
    }
    if ($size_l === '') {
        $err['size_l'] = '全長は入力必須です。';
    }
    if ($size_w === '') {
        $err['size_w'] = '全幅は入力必須です。';
    }
    if ($size_h === '') {
        $err['size_h'] = '全高は入力必須です。';
    }
    if ($insurance_deductible_property === '') {
        $err['insurance_deductible_property'] = '保険免責金額(対物)は入力必須です。';
    }
    if ($insurance_deductible_vehicle === '') {
        $err['insurance_deductible_vehicle'] = '保険免責金額(車両)は入力必須です。';
    }
    if ($noc_self_propelled === '') {
        $err['noc_self_propelled'] = 'ノンオペレーションチャージ(自走可能)は入力必須です。';
    }
    if ($noc_not_self_drive === '') {
        $err['noc_not_self_drive'] = 'ノンオペレーションチャージ(自走不可能)は入力必須です。';
    }
    if ($model_year === '') {
        $err['model_year'] = '年式は入力必須です。';
    }
    if ($remarks === '') {
        $err['remarks'] = '備考は入力必須です。';
    }

    /*if (count($err) === 0) {

      // DB接続
      $pdo = connect();

      // ステートメント
      $stmt = $pdo->prepare('INSERT INTO carmodels (id,maker_id,model_name,color,price_24h,capacity,handle,displacement,fuel,size_l,size_w,size_h,insurance_deductible_property,insurance_deductible_vehicle,noc_self_propelled,noc_not_self_drive,model_year,remarks) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

      // パラメータ設定
      $params = [];
      $params[] = $maker_id;
      $params[] = $model_name;
      $params[] = $color;
      $params[] = $price_24h;
      $params[] = $capacity;
      $params[] = $handle;
      $params[] = $displacement;
      $params[] = $fuel;
      $params[] = $size_l;
      $params[] = $size_w;
      $params[] = $size_h;
      $params[] = $insurance_deductible_property;
      $params[] = $insurance_deductible_vehicle;
      $params[] = $noc_self_propelled;
      $params[] = $noc_not_self_drive;
      $params[] = $model_year;
      $params[] = $remarks;

      //dd($stmt);
      // SQL実行
      $stmt->execute($params);
      
    }*/
  }
?>


<!doctype html>
<link rel="stylesheet" href="/sv-rentacar/resources/css/top.css">
<link rel="stylesheet" href="/sv-rentacar/resources/css/create.css">
<html lang="ja" style="height: 100%;"><head>
    <!-- Google Tag Manager -->
    <script type="text/javascript" src="https://pi.pardot.com/pd.js"></script><script type="text/javascript" async="" id="fjssync" src="https://hm.mieru-ca.com/service/js/mieruca-hm.js?v=1712030383509"></script><script src="https://connect.facebook.net/signals/config/456180551471938?v=2.9.151&amp;r=stable&amp;domain=sky-timeless.com&amp;hme=8ce74e881727851b4427183947937854816d72704925561b9de6420cd43214ee&amp;ex_m=66%2C111%2C98%2C102%2C57%2C3%2C92%2C65%2C15%2C90%2C83%2C48%2C50%2C157%2C160%2C171%2C167%2C168%2C170%2C28%2C93%2C49%2C72%2C169%2C152%2C155%2C164%2C165%2C172%2C120%2C14%2C47%2C176%2C175%2C122%2C17%2C32%2C36%2C1%2C40%2C61%2C62%2C63%2C67%2C87%2C16%2C13%2C89%2C86%2C85%2C99%2C101%2C35%2C100%2C29%2C25%2C153%2C156%2C129%2C27%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C53%2C58%2C60%2C70%2C94%2C26%2C71%2C8%2C7%2C75%2C45%2C20%2C96%2C95%2C9%2C19%2C18%2C77%2C82%2C44%2C43%2C81%2C37%2C39%2C80%2C52%2C78%2C31%2C41%2C34%2C69%2C0%2C88%2C4%2C84%2C76%2C79%2C2%2C33%2C59%2C38%2C97%2C42%2C74%2C64%2C103%2C56%2C55%2C30%2C91%2C54%2C51%2C46%2C73%2C68%2C23%2C104" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script><script type="text/javascript" async="" src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script><script type="text/javascript" async="" src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/destination?id=AW-682009071&amp;l=dataLayer&amp;cx=c"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-J9TFMDN4M8&amp;l=dataLayer&amp;cx=c"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-W2D5HWF"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W2D5HWF');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <title>SV RENTACARの高級輸入車レンタカーサービス | 株式会社SVサポート</title>
    <meta name="keywords" content="レンタカー,輸入車,BMW,ポルシェ,ジャガー,ランドローバー,マセラティ,横浜,神奈川,東京,">
    <meta name="description" content="株式会社SVサポートが運営する、輸入車のレンタカーサービス。BMW、ポルシェ、ジャガー、ランドローバー、マセラティなどの輸入車のレンタカーならお任せください。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="https://sv-rentacar/resources/views/top.blade.php">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/sv-rentacar/assets/ico/apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="/sv-rentacar/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/sv-rentacar/assets/css/screen.css">
    <link rel="stylesheet" type="text/css" href="/sv-rentacar/assets/css/media.css">
    <link rel="stylesheet" type="text/css" href="/sv-rentacar/assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/sv-rentacar/assets/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="mailform4/mailform/mfp.statics/mailformpro.css">
    <link rel="stylesheet" type="text/css" href="/sv-rentacar/assets/css/mailform.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="/sv-rentacar/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="/sv-rentacar/assets/slick/slick.min.js"></script>
    <script type="text/javascript" src="/sv-rentacar/assets/js/function.js"></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/am=wA/d=0/rs=AN8SPfq5gedF4FIOWZgYyMCNZA5tU966ig/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.ja.uNMjpcPUiko.O/am=AAQ/d=1/exm=el_conf/ed=1/rs=AN8SPfoERlpbL0F789bYrhqoIR21t5DQBQ/m=el_main"></script><script type="text/javascript" src="https://b99.yahoo.co.jp/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/682009071/?random=1712030383155&amp;cv=11&amp;fst=1712030383155&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4410v9166739880z8830315046za201&amp;gcd=13l3l3l3l1&amp;dma=0&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fsky-timeless.com%2Frentacar%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=SKY%20GROUP%E3%81%AE%E9%AB%98%E7%B4%9A%E8%BC%B8%E5%85%A5%E8%BB%8A%E3%83%AC%E3%83%B3%E3%82%BF%E3%82%AB%E3%83%BC%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%20%7C%20SKY%20GROUP&amp;npa=0&amp;pscdl=noapi&amp;auid=220546929.1712018801&amp;uaa=x86&amp;uab=64&amp;uafvl=Google%2520Chrome%3B123.0.6312.86%7CNot%253AA-Brand%3B8.0.0.0%7CChromium%3B123.0.6312.86&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;rfmt=3&amp;fmt=4"></script><script type="text/javascript" src="https://pi.pardot.com/analytics?ver=3&amp;visitor_id=511206016&amp;visitor_id_sign=03b8a5016aa462439ea4de630230035db60e8c10027ea2ddbc7a1aa4990136af312007f14bf1e00b18766251f96f2c53a5d5224c&amp;pi_opt_in=&amp;campaign_id=1508&amp;account_id=882152&amp;title=SKY%20GROUP%E3%81%AE%E9%AB%98%E7%B4%9A%E8%BC%B8%E5%85%A5%E8%BB%8A%E3%83%AC%E3%83%B3%E3%82%BF%E3%82%AB%E3%83%BC%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%20%7C%20SKY%20GROUP&amp;url=https%3A%2F%2Fsky-timeless.com%2Frentacar%2F&amp;referrer=https%3A%2F%2Fwww.google.com%2F"></script><script type="text/javascript" src="https://form.sky-g.org/analytics?conly=true&amp;visitor_id=511206016&amp;visitor_id_sign=03b8a5016aa462439ea4de630230035db60e8c10027ea2ddbc7a1aa4990136af312007f14bf1e00b18766251f96f2c53a5d5224c&amp;pi_opt_in=&amp;campaign_id=1508&amp;account_id=882152&amp;title=株式会社サーバントップの高級輸入車レンタカーサービス | SERVANTOP&amp;url=https://servantop.co.jp/&amp;referrer=https://www.google.com/"></script></head>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"></head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>

    $(function(){

    //初期値
    $('.selectBox__output').each(function () {
      const defaultText = $(this).next('.selectBox__selector').children('.selectBox__selectorItem:first-child').text()
      $(this).text(defaultText);
    })

    //出力の枠をクリックした時の動作
    $('.selectBox__output').on('click', function (e) {
      e.stopPropagation();
      if ($(this).hasClass('open')) {
	    $(this).next('.selectBox__selector').slideUp();
      } else {
	    $(this).next('.selectBox__selector').slideDown();
      }
      $(this).toggleClass('open');
    });

    //選択肢をクリックした時の動作
    $('.selectBox__selectorItem').on('click', function () {
      const selectVal = $(this).data('select');
      const selectText = $(this).text();
      $(this).parent('.selectBox__selector').prev('.selectBox__output').text(selectText);
      $(this).parent('.selectBox__selector').slideUp();
      $(this).parents('.selectBox__output').slideDown();
      $(this).parent('.selectBox__selector').next('select').val(selectVal);
    });
    });

    </script>

    <body data-new-gr-c-s-check-loaded="14.1165.0" data-gr-ext-installed="" style="position: relative; min-height: 100%; top: 0px;">
    
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W2D5HWF"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
    
      
      <div id="wrapper">
    
          <header id="header">
            <h1>
              <a href="https://SVsuport.co.jp/" title="株式会社SVサポート/SV SUPORT">
                <img src="/sv-rentacar/assets/images/SVサポートロゴ.png" srcset="/sv-rentacar/assets/images/SVサポートロゴ.png 1x, /sv-rentacar/assets/images/SVサポートロゴ.png 2x" alt="株式会社SVサポート/SV SUPORT">
              </a>
            </h1>
            <h2>
            <a href="/sv-rentacar/resources/views/carmodels/index.blade.php" title="SV RENTACAR">
              <img src="/sv-rentacar/assets/images/屋号ロゴ.png" srcset="/sv-rentacar/assets/images/屋号ロゴ.png 1x, /sv-rentacar/assets/images/屋号ロゴ.png 2x" alt="SV RENTACAR">
            </a>
          </h2>
          </header>

          <!--マセラティ-->
                  <section id="maserati" class="rentacar-box">
                    <div class="rentacar-box__head">
                      <h2 class="rentacar-box__ttl">
                        <?php
                          //session_start();
                          // 例: $_POST["selected_menu"] からメーカーIDを受け取る
                          $selectedMenuId = $_POST["selected_menu"];

                          // データベース接続
                          $pdo = connect(); // connect関数はあなたのデータベース接続をセットアップする関数です

                          // メーカーIDを使ってメーカー名を取得するクエリを準備
                          $stmt = $pdo->prepare("SELECT maker_name FROM makers WHERE maker_id = :maker_id");
                          $stmt->bindValue(':maker_id', $selectedMenuId, PDO::PARAM_INT);

                          // クエリの実行
                          $stmt->execute();

                          // 結果のフェッチ
                          $makerNameRow = $stmt->fetch(PDO::FETCH_ASSOC);

                          if ($makerNameRow) {
                              $makerName = $makerNameRow['maker_name'];
                              echo $makerName;
                          } else {
                              echo "メーカーが見つかりませんでした。";
                          }

                          

                        ?>
                      </h2>
                    </div>
                    <div class="rentacar-box__flex">
                      <div class="rentacar-box__item">
                        <form method="POST">
                          <div class="rentacar-box__img">
                            <div class="first_img">
                              <img src="/sv-rentacar/storage/images/マセラッティ車両.png" alt="">
                              <div class="icon1">360度カメラ
                                <input type="radio" name="camera360" value="1" onclick="hyoji()">表示
                                <input type="radio" name="camera360" value="0" onclick="hihyoji()">非表示</div>
                              <div class="icon2">バックモニター
                                <input type="radio" name="back_monitor" value="1" onclick="hyoji2()">表示
                                <input type="radio" name="back_monitor" value="0" onclick="hihyoji2()">非表示</div>
                              <div class="icon3">NEW
                                <input type="radio" name="new" value="1" onclick="hyoji3()">表示
                                <input type="radio" name="new" value="0" onclick="hihyoji3()">非表示</div>
                              <div class="option1" id="option1"><img src="/sv-rentacar/assets/images/360カメラ.png" alt=""></div>
                              <div class="option2" id="option2"><img src="/sv-rentacar/assets/images/バックモニター.png" alt=""></div>
                              <div class="new" id="new"><img src="/sv-rentacar/assets/images/NEW.png" alt=""></div>
                              <script>
                              function hyoji() {
                                  document.getElementById("option1").style.display="block";
                              }

                              function hihyoji() {
                                  document.getElementById("option1").style.display="none";
                              }
                              function hyoji2() {
                                  document.getElementById("option2").style.display="block";
                              }

                              function hihyoji2() {
                                  document.getElementById("option2").style.display="none";
                              }
                              function hyoji3() {
                                  document.getElementById("new").style.display="block";
                              }

                              function hihyoji3() {
                                  document.getElementById("new").style.display="none";
                              }
                              </script>
                            </div>
                            <div class="rentacar-box__imgs">
                              <a href="/sv-rentacar/assets/images/maserati_ghibli-wl-2.jpg"><img src="/sv-rentacar/assets/images/maserati_ghibli-wl-2.jpg" alt=""></a>
                              <a href="/sv-rentacar/assets/images/maserati_ghibli-wl-3.jpg"><img src="/sv-rentacar/assets/images/maserati_ghibli-wl-3.jpg" alt=""></a>
                              <a href="/sv-rentacar/assets/images/maserati_ghibli-wl-4.jpg"><img src="/sv-rentacar/assets/images/maserati_ghibli-wl-4.jpg" alt=""></a>
                              <a href="/sv-rentacar/assets/images/maserati_ghibli-wl-5.jpg"><img src="/sv-rentacar/assets/images/maserati_ghibli-wl-5.jpg" alt=""></a>
                              <a href="/sv-rentacar/assets/images/maserati_ghibli-wl-6.jpg"><img src="/sv-rentacar/assets/images/maserati_ghibli-wl-6.jpg" alt=""></a>
                              <a href="/sv-rentacar/assets/images/maserati_ghibli-wl-7.jpg"><img src="/sv-rentacar/assets/images/maserati_ghibli-wl-7.jpg" alt=""></a>
                            </div>
                          </div>
                          
                            
                            <table>

                            <tr>
                            <td>画像1 *メイン画像<input type="file" name="input1" id="input1" accept="image/*"></td>
                                <td><figure id="figure1" style="display: none">
                              <figcaption></figcaption>
                              <img name="img1" src="" alt="" id="figureImage1" style="max-width: 200px">
                                </figure>
                            </td>
                            </tr>

                            <tr>
                            <td>画像2<input type="file" name="input2" id="input2" accept="image/*"></td>
                                <td><figure id="figure2" style="display: none">
                              <figcaption></figcaption>
                                    <img name="img2" src="" alt="" id="figureImage2" style="max-width: 200px">
                                </figure>
                            </td>
                            </tr>

                            <tr>
                            <td>画像3<input type="file" name="input3" id="input3" accept="image/*"></td>
                                <td><figure id="figure3" style="display: none">
                              <figcaption></figcaption>
                                    <img name="img3" src="" alt="" id="figureImage3" style="max-width: 200px">
                                </figure>
                            </td>
                            </tr>

                            <tr>
                            <td>画像4<input type="file" name="input4" id="input4" accept="image/*"></td>
                                <td><figure id="figure4" style="display: none">
                              <figcaption></figcaption>
                                    <img name="img4" src="" alt="" id="figureImage4" style="max-width: 200px">
                                </figure>
                            </td>
                            </tr>


                            <tr>
                            <td>画像5<input type="file" name="input5" id="input5" accept="image/*"></td>
                                <td><figure id="figure5" style="display: none">
                              <figcaption></figcaption>
                                    <img name="img5" src="" alt="" id="figureImage5" style="max-width: 200px">
                                </figure>
                            </td>
                            </tr>

                            <tr>
                            <td>画像6<input type="file" name="input6" id="input6" accept="image/*"></td>
                                <td><figure id="figure6" style="display: none">
                              <figcaption></figcaption>
                                    <img name="img6" src="" alt="" id="figureImage6" style="max-width: 200px">
                                </figure>
                            </td>
                            </tr>

                            <tr>
                            <td>画像7<input type="file" name="input7" id="input7" accept="image/*"></td>
                                <td><figure id="figure7" style="display: none">
                              <figcaption></figcaption>
                                    <img name="img7" src="" alt="" id="figureImage7" style="max-width: 200px">
                                </figure>
                            </td>
                            </tr>
                            </table>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <label for="model_name" class="form-label">モデル:</label>
                            <input id="" type="text" name="model_name" class="form-control">
                            
                            <label for="color" class="form-label">色:</label>
                            <input id="" type="text" name="color" class="form-control">
                                    
                            <label for="price_24h" class="form-label">24時間料金:</label>
                            <input id="" type="text" name="price_24h" class="form-control">円
                              
                            <p class="rentacar-box__tap">Car SPEC</p>

                            <div class="rentacar-box__toggle">

                              <label for="capacity" class="form-label">定員:</label>
                              <input id="" type="text" name="capacity" class="form-control">
                                      
                              <label for="handle" class="form-label">ハンドル:</label>
                              <input id="" type="text" name="handle" class="form-control">

                              <label for="displacement" class="form-label">排気量:</label>
                              <input id="" type="text" name="displacement" class="form-control">
                                      
                              <label for="fuel" class="form-label">燃料:</label>
                              <input id="" type="text" name="fuel" class="form-control">

                              <label for="size_l" class="form-label">全長:</label>
                              <input id="" type="text" name="size_l" class="form-control">

                              <label for="size_w" class="form-label">全幅:</label>
                              <input id="" type="text" name="size_w" class="form-control">

                              <label for="size_h" class="form-label">全高:</label>
                              <input id="" type="text" name="size_h" class="form-control">

                              <label for="insurance_deductible_property" class="form-label">保険免責金額(対物):</label>
                              <input id="" type="text" name="insurance_deductible_property" class="form-control">

                              <label for="insurance_deductible_vehicle" class="form-label">保険免責金額(車両):</label>
                              <input id="" type="text" name="insurance_deductible_vehicle" class="form-control">
                                    
                              <label for="noc_self_propelled" class="form-label">NOC(ノンオペレーションチャージ)自走可能:</label>
                              <input id="" type="text" name="noc_self_propelled" class="form-control">

                              <label for="noc_not_self_drive" class="form-label">NOC(ノンオペレーションチャージ)自走不可能:</label>
                              <input id="" type="text" name="noc_not_self_drive" class="form-control">
                              
                              <label for="model_year" class="form-label">年式:</label>
                              <input id="" type="text" name="model_year" class="form-control">

                              <label for="remarks" class="form-label">備考:</label>
                              <input id="" type="textarea" name="remarks" class="form-control">
                                
                            </div>
                            <input type="submit" class="btn btn-primary" value=登録 formaction="show.blade.php">
                            
                        </form>  
                        
                      </div>
                      
                    </div>
                  </section>
      </div>
    <script src="main.js"></script>
    </body>
  
</html>