<?php
$dsn='mysql:dbname=kako_tag;host=http://13.112.20.136/phpmyadmin/server_databases.php;charset=utf8';
$user='root';
$password='ZCVdqcanPHa5';
?>
<!DOCTYPE html>
<html>
<head>
    <title>unti</title>
    <meta http-equiv="content-type" charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico"/>
    <style>#title{font-size:50px;position:relative;margin-left:30px;background-color:red}#side_menu{font-size:30px;color:red;width:20%;float:left;margin-left:30px;margin-right:100px;background-color:#7fffd4}#main{font-size:50px;padding-left:20px}.container{max-width:940px;margin:0 auto}</style>

</head>
<body>


  <!--コンテナ-->
  <div class="container">

    <div id="title">
        <h1>情報研究会夏合宿</h1>
    </div>
<div class="row">
    <div id="side_menu">
        <ul>
        <li>ファッキンコールド</li>
        <li>ファッキンホット</li>
        <li>ファッキン普通</li>
        </ul>
    </div>

    <div id="main">
        <form action="./confirm.php" method="post">
        <p>年次</p>
        <select name='nenji'>
        <option value='1'>1年</option>
        <option value='2'>2年</option>
        <option value='3'>3年</option>
        <option value='4'>4年</option>
        </select>

        <br>

        <p>前後期</p>
        <select name='zenko'>
        <option value='1'>前期</option>
        <option value='2'>後期</option>
        </select>
        <br>

        <p>教科名</p>
        <input type="text" name="kyoka">
        <br>

        <p>中間・期末</p>
        <select name='chu_k'>
        <option value='1'>中間1</option>
        <option value='2'>中間2</option>
        <option value='3'>中間3</option>
        <option value='4'>期末<html>
        </select>
        <br>

        <p>年度</p>
        <input type="text" name="nend">
        <br>

        <form action="file_up.php" enctype="multipart/form-data" method="post">
        <input name="file_upload" type="file" />
        <?php
        //POSTされたデータを受信する
        $nenji=$_POST['nenji'];
        $zenko=$_POST['zenko'];
        $kyoka=$_POST['kyoka'];
        $chu_k=$_POST['chu_k'];
        $nend=$_POST['nend'];
        var_dump($_POST);
        ?>
        <input type="submit" value="アップロード" onclick='return confirm("よろしいですか？");' />
        </form>
        <?php
          //ファイルの保存先
          $upload = './files'.$_FILES['file_upload']['name'];
        ?>
    </form>


        <br>

    </div>

    </div>
  </div>
  <!--コンテナ終わり-->
</body>
</html>