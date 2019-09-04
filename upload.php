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
        <form action="./confirm.php" enctype="multipart/form-data" method="post">
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

      <!-- ファイルをアップロードするよ -->
        <input name="file_upload" type="file" />

        <input type="submit" value="アップロード" onclick="return confirm("よろしいですか？");" />

    </form>


        <br>

    
    </div>
     <!--本文エリア終わり-->
  </div>
  <!--コンテナ終わり-->
</body>
</html>
