<?php

header('Content-Type:text/html;charset=utf-8');

if (empty($_GET['name'])) {
    $_GET['name'] = '什么鬼';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_GET['name']; ?>的绝密档案</title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
</head>
<?php 

if (empty($_GET['name'])|| empty($_GET['date'])) {
    echo '<h1>资料不全</h1>';
    echo '<h1>请返回重新设置</h1>';
    echo '<a href="index.php">点我返回</a>';
    exit();
}
require_once('content.php');

$date = explode('-', $_GET['date']);
$sum = (string)((int)$date[0] + (int)$date[1] + (int)$date[2]);
$index = (int)$sum[strlen($sum)-1];

$arr = array();
while(count($arr) < 9) {
    $arr[] = $nature[rand(0, 8)];
    $arr = array_unique($arr);
}

$nature = implode('',$arr);
$advantage = $advantage[$index];
$shortcomings = $shortcomings[$index];

?>
<body>
    <div id="top">
        <h1><?php echo $_GET['name']; ?>的绝密档案</h1>
        <p><a href="index.php">我也要测试</a></p>
    </div>
    <div>
        <dl>
            <dt>性格分析</dt>
            <dd><?php echo $nature; ?></dd>

            <dt>优点</dt>
            <dd><?php echo $advantage; ?></dd>

            <dt>缺点</dt>
            <dd><?php echo $shortcomings; ?></dd>
        </dl>
    </div>
</body>
</html>