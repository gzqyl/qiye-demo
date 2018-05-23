<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link href="CSS/<?=$css?>.css" type="text/css" rel="stylesheet" />
<link href="CSS/base.css" type="text/css" rel="stylesheet" />
<script src="JS/jquery-1.12.4.min.js"></script>
<script src="JS/<?=$js?>.js"></script>
<script src="JS/base.js"></script>
</head>

<body>
<!--头部-->
<div class="header">
    <div class="logo">
        <a href="/"><img src="images/logo.png" /></a>
    </div>
    <div class="nav">
        <ul>
            <li class="on"><a href="/">首页</a></li>
            <li><a href="#">关于我们</a></li>
            <li><a href="#">新闻中心</a></li>
            <li><a href="#">联系我们</a></li>
        </ul>
    </div>
</div>

<!--banner-->
<div class="banner">
    <ul>

        <?php foreach($banner as $v): ?>

            <li><a href="javascript:void(0)"><img src="<?=$v?>" /></a></li>

        <?php endforeach; ?>
    </ul>
    <a id="last" href="javascript:"><img src="images/last_bg.png" /></a>
    <a id="next" href="javascript:"><img src="images/next_bg.png" /></a>
</div> 