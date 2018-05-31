<?php include 'header.view.php'; ?>

<!--新闻资讯-->
<div class="news">
	<div class="container">
        <div class="title">
            <h2><span>新闻资讯</span><br />
                NEWS　CENTER</h2>
        </div>
        <div class="content">
            <a href="javascript:void(0)"><img src="<?=$newsImg?>" /></a>
            <ul>

            	<!--首页新闻的输出-->

            	<?php foreach($newsList as $news): ?>

            	<li>
                	<span><i><?=$news['d']?></i><br />
					      <?=$news['y']?>-<?=$news['m']?></span>
                	<h3><a href="news_detail.php?id=<?=$news['id']?>"><?=$news['title']?></a></h3>
                    <p><?=$news['content']?></p>
                       <a href="news_detail.php?id=<?=$news['id']?>" class="on">MORE+</a>
                </li>

            	<?php endforeach;?>

            	<!--首页新闻的输出结束-->
              
            </ul>
        </div>
        <div class="more">
            <a href="news.html">查看更多》</a>
        </div>
    </div>
</div>

<!--公司介绍-->
<div class="company">
	<div class="container">
        <div class="title">
            <h2><span>公司介绍</span><br />
               COMPANY　INTRODUCTION</h2>
        </div>
        <div class="main_bg">
        	<img src="<?=$home_img?>" />
            <div class="content">
            <?=$home_content?>
            <a href="about_us.php">查看更多</a>
            </div>
        </div>
    </div>
</div>

<!--联系我们-->
<div class="contact-us">
	<div class="container">
	    <div class="title">
	        <h2><span>联系我们</span><br />
	            CONTACT　INFORMATION</h2>
	    </div>
	    <div class="contact_main">
	        <ul>
	            <li>
	                <img src="images/icon1.png" />
	                <dl>
	                    <dt>公司地址</dt>
	                    <dd><?=$data_s['addr']?></dd>
	                </dl>
	            </li>
	            <li>
	                <img src="images/icon2.png" />
	                <dl>
	                    <dt>联系电话</dt>
	                    <dd><?=$data_s['tel']?></dd>
	            	</dl>
	            </li>
	            <li>
	                <img src="images/icon3.png" />
	                <dl>
	                    <dt>电子邮箱</dt>
	                    <dd><?=$data_s['email']?></dd>
	                </dl>
	            </li>
	        </ul>
	        <div class="map">
	        	<div style="width:564px;height:334px;border:#ccc solid 1px;font-size:12px" id="map"></div>
	        </div>
	        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
	        <script src="JS/map.js"></script>
	    </div>
	</div>
</div>

<?php include 'footer.view.php'; ?>
