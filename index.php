<?php
  session_start();

  $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="/image/favicon.ico" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>PR TIMES｜プレスリリース・ニュースリリースNo.1配信サービス</title>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header-container">
        <div class="header-small-container">
          <div class="logo">
            <img class="logo__frame" src="image/Frame.png" alt="logo" />
            <p class="logo__text">
              プレスリリース・ニュースリリース配信サービスのPR TIMES
            </p>
          </div>
          <ul class="release">
            <li class="release__media">
              <a href="#">プレスリリースを受信</a>
            </li>
            <li class="release__company"><a href="#">配信を依頼</a></li>
            <?php if (isset($name)) { ?>
              <li class="release__profile"><a href="profile.php">
                <?php echo $name?>
              </a></li>
            <?php }else{ ?>
              <li class="release__login"><a href="login.php">ログイン</a></li>
            <?php }?>
          </ul>
          <div class="keyword">
            <input type="text" placeholder="キーワードで検索" />
            <button class="btn btn-search">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
        <div class="main-header">
          <ul class="service">
            <li class="service__press-release">
              <a href="#">プレスリリース</a>
            </li>
            <li class="service__ranking"><a href="#">ランキング</a></li>
            <li class="service__tv"><a href="#">TV</a></li>
          </ul>
        </div>
      </div>
    </header>
    <div class="category-header">
      <ul class="category-list">
        <li class="category-list__item active-item"><a href="#">総合</a></li>
        <li class="category-list__item"><a href="#">テクノロジー</a></li>
        <li class="category-list__item"><a href="#">モバイル</a></li>
        <li class="category-list__item"><a href="#">アプリ</a></li>
        <li class="category-list__item"><a href="#">エンタメ</a></li>
        <li class="category-list__item"><a href="#">ビューティー</a></li>
        <li class="category-list__item"><a href="#">ファッション</a></li>
        <li class="category-list__item"><a href="#">ライフスタイル</a></li>
        <li class="category-list__item"><a href="#">ビジネス</a></li>
        <li class="category-list__item"><a href="#">グルメ</a></li>
        <li class="category-list__item"><a href="#">スポーツ</a></li>
      </ul>
    </div>
    <div class="ranking">
      <ul class="article-list">
        <li class="article-list__item">
          <div class="order_number">1</div>
          <div class="cover">
            <img class="cover__image" src="image/1.png" alt="" />
          </div>
          <div class="detail">
            <p class="detail__content">
              50秒に1個売れた！スマートトランポリン「プレミアム版」登場50秒に1個売れた！スマートトランポリン「プレミアム版」登場
            </p>
            <div class="detail__stamp">
              <p class="time">
                <i class="fas fa-clock clock-color"></i> 2時間
              </p>
              <p class="tag">株式会社アメイズプラス</p>
              <p class="pv">PV 00,000 / UU 00,000</p>
            </div>
          </div>
        </li>
        <li class="article-list__item">
          <div class="order_number">2</div>
          <div class="cover">
            <img class="cover__image" src="image/2.png" alt="" />
          </div>
          <div class="detail">
            <p class="detail__content">
              50秒に1個売れた！スマートトランポリン「プレミアム版」登場
            </p>
            <div class="detail__stamp">
              <p class="time">
                <i class="fas fa-clock clock-color"></i> 2時間
              </p>
              <p class="tag">株式会社アメイズプラス</p>
              <p class="pv">PV 00,000 / UU 00,000</p>
            </div>
          </div>
        </li>
        <li class="article-list__item">
          <div class="order_number">3</div>
          <div class="cover">
            <img class="cover__image" src="image/3.png" alt="" />
          </div>
          <div class="detail">
            <p class="detail__content">
              50秒に1個売れた！スマートトランポリン「プレミアム版」登場
            </p>
            <div class="detail__stamp">
              <p class="time">
                <i class="fas fa-clock clock-color"></i> 2時間
              </p>
              <p class="tag">株式会社アメイズプラス</p>
              <p class="pv">PV 00,000 / UU 00,000</p>
            </div>
          </div>
        </li>
        <li class="article-list__item">
          <div class="order_number">4</div>
          <div class="cover">
            <img class="cover__image" src="image/4.png" alt="" />
          </div>
          <div class="detail">
            <p class="detail__content">
              50秒に1個売れた！スマートトランポリン「プレミアム版」登場
            </p>
            <div class="detail__stamp">
              <p class="time">
                <i class="fas fa-clock clock-color"></i> 2時間
              </p>
              <p class="tag">株式会社アメイズプラス</p>
              <p class="pv">PV 00,000 / UU 00,000</p>
            </div>
          </div>
        </li>
        <li class="article-list__item">
          <div class="order_number">5</div>
          <div class="cover">
            <img class="cover__image" src="image/5.png" alt="" />
          </div>
          <div class="detail">
            <p class="detail__content">
              50秒に1個売れた！スマートトランポリン「プレミアム版」登場
            </p>
            <div class="detail__stamp">
              <p class="time">
                <i class="fas fa-clock clock-color"></i> 2時間
              </p>
              <p class="tag">株式会社アメイズプラス</p>
              <p class="pv">PV 00,000 / UU 00,000</p>
            </div>
          </div>
        </li>
        <li class="article-list__item">
          <div class="order_number">6</div>
          <div class="cover">
            <img class="cover__image" src="image/6.png" alt="" />
          </div>
          <div class="detail">
            <p class="detail__content">
              50秒に1個売れた！スマートトランポリン「プレミアム版」登場
            </p>
            <div class="detail__stamp">
              <p class="time">
                <i class="fas fa-clock clock-color"></i> 2時間
              </p>
              <p class="tag">株式会社アメイズプラス</p>
              <p class="pv">PV 00,000 / UU 00,000</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="contents">
        <h3 class="title">新着プレスリリース</h3>
        <div class="wrap">
          <ul class="articles">
            <li class="article">
              <div class="article__cover">
                <a href="#"><img src="image/a1.png" alt="" /></a>
              </div>
              <div class="article__detail">
                <a href="#">
                  <p class="content">
                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                    JAPAN」に登壇！マイボトル化推進...
                  </p>
                </a>
                <div class="credit">
                  <p class="credit__time-stamp">
                    <i class="fas fa-clock clock-color"></i>5分前
                  </p>
                  <p class="credit__business-author">
                    <a href="#">BRITA Japan株式会社</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="article">
              <div class="article__cover">
                <a href="#"><img src="image/a1.png" alt="" /></a>
              </div>
              <div class="article__detail">
                <a href="#">
                  <p class="content">
                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                    JAPAN」に登壇！マイボトル化推進...
                  </p>
                </a>
                <div class="credit">
                  <p class="credit__time-stamp">
                    <i class="fas fa-clock clock-color"></i>5分前
                  </p>
                  <p class="credit__business-author">
                    <a href="#">BRITA Japan株式会社</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="article">
              <div class="article__cover">
                <a href="#"><img src="image/a1.png" alt="" /></a>
              </div>
              <div class="article__detail">
                <a href="#">
                  <p class="content">
                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                    JAPAN」に登壇！マイボトル化推進...
                  </p>
                </a>
                <div class="credit">
                  <p class="credit__time-stamp">
                    <i class="fas fa-clock clock-color"></i>5分前
                  </p>
                  <p class="credit__business-author">
                    <a href="#">BRITA Japan株式会社</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="article">
              <div class="article__cover">
                <a href="#"><img src="image/a1.png" alt="" /></a>
              </div>
              <div class="article__detail">
                <a href="#">
                  <p class="content">
                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                    JAPAN」に登壇！マイボトル化推進...
                  </p>
                </a>
                <div class="credit">
                  <p class="credit__time-stamp">
                    <i class="fas fa-clock clock-color"></i>5分前
                  </p>
                  <p class="credit__business-author">
                    <a href="#">BRITA Japan株式会社</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="article">
              <div class="article__cover">
                <a href="#"><img src="image/a1.png" alt="" /></a>
              </div>
              <div class="article__detail">
                <a href="#">
                  <p class="content">
                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                    JAPAN」に登壇！マイボトル化推進...
                  </p>
                </a>
                <div class="credit">
                  <p class="credit__time-stamp">
                    <i class="fas fa-clock clock-color"></i>5分前
                  </p>
                  <p class="credit__business-author">
                    <a href="#">BRITA Japan株式会社</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="article">
              <div class="article__cover">
                <a href="#"><img src="image/a1.png" alt="" /></a>
              </div>
              <div class="article__detail">
                <a href="#">
                  <p class="content">
                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                    JAPAN」に登壇！マイボトル化推進...
                  </p>
                </a>
                <div class="credit">
                  <p class="credit__time-stamp">
                    <i class="fas fa-clock clock-color"></i>5分前
                  </p>
                  <p class="credit__business-author">
                    <a href="#">BRITA Japan株式会社</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="article">
              <div class="article__cover">
                <a href="#"><img src="image/a1.png" alt="" /></a>
              </div>
              <div class="article__detail">
                <a href="#">
                  <p class="content">
                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                    JAPAN」に登壇！マイボトル化推進...
                  </p>
                </a>
                <div class="credit">
                  <p class="credit__time-stamp">
                    <i class="fas fa-clock clock-color"></i>5分前
                  </p>
                  <p class="credit__business-author">
                    <a href="#">BRITA Japan株式会社</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="article">
              <div class="article__cover">
                <a href="#"><img src="image/a1.png" alt="" /></a>
              </div>
              <div class="article__detail">
                <a href="#">
                  <p class="content">
                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                    JAPAN」に登壇！マイボトル化推進...
                  </p>
                </a>
                <div class="credit">
                  <p class="credit__time-stamp">
                    <i class="fas fa-clock clock-color"></i>5分前
                  </p>
                  <p class="credit__business-author">
                    <a href="#">BRITA Japan株式会社</a>
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="control">
            <a class="btn btn-info btn-more-detail" href="＃">もっと見る</a>
          </div>
        </div>
      </div>
      <div class="side">
        <div class="keyword">
          <h4 class="title">今注目のキーワード</h4>
          <ul class="list-keyword">
            <li class="list-keyword__item"><a href="#">桜</a></li>
            <li class="list-keyword__item"><a href="#">令和</a></li>
            <li class="list-keyword__item"><a href="#">テレワーク</a></li>
            <li class="list-keyword__item"><a href="#">#AprilDream</a></li>
            <li class="list-keyword__item"><a href="#">電子マネー</a></li>
            <li class="list-keyword__item"><a href="#">令和</a></li>
            <li class="list-keyword__item more-detail">
              <a href="#">もっと見る</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <footer class="footer">
      <ul class="content">
        <li class="content__item">
          <h5 class="content__title">ニュースリリース配信サービス</h5>
          <ul class="service">
            <li class="service__item"><a href="#">PR TIMESとは</a></li>
            <li class="service__item"><a href="#">料金・プラン</a></li>
            <li class="service__item">
              <a href="#">プレスリリースを受信したい方へ</a>
            </li>
            <li class="service__item">
              <a href="#">プレスリリースを配信したい方へ</a>
            </li>
            <li class="service__item"><a href="#">ログイン</a></li>
          </ul>
        </li>
        <li class="content__item">
          <h5 class="content__title">レコメンドサービス</h5>
          <ul class="service">
            <li class="service__item"><a href="#">無料FAQならTayori</a></li>
            <li class="service__item">
              <a href="#">無料メールフォームならTayori</a>
            </li>
            <li class="service__item">
              <a href="#">タスク・プロジェクト管理ツールのJooto</a>
            </li>
            <li class="service__item"><a href="#">PR TIMES TV</a></li>
            <li class="service__item"><a href="#">PR TIMES LIVE</a></li>
            <li class="service__item"><a href="#">PR TIMES MAGAZINE</a></li>
          </ul>
        </li>
        <li class="content__item">
          <h5 class="content__title"><br /></h5>
          <ul class="service">
            <li class="service__item"><a href="#">クリッピング</a></li>
            <li class="service__item">
              <a href="#">料金・広告ならAdGang</a>
            </li>
            <li class="service__item">
              <a href="#">無料占い・今週の運勢ならisuta</a>
            </li>
            <li class="service__item">
              <a href="#">無料恋愛占いならならisuta</a>
            </li>
          </ul>
        </li>
        <li class="content__item">
          <h5 class="content__title">PR TIMES公式SNS</h5>
          <ul class="service">
            <li class="service__item"><a href="#">公式Facebookページ</a></li>
            <li class="service__item"><a href="#">Facebookカテゴリ</a></li>
            <li class="service__item"><a href="#">公式Twitterページ</a></li>
            <li class="service__item"><a href="#">Twitterカテゴリ</a></li>
          </ul>
        </li>
      </ul>
      <div class="line-break"></div>
      <div class="term">
        <ul class="terms">
          <li class="terms__item"><a href="#">会社概要</a></li>
          <li class="terms__item"><a href="#">プライバシーポリシー</a></li>
          <li class="terms__item"><a href="#">情報セキュリティ基本方針</a></li>
          <li class="terms__item"><a href="#">プレスリリース掲載基準</a></li>
          <li class="terms__item"><a href="#">利用規約</a></li>
          <li class="terms__item"><a href="#">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="copy-right">
        <p>Copyright &copy; PR TIMES Inc. All Rights Reserved.</p>
      </div>
    </footer>
  </div>
</body>

</html>