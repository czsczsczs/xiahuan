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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/css/style.css" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/css/headers/header1.css" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/css/style_responsive.css" />
    <link rel="shortcut icon" href="/xiahuan/2020/favicon.ico" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/revolution_slider/css/rs-style.css" media="screen" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/flexslider/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/parallax-slider/css/parallax-slider.css" type="text/css" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.css" />
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/plugins/portfolioSorting/css/sorting.css" />
    <!-- CSS Theme -->
    <link rel="stylesheet" href="/xiahuan/2020/Public/Static/Home/css/themes/default.css" id="style_color" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <style>
        @media screen and (min-width: 1362px) {
            .logo{
                margin-left: -90px;
            }
        }
        
        
    </style>
</head>

<body>
    <div class="fiexd_code">
        <!-- <img src="/xiahuan/2020/Public/Static/Home/img/code.png"> -->
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
            <div class="logo">
                <a href="<?php echo U('Index/index');?>">
                    <img id="logo-header" style="max-width:45%" src="/xiahuan/2020/Public/Static/Home/img/logo-03(1).png" alt="Logo" />
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
                        <ul class="nav top-2">
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
                            <li <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
                                </a>

                                <b class="caret-out"></b>
                            </li>
                            <li <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
                                </a>

                                <b class="caret-out"></b>
                            </li>
                            <li <?php if($Method == 'Shop'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Shop/index');?>" class="dropdown-toggle" data-toggle="">特色店鋪
                                </a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'craft'));?>">手工技藝</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'create'));?>">新興文創</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'cate'));?>">特色飲食</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'antique'));?>">古玩收藏</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'dress'));?>">精品服飾</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'other'));?>">其他店鋪</a></li>
                                </ul> -->
                                <!-- <b class="caret-out"></b> -->
                            </li>
                            <li <?php if($Method == 'CultureHeritage'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('CultureHeritage/index');?>" class="dropdown-toggle" data-toggle="">文化遺產
                                </a>

                                <b class="caret-out"></b>
                            </li>
                            <li><a class="search"><i class="icon-search search-btn"></i></a></li>
                            <li class="selectbox" style="margin-left: 10px">
                                <div class="select">
                                        <select id="selectbox2" onchange="window.location.href=options[selectedIndex].value">
                                            <option style="display:none;" value="http://macauonline.net/xiahuan/2020/index.php/Index/index.html" >2021下環巡禮</option>
                                            <option value="http://macauonline.net/xiahuan/index.php/Index/index.html" >2022下環巡禮</option>
                                            <option value="http://macauonline.net/xiahuan/2020/index.php/Index/index.html">2021下環巡禮</option>


                                        </select>
                                </div>
                            </li>
                        </ul>
                        <div class="search-open">
                            <div class="input-append">
                                <form action="<?php echo U('Search/index');?>" method="get">

                                <input type="text" name="keyword" class="span3" placeholder="Search" />
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
<!--=== End Header ===-->
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <ul class="pull-left breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首頁</a> <span class="divider">/</span></li>
            <li><a href="<?php echo U('Active/index');?>">社區活動</a> <span class="divider">/</span></li>
            <li class="active"><?php echo ($active['title']); ?></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container portfolio-item">
	<div class="row-fluid margin-bottom-20">
		<!-- Carousel -->
        <div class="span7">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <?php if($images): if(is_array($images)): $key = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($key % 2 );++$key;?><div class="item <?php if($key == 1): ?>active<?php endif; ?>">
                            <img src="<?php echo ($row['savepath']); ?>" alt="" />
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php else: ?>
                    <div class="item active">
                        <img src="<?php echo ($active['cover']); ?>" alt="" />
                    </div><?php endif; ?>
                </div>
                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control"><i class="icon-angle-left"></i></a>
                    <a data-slide="next" href="#myCarousel" class="right carousel-control"><i class="icon-angle-right"></i></a>
                </div>
            </div>
        </div><!--/span7-->
        <!-- //End Tabs and Carousel -->

        <div class="span5">
        	<h3><?php echo ($active['title']); ?></h3>
            <p><?php echo (htmlspecialchars_decode($active['content'])); ?></p>

            <ul class="unstyled" style="font-size: 16px">
            	<?php if($active['time']): ?><li>
                        <span style="width:110px;display: inline-block;vertical-align: top;"><i class="icon-time color-green"></i> 活動時間：</span>
                        <span style="width:350px;display: inline-block;vertical-align: top;"><?php echo ($active['time']); ?></span>
                    </li><?php endif; ?>
            	<li>
                    <span style="width:110px;display: inline-block;vertical-align: top;"><i class="icon-map-marker color-green"></i> 活動地點：</span>
                    <span style="width:350px;display: inline-block;vertical-align: top;"><?php echo ($active['address']); ?></span>
                </li>
            	<li> 
                    <span style="width:110px;display: inline-block;vertical-align: top;"><i class="icon-tags color-green"></i> 活動簡介：</span>
                    <span style="width:350px;display: inline-block;vertical-align: top;"><?php echo ($active['other']); ?></span>
                </li>
            </ul>
        </div>
        <div class="headdiv">
            <span style="width: 100%;display: inline-block;">上一篇：
                <?php if($before['title'] != NULL): ?><a href="<?php echo U(Active/detail,array('id'=>$before['id']));?>" class="handover"><?php echo ($before['title']); ?></a>
                <?php else: ?>
                    <a class="no">無</a><?php endif; ?>
            </span>
            <span>下一篇：
                <?php if($later['title'] != NULL): ?><a href="<?php echo U(Active/detail,array('id'=>$later['id']));?>" class="handover"><?php echo ($later['title']); ?></a>
                <?php else: ?>
                    <a class="no">無</a><?php endif; ?>
            </span>
        </div>
    </div><!--/row-fluid-->

	<!-- Recent Works -->
    <div class="headline">
        <h3>其他活動</h3>
        <div class="recent-work-btn">
            <div class="swiper-button-prev recent-work-prev"></div>
            <div class="swiper-button-next recent-work-next"></div>
        </div>
    </div>
    <div class="row-fluid margin-bottom-40 swiper-container">
        <ul class="recent-work swiper-wrapper">
            <?php if(is_array($re_active)): $i = 0; $__LIST__ = $re_active;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active): $mod = ($i % 2 );++$i;?><li class="swiper-slide" style="height:250px;">
                <a href="<?php echo U(Active/detail,array('id'=>$active['id']));?>">
                	<em class="overflow-hidden"><img style="height:180px;" src="<?php echo ($active['cover']); ?>" alt="" /></em>
                    <span>
                        <strong style="width:265px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?php echo ($active['title']); ?></strong>
                        <i></i>
                    </span>
                </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
	</div><!--/row-->
	<!-- //End Recent Works -->
