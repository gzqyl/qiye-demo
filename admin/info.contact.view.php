	<?php include_once 'header.view.php'; ?>

	<div class="container-fluid">

		<div class="col-lg-3 col-md-3">
			
			<?php include_once 'left.nav.view.php'; ?>

		</div>

		<div class="col-lg-9 col-md-9" style="margin-top:60px;">
			
			<form role="form" action="info.contact.post.php" method="post">
			  <div class="form-group">
			    <label>公司地址</label>
			    <input type="text" class="form-control" name="addr" value="<?=$data['addr']?>" />
			  </div>
			   <div class="form-group">
			    <label>联系电话</label>
			    <input type="text" class="form-control" name="tel" value="<?=$data['tel']?>" />
			  </div>
			   <div class="form-group">
			    <label>电子邮箱</label>
			    <input type="text" class="form-control" name="email" value="<?=$data['email']?>" />
			  </div>
			   <div class="form-group">
			    <label>联系人</label>
			    <input type="text" class="form-control" name="person" value="<?=$data['person']?>" />
			  </div>
			   <div class="form-group">
			    <label>手机号码</label>
			    <input type="text" class="form-control" name="mobile" value="<?=$data['mobile']?>" />
			  </div>
			   <div class="form-group">
			    <label>网站标题</label>
			    <input type="text" class="form-control" name="site" value="<?=$data['site']?>" />
			  </div>
			  <button type="submit" class="btn btn-default">提交</button>
			</form>

		</div>

	<div>

   <?php include_once 'footer.view.php'; ?>	