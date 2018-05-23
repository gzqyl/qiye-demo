<?php include 'header.view.php'; ?>
<!--标题-->
<div class="title_style">
  <div class="title">
        <h2>
            新闻中心
            <span>NEWS　CENTER</span>
        </h2>
        <ul>
        	<li><a href="#" class="on">公司新闻</a></li>
            <li><a href="#">行业新闻</a></li>
        </ul>
    </div>
</div>

<!--主体-->
<div class="main">
    <h3>宾馆布草，国际时尚潮流的代表者</h3>
    <h4>
        <span>作者：</span>
        <span>来源：</span>
        <span>2017-03-29</span>
    </h4>
        
        <?=$news['content']?>

    <div class="flip">
    	<p><a href="#">上一篇:宾馆布草，国际时尚潮流的代表者</a></p>
       	<p><a href="#" >下一篇:宾馆布草，国际时尚潮流的代表者</a></p>
    </div>
</div> 

<?php include 'footer.view.php'; ?>