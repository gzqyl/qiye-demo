	<?php include_once 'header.view.php'; ?>

	<div class="container-fluid">

		<div class="col-lg-3 col-md-3">
			
			<?php include_once 'left.nav.view.php'; ?>

		</div>

		<div class="col-lg-9 col-md-9" style="margin-top:60px;">
			
			<h4>标题: <?=$data['title']?></h4>
			<p class="text-info">留言人: <?=$data['name']?></p>

			<p>留言内容:</p>

			<div>
				
				<?=$data['content']?>

			</div>

		</div>

	<div>

   <?php include_once 'footer.view.php'; ?>	