<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>下環巡禮</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" id="viewport" http-equiv="Content-Type" content="initial-scale=1.0,width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,text/html,charset=utf-8"/>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/css/style.css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/css/headers/header1.css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/css/style_responsive.css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/css/iconfont.css" />
    <link rel="shortcut icon" href="/xiahuan/favicon.ico" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/revolution_slider/css/rs-style.css" media="screen" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/flexslider/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/parallax-slider/css/parallax-slider.css" type="text/css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.css" />
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/plugins/portfolioSorting/css/sorting.css" />
    <!-- CSS Theme -->
    <link rel="stylesheet" href="/xiahuan/Public/Static/Home/css/themes/default.css" id="style_color" />
    <link rel="stylesheet" href="http://api.map.baidu.com/library/TrafficControl/1.4/src/TrafficControl_min.css"/>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <style>
        
        

        @media (min-width: 979px){
            .search-open{
                top: 155px!important;
            }
        /* 下拉按钮样式 */
        .dropbtn {
            
            color: white;
            padding: 16px;
            font-size: 16px;
            /* border: none; */
            cursor: pointer;
        }
        
        /* 容器 <div> - 需要定位下拉内容 */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        /* 下拉内容 (默认隐藏) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
        
        /* 下拉菜单的链接 */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        /* 鼠标移上去后修改下拉菜单链接颜色 */
        .dropdown-content a:hover {background-color: #f1f1f1}
        
        /* 在鼠标移上去后显示下拉菜单 */
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        /* 当下拉内容显示后修改下拉按钮的背景颜色 */
        .hhhh{
            margin-top: 20px;
            border: solid 2px transparent;
            /* border-radius: 15px !important; */
            background: none;
            display: block;
            font-size: 18px;
            font-weight: 400;
            color: #687074;
            text-shadow: none;
            padding: 0px 20px;
            text-transform: uppercase;
            font-family: 'Open Sans', sans-serif;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .hhhh:hover{
            color: #385A9F;
            padding-bottom: 10px;
            border-bottom: solid 2px #385A9F;
            /* border-radius: 15px !important; */
        }
        }
        .navthub{
            position: relative;
            display: block;
            float: left;
            padding-top: 70px;
        }
        .navlogo{
            position: absolute;
            width: 23%;
            display: flex;
            flex-direction: initial;
        }
        @media screen and (min-width: 1400px) {
            .navthub{
                left: 17% !important;

            }
            .navlogo{
                left: -6%;
            }
        }
        @media screen and (min-width: 1200px) and (max-width: 1399px){
            .navthub{
                left: 6% !important;
            }
            .navlogo{
                left: auto;
                width: 20%;
            }
        }
        @media screen and (min-width: 1050px) and (max-width: 1199px){
            .navthub{
                left: 13% !important;
            }
            .navlogo{
                left: -6%;
                width: 18%;
            }
        }
        @media screen and (min-width: 980px) and (max-width: 1049px){
            .navthub{
                left: 6% !important;
            }
            .navlogo{
                left: 1%;
                z-index: 9;
                width: 11%;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 979px){
            .navlogo{
                left: 1%;
                z-index: 9;
                width: 11%;
            }
        }
        @media screen and (max-width: 767px){
            .navlogo{
                z-index: 9;
                width: 160px;
            }
        }
        </style>
</head>

<body>
    <div class="fiexd_code">
        <!-- <img src="/xiahuan/Public/Static/Home/img/code.png"> -->
    </div>
    <!--=== Style Switcher ===-->
    <!-- <i class="style-switcher-btn icon-cogs"></i>
    <div class="style-switcher">
        <div class="theme-close">
            <i class="icon-remove"></i>
        </div>
        <div class="theme-heading">Theme Colors</div>
        <ul class="unstyled">
            <li class="theme-default theme-active" data-style="default" data-header="light"></li>
            <li class="theme-blue" data-style="blue" data-header="light"></li>
            <li class="theme-orange" data-style="orange" data-header="light"></li>
            <li class="theme-red" data-style="red" data-header="light"></li>
            <li class="theme-light" data-style="light" data-header="light"></li>
        </ul>
    </div> -->
    <!--/style-switcher-->
    <!--=== End Style Switcher ===-->

    <!--=== Top ===-->
    <div class="top">
        <!-- <div class="container">
            <ul class="loginbar pull-right">
                <li>
                    <i class="icon-globe"></i>
                    <a>語言
                        <i class="icon-sort-up"></i>
                    </a>
                    <ul class="nav-list">
                        <li class="active">
                            <a href="#">繁體</a>
                            <i class="icon-ok"></i>
                        </li>
                        <li>
                            <a href="#">簡體</a>
                        </li>

                    </ul>
                </li>
                <li class="devider">&nbsp;</li>
                <li>
                    <a href="page_faq.html" class="login-btn">幫助</a>
                </li>
                <li class="devider">&nbsp;</li>
                <li>
                    <a href="page_login.html" class="login-btn">登錄</a>
                </li>
            </ul>
        </div> -->
    </div>
    <!--/top-->
    <!--=== End Top ===-->

    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <div class="navlogo">
                <a href="<?php echo U('Index/index');?>">
                    <img id="logo-header" src="/xiahuan/Public/Static/Home/img/logo-03(1).png" alt="Logo" />
                </a>
            </div>
            <!-- /logo -->

            <!-- Menu -->
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <!-- /nav-collapse -->
                    <div class="nav-collapse collapse">
                        <ul class="nav top-2 navthub">
                            <li <?php if($Method == 'Index'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Index/index');?>" class="dropdown-toggle" data-toggle="">首頁
                                </a>
                            </li>
                            <li <?php if($Method == 'Active'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Active/index');?>" class="dropdown-toggle" data-toggle="">巡禮活動
                                </a>
                                <b class="caret-out"></b>
                            </li>
                            <li <?php if($Method == 'News'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('News/index');?>" class="dropdown-toggle" data-toggle="">新聞資訊
                                </a>

                                <b class="caret-out"></b>
                            </li>
                            <!-- <li <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
                                </a>

                                <b class="caret-out"></b>
                            </li>
                            <li <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
                                </a>

                                <b class="caret-out"></b>
                            </li> -->






                            	<!-- 社區魅力 -->
								<li id="mk">	
									<div class="dropdown">
										  <div class="hhhh">
											  <a href="javascript:volid(0)" class="dropdown-toggle" data-toggle="" style="text-decoration:none">
												  <span style="color: #687074;">
												  社區魅力
												 </span>
											  </a>
											  <b class="caret-out"></b>
										  </div>
									  <div class="dropdown-content">
											  <a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
											  </a>
											  <b class="caret-out"></b>
											  <a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
											  </a>
											  <b class="caret-out"></b>
                                              <a href="<?php echo U('CultureHeritage/index');?>" class="dropdown-toggle" data-toggle="">文化遺產
                                              </a>
                                            <b class="caret-out"></b>
									  </div>




                                     


									</div>
								  </li>

								<!-- 当窗口宽度小于979px的社區魅力 -->
								<li id="mtd" onclick="showhide()" <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?> style="display:none">
									<a href="javascript:volid(0)" class="dropdown-toggle" data-toggle="">社區魅力
									</a>

									<b class="caret-out"></b>
								</li>
								<li id="mtg" <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?> style="display:none">
									<a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
									</a>

									<b class="caret-out"></b>
								</li>
								<li id="mtgg" <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?> style="display:none">
									<a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
									</a>

									<b class="caret-out"></b>
								</li>
                                <li id="mtggg" <?php if($Method == 'CultureHeritage'): ?>class="active"<?php endif; ?> style="display:none">
									<a href="<?php echo U('CultureHeritage/index');?>" class="dropdown-toggle" data-toggle="">文化遺產
									</a>

									<b class="caret-out"></b>
								</li>




                            











                            <!-- 社區商業 -->
							<li id="k">	
								<div class="dropdown">
									  <div class="hhhh">
                                        
										  <!-- <a href="<?php echo U('Shop/index');?>" class="dropdown-toggle" data-toggle="" style="text-decoration:none">
											  <span style="color: #687074;">
												社區商業
											 </span>
										  </a> -->
                                          <a href="javascript:volid(0)" class="dropdown-toggle" data-toggle="" style="text-decoration:none">
                                            <span style="color: #687074;">
                                              社區商業
                                           </span>
                                        </a>
										  <b class="caret-out"></b>
									  </div>
								  <div class="dropdown-content" name="shoptype" id="shoptype">
										  <a href="<?php echo U('Shop/categroy','shoptype=discount');?>" <?php if($shoptype == 'discount'): ?>selected="selected"<?php endif; ?>value="discount" class="dropdown-toggle" data-toggle="">優惠
										  </a>
										  <b class="caret-out"></b>
										  <a href="<?php echo U('Shop/categroy','shoptype=food');?>" <?php if($shoptype == 'food'): ?>selected="selected"<?php endif; ?>value="food" class="dropdown-toggle" data-toggle="">美食
										  </a>
										  <b class="caret-out"></b>
										  <a href="<?php echo U('Shop/categroy','shoptype=fashion');?>" <?php if($shoptype == 'fashion'): ?>selected="selected"<?php endif; ?>value="fashion" class="dropdown-toggle" data-toggle="">潮店
										</a>
										<b class="caret-out"></b>
								  </div>
								</div>
							  </li>

							<!-- 当窗口宽度小于979px的社區商業 -->
							<li id="td" onclick="showhide2()" <?php if($Method == 'Shop'): ?>class="active"<?php endif; ?> style="display:none">
								<a href="javascript:volid(0)" class="dropdown-toggle" data-toggle="">社區商業
								</a>

								<b class="caret-out"></b>
							</li>
							<li id="tg" <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?> style="display:none">
								<a href="<?php echo U('Shop/categroy','shoptype=discount');?>" <?php if($shoptype == 'discount'): ?>selected="selected"<?php endif; ?>value="discount" class="dropdown-toggle" data-toggle="">優惠
								</a>

								<b class="caret-out"></b>
							</li>
							<li id="tgg" <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?> style="display:none">
								<a href="<?php echo U('Shop/categroy','shoptype=food');?>" <?php if($shoptype == 'food'): ?>selected="selected"<?php endif; ?>value="food" class="dropdown-toggle" data-toggle="">美食
								</a>

								<b class="caret-out"></b>
							</li>
							<li id="tggg" <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?> style="display:none">
								<a href="<?php echo U('Shop/categroy','shoptype=fashion');?>" <?php if($shoptype == 'fashion'): ?>selected="selected"<?php endif; ?>value="fashion" class="dropdown-toggle" data-toggle="">潮店
								</a>

								<b class="caret-out"></b>
							</li>








                            <!-- <li <?php if($Method == 'Shop'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Shop/index');?>" class="dropdown-toggle" data-toggle="">特色店鋪
                                </a>
                        
                            </li> -->
                            <li <?php if($Method == 'Media'): ?>class="active"<?php endif; ?>>
								<a href="<?php echo U('Media/index');?>" class="dropdown-toggle" data-toggle="">精彩瞬間
								</a>
								<b class="caret-out"></b>
							</li>
                            <!-- <li style="margin-right: 20px"><a class="search"><i class="icon-search search-btn"></i></a></li> -->
                            <li style="margin-right: 20px"><a class="search"><img class="searchxun search-btn icon-search" src="/xiahuan/Public/Static/Home/img/xun.png" /></a></li>
                            <li class="selectbox" style="margin-left: 10px">
                                <div class="select">
                                        <select id="selectbox2" onchange="window.location.href=options[selectedIndex].value">
                                            <option style="display:none;" value="http://macauonline.net/xiahuan/2020/index.php/Index/index.html">2022</option>
                                            <option value="http://macauonline.net/xiahuan/index.php/Index/index.html" >2022</option>
                                            <option value="http://macauonline.net/xiahuan/2020/index.php/Index/index.html">2021</option>


                                        </select>
                                </div>
                            </li>

                            <!-- <li <?php if($Method == 'CultureHeritage'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('CultureHeritage/index');?>" class="dropdown-toggle" data-toggle="">文化遺產
                                </a>

                                <b class="caret-out"></b>
                            </li> -->

                           
                        </ul>
                        <div class="search-open">
                            <div class="input-append">
                                <form action="<?php echo U('Search/index');?>" method="get">

                                <input type="text" name="keyword" class="span3" placeholder="請輸入關鍵詞搜索" />
                                <button type="submit" class="btn-u">Go</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /nav-collapse -->
                </div>
                <!-- /navbar-inner -->
            </div>
            <!-- /navbar -->
        </div>
        <!-- /container -->
    </div>
    <!--/header -->
    <script type="text/javascript">
        
        if(document.body.scrollWidth < 979){
          document.getElementById('mk').style.display = 'none';
          document.getElementById('mtd').style.display = 'block';
    
        }
        function showhide(){
            var div=document.getElementById('mtg');
            var divv=document.getElementById('mtgg');
            var divvv=document.getElementById('mtggg');
            if(div.style.display=='block'&& divv.style.display=='block'&& divvv.style.display=='block'){ // == 判断div.display是否为显示
                        div.style.display='none'; //= 赋值也可了解成改变
                        divv.style.display='none';
                        divvv.style.display='none';
                    }
                    else{
                        div.style.display='block';
                        divv.style.display='block';
                        divvv.style.display='block';
                        
                    } 
        }
        if(document.body.scrollWidth < 979){
          document.getElementById('k').style.display = 'none';
          document.getElementById('td').style.display = 'block';
    
        }
        function showhide2(){
            var div=document.getElementById('tg');
            var divv=document.getElementById('tgg');
            var divvv=document.getElementById('tggg');
            if(div.style.display=='block'&& divv.style.display=='block'&& divvv.style.display=='block'){ // == 判断div.display是否为显示
                        div.style.display='none'; //= 赋值也可了解成改变
                        divv.style.display='none';
                        divvv.style.display='none';
                    }
                    else{
                        div.style.display='block';
                        divv.style.display='block';
                        divvv.style.display='block';
                    } 
        }
    </script>
<!--=== End Header ===-->
<style type="text/css">
	.qrcode{
		margin-left: -37px;
		margin-top: -300%;
	}

	.weixin {
		position: relative;
	}



	.weixin div.qrcode {
		position: absolute;
		z-index: 99;
		top: -96px;
		left: -9px;
		max-width: none;
		/* transform-origin: top right; */
		opacity: 0;
		border: 1px solid #DDDDDD;
		border-radius: .25rem;
		-webkit-transition: all .4s ease-in-out;
		-o-transition: all .4s ease-in-out;
		transition: all .4s ease-in-out;

	}

	.weixin:hover div.qrcode {
		transform: scale(1);
		opacity: 1;
	}

	.line_02 {
		margin-top: 51px;

		height: 1px;
		border-top: 1px solid #dddddd;
		text-align: center;
	}

	.line_02 a {
		position: relative;
		top: -15px;
		background: #fff;
		padding: 0 20px;
	}

	.line_02 button {
		position: relative;
		top: -15px;
		background: #fff;
		padding-right: 26px;
	}
	.active-share-facebook {
		width: 30px;
		height: 30px;
		border: none;
		background-color: white;
	}

	.headdiv {
		font-size: 18px;
		clear: left;
	}

	.headline {
		margin: 0px;
	}

	.handover {
		padding: 3px;
		color: #cc9966;
		font-size: 18px;
	}

	.handover:hover {
		color: #fcd600;
		text-decoration: none;
	}

	.no {
		pointer-events: none;
		color: #ddd;
		font-size: 18px;
	}
	@media (max-width: 768px) {
		body {
            padding-right: 0px !important;
             padding-left: 0px!important;;
        }
        .container{
            width: 97%!important;;
        }
        .ji{
            width: 66px!important;
        }
		.photos{
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.line_02 {
			margin-bottom: 30px;
		}
		.weixin div.qrcode {
			left: -33px;
			margin-top: -145px;
			position: absolute;
			margin-right: auto;
			margin-left: auto;
		}
	}



	.show-img-bg{
		display: flex;
		align-items: center;
		position:fixed;
		top:0;
		left:0;
		background:rgba(0,0,0,0.7);
		z-index:9999;
		width:100%;
		height:100%;
	}
	.bg-title{
		position: absolute;
		right: 20px;
		color: red;
		z-index: 99;
	}
	.lar-img{
		display: block;
		margin: 0 auto;
		z-index: 3;
		width:800px;
		height: auto;
		cursor: pointer;
		border:2px solid #fff;
	}
	.close-icon{
		position: absolute;
		top: 0;
		right: 0;
		color: #000000;
		background-color: #fff;
		font-size: 20px;
		font-weight: bold;
		padding: 8px 16px;
		border: #fff 1px solid;
	}
	.download-btn{
		position: absolute;
		right: 50px;
		bottom: 100px;
		padding: 8px 24px;
		color: #000000;
	}
	.ori-btn{
		position: absolute;
		right: 50px;
		bottom: 160px;
		padding: 8px 24px;
		color: #000000;
	}
	.imgs{
		height: auto;
		width: auto;
	}
	.title {
		display: table;
		width: 100%;
		line-height: 92px;
		background-color: #fff;
		white-space: nowrap;
		border-spacing: .2rem 0;
		margin-bottom: 20px;
	}

	.title:before,
	.title:after {
		display: table-cell;
		content: '';
		width: 50%;
		background: -webkit-linear-gradient(#dedede, #fff) repeat-x left center;
		background: linear-gradient(#dedede, #fff) repeat-x left center;
		background-size: 0.1rem 0.1rem;
	}
	@media screen and (min-width: 980px) and (max-width: 1199px){
		.photos{
			margin-left: 70px;
			margin-right: 70px;
		}
	}
	@media screen and (min-width: 768px) and (max-width: 979px){
		.photos{
			margin-left: 131px;
			margin-right: 131px;
		}
    }
	@media screen and (min-width: 719px) and (max-width: 767px){
		.photos{
			margin-left: 80px;
			margin-right: 80px;
		}
	}
	@media screen and (min-width: 617px) and (max-width: 718px) {
		.portfolio li {
			margin-right: unset !important;
		}
		.photos {
			padding-left: 30%;
			padding-right: 30%;
			width: auto;
		}
	}
	@media screen and (min-width: 436px) and (max-width: 616px){
		.portfolio li{
			margin-right: unset !important;
		}
		.photos{
			margin-left: 26%;
			margin-right: 26%;
			width: auto;
		}
	}
	@media screen and (min-width: 236px) and (max-width: 435px){
		.portfolio li{
			margin-right: unset !important;
		}
		.photos{
			padding-left: 12%;
			padding-right: 12%;
			width: auto;
		}
	}
	@media screen and (min-width: 1200px){
		.footer-share{
			margin-right: 3%;
		}
		.photos{
			display: flex;
			justify-content: flex-start;
			flex-wrap: wrap;
		}
	}
	.mediaphotos{
		width: 270px;
    	height: 180px;
	}
</style>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-20" style="height: auto;">
	<div class="container" style="padding: 0;">
		<h1 class="color-green pull-right"></h1>
		<ul class="pull-left breadcrumb" style="display: flex;align-items: center;flex-wrap: wrap;top: 0;padding: 0;margin: 0;">
			<li><img class="ji" src="/xiahuan/ji.png"/></li>
			<li><a href="<?php echo U('Index/index');?>">首頁</a> <span class="divider">/</span></li>
			<li><a href="<?php echo U('Media/index');?>">精彩瞬間</a> <span class="divider">/</span></li>
			<li class="active" style="color: #777;"><?php echo ($media['title']); ?></li>
		</ul>
	</div>
	<!--/container-->
</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
	<div class="row-fluid portflio_details">
		<!-- Left Sidebar -->
		<div class="span9">

			<!-- Tabs -->

			<ul class="nav nav-tabs tabs" style="text-align: center">
				<li class="active"><a href="#home" data-toggle="tab"><?php echo ($media['title']); ?></a></li>
			</ul>
			<!--/tabs-->


			<div class="row-fluid">
				<div id="w">

					<ul class="portfolio clearfix photos" id="all">
						<?php if(is_array($images)): $i = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Row): $mod = ($i % 2 );++$i;?><li data-id="id-1"  class="street<?php echo ($Row['street_id']); ?>">
								<a href="#" class="mediaphotos">
									<em class="overflow-hidden imgs">
										<img style="width: 100%;height: 100%" onclick="expandPhoto(this);" src="<?php echo ($Row['savepath']); ?>" alt="" />
									</em>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>

					<!--分页-->
					<div class="pagination pagination-large pagination-centered" style="display: flex;place-content: center;">
					<!--第<span id="a2"></span>/<span id="a1"></span>页-->
						<a style="text-decoration: none;margin-right: 5px;color: #b8b8b8;display: block;border: 1px solid #b8b8b8;width: 30px;height: 20px;padding-top: 4px;padding-bottom: 4px;" href="#" onClick="change(--pageno)"><<</a>
						<span style="display: flex;" id="a3"></span>　
						<a style="text-decoration: none;margin-left: -12px;color: #b8b8b8;display: block;border: 1px solid #b8b8b8;width: 30px;height: 20px;padding-top: 4px;padding-bottom: 4px;" href="#" onClick="change(++pageno)">>></a>
					</div>
					<!--<div class="pagination pagination-large pagination-centered">
						<ul><?php echo ($page); ?></ul>
					</div>-->
					<!--分享-->
					<div class="footer-share">
						<a class="social weixin" href="javascript:">
							<div class="qrcode" id="qrcode"></div>
							<button type="button" class="footer-share-wechat" style="background-image: url(/xiahuan/Public/Static/Home/img/footer/IC-200-WeChat.png);background-size:30px 30px;"></button>
						</a>

						<br>
						<button type="button" class="footer-share-weibo" style="background-image: url(/xiahuan/Public/Static/Home/img/footer/IC-200-WB.png);background-size:30px 30px;"
								onclick="shareWeibo()"></button>
						<br>
						<button type="button" class="footer-share-facebook" style="background-image: url(/xiahuan/Public/Static/Home/img/footer/IC-200-facebook.png);background-size:30px 30px;" onclick="shareFacebook()"></button>

					</div>
				</div>
			</div>

            <!--<div class="title">
                <a class="social weixin" href="javascript:">
                    <div class="qrcode" id="qrcode"></div>
                    <svg t="1628480769448" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="8759" width="32" height="32"><path d="M302.787561 407.585224a37.1 37.1 0 1 0 72.214041-17.052045 37.1 37.1 0 1 0-72.214041 17.052045Z" p-id="8760" fill="#707070"></path><path d="M512 0C230.4 0 0 230.4 0 512s230.4 512 512 512 512-230.4 512-512S793.6 0 512 0z m-87.24 683.75c-33.7 0-65.84-5.66-95.2-15.9l-83.11 45.57 25.1-74.03c-59.59-39.07-97.99-100.39-97.99-169.35 0-118.03 112.47-213.71 251.21-213.71 122.97 0 225.28 75.16 246.96 174.43-3.41-0.12-6.83-0.2-10.27-0.2-126.04 0-228.22 86.64-228.23 193.51 0 20.6 3.81 40.44 10.84 59.06-6.38 0.41-12.81 0.62-19.31 0.62z m358.31 87.68l21.08 62.17-72.52-39.77c-21.96 6.53-45.57 10.09-70.17 10.09-117.14 0-212.1-80.52-212.1-179.84s94.96-179.84 212.1-179.84 212.1 80.52 212.1 179.84c0 60.95-35.77 114.82-90.49 147.35z" p-id="8761" fill="#707070"></path><path d="M595.2 568.57m-29.7 0a29.7 29.7 0 1 0 59.4 0 29.7 29.7 0 1 0-59.4 0Z" p-id="8762" fill="#707070"></path><path d="M511.46 436.18c20.49 0 37.1-16.61 37.1-37.1s-16.61-37.1-37.1-37.1c-20.48 0-37.09 16.61-37.1 37.1 0 20.49 16.61 37.1 37.1 37.1z" p-id="8763" fill="#707070"></path><path d="M733.38 568.57m-29.7 0a29.7 29.7 0 1 0 59.4 0 29.7 29.7 0 1 0-59.4 0Z" p-id="8764" fill="#707070"></path></svg>
                </a>
                <button type="button" class="active-share-facebook" onclick="shareFacebook()">
                    <svg t="1628480645627" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2921" width="32" height="32"><path d="M588.288 998.912V651.776h114.176l17.408-137.728H588.288v-88.064c0-22.528 4.608-38.912 13.312-50.176 9.216-11.264 26.112-16.896 52.224-16.896h70.656V235.52c-24.064-3.584-58.368-5.632-102.4-5.632-51.712 0-93.184 15.872-124.416 47.616s-46.592 76.8-46.592 134.656v101.376H336.384v137.728H450.56v349.696C207.36 970.752 18.944 763.392 18.944 512c0-272.384 220.672-493.568 493.568-493.568S1006.08 239.104 1006.08 512c0 246.784-181.248 450.56-417.792 486.912z m-75.264 6.656H512h1.024z" p-id="2922" fill="#707070"></path></svg>
                </button>
            </div>-->


			<div class="headdiv">
				<span style="width: 100%;display: inline-block;">上一篇：
					<?php if($before['title'] != NULL): ?><a href="<?php echo U(Media/detail,array('id'=>$before['id']));?>" class="handover"><?php echo ($before['title']); ?></a>
						<?php else: ?>
						<a class="no">無</a><?php endif; ?>
				</span>
				<span style="width: 100%;display: inline-block;">下一篇：
					<?php if($later['title'] != NULL): ?><a href="<?php echo U(Media/detail,array('id'=>$later['id']));?>" class="handover"><?php echo ($later['title']); ?></a>
						<?php else: ?>
						<a class="no">無</a><?php endif; ?>
				</span>
				<span>相關資訊：
					<?php if($media['description'] != NULL): ?><a href="<?php echo ($media['url']); ?>" class="handover"><?php echo ($media['description']); ?></a>
						<?php else: ?>
						<a class="no">無</a><?php endif; ?>
				</span>
			</div>

		</div>
		<!-- Right Sidebar -->
		<style type="text/css">
    .btn {
        display: block;
        position: relative;
        background: #adadad;
        padding: 5px;
        color: #fff;
        text-decoration: none;
        cursor: pointer;
    }

    .margin-top{
        margin-top:20px;
    }
    .searchx {
        width: 24px;
        max-width: 24px !important;
    }
    .butt{
        background-color: unset;
        border: 2px solid #385A9F;
    }
    .downxian{
        margin-top: 30px !important;
        margin-bottom: 60px !important;
        border-bottom: 2px solid #cbcbcb;
    }
    
</style>
<div class="span3">
            <!-- Search Bar -->
            <!-- <div class="headline"><h3 class="headh3" style="color: #385A9F">搜索內容</h3></div>
            <div class="input-append  margin-top">
                <form action="<?php echo U('Search/index');?>" method="get">
                    <input style="border: 2px solid #385A9F;border-right: unset;" type="text" name="keyword" class="span9" value="搜索關鍵詞"/>
                    <button class="butt" type="submit">
                        <img class="searchx search-btn" src="/xiahuan/Public/Static/Home/img/xun.png">
                    </button>
                </form>

            </div> -->

            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <div class="headline"><h3 style="color: #385A9F">巡禮活動</h3></div>
                <?php if(is_array($new_active)): $i = 0; $__LIST__ = $new_active;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Active/detail',array('id'=>$active['id']));?>"><dl class="dl-horizontal">
                    <dt><img src="<?php echo ($active['cover']); ?>" alt="" /></dt>
                        <dd>
                            <p><?php echo ($active['title']); ?></p>
                        </dd>
                    </dl></a><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('Active/index');?>"><h5 style="color: #385A9F;float: right;">查看更多》</h5></a>
                <div class="headline downxian"></div>
            </div><!--/posts-->



                <div class="posts margin-bottom-20">
                    <div class="headline"><h3 style="color: #385A9F">新聞資訊</h3></div>
                    <?php if(is_array($new_news)): $i = 0; $__LIST__ = $new_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><a href="<?php echo U('News/detail',array('id'=>$new['id']));?>"><dl class="dl-horizontal">
                            <dt><img src="<?php echo ($new['cover']); ?>" alt="" /></dt>
                            <dd>
                                <p><?php echo ($new['title']); ?></p>
                            </dd>
                        </dl></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    <a href="<?php echo U('News/index');?>"><h5 style="color: #385A9F;float: right;">查看更多》</h5></a>
                    <div class="headline downxian"></div>
                </div>
    <!-- Posts -->
    <!--<div class="posts margin-bottom-20">
        <div class="headline"><h3>圖集推薦</h3></div>
        <?php if(is_array($new_media)): $i = 0; $__LIST__ = $new_media;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$media): $mod = ($i % 2 );++$i;?><dl class="dl-horizontal">
                <dt><a href="<?php echo U('Media/detail',array('id'=>$media['id']));?>"><img src="<?php echo ($media['cover']); ?>" alt="" /></a></dt>
                <dd>
                    <p><a href="<?php echo U('Media/detail',array('id'=>$media['id']));?>"><?php echo ($media['title']); ?></a></p>
                </dd>
            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>-->
    <!--/posts-->




    <!-- Posts -->
   <!-- <div class="posts margin-bottom-20">
        <div class="headline"><h3>視頻集推薦</h3></div>
        <?php if(is_array($new_media2)): $i = 0; $__LIST__ = $new_media2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$media2): $mod = ($i % 2 );++$i;?><dl class="dl-horizontal">
                <dt><a href="<?php echo U('Media2/detail',array('id'=>$media2['id']));?>"><img src="<?php echo ($media2['cover']); ?>" alt="" /></a></dt>
                <dd>
                    <p><a href="<?php echo U('Media2/detail',array('id'=>$media2['id']));?>"><?php echo ($media2['title']); ?></a></p>
                </dd>
            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>-->
    <!--/posts-->
            <!-- Posts -->
            <!--<div class="posts margin-bottom-20">
                <div class="headline"><h3 style="color: #385A9F">新聞資訊</h3></div>
                <?php if(is_array($right_data)): $i = 0; $__LIST__ = $right_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$right_data_row): $mod = ($i % 2 );++$i;?><dl class="dl-horizontal">
                    <dt>
                        <?php if($right_data_row['type'] == 'shop'): ?><a href="<?php echo U('Shop/detail',array('id'=>$right_data_row['id']));?>">
                        <?php elseif($right_data_row['type'] == 'posts'): ?>
                        <a href="<?php echo U('Posts/detail',array('id'=>$right_data_row['id']));?>">
                        <?php else: ?>
                        <a href="<?php echo U('StreetHistory/detail',array('id'=>$right_data_row['id']));?>"><?php endif; ?>
                        <img src="<?php echo ($right_data_row['cover_width_300']); ?>" alt="" />
                        </a>
                    </dt>
                    <dd>
                        <p>
                        <?php if($right_data_row['type'] == 'shop'): ?><a href="<?php echo U('Shop/detail',array('id'=>$right_data_row['id']));?>">
                        <?php elseif($right_data_row['type'] == 'posts'): ?>
                        <a href="<?php echo U('Posts/detail',array('id'=>$right_data_row['id']));?>">
                        <?php else: ?>
                        <a href="<?php echo U('StreetHistory/detail',array('id'=>$right_data_row['id']));?>"><?php endif; echo ($right_data_row['title']); ?></a>
                        </p>
                    </dd>
                </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="headline"><h4 style="color: #385A9F;float: right;">查看更多》</h4></div>

            </div>-->
    <!--/posts-->
<!--            <a class="btn" href="#" onClick="javascript :history.back(1);">返回總覽</a>-->

            <!-- Photo Stream -->
            <!-- <div class="headline"><h3>社區美圖</h3></div>
            <ul class="unstyled blog-ads">
                <li><a href="photo_details.html"><img src="/xiahuan/Public/Static/Home/img/sliders/elastislide/5.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/xiahuan/Public/Static/Home/img/sliders/elastislide/6.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/xiahuan/Public/Static/Home/img/sliders/elastislide/8.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/xiahuan/Public/Static/Home/img/sliders/elastislide/10.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/xiahuan/Public/Static/Home/img/sliders/elastislide/11.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/xiahuan/Public/Static/Home/img/sliders/elastislide/1.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/xiahuan/Public/Static/Home/img/sliders/elastislide/2.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/xiahuan/Public/Static/Home/img/sliders/elastislide/7.jpg" alt="" class="hover-effect" /></a></li>
            </ul> -->

            <!-- Blog Tags -->

        </div>

		<!--/span3-->
	</div>
	<!--/row-fluid-->
</div>
<!--/container-->
<!--=== End Content Part ===-->


<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=YucscdufpGHjsbbnhrjhrLBWFWsulcMq&s=1"></script>
<script type="text/javascript" src="../../../../xiahuan/Public/Static/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="../../../../xiahuan/Public/Static/Home/js/qrcode.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../xiahuan/Public/Static/Home/js/qrcodebox-master/qrcodebox/css/qrcode.box.css">
<script src="../../../../xiahuan/Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.min.js"></script>
<script src="../../../../xiahuan/Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.qrcode.js"></script>
<script src="../../../../xiahuan/Public/Static/Home/js/qrcodebox-master/qrcodebox/js/qrcode.js"></script>
<script src="../../../../xiahuan/Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.qrcode.box.js"></script>
<!-- <script src="../../../../Public/Static/Home/js/qrcode.min.js"></script> -->
<script type="text/javascript">
	//分享二维码
	var wz = "http://macauonline.net/xiahuan/Media/detail/id/<?php echo ($media['id']); ?>.html"
	var qrcode = new QRCode(document.getElementById("qrcode"), wz); // 设置要生成二维码的链接
	$(".qrcode").qrcodeBox({
		title: "分享到微信朋友圈",
		des: "“扫一扫” 即可分享",
		width: 128,
		height: 128,
		qrcodeText: wz,
		offsetX: 70,
		offsetY: 100
	});
</script>
<script type="text/javascript">
	function expandPhoto(obj){
		var _this = obj;
		var bg = document.createElement("div"); //创建div
		bg.setAttribute("id","showImgBg");  //给背景添加id
		bg.setAttribute("class","show-img-bg");  //给背景添加class
		document.body.appendChild(bg);  //向页面中显示此div，背景覆盖整个页面（展示台）
		var bgId = document.getElementById('showImgBg');//声明背景id

		$(document).mouseup(function(event){
			var _con = $(bgId); // 设置目标区域

			if(!_con.is(event.target) && _con.has(event.target).length === 0){ // Mark 1

				//$('#divTop').slideUp('slow'); //滑动消失
				$(bgId).hide(1000); //淡出消失

			}
		});


		var title = document.createElement("span");
		title.setAttribute("class","bg-title");
		bgId.appendChild(title);//加入小提示

		var larimg = document.createElement("img");
		larimg.setAttribute("id","larImg");
		larimg.setAttribute("class","lar-img");
		larimg.src = _this.getAttribute("src");
		bgId.appendChild(larimg);//加入展示的图片

		var close = document.createElement("span");
		close.setAttribute("id","closeIcon");
		close.setAttribute("class","close-icon");
		close.innerHTML = "x";
		bgId.appendChild(close);//加入手写的关闭按钮

		larimg.onclick = bigImg;//点击放大缩小按钮
		close.onclick = restore;//关闭展示的页面
	}

	function restore(){
		document.body.removeChild(document.getElementById("showImgBg"));
	}

	function bigImg(){
		let lar = document.getElementById("larImg");
		if(lar.style.width == '800px'){
			lar.style.width = "1200px";
		}else{
			lar.style.width = "800px";
		}
	}

	function oriImg(){
		let lar = document.getElementById("larImg");
		lar.style.width = "800px";
	}

	function download(){
		alert("下不了的，别点了");
	}

</script>
<script type="text/javascript">
	var a = document.getElementById("all").getElementsByTagName("li");
	var zz =new Array(a.length);
	for(var i=0;i <a.length;i++){
		zz[i]=a[i].innerHTML;
	} //div的字符串数组付给zz
	var pageno=1 ;              //当前页
	var pagesize=9;            //每页多少条信息
	if(zz.length%pagesize==0){
		var  pageall =zz.length/pagesize ;
	}else{
		var  pageall =parseInt(zz.length/pagesize)+1;
	}   //一共多少页

	function change(e){
		pageno=e;
		if(e<1){ //如果输入页<1页
			e=1;pageno=1;//就等于第1页 ， 当前页为1
		}
		if(e>pageall){  //如果输入页大于最大页
			e=pageall;pageno=pageall; //输入页和当前页都=最大页
		}
		document.getElementById("all").innerHTML=""//全部清空
		for(var i=0;i<pagesize;i++){
			var div =document.createElement("li")//建立div对象
			div.innerHTML=zz[(e-1)*pagesize+i]//建立显示元素
			document.getElementById("all").appendChild(div)//加入all中
			if(zz[(e-1)*pagesize+i+1]==null) break;//超出范围跳出
		}
		var ye="";
		for(var j=1;j<=pageall;j++){
			if(e==j){
				ye=ye+"<span><a href='#' onClick='change("+j+")' style='text-decoration: none;margin-right: 5px;color: #385A9F;display: block;border: 1px solid #b8b8b8;width: 30px;height: 20px;padding-top: 4px;padding-bottom: 4px'>"+j+"</a></span> "
			}else{
				ye=ye+"<a href='#' onClick='change("+j+")' style='text-decoration: none;margin-right: 5px;color: #b8b8b8;display: block;border: 1px solid #b8b8b8;width: 30px;height: 20px;padding-top: 4px;padding-bottom: 4px'>"+j+"</a> "
			}
		}
		// document.getElementById("a1").innerHTML=pageall;
		// document.getElementById("a2").innerHTML=pageno;
		document.getElementById("a3").innerHTML=ye;
	}
	change(1);
</script>
<!--=== Footer ===-->

<!--=== Footer ===-->
<div class="footer-container">
	<div class="footer-activity " style="margin-bottom: -10px;">
		<!-- Recent Works --> 
		<div class="headline" style="margin: 50px 0 0 0;">
			<h3><a href="javascript:volid(0)" style="font-weight: 600;color: #385A9F;">合作夥伴</a></h3>
		</div>
		<div class="row-fluid">
			<div id="w">
				<ul class="portfolio clearfix" style="margin-top: 0px;" id="por">
					<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$links): $mod = ($i % 2 );++$i;?><li data-id="id-1" link="<?php echo ($links['url']); ?>">
							<div class="thumbnail-style" style="border: 1px solid #ccc !important;">
							<div class="thumbnail-img">
								<div class="overflow-hidden imgsize" style="height: 51px;width: 163px;">
							<a href="<?php echo ($links['url']); ?>" target="_blank">
								<em class="overflow-hidden">
									<img class="img123456" src="<?php echo ($links['image']); ?>" alt="" />
								</em>
							</a>
							</div>
							</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
	
	<style>
		.img123456{
			margin-top: 0px !important;
			margin-left: 0px !important;
		}
	</style>

<div class="footer">



	<img src="/xiahuan/Public/Static/Home/img/footer/官網banner-10.jpg" class="footer-img footer-img-pc" alt="" />
	<img src="/xiahuan/Public/Static/Home/img/footer/banner-220407.jpg" class="footer-img footer-img-mod" alt="" />

	<div class="footer-share">

		<button type="button" class="footer-share-wechat" style="background-image: url(/xiahuan/Public/Static/Home/img/footer/IC-200-WeChat.png);background-size:30px 30px;"
				onclick="shareWechat()"></button>

		<div id="myModal" class="modal" style="display:none;">
			<!-- 弹窗内容 -->
			<span class="close">&times;</span>
			<div class="footer-text">掃碼進入小程序</div>
			<img src="/xiahuan/Public/Static/Home/img/footer/wx.jpg" class="footer-share-wx">
		</div>
		<br>
		<button type="button" class="footer-share-weibo" style="background-image: url(/xiahuan/Public/Static/Home/img/footer/IC-200-WB.png);background-size:30px 30px;"
				onclick="shareWeibo()"></button>
		<br>
		<button type="button" class="footer-share-facebook" style="background-image: url(/xiahuan/Public/Static/Home/img/footer/IC-200-facebook.png);background-size:30px 30px;" onclick="shareFacebook()"></button>

</div>



	<a style="color: beige;left: 16px; text-decoration:underline;position: relative;" href="http://www.macautech.net/">普及科技（澳門）有限公司</a>
	<span style="color: beige;left: 16px; position: relative;">提供技術支持
		<script type="text/javascript">document.write(unescape("%3Cspan id='cnzz_stat_icon_1280479679'%3E%3C/span%3E%3Cscript src='https://s9.cnzz.com/stat.php%3Fid%3D1280479679%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
	</span>
</div>
<!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<!-- <div class="copyright">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">

                </div>
                <div class="span4">
                    <a href="<?php echo U('Index/index');?>">
                        <img id="logo-footer" src="/xiahuan/Public/Static/Home/img/logo2-default.png" class="pull-right" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div> -->
<!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/xiahuan/Public/Static/Home/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/TrafficControl/1.4/src/TrafficControl_min.js"></script>
<!-- <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=PSGDO96ZzxBUijinzhN6PajEn75enP1c" /> -->
<script type="text/javascript" src="/xiahuan/Public/Static/Home/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/portfolioSorting/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/portfolioSorting/js/sorting.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/plugins/back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/xiahuan/Public/Static/Home/js/app.js"></script>
<script type="text/javascript" src="/xiahuan/Public/Static/Home/js/pages/index.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$(".ulc").on("click", "li", function() {
			var link = $(this).attr("link");
			window.parent.location.href = link;
		})

		var winWidth = $("html").width();
		console.log('winWidth', winWidth)
		if (winWidth > 767) {

			$(".footer-img-mod").show();
			$(".footer-img-pc").hide();

		} else {
			$(".footer-img-pc").show();
			$(".footer-img-mod").hide();
			$(".footer-share").hide();
		}

		var mySwiper1 = new Swiper('.swiper-con-activity', {
			//loop: true,
			slidesPerView: 4,
			slidesPerGroup: 4,
			spaceBetween: 10,
			breakpoints: {
				1200: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
				979: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// }
		});

		var mySwiper2 = new Swiper('.swiper-con-new', {
			//loop: true,
			// preventClicks : false,
			slidesPerView: 4,
			slidesPerGroup: 4,
			spaceBetween: 10,
			breakpoints: {
				1200: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
				979: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// }
		});


		var mySwiper3 = new Swiper('.swiper-con-ac', {
			//loop: true,
			slidesPerView: 2,//一行显示2个
    		slidesPerColumn: 2,//显示2行
			slidesPerGroup: 4,
			spaceBetween: 40,
			breakpoints: {
				1200: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
				979: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});


		var mySwiper4 = new Swiper('.swiper-con-acindex', {
			//loop: true,
			slidesPerView: 2,//一行显示2个
    		slidesPerColumn: 3,//显示3行
			slidesPerGroup: 6,
			spaceBetween: 30,
			breakpoints: {
				1200: {
					slidesPerView: 2,//一行显示2个
					slidesPerColumn: 3,//显示3行
					slidesPerGroup: 6,
				},
				979: {
					slidesPerView: 2,//一行显示2个
					slidesPerColumn: 3,//显示3行
					slidesPerGroup: 6,
				},
				767: {
					slidesPerView: 2,//一行显示2个
					slidesPerColumn: 3,//显示3行
					slidesPerGroup: 6,
				},
				460: {

					slidesPerView: 1,//一行显示2个
					slidesPerColumn: 6,//显示3行
					slidesPerGroup: 6,
				}
			},
			// 如果需要前进后退按钮
		});


		var mySwiper5 = new Swiper('.swiper-con-meindex', {
			//loop: true,
			slidesPerView: 2,//一行显示2个
    		slidesPerColumn: 2,//显示3行
			slidesPerGroup: 4,
			spaceBetween: 30,
			breakpoints: {
				1200: {
					slidesPerView: 2,//一行显示2个
					slidesPerColumn: 2,//显示3行
					slidesPerGroup: 4,
				},
				979: {
					slidesPerView: 2,//一行显示2个
					slidesPerColumn: 2,//显示3行
					slidesPerGroup: 4,
				},
				767: {
					slidesPerView: 1,//一行显示2个
					slidesPerColumn: 4,//显示3行
					slidesPerGroup: 4,
				},
				460: {

					slidesPerView: 1,//一行显示2个
					slidesPerColumn: 4,//显示3行
					slidesPerGroup: 4,
				}
			},
			// 如果需要前进后退按钮
		});



	
		var mySwiper6 = new Swiper('#swiper-con-newac', {
			//loop: true,
			slidesPerView: 2,//一行显示3个
    		slidesPerColumn: 2,//显示2行
			slidesPerGroup: 4,
			spaceBetween: 30,
			breakpoints: {
				1200: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
				979: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});


		var mySwiper7 = new Swiper('.swiper-con-meili', {
			// loop: true,
			slidesPerView: 3,
			slidesPerGroup: 3,
			spaceBetween: 10,
			breakpoints: {
				1200: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				979: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				767: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// }
		});


		var mySwiper8 = new Swiper('.swiper-con-scenic', {
			// loop: true,
			slidesPerView: 4,
			slidesPerGroup: 4,
			spaceBetween: 10,
			breakpoints: {
				1200: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
				979: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// }
		});

		var mySwiper9 = new Swiper('.swiper-con-shop', {
			slidesPerView: 3,
			slidesPerGroup: 4,
			spaceBetween: 5,
			breakpoints: {
				1200: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				979: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// }
		});

		App.init();
		App.initBxSlider1();
		App.initSliders();
		// Index.initParallaxSlider();
		Index.initRevolutionSlider();
	});

	// var map = new BMap.Map("map");
	// var point = new BMap.Point(116.404, 39.915);
	// map.centerAndZoom(point, 15);
	// var marker = new BMap.Marker(point); // 创建标注
	// map.addOverlay(marker); // 将标注添加到地图中
	// marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
	jQuery(document).ready(function() {
		App.init();
	});
	jQuery(document).ready(function() {
		App.init();
		App.initBxSlider1();
		App.initSliders();
		Index.initParallaxSlider();
	});

	//分享到新浪微博
	function shareToXl(title, url, picurl) {
		var sharesinastring =
			'http://v.t.sina.com.cn/share/share.php?title=' + title + '&url=' + url + '&content=utf-8&sourceUrl=' + url +
			'&pic=' + picurl;
		window.open(sharesinastring, 'newwindow', 'height=400,width=400,top=100,left=100');

	}
	//分享到facebook
	/*function shareToFB(title, url,picurl) {
		var sharesinastring =
			'http://www.facebook.com/sharer/sharer.php?title=' + title + '&url=' + url + '&content=utf-8&sourceUrl=' + url+'&pic=' + picurl;;
		window.open(sharesinastring, 'newwindow', 'height=400,width=400,top=100,left=100');

	}*/
    function shareToFB(title, url) {
        var sharesinastring =
            "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url)+ "&title=" + encodeURIComponent(title)+ "&display=popup&ref=plugin&src=share_button";
        window.open(sharesinastring, 'newwindow', 'height=400,width=400,top=100,left=100');

    }
	// 分享到微信
	// 获取弹窗
	var modal = document.getElementById('myModal');

	// 打开弹窗的按钮对象


	// 获取 <span> 元素，用于关闭弹窗
	var span = document.querySelector('.close');

	// 点击按钮打开弹窗
	function shareWechat() {
		modal.style.display = "block";
	}

	// 点击 <span> (x), 关闭弹窗
	span.onclick = function() {
		modal.style.display = "none";
	}

	// 在用户点击其他地方时，关闭弹窗

	//点击空白处隐藏弹出层，下面为滑动消失效果和淡出消失效果。

	$(document).mouseup(function(event){
		var _con = $(modal); // 设置目标区域

		if(!_con.is(event.target) && _con.has(event.target).length === 0){ // Mark 1

		//$('#divTop').slideUp('slow'); //滑动消失
		$(modal).hide(1000); //淡出消失

		}
	});




	/*window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}*/

	function shareWeibo() {
		shareToXl("下環巡禮", "http://macauonline.net/xiahuan/Index/index.html");

	}
	function shareFacebook() {
        shareToFB("下環巡禮", wz);

	}
</script>
<!--[if lt IE 9]>
    <script src="/xiahuan/Public/Static/Home/js/respond.js"></script>
<![endif]-->

</body>
<style type="text/css">
	.footer1{
		/*margin-top: 100px;*/
		/* padding: 20px 10px; */
		background: #585f69;
		color: #dadada;
		z-index: -10;
		zoom: 1;
		text-align: center;
		vertical-align: 1000px;
	}
	.footer-share-wx {
		/*width: 30%;*/
		/*margin: 5px 5px 5px 5px;*/
		padding-bottom: 0px;
		padding-top: 0px;
		padding-right: 0px;
		padding-left: 0px;
	}

	.footer-logo{
		position: relative;
		bottom: 51px;
		width: 600px;
		left: -32px;
		opacity: 1;
		cursor: pointer;
		z-index: 999;
	}
	.footer-share {
		/*background-color: rgb(66, 71, 74);
		width: 135px;
		height: 40px;*/
		position: fixed;
		bottom: 76px;
		right: 5px;
		z-index: 99;
		opacity: 1;
		cursor: pointer;

		/*position: inherit;
		margin-left: 392px;
		margin-top: -220px;
		float: right;*/

	}

	.footer-share-facebook {
		background-color: rgb(213 222 203 / 0%);
		width: 30px;
		height: 30px;
		border: none;
		border-radius: 10px;
		position: fixed;
		bottom: 76px;
		right: 20px;
		opacity: 1;
		cursor: pointer;
	}

	.footer-share-wechat {
		background-color: rgb(213 222 203 / 0%);
		width: 30px;
		height: 30px;
		border: none;
		border-radius: 10px;
		position: fixed;
		bottom: 165px;
		right: 20px;
		opacity: 1;
		cursor: pointer;
	}


	.footer-share-weibo {
		background-color: rgb(213 222 203 / 0%);
		width: 30px;
		height: 30px;
		border: none;
		border-radius: 10px;
		position: fixed;
		bottom: 120px;
		right: 20px;
		opacity: 1;
		cursor: pointer;
	}

	.footer-text {
		color: black;
		font-size: 20px;
		font-weight: bolder;
		padding-top: 25px;
		padding-bottom: 20px;
		text-align: center;
		margin: auto;
	}

	@media (max-width: 767px) {
		.clearfix{
			display: flex;
			flex-wrap: wrap;
			
		}
		.clearfix li{
			margin-right: 6px;
		}
		.footer-share {
			margin-top: -41px;
			float: right;
			margin-right: 80px;
			width: 65px;
			height: 25px;
			overflow: hidden;
		}

		.footer-share-facebook {
			margin-top: -30px;
			transform: scale(0.6);
			margin-left: 38px;
		}

		.footer-share-weibo {

			margin-top: -30px;
			transform: scale(0.6);
			margin-left: 18px;
		}

		.footer-share-wechat {
			transform: scale(0.6);
			margin-top: -2px;

			margin-left: -4px;

		}
		.modal {
		    top: 130px !important;
			left: 180px !important;
		}
	}

	/* 弹窗 (background) */
	.modal {
		width: 350px;
    margin-top: 5%;
    margin-left: -10%;
		display: none;
		/* 默认隐藏 */
		position: fixed;
		/* 固定定位 */
		z-index: 1;
		/* 设置在顶层 */
		/*left: 0;*/
		/*top: 0;*/
		/*margin:auto;*/
		text-align:center;

		/*background-color: rgb(0, 0, 0);*/
		/*background-color: rgb(169 169 169);*/
	}

	/* 弹窗内容 */
	.modal-content {
		background-color: #fefefe;
		margin: 15% auto;
		padding: 20px;
		border: 1px solid #888;
		width: 80%;
	}

	/* 关闭按钮  #aaa*/
	.close {
		color: #1f1c1c;
		float: right;
		font-size: 40px;
    	font-weight: initial;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
	.logo{
		margin: 0;
		position: relative;
		width: 100%;
		height: 100%;
		z-index: 1;
		display: flex;
		transition-property: transform,-webkit-transform;
		box-sizing: content-box;
		list-style: none;
		padding: 0;
	}
	.logoli{
		width: 285px;
		margin-right: 10px;
	}
	.logodiv1{

		width: 283px;
		height: 100px;
		margin-right: 6px;
	}
	.logodiv2{

		width: 283px;
		height: 100px;
		margin-right: 6px;
	}
	.logodiv3{

		width: 283px;
		height: 100px;
	}
	.logo1{
		width:100%;
		margin-top: 6px;
		margin-left: 1px;
	}
	.logo2{
		width:100%;
		padding-top: 8px;
	}
	.logo3{
		width: 65%;
		height: 96%;
		z-index: -100;
		margin-left: 47px;
		margin-top: 4px;
		position: relative;
	}
	@media (max-width: 768px){
		.footer-activity .imgsize {
			height: 217px;
		}
		.logo{
			margin: 0;
			position: relative;
			width: 100%;
			height: 100%;
			z-index: 1;
			display: flex;
			transition-property: transform,-webkit-transform;
			box-sizing: content-box;
			list-style: none;
			padding: 0;
		}
		.logoli{
			position: relative;
			width: 115px;
			margin-right: 10px;
		}
		.logodiv1{
			margin-right: 1px;
			position: relative;

			width: 80px;
			height: 30px;

		}
		.logodiv2{
			margin-right: 1px;
			position: relative;

			width: 80px;
			height: 30px;

		}
		.logodiv3{
			position: relative;

			width: 80px;
			height: 30px;
		}
		.logo1{
			width: 80px;
			z-index: -100;
			margin-top: 3px;
		}
		.logo2{
			width: 80px;
			z-index: -100;
		}
		.logo3{
			margin-left: 15px;
			z-index: -100;
		}
	}
</style>
<script type="text/javascript">

		var url = window.location.pathname;

		if(url.indexOf('detail')>= 0){
			document.getElementById("por").style.marginTop='unset';

		}

	</script>
</html>