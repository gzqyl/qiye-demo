	<?php include_once 'header.view.php'; ?>

	<!--增加百度编辑器的js-->


    <script type="text/javascript" charset="utf-8" src="/admin/editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/admin/editor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/admin/editor/lang/zh-cn/zh-cn.js"></script>

	<div class="container-fluid">

		<div class="col-lg-3 col-md-3">
			
			<?php include_once 'left.nav.view.php'; ?>

		</div>

		<div class="col-lg-9 col-md-9" style="margin-top:60px;">
			
			<form role="form" enctype="multipart/form-data" action="news.add.post.php" method="post" onsubmit="useBaidu(this);return false;">
			  <div class="form-group">
			    <label>新闻标题</label>
			    <input type="text" class="form-control" placeholder="请输入标题" name="title" />
			  </div>

			  <div class="form-group">
			    <label>新闻图片</label>
			    <input type="file" class="form-control" name="tupian" />
			  </div>

			  <div class="form-group">
			    <label>新闻简介</label><br />
			    <textarea name="about" cols="100" rows="10"></textarea>
			  </div>

			  <div class="form-group">
			    <label>新闻内容</label><br />
			    <script id="editor" type="text/plain" style="width:600px;height:200px;"></script>
			  </div>
			  <input type="hidden" name="content" />
			  <button type="submit" class="btn btn-default">提交</button>
			</form>

		</div>

	<div>

	<script type="text/javascript">

    	var ue = UE.getEditor('editor'); //获取编辑器

    	function useBaidu(obj){

    		var ctn = ue.getContent(); //获取编辑器的内容

    		obj.content.value = encodeURIComponent(ctn);

    		obj.submit();

    	}

	</script>

   <?php include_once 'footer.view.php'; ?>	