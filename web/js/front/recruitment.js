$(document).ready(function(){
    //左右高度相等
    //height_change();
    //左边栏
    var left = $('.content_left');//定位到需要插入的DIV
    var lefthtml = [];//新建一个数组变量
    $.ajax({
        url: findUrl,//后台给的
        type: "post",//发送方法
        dataType: "json",//返回的数据格式
     
        async: false,
        success:function(data){//如果成功即执行  
             lefthtml.push('<li class="list_first"><img src="../images/third_details/xinxi_icon1.png"><span>&nbsp;职位列表</span></li>');
            $.each(data,function(i,n){//遍历返回的数据 有几个循环几个
                lefthtml.push('<li class="list_item1 "><a href='#'></a></li>');//未选中样式 跳转不知名 缺职位
                //以原格式组装好数组
            });
            left.append(html.join(''));//把数组插入到已定位的DIV
        },
        error:function(){
            
        }
    });
    //内容
    var textdiv = $('.content_right');//定位到需要插入的DIV
    var html = [];//新建一个数组变量
    $.ajax({
        url: findUrl,//后台给的
        type: "post",//发送方法
        dataType: "json",//返回的数据格式
        async: false,
        success:function(data){//如果成功即执行  
            $.each(data,function(i,n){//遍历返回的数据
                html.push('<div class="content_post col-xs-12 col-sm-12 col-md-12 col-lg-12">');
                html.push('<ul class="post_ul col-xs-12 col-sm-12 col-md-6 col-lg-6">');
                html.push('<li><span>产品经理（提供住宿）</span>武汉-武昌</li>');
                html.push('<li>湖北武汉市武汉工商学院</li>');
                html.push('</ul>');
                html.push('<span class="col-xs-12 col-sm-12 col-md-3 col-lg-3 salary">7-8千/月</span>');
                html.push('<div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3">');
                html.push('<a href="#" class="apply_"><div class="apply">申请职位</div></a>');//申请按钮
                html.push('<a href="#" class="collect col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="../images/On_details/collection.png" alt="收藏图标"><div>收藏</div></a>');//收藏
                html.push('</div>');
                html.push('</div>'); 
                html.push('<div class="job_info col-xs-12 col-sm-12 col-md-12 col-lg-12"><span>职位信息</span></div>');
                html.push('<ul class="description col-xs-12 col-sm-12 col-md-12 col-lg-12">'+n.demand+'</ul>');
                html.push('<div class="job_tel col-xs-12 col-sm-12 col-md-12 col-lg-12"><span>联系方式</span></div>');
                html.push('<ul class="tel_info col-xs-12 col-sm-12 col-md-12 col-lg-12">');
                html.push('<li>公司地址：</li>');//缺地址
                html.push('<li>联系人：'+n.contacts+' </li>');
                html.push('<li>联系电话：'+n.tel+'</li>');
                html.push('<li>邮箱：'+n.email+'</li>');
                html.push('</ul>');
                html.push('<div class="job_tel col-xs-12 col-sm-12 col-md-12 col-lg-12"><span>公司信息</span></div>');
                html.push('<div class="company_info col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>');//缺信息

                //以原格式组装好数组
            });
            textdiv.append(html.join(''));//把数组插入到已定位的DIV
        },
        error:function(){}
    });

   
});