<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>出题人表示已经不想肝界面了</title>

  </head>

  <body>

				<h1><small>我只给管理员flag</small></h1>
			<form action="index.php" method="post">
							<input type="text" id="username" name="username" class="form-control" placeholder="用户名">
							<input type="password" id="password" name="password" class="form-control" placeholder="密码">
						<button type="submit" class="btn btn-sm btn-info">登录</button>
			</form>
			
  </body>
</html>

<?php 

$flag = "everctf{f08468a1c970afa8acfd34b088a679b1}";
$secret = "f08468a1c970afa"; // This secret is 15 characters long for security!

$username = $_POST["username"];
$password = $_POST["password"];

if (!empty($_COOKIE["getmein"])) {

    if (urldecode($username) === "admin" && urldecode($password) != "iroot") {
        if ($_COOKIE["getmein"] === md5($secret . urldecode($username . $password))) {
            echo "Congratulations! You are a registered user.\n";
            die ("The flag is ". $flag);
        }
        else {
            die ("Your cookies don't match up! STOP HACKING THIS SITE.");
        }
    }
    else {
        die ("You are not an admin! LEAVE.");
    }
}

setcookie("sample-hash", md5($secret . urldecode("admin" . "iroot")), time() + (60 * 60 * 24 * 7));

if (empty($_COOKIE["source"])) {
    setcookie("source", 0, time() + (60 * 60 * 24 * 7));
}
else {
    if ($_COOKIE["source"] != 0) {
        echo "<img src=5456fc54c74a297ce994998c2873b370.png>"; // This source code is outputted here
    }
}
//admin%80%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%c8%00%00%00%00%00%00%00dsd
?>
