<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="utf-8">
   <title>Padule - 日程調整をパズル感覚で</title>
   <meta name="description" content="同じ候補日で複数の人を調整するのは大変ではありませんか。Padule（パジュール）を使うことで、簡単に早く調整することができます。">
   <meta name="Keywords" content="調整,スケジュール,面接,日程,リクルート" />
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
   <link rel="stylesheet" href="css/default.css" type="text/css" />
  </head>
  <body>
 <section class="container">
     <div class="row">
         <header class="span12">
            <div id="lp_mac"><img src="img/mac.png" alt="PaduleUI" width="504" height="515"></div>
            <div id="lp_logo"><img src="img/logo.png" alt="Padule" width="322" height="55"></div>
            <p>同じ候補日で複数の人を調整するのは大変ではありませんか。Padule（パジュール）を使うことで、簡単に早く調整することができます。</p>
            <form id="registerForms" action="/users/regist" method="post" accept-charset="utf-8">
            <div id="msg_alert" style="display:none;"><p>※すべての項目を入力し、利用規約に同意してください。</p></div>
            <div id="messageBox"></div> 
                <div>
                    <input type="text" name="TmpUser[company]" placeholder="会社名" class="forms"/>
                </div>
                <div>
                    <input type="text" name="TmpUser[username]" placeholder="お名前" class="forms"/>
                </div>
                <div>
                    <input type="text" name="TmpUser[mail]" placeholder="Eメール" class="forms"/>
                </div>
                <div class="check">
                    <input type="checkbox" name="agreement"><a href="http://padule.me/agrement">利用規約</a><span>同意する</span>
                </div>
                <div>
                    <input type="submit" value="仮登録する!!" id="btn_preRegister" />
                </div>
             </form>
         </header>
         <article class="span12" id="explain">
             <ul>
                <li class="feature">
                    <div class="icons"><img src="img/icon_calendar.png" alt="icon_calendar" width="72" height="72"></div>
                    <h1>シンプルで簡単に使える！</h1>
                    <p>面接日時を設定して、URLを応募者に送るだけ。あとは応募者が自ら入力し、<br />希望日時が一覧で表示されます。</p>
                </li>
                <li class="feature">
                    <div class="icons"><img src="img/icon_stack.png" alt="icon_stack" width="72" height="72"></div>
                    <h1>スピーディーに調整できる！</h1>
                    <p>URLを送ることで採用担当者様と応募者が直接調整できるので、人材会社が仲介して遅くなる心配もありません。</p>
                </li>
                <li class="feature">
                    <div class="icons"><img src="img/icon_money.png" alt="icon_money" width="72" height="72"></div>
                    <h1>基本利用料は無料！</h1>
                    <p>本サービスは広告費にて運用致しますので、採用ご担当者様に費用は頂戴いたしません。社内承認不要でお気軽にお使いいただく事ができます。</p>
                </li>
             </ul>
         </article><!-- explain -->
         <article class="span12" id="screenshot">
            <hr>
            <div class="img_screenshots"><img src="img/web.png" alt="Web" width="458" height="391"></div>
            <div id="captions">
                <div>
                    <h1>候補者全員を１ページで管理！</h1>
                    <p>一人一人調整するのは煩雑ではありませんか？<br />Paduleなら候補者全員の候補日時を一括管理、<br />ご希望の選択して一斉に確定メールを送ることができます。</p>
                </div>
                <div>
                    <h1>共通の入力画面で<br />ダブルブッキングの心配なし！</h1>
                    <p>複数の候補者から同じ日時を希望されてお困りではありませんか?<br />Paduleなら候補日時はリアルタイムで更新されるので、<br />ダブルブッキングの心配はありません。</p>
                </div>
            </div>
        </article><!-- sreenshot -->
        <article class="span12" id="screenshotSmart">
            <hr>
            <div id="caption_smart">
                <h1>スマートフォン対応で簡単入力！</h1>
                <p>求職者からの返信が遅く感じませんか？<br />Paduleならスマートフォン対応でいつでもどこでも簡単に返信できるので、<br />今まで以上に早い返信が期待できます。</p>
            </div>
            <div id="img_screenshotsSmart"><img src="img/mobile.png" alt="SmartPhone" width="208" height="338"></div>
        </article><!-- sreenshot -->
        <footer class="span12">
            <p><推奨動作環境>　OS : Windows 7以上, Mac X以上 / ブラウザ : IE8以上, Chrome 最新版</p>
             <ul>
                <li><a href="http://padule.me">プライバシーポリシー</a></li>
                <li><a href="support@padule.me">お問い合わせ</a></li>
             </ul>
        </footer>
     </div><!-- row -->
 </section><!-- container -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/default.js"></script>
  </body>
</html>