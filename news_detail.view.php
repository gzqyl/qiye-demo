<?php include 'header.view.php'; ?>
<!--标题-->
<div class="title_style">
  <div class="title">
        <h2>
            新闻中心
            <span>NEWS　CENTER</span>
        </h2>
        <ul>
        </ul>
    </div>
</div>

<!--主体-->
<div class="main">
    <h3><?=$news['title']?></h3>
    <h4>
        <span>作者：<?=$publish_user?></span>
        <span>来源：<?=$publish_user?></span>
        <span><?=$news['publish_time']?></span>
    </h4>
        
        <?=$news['content']?>

    <div class="flip">
        <?php if($upNewsShow): ?>
    	<p><a href="news_detail.php?id=<?=$upNews['id']?>">上一篇:<?=$upNews['title']?></a></p>
        <?php endif; ?>
        <?php if($nextNewsShow): ?>
       	<p><a href="news_detail.php?id=<?=$nextNews['id']?>" >下一篇:<?=$nextNews['title']?></a></p>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.view.php'; ?>