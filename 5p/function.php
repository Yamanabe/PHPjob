<?php
/* $_SESSION["user_name"]が空だった場合、ログインページにリダイレクト
@return void
*/
function check_user_logged_in() {
    // セッション開始
    session_start();
    // セッションにuser_nameの値がなければlogin.phpにリダイレクト
    if (empty($_SESSION["user_name"])) {
        header("Location: login.php");
        exit;
    }
}

/* 引数の値が空だった場合、main.phpにリダイレクトする
@param integer $param
@return void
*/
function redirect_main_unless_parameter($param) {
    if (empty($param)) {
        header("Location: main.php");
        exit;
    }
}

/* 引数で与えられたidでpostsテーブルを検索する
もし対象のレコードがなければmain.phpに遷移させる
@param ineger $id
@return array
*/
function find_post_by_id($id) {
    $pdo = db_connect();
    try {
        $sql = "SELECT * FROM posts WHERE id = :id"; // SQL文
        $stmt = $pdo->prepare($sql); // プリペアドステートメント
        $stmt->bindParam(':id', $id); // idのバインド
        $stmt->execute(); // 実行
    } catch (PDOException $e) { // エラーメッセージ
        echo 'Error: ' . $e->getMessage();
        die();
    }
    
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // 結果が取得できた場合の処理
        return $row;
    } else { // 対象idのレコードがない→不正な画面推移
        redirect_main_unless_parameter($row);
    }    
}
?>