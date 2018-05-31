<?php include 'header.view.php'; ?>

<!--标题-->
<div class="title_style">
  <div class="title">
        <h2>
            联系我们
            <span>CONTACT US</span>
        </h2>
    </div>
</div>

<!--主体-->
<div class="main">
	<h2>&nbsp;</h2>
    <div class="map">
        	<div style=" width:1120px; height:275px; border:#ccc solid 1px; font-size:12px" id="map"></div>
        </div>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
        <script src="JS/map.js"></script>
    <div class="message">
    	<div class="message_left">
        	<p>公司地址：<?=$data_s['addr']?></p>
            <p>公司电话：<?=$data_s['tel']?></p>
            <p>电子邮箱：<?=$data_s['email']?></p>
            <p>联系人：<?=$data_s['person']?></p>
            <p>手机号码：<?=$data_s['mobile']?></p>
        </div>
        <div class="message_right" id="msg-area">
        	<form onsubmit="ajaxSubmit();return false;">
                <table>
                    <tr>
                        <td><input type="text" value="标题" id="title"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" value="姓名" id="name"/></td>
                    </tr>
                    <tr>
                        <td><textarea id="content">请在这里留言</textarea></td>
                    </tr>
                    <tr>
                    	<td><input type="text" placeholder="验证码" id="code" /></td>
                    </tr>
                    <tr>
                        <td><input onclick="this.src='/verify.code.php';return false;" style="width:100px;height:30px;cursor:pointer;" type="image" src="/verify.code.php" class="pro"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="提交" class="om" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<script>


	function ajaxSubmit(){

		//获取表单元素的值

		var title = $('#title').val();

		var name = $('#name').val();

		var code = $('#code').val();

		var content = $('#content').val();

		//ajax 发送请求

		$.ajax({

			url : '/contacts.api.php',
			type : 'post',

			data : {

				title  : title,
				name : name,
				code : code,
				content : content

			},

			success : function(data){

				data = JSON.parse(data); //解析为JSON

				if(data.code == 'err'){
					alert("验证码不正确");return false;
				}

				//发送成功

				$('#msg-area').html('已发送!');

			}

		});

	}


</script>


<?php include 'footer.view.php'; ?>
