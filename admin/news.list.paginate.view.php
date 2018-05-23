<?php include_once 'header.view.php'; ?>

	<div class="container-fluid">

		<div class="col-lg-3 col-md-3">
			
			<?php include_once 'left.nav.view.php'; ?>

		</div>

		<div class="col-lg-9 col-md-9" style="margin-top:60px;">
			
			<p style="font-weight:bold;" class="text-info">新闻列表</p>

			<ul class="list-group">

				<?php foreach($list['data'] as $v): ?>


					<li class="list-group-item">

						<span class="news-title"><?=$v['title']?></span>

						<span class="news-modify"><a href="news.modify.php?id=<?=$v['id']?>">修改</a></span>
						<span class="news-delete"><a href="news.delete.php?id=<?=$v['id']?>">删除</a></span>

					</li>


				<?php endforeach; ?>


			</ul>

			<div style="text-align:center;">

				
					<span><a class="page-href" href="news.list.php?paginate=1&curpage=1">首页</a></span>

					<?php if($list['hasBefore']): ?>
					<span><a class="page-href" href="news.list.php?paginate=1&curpage=1">上一页</a></span>
					<?php endif; ?>

					<?php for($i=0;$i<$list['btnLen'];$i++): ?>

						<span>
							<a class="page-href" href="news.list.php?paginate=1&curpage=<?=($list['curpage'] + $i) ?>">
								<?=($list['curpage'] + $i) ?>
							</a>
						</span>

					<?php endfor; ?>

					<?php if($list['hasAfter']): ?>
					<span><a class="page-href" href="news.list.php?paginate=1&curpage=1">下一页</a></span>
					<?php endif; ?>

					<span><a class="page-href" href="news.list.php?paginate=1&curpage=<?=$list['totalpage']?>">末页</a></span>

			</div>

		</div>

	<div>

<?php include_once 'footer.view.php'; ?>	