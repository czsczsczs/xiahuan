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
    #index_overflow {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .sli{
        border-bottom: 1px solid #c2c2c2;
        padding-bottom: 20px;
    }
    .txtstyle{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-indent: 28px;
        font-size: 15px;
        text-align: -webkit-left;
    }
    .recent-work img {
        height: unset !important;
    }
    .ppp{
        text-align-last: right;
        margin-top: 9%;
    }
    @media screen and (min-width: 767px) {
        .ulhe {
            height: 1030px;
            overflow: auto;
            padding-right: 15px;
        }
        .sli{
            height: 220px;
        }
        .ulhe::-webkit-scrollbar {/*滚动条整体样式*/
            width: 8px;     /*高宽分别对应横竖滚动条的尺寸*/
            height: 1px;
        }

        .ulhe::-webkit-scrollbar-thumb{/*滚动条里面小方块*/
            border-radius: 10px;
            box-shadow: inset 0 0 5px rgba( 0, 0, 0, .1);
            background: #d3d3d3;
        }

        .ulhe::-webkit-scrollbar-track{/*滚动条里面轨道*/
            box-shadow: inset 0 0 5px rgba( 0, 0, 0, .1);
            border-radius: 10px;
            background: #EDEDED;
        }

    }
    @media (max-width: 768px){
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
    }
</style>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40" style="height: auto;">
	<div class="container" style="padding: 0;">
        <!-- <h1 class="color-green pull-left">Portfolio</h1> -->
        <ul class="pull-left breadcrumb" style="display: flex;align-items: center;flex-wrap: wrap;top: 0;padding: 0;margin: 0;">
            <li><img class="ji" src="/xiahuan/ji.png"/></li>
            <li><a href="<?php echo U('Index/index');?>">首頁</a> <span class="divider">/</span></li>
            <li class="active" style="color: #777;">新聞資訊</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
	<div class="row-fluid">
        <div class="span9" id="w">
            <!-- <div class="sort" id="sort">
				<ul class="unstyled inline">
                	<li><a href="#" class="all selected">全部</a></li> -->
                    <!-- <?php if(is_array($street_list)): $i = 0; $__LIST__ = $street_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$street): $mod = ($i % 2 );++$i;?><li><a href="#" class="street<?php echo ($street['id']); ?>"><?php echo ($street['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> -->
            <!--     </ul>
            </div> -->

            <ul class="portfolio recent-work clearfix ulhe">
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li class="swiper-slide sli" style="overflow: hidden;" link="<?php echo U('News/detail',array('id'=>$row['id']));?>">
                        <div class="thumbnail-style newthumb">
                            <div class="thumbnail-img" style="width: 100%;overflow: hidden;">
                                <img style="width: 35%;" src="<?php echo ($row['cover_width_300']); ?>" alt="" />
                                <div style="width: 60%;float:right;overflow: hidden;">
                                    <h3 style="text-align-last: left;" id="index_overflow" title="<?php echo ($row['title']); ?>">
                                        <a style="color: #385A9F;" class="hover-effect txtstyle" href="<?php echo U('News/detail',array('id'=>$row['id']));?>"><?php echo ($row['title']); ?></a>
                                    </h3>
                                    <p>
                                    <div class="txtstyle">
                                        <?php echo (htmlspecialchars_decode($row['content'])); ?>
                                    </div>
                                    </p>
                                    <p class="ppp" id="index_overflow"><a style="text-decoration:none;" class="pull-right" href="<?php echo U('News/detail',array('id'=>$row['id']));?>"><img style="max-width: 25px;" src="/xiahuan/Public/Static/Home/img/eye.png">查看詳情</a></p>
                                </div>

                            </div>

                        </div>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

            <!--<div class="pagination pagination-large pagination-centered">
                <ul><?php echo ($page); ?></ul>
            </div>-->
        </div>
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
    .headline {
        margin: unset !important;
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
    <div class="headline"><h3 class="headh3" style="color: #385A9F">搜索內容</h3></div>
    <div class="input-append  margin-top">
        <form action="<?php echo U('Search/index');?>" method="get">
            <input style="border: 2px solid #385A9F;border-right: unset;" type="text" name="keyword" class="span9" value="搜索關鍵詞"/>
            <button class="butt" type="submit">
                <img class="searchx search-btn" src="/xiahuan/Public/Static/Home/img/xun.png">
            </button>
        </form>

    </div>

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
        <div class="headline"><h3 style="color: #385A9F">社區美食</h3></div>
        <?php if(is_array($new_shop)): $i = 0; $__LIST__ = $new_shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Shop/detail',array('id'=>$shop['id']));?>"><dl class="dl-horizontal">
                <dt><img src="<?php echo ($shop['cover']); ?>" alt="" /></dt>
                <dd>
                    <p><?php echo ($shop['title']); ?></p>
                </dd>
            </dl></a><?php endforeach; endif; else: echo "" ;endif; ?>
        <a href="<?php echo U('Shop/index');?>"><h5 style="color: #385A9F;float: right;">查看更多》</h5></a>
        <div class="headline downxian"></div>
    </div>

</div>

    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->
<script type="text/javascript">

    var html = document.getElementById("txt").innerText;
    var str=html.replace(/[^\u4e00-\u9fa5]/g,"");
    document.getElementById("txt").innerHTML=str;

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