<?php include_once 'header.view.php'; ?>

	<div class="container-fluid">

		<div class="col-lg-3 col-md-3">
			
			<?php include_once 'left.nav.view.php'; ?>

		</div>

		<div class="col-lg-9 col-md-9" style="margin-top:60px;">
			
			<p style="font-weight:bold;" class="text-info">设置首页的轮播图</p>

			<form role="form" action="set.banner.post.php" method="post" enctype="multipart/form-data">
			 
			  <div class="form-group">
			    <label>轮播图片1</label><br />
			    <input type="file" name="banner1" />
			  </div>

			  <div class="form-group">
			    <label>轮播图片2</label><br />
			    <input type="file" name="banner2" />
			  </div>

			  <div class="form-group">
			    <label>轮播图片3</label><br />
			    <input type="file" name="banner3" />
			  </div>

			  <button type="submit" class="btn btn-default">提交</button>

			</form>

		</div>

	</div>

<?php include_once 'footer.view.php'; ?>