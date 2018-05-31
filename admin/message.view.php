<?php include_once 'header.view.php'; ?>

	<div class="container-fluid">

		<div class="col-lg-3 col-md-3">
			
			<?php include_once 'left.nav.view.php'; ?>

		</div>

		<div class="col-lg-9 col-md-9" style="margin-top:60px;">
			
			<p style="font-weight:bold;" class="text-info">留言列表</p>

			<ul class="list-group">

				<li class="list-group-item">

						<span class="news-title">留言标题</span>
						<span class="news-modify">留言人</span>
						<span class="news-delete">操作</span>

				</li>

				<?php foreach($data as $v): ?>

					<li class="list-group-item">

						<span class="news-title"><?=$v['title']?></span>

						<span class="news-modify"><a href="javascript:void(0);"><?=$v['name']?></a></span>
						<span class="news-delete"><a href="message.content.php?id=<?=$v['id']?>">查看</a></span>

					</li>


				<?php endforeach; ?>


			</ul>

		</div>

	<div>
<?php include_once 'footer.view.php'; ?>	