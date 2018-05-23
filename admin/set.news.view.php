<?php include_once 'header.view.php'; ?>

	<div class="container-fluid">

		<div class="col-lg-3 col-md-3">
			
			<?php include_once 'left.nav.view.php'; ?>

		</div>

		<div class="col-lg-9 col-md-9" style="margin-top:60px;">
			
			<p style="font-weight:bold;" class="text-info">设置首页的新闻图片</p>

			<form role="form" action="set.news.post.php" method="post" enctype="multipart/form-data">
			 
			  <div class="form-group">
			    <label>上传首页的新闻图片</label><br />
			    <input type="file" name="news" />
			  </div>
			  <button type="submit" class="btn btn-default">提交</button>
			</form>

		</div>

	<div>
<?php include_once 'footer.view.php'; ?>	