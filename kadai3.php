<?php
if (isset($_POST['email'])) {
    try {
        $db = new PDO(

            'mysql:dbname=test;host=localhost;port=8889;charset=utf8',
            'root',
            'root'
        );
        $stmt = $db->prepare('SELECT *　FROM users WHERE email = :email');
        $email = htmlspecialchars($_POST['email']);

        $stmt->execute(array(':email' => $email));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($_POST['pass'], $result['password'])) {
            session_start();
            $_SESSION['user_session'] = $result['session'];
            echo "ログイン認証に成功しました<br>";
            echo "<a href='kadai3-check-login.php'>確認する</a>";
        } else {
            echo "ログイン認証に失敗しました";
        }        
    } catch (Exception $e) {
        echo "データベースの接続に失敗しました:";
        echo $e->getMessage();
        die();
    }
}

?>