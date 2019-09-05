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
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/btn.css">
</head>
<header>
      <h1 id="font">One for All<br>All for One</h1>
</header>
<body>
<?php
$dsn='mysql:dbname=uploader;host=localhost;charset=utf8';
$user='root';
$password='ZCVdqcanPHa5';
?>
 <!--コンテナ-->
 <div class="container">
    <div id="side_menu">
         <ul>
           <li>ホーム</li>
           <li>記事</li>
           <li>概要</li>
           <li>新規登録</li>
           <li><a href="down.php">過去問閲覧</a></li>
           <li>おまけ</li>
         </ul>
     </div>
<!--本文エリア-->
    <div id="main">
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
   <!--本文エリア終わり-->
  </div>
  <!--コンテナ終わり-->
</body>
</html>