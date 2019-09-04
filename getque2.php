<?php
$dsn='mysql:dbname=subject;host=localhost;charset=utf8';
$user='root';
$password='';
$sub='基礎英語1';
$old='31';
$zengo='1';
$cyuki='2';
$year='2019';
try{
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT COUNT(*) FROM kakomon where name='".$sub."' and old='".$old."' and zengo='".$zengo."'and cyuki='".$cyuki."'";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $data=array();
    $count =$stmt->rowCount();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $data[]=$row;
    }
    foreach($data as $pika){
    if($pika['COUNT(*)']>=1){
        echo 'ある';
    }else{
        echo 'ない';
    }
}
    echo '接続に成功しています';
}catch(PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}
?>
<html>
    <body>
    <tr>
    </tr>
    <tr>
        
    </tr>
    </body>
</html>