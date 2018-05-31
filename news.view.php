<?php include 'header.view.php'; ?>

<!--标题-->
<div class="title_style">
  <div class="title">
        <h2>
            新闻中心
            <span>NEWS　CENTER</span>
        </h2>
        <ul>
        </ul>
    </div>
</div>

<!--主体-->
<div class="main">
	<h2></h2>
    <div class="news">
        <ul id="list-news">
            <!--ajax 内容-->
        </ul>
    </div>
    <div class="pages">
        <ul id="list-btn">
            
        </ul>
    </div>
</div>

<script>

    var listNews = $('#list-news');

    var page = 1;

    //分页点击按钮的生成

    var listBtn = $('#list-btn');

    var firstBtn = '<li><a href="javascript:void(0)" onclick="firstPage()">首页</a></li>';

    var upBtn = '<li><a href="javascript:void(0)" onclick="upPage()">上一页</a></li>';

    var nextBtn = '<li><a href="javascript:void(0)" onclick="nextPage()">下一页</a></li>';

    var endBtn = '<li><a href="javascript:void(0)" onclick="endPage()">尾页</a></li>';

    $.ajax({

        'url' : 'news.api.php?page='+page,
        'type' : 'get',
        'dataType' : 'json',
        'success' : function(data){

            var btnLen = data.btnLen;

            //分页Btn

            var pageBtn = '';

            for(var i=page;i<page+btnLen;i++){

                if(i == page){

                    pageBtn += '<li class="on"><a href="javascript:void(0)" onclick="Page('+i+')">'+i+'</a></li>';
                }else{

                    pageBtn += '<li><a href="javascript:void(0)" onclick="Page('+i+')">'+i+'</a></li>';

                }

            }

            listBtn.html(firstBtn+upBtn+pageBtn+nextBtn+endBtn);

            //页面内容

            var listCtn = '';

            for(var i=0;i<data.data.length;i++){

                listCtn += '<li>'+
                '<a href="news_detail.php?id='+data.data[i].id+'"><img src="'+data.data[i].tupian+'"/></a>'+
                '<h3><a href="news_detail.php?id='+data.data[i].id+'">'+data.data[i].title+'</a></h3>'+
                '<span>'+data.data[i].publish_time+'</span>'+
                '<p style="word-break:break-word;overflow:hidden;height:80px;width:600px;">'+data.data[i].content+'</p>'+
            '</li>';


            }

            listNews.html(listCtn);

        }

    });

    function firstPage(){


        page = 1;

        Page(page);


    }


    function upPage(){


        if(page == 1){

            return false;
        }

        page--;

        Page(page);    


    }

    function nextPage(){

        //先判断是否有下一页

        $.get("/news.api.php?page="+page,function(data){

            if(data.hasAfter == false){

                return false;
            }else{

                page++;

                Page(page);

            }

        });


    }

    function endPage(){

        //先获取总页数

        $.get("/news.api.php?page="+page,function(data){

            data =JSON.parse(data);

            var end = data.totalpage;

            Page(end);

        });

    }

    function Page(i){


        page = i;

        $.ajax({

                'url' : 'news.api.php?page='+page,
                'type' : 'get',
                'dataType' : 'json',
                'success' : function(data){

                    var btnLen = data.btnLen;

                    //分页Btn

                    var pageBtn = '';

                    for(var i=page;i<page+btnLen;i++){

                        if(i == page){

                            pageBtn += '<li class="on"><a href="javascript:void(0)" onclick="Page('+i+')">'+i+'</a></li>';
                        }else{

                            pageBtn += '<li><a href="javascript:void(0)" onclick="Page('+i+')">'+i+'</a></li>';

                        }

                    }

                    listBtn.html(firstBtn+upBtn+pageBtn+nextBtn+endBtn);

                    //页面内容

                    var listCtn = '';

                    for(var i=0;i<data.data.length;i++){

                        listCtn += '<li>'+
                        '<a href="news_detail.php?id='+data.data[i].id+'"><img src="'+data.data[i].tupian+'"/></a>'+
                        '<h3><a href="news_detail.php?id='+data.data[i].id+'">'+data.data[i].title+'</a></h3>'+
                        '<span>'+data.data[i].publish_time+'</span>'+
                        '<p style="word-break:break-word;overflow:hidden;height:80px;width:600px;">'+data.data[i].content+'</p>'+
                    '</li>';


                    }

                    listNews.html(listCtn);

                }

        });


    }


</script>

<?php include 'footer.view.php'; ?>
