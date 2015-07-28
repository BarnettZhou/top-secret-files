<?php 

header('Content-Type:text/html;charset=utf-8');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>绝密档案</title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
</head>
<body>
    <div>
        <h1>提取你的绝密档案</h1>
        <p><a href="auth.html">点我获取作者的信息</a></p>
    </div>
    <div id="mine">
        <form method="send" action="result.php">
            <p>
                <label for="name" id="label">姓名</label>
                <input type="text" name="name" id="name">
            </p>

            <p>
                <label for="date">生日</label>
                <input type="date" name="date" id="date">
            </p>

            <p>
                <input type="submit" value="确认">
            </p>
        </form>
    </div>
</body>
</html>