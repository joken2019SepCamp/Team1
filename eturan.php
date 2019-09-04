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
        <form action="./eturan2.php" enctype="multipart/form-data" method="post">
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
    </form>


        <br>

<input type="submit" value="アップロード" onclick="return eturan2("よろしいですか？");" />


    </div>

    </div>
  </div>
  <!--コンテナ終わり-->
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
