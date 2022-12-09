<?php
// db_connect.phpの読み込み
require_once('db_connect.php');
// セッション開始
session_start();
// $_POSTが空ではない→ログインボタンが押された状態での処理
if (!empty($_POST)) {
    // 名前未入力時
    if (empty($_POST["name"])) {
        echo "名前が未入力です。";
    }
    // パスワード未入力時
    if (empty($_POST["pass"])) {
        echo "パスワードが未入力です。";
    }
    // 両方入力時
    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        // エスケープ処理(特殊文字を変換処理することによってプログラミング上持つ意味を無効化する)
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
        $pass = htmlspecialchars($_POST["pass"], ENT_QUOTES);
        // ログイン処理
        $pdo = db_connect();
        try {
            // データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        // 結果取得時
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            /* password_verify→ハッシュ化されたパスワードを判定する定形関数
               入力された値と同じかどうか判定*/
            if (password_verify($pass, $row['password'])) {
                // セッションに値を保存
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                // main.phpにリダイレクト
                header("Location: main.php");
                exit;
            } else {
                // パスワードが違っていた場合
                echo "パスワードに誤りがあります。";
            }
        } else {
            // ログイン名がなかった場合
            echo "ユーザー名かパスワードに誤りがあります。";
        }
    }

}
?>

<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ログインページ</title>
    </head>
    <body>
        <h2>ログイン画面</h2>
        <form method="post" action="">
            名前：<input type="text" name="name" size="15"><br><br>
            パスワード：<input type="text" name="pass" size="15"><br><br>
            <input type="submit" value="ログイン">
        </form>
    </body>
</html>