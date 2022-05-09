<?php

Class Dbc
{
    protected $table_name;
    //
    //関数一つに一つの機能を持たせる
    //データベース接続
    //データを取得する
    //カテゴリ名を表示

    //データベース接続
    //引数 : なし
    //返り値:接続結果を返す
    public function dbConnect(){
        $dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
        $user = 'blog_user';
        $pass = 'ad1m9s';

        try{
          $dbh = new \PDO($dsn,$user,$pass,[
                  \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
          }catch(PDOException $e){
              echo '接続失敗' . $e->getMessage();
              exit();
        };
        return $dbh;
    }
    //データを取得する
    //引数:なし
    //返り値:取得したデータ
    public function getAll(){
        $dbh = $this->dbConnect();
        //SQLの準備
        $sql="SELECT*FROM $this->$table_name";
        //SQLの実行
        $stmt = $dbh->query($sql);
        //SQLの結果を受け取る
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        $dbh = $null;
    }



    //引数:$id
    //返り値:$result
    public function getById($id){
    if(empty($id)){
      exit('IDが不正です。');
    }

    $dbh = $this->dbConnect();

    //SQL準備
    $stmt = $dbh->prepare("SELECT*FROM $this->$table_name Where id = :id");
    $stmt->bindValue(':id' , (int)$id, PDO::PARAM_INT);
    //SQL実行
    $stmt->execute();
    //結果を取得
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$result){
    exit('ブログがありません。');
    }
    return $result;
    }

}


?>
