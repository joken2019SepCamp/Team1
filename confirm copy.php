<?php

session_start();
$_SESSION['name']=$_FILES['file_upload']['name'];
$_SESSION['tmp_name']=$_FILES['file_upload']['tmp_name'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GMGP</title>
    <meta http-equiv="content-type" charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgj\
						WPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

  <!--コンテナ-->
  <div class="container">
<!--マルチカラム範囲-->
<div class="wrapper">
  <div class="title"><img src="blackboard.png" alt="ロゴ画像" width="900"></div>
  <div class="row">
    <!--サイドバー-->
   <aside class="sidebar">
      <div id="side_menu" class="col-md-3 sticky">
          <ul>
            <li>ホーム</li>
            <li>記事</li>
            <li>概要</li>
            <li>新規登録</li>
            <li>過去問閲覧</li>
            <li>おまけ</li>
          </ul>
      </div>
    </aside>
 <!--サイドバー終わり-->

 <!--本文エリア-->
 <section class="main-content">
    <div id="main"　class="col-md-8 sticky">
       <p>
            確認<br>
            <?php
            echo "年次：" , $_POST['nenji'] ,"<br>";
            $catstr = '-'.$_POST['nenji'].'年';
            echo "前後期：" ;
            if ($_POST['zenko']==1) {
                echo "前期","<br>" ;
              $catstr.='-前期';
            }else{
                echo "後期","<br>" ;
                $catstr.='-後期';
            }
            echo "教科名：" , $_POST['kyoka'] , "<br>";
            $catstr.='-'.$_POST['kyoka'];
            echo "中間・期末：";
            if ($_POST['chu_k']==1) {
                echo "中間テスト1","<br>";
                $catstr.='-中間テスト1';
            }else if ($_POST['chu_k']==2) {
                echo "中間テスト2","<br>";
                $catstr.='-中間テスト2';
            }else if ($_POST['chu_k']==3) {
                echo "中間テスト3","<br>";
                $catstr.='-中間テスト3';
            }else if ($_POST['chu_k']==4) {
                echo "期末テスト","<br>";
                $catstr.='-期末テスト';
            }
            echo "年度：" , $_POST['nend'] ,"年","<br>";
            $catstr.='-'.$_POST['nend'].'年';
            echo "アップロードするファイル：".$_FILES['file_upload']['name'];
            ?>

            <form action="./complete.php" enctype="multipart/form-data" method="post">
             <input type="hidden" name="nenji" value="<?php echo $_POST['nenji']; ?>">
             <input type="hidden" name="zenko" value="<?php echo $_POST['zenko']; ?>">
             <input type="hidden" name="kyoka" value="<?php echo $_POST['kyoka']; ?>">
             <input type="hidden" name="chu_k" value="<?php echo $_POST['chu_k']; ?>">
             <input type="hidden" name="nend" value=" <?php echo $_POST['nend'] ?>">
             <input type="hidden" name="newname" value=" <?php echo $catstr?>">
            こちらで間違いないですか？ <input type="submit" value=これはボタン>
            </form>


       </p>
    </div>
  </section>
     <!--本文エリア終わり-->

   </div>
   </div>
   <!--マルチカラム範囲の終わり-->
  </div>
  <!--コンテナ終わり-->
</body>
</html>