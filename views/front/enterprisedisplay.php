<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="xxxxxxxxxxxxxxxxxxxxxxxxxx">
	<meta name="keywords" content="xxxx,xxxx,xxx,xxxxx,xxxx,">
	<meta http-equiv="Window-target" content="_top">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>企业展示</title>
	<link href="css/common_css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/css/common.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css/enterprisedispaly.css">
	<script type="text/javascript">
		var companyUrl = "<?=yii::$app->urlManager->createUrl('company/company')?>";
		var dictUrl = "<?=yii::$app->urlManager->createUrl('company/dict')?>";
		var companyDetailUrl = "<?=yii::$app->urlManager->createUrl('front/enterprise-detail')?>";
	</script>
</head>
<body>
	<!-- header -->
	<div class="header_c">
		<div class="container header">
		    <div class="row">
				<div class="col-xs-0 col-sm-6 col-md-7 index_logo">	
					<a href="index.html">
					<img class="img-responsive header_f hidden-xs" alt="logo" src="images/images_index/logo.png" />
					</a>
					<div class="top_title">
						<span>县域</span><br />
						<span class="top_underline">电子商务服务平台</span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-5">	
					<div class="header_left header_r">
						<div class="loginbar header_r">
							<div class="header_f">
								<a href="login.html">登录</a>
								<span>|</span>
								<a href="regist.html">免费注册</a>
								<span>|</span>
								<a href="contactus.html">加入我们</a>
							</div>		
						</div>
						<form class="navbar-form header_r" role="search">
		                    <div class="form-group">
		                        <input type="text" class="form-control form_text form_long" placeholder="请输入搜索内容"><button type="submit" class="btn btn-default btn_text">搜索</button>
		                    </div>               
		                </form>
					</div>	
				</div>	
			</div>
		</div>
	</div>
	<!-- 导航栏 -->
	<div class="container">
		<div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12"> 
                <div class="navbar navbar-default nav_c" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle navbar_btn" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-responsive-collapse ">
                        <ul class="nav navbar-nav nav_fontc">
                            <li><a href="index.html">首页</a></li>
                            <li><a href="ecinformation.html">电商资讯</a></li>
                            <li><a href="ectrain.html">电商培训</a></li>
                            <li class="actived"><a href="enterprisedisplay.html">企业展示</a></li>
                            <li><a href="service_site.html">服务站点</a></li>
                            <li><a href="third.html">第三方服务</a></li>
                            <li><a href="info.html">信息公开</a></li>
                            <li><a href="dtat_statist.html">数据统计</a></li>
                            <li><a href="Online.html">在线招聘</a></li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!-- End 导航栏 -->
    <!-- End header -->
    <img class="img-responsive hidden-xs" src="images/images_enterprise/2banner.jpg" alt="banner">
	<!-- 企业展示 -->
	<div class="wrapper">
	    <div class="container">
	    	<!-- 二级导航 -->
		    <div class="row row_enterprise">

			</div>
			<!-- end 二级导航 -->
		</div>
		<hr />
		<!-- 企业详细信息 -->
		
			
		<div class="container">
			<!-- 第一行 -->
			<div class="row row_one">	

			<!-- end 第四行 -->
			</div>
			
		
		<!-- end 企业详细信息 -->
		<div class="container">
		<!--分页 -->
			<div class="row row_page">
				<div class="col-md-2 col-sm-1 col-xs-0 col-lg-3"></div>
				<nav aria-label="Page navigation" class="col-md-8 col-sm-10 col-xs-12">
				  <ul class="pagination pagination-lg">
				    <li><a href="#" aria-label="Previous">
				        上一页</a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li><a class="fen" href="#">...</a></li>
				    <li><a href="#">25</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        下一页
				      </a>
				    </li>
				  </ul>
				</nav>
				<div class="col-md-2 col-sm-1 col-xs-0 col-lg-3"></div>
			</div>
		</div>

	</div>
	<!-- end 企业展示 -->

    <!-- footer -->
	<div class="footer">
		<div class="container">
		    <div class="row">
				<div  class="col-xs-6 col-sm-6 col-md-4">	
					<a href="index.html"><img class="img-responsive" src="images/images_index/logo.png" alt="logo"></a>
					<div class="top_title footer_title">
						<span>县域</span><br />
						<span class="top_underline">电子商务服务平台</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2">	
					<ul>
						<li><span>网站导航</span></li>
						<li><a href="ecinformation.html">电商资讯</a></li>
						<li><a href="ectrain.html">电商培训</a></li>
						<li><a href="enterprisedisplay.html">企业展示</a></li>
						<li><a href="">服务站点</a></li>
						<li><a href="third.html">第三方服务</a></li>
						<li><a href="info.html">信息公开</a></li>
						<li><a href="dtat_statist.html">数据统计</a></li>
						<li><a href="Online.html">在线招聘</a></li>
					</ul>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2">	
					<ul>
						<li><span>友情链接</span></li>
						<li><a href="">武汉市政府</a></li>
						<li><a href="">电商在线</a></li>
						<li><a href="">703工作室</a></li>
						<li><a href="">湖北省政府</a></li>
						<li><a href="">武汉工商局</a></li>
						<li><a href="">武汉电商网</a></li>
						<li><a href="">中国电商企业</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">	
					<div class="row">
						<div class="col-xs-4 contect">	
							<span>联系我们</span>
						</div>
						<div class="col-xs-8 contect">	
							<a class="btn btn-default" href="contactus.html" role="button">点击填写个人信息</a>
						</div>
					</div>
					<div class="row address">
						<div class="col-xs-4">	
							<img class="img-responsive" src="images/images_index/phone.png" alt="图片">
						</div>
						<div class="col-xs-8 address_img">	
							<p>湖北省武汉市 黄家湖西路3号</p>
							<p>电话：17786417595</p>
							<p>E-mail：liph77@163.com</p>
							<img class="img-responsive" src="images/images_index/weixin1.png" alt="二维码">
							<img class="img-responsive" src="images/images_index/weixin2.png" alt="二维码">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid copyright">
        <div class="row">
            <div class="col-xs-12">  
                <p> © 2017 - <span>Hangjia Hu</span> All Right Reserved</p>
            </div>
        </div>
    </div>
    <!-- End footer -->

	<script src="js/front/common_js/jquery-1.11.3.min.js"></script>
	<script src="js/front/common_js/bootstrap.min.js"></script>
	<script src="js/front/enterprise_display.js"></script>
</body>
</html>