</div><!--/container-->
<style type="text/css">
    .span{
        width:461.5px;height:700px;margin-left: 10%;
    }
    .headdiv{
        font-size: 18px;
        clear: left;

        /*margin: 0 10% 0 10%;*/
    }
    .headline{
        margin: 0px;
    }
    .handover{
        padding: 3px;
        color: #cc9966;
        font-size: 18px;
    }
    .handover:hover{
        color:#fcd600;
        text-decoration: none;
    }
    .no{
        pointer-events:none;
        color:#ddd;
        font-size: 18px;
    }
    
    @media (max-width: 768px){
        .span7{
            width:100%
           
            margin: 0px;
        }
    }
    @media (max-width: 425px){
        .span7{
            width:100%
            margin: 0px;
        }
    }
    @media (max-width: 320px){
        .span7{
            width:100%
            margin: 0px;
        }
    }

</style>

<!--=== End Content Part ===-->
<script>
window.onload = function() {
    var mySwiper = new Swiper ('.swiper-container', {
    slidesPerView : 4,
    slidesPerGroup : 4,
    spaceBetween : 10,
    breakpoints: {
        1024: {
        slidesPerView : 4,
        slidesPerGroup : 4,
        spaceBetween : 10,
        },
        768: {
        slidesPerView: 3,
        slidesPerGroup : 3,
        spaceBetween : 10,
        },
        640: {
        slidesPerView: 2,
        slidesPerGroup : 2,
        spaceBetween : 10,
        },
        460: {
        slidesPerView: 1,
        slidesPerGroup : 1,
        }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
}
</script>
<!--=== Footer ===-->
<!--=== Footer ===-->
<div class="footer">
	<img src="/xiahuan/2020/Public/Static/Home/img/footer/BANNER-05.png" class="footer-img footer-img-pc" alt="" />
	<img src="/xiahuan/2020/Public/Static/Home/img/footer/BANNER-04(1).png" class="footer-img footer-img-mod" alt="" />
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
                        <img id="logo-footer" src="/xiahuan/2020/Public/Static/Home/img/logo2-default.png" class="pull-right" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div> -->
<!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/js/jquery-1.8.2.min.js"></script>
<!-- <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=PSGDO96ZzxBUijinzhN6PajEn75enP1c" /> -->
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/portfolioSorting/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/portfolioSorting/js/sorting.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/plugins/back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/js/app.js"></script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Home/js/pages/index.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$(".ulc").on("click", "li", function() {
			var link = $(this).attr("link");
			window.parent.location.href = link;
		})

		var winWidth = $("html").width();
		if (winWidth > 767) {
			$(".footer-img-mod").show();
			$(".footer-img-pc").hide();
		} else {
			$(".footer-img-pc").show();
			$(".footer-img-mod").hide();
		}

		var mySwiper = new Swiper('.swiper-con-activity', {
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
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});

		var mySwiper = new Swiper('.swiper-con-scenic', {
			loop: true,
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
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});

		var mySwiper = new Swiper('.swiper-con-shop', {
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
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
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
</script>
<!--[if lt IE 9]>
    <script src="/xiahuan/2020/Public/Static/Home/js/respond.js"></script>
<![endif]-->

</body>

</html>