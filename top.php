 <?php
 
session_start();
 
//ログイン済みかを確認
if (!isset($_SESSION['USER'])) {
    header('Location: 'https://tkby.github.io/Learning-by-Viscuit.github.io/login.php');
    exit;
}
 
//ログアウト機能
if(isset($_POST['logout'])){
    
    $_SESSION = [];
    session_destroy();
 
    header('Location: 'https://tkby.github.io/Learning-by-Viscuit.github.io/login.php');
    exit;
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>トップ画面</title>
</head>
 
<body>
<h1>トップ画面</h1>
<p><?php echo $_SESSION['USER'] ?>さんでログイン中</p>
<br>
<form method="post" action="https://tkby.github.io/Learning-by-Viscuit.github.io/top.php">
    <input type="submit" name="logout" value="ログアウト">
</form>
 
</body>
</html>
