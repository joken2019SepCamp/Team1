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
       <p>
            ☆★☆更新完了★☆★<br>
            <?php
            echo "年次：" , $_POST['nenji'] ,"<br>";
            $catstr = $_POST['nenji'].'年';
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
            try{
              $kyoka=$_POST['kyoka'];
              $nenji=$_POST['nenji'];
              $zengo=$_POST['zenko'];
              $chuki=$_POST['chu_k'];
              $nend=$_POST['nend'];
              /*echo $kyoka;
              echo $old;
              echo $zengo;
              echo $chuki;*/
              //$kyoka="経済学I";
              //$old="1";
              //$zengo="1";
              //$cyuki="2";
              //$year="2019";
              $dbh=new PDO($dsn,$user,$password);
              $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
              $sql="SELECT COUNT(*) FROM kako_tag where kyoka='".$kyoka."' and nenji='".$nenji."' and zengo='".$zengo."'and chu_ki='".$chuki."'";
              $stmt = $dbh->prepare($sql);
              $stmt->execute();
              $data=array();
              $count =$stmt->rowCount();
              while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                  $data[]=$row;
              }
              foreach($data as $pika){
              if($pika['COUNT(*)']>=1){
                  echo 'ある：';
                  $sql="SELECT * from kako_tag where kyoka='".$kyoka."' and nenji='".$nenji."' and zengo='".$zengo."'and chu_ki='".$chuki."'";
                  $stmt = $dbh->prepare($sql);
                  $stmt->execute();
                  $data=array();
                  $count=$stmt->rowCount();
                  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                      $data[]=$row;
                  }
                  foreach($data as $pika){
                      echo $pika["kyoka"];
                      echo $pika["filepass"];
                      break;
                      
                  }
              }else{
                  echo 'ない';
              }
          }
          }catch(PDOException $e){
              print('Connection failed:'.$e->getMessage());
              die();
          }

//パス
$fpath = 'C:\xampp\htdocs\database\無題.jpg';
//ファイル名
/*
$fname = '無題.jpg';

header('Content-Type: application/force-download');
header('Content-Length: '.filesize($fpath));
header('Content-disposition: attachment; filename="'.$fname.'"');
readfile($fpath);
*/


            ?>
            こちらになります 
            </form>


       </p>
    </div>
   <!--本文エリアの終わり-->
  </div>
  <!--コンテナ終わり-->
</body>
</html>