<?php include_once 'header.view.php'; ?>

	<div class="container-fluid">

		<div class="col-lg-3 col-md-3">
			
			<?php include_once 'left.nav.view.php'; ?>

		</div>

		<div class="col-lg-9 col-md-9" style="margin-top:60px;">
			
			<p style="font-weight:bold;" class="text-info">新闻列表</p>

			<ul class="list-group">

				<?php foreach($data as $v): ?>


					<li class="list-group-item">

						<span class="news-title"><?=$v['title']?></span>

						<span class="news-modify"><a href="news.modify.php?id=<?=$v['id']?>">修改</a></span>
						<span class="news-delete"><a href="news.delete.php?id=<?=$v['id']?>">删除</a></span>

					</li>


				<?php endforeach; ?>


			</ul>

		</div>

	<div>
	<?php include_once 'footer.view.php'; ?>	