<!DOCTYPE html>
<html>
<head>
    <title>unti</title>
    <meta http-equiv="content-type" charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  <!--コンテナ-->  
  <div class="container">

    <div class="title"><img src="blackboard.png" alt="ロゴ画像" width="900">
        <!--<h1>情報研究会夏合宿</h1>-->
    </div>
<div class="row">
    <div id="side_menu">
        <ul>
        <li>ホーム</li>
        <li>エビちゃん</li>
        <li>概要</li>
        </ul>
    </div>

    <div id="main">
        <p>本文が入ります</p>
        <?php

// 必要ファイルを読み込む
require_once('config.php');
require_once('./helpers/db_helper.php');
require_once('./helpers/extra_helper.php');

session_start();    // セッションを開始する

// ログインしていた場合
// 既にログイン済みならapps.phpにリダイレクト
if(!empty($_SESSION['member'])){
    header('Location: '.SITE_URL.'index.html');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email = get_post('email');
    $password = get_post('password');

    $dbh = get_db_connect();    // DB接続
    $errs = array();

    if(!email_exists($dbh, $email)){
        $errs['email'] = 'このメールアドレスは登録されていません';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errs['email'] = 'メールアドレスの形式が正しくありません';
    }elseif(!check_words($email, 200)){
        $errs['email'] = 'メール欄は必須、200文字以内で入力してください';
    }

    if(!check_words($password, 50)) {
        $errs['password'] = 'パスワードは必須、50文字以内で入力してください';
    }


    // メールアドレスとパスワードが一致するか検証する
    if(!check_words($password, 50)){
        $errs['password'] = 'パスワードは必須、50文字以内で入力してください';
    }elseif(!$member = select_member($dbh, $email, $password)){
        $errs['password'] = 'パスワードとメールアドレスが正しくありません';
    }
    
    // ログインする
    if(empty($errs)){
        session_regenerate_id(true);        // セッションIDの変更
        // セッションIDが盗まれていた場合
        // なりすましによる不正な操作を防ぐために
        // ログイン直前にセッションIDを切り替える！！

        $_SESSION['member'] = $member;      // ログイン
        header('Location: '.SITE_URL.'index.html');   // 会員ページへリダイレクト
        exit;
    }
}

include_once('./views/login_view.php');     //ビューファイルの読み込み
?>
    </div>
    

    </div>
  </div>
  <!--コンテナ終わり-->
</body>
</html>