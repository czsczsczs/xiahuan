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
<style type="text/css">
	#index_overflow {
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}
</style>
<!--=== Slider ===-->
<div class="fullwidthbanner-container">
	<div class="fullwidthabnner">
		<ul>
			<?php if(is_array($slide)): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$slide_row): $mod = ($i % 2 );++$i;?><li data-transition="slideleft" data-slotamount="1" data-masterspeed="300" data-thumb="/xiahuan/2020/Public/Static/Home/img/sliders/revolution/thumbs/thumb1.jpg">
					<a href="<?php echo ($slide_row['url']); ?>" target="_blank">
						<img style="object-fit: contain;" src="<?php echo ($slide_row['image']); ?>" />
					</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>

		<div class="tp-bannertimer tp-bottom"></div>
	</div>
</div>
<!--/slider-->
<!--=== End Slider ===-->

<!--=== Purchase Block ===-->
<!-- <div class="row-fluid purchase margin-bottom-30">
    <div class="container">
		<div class="span9">
            <span>Unify is a clean and fully responsive incredible Template.</span>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi  vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat.</p>
        </div>
        <a href="http://sc.chinaz.com/moban/" class="btn-buy hover-effect">Purchase Now</a>
    </div>
</div> -->
<!--/row-fluid-->
<!-- End Purchase Block -->


<!-- Recent Works -->
<div class="container">
	<!-- Recent Works -->
	<div class="index-activity">
		<div class="headline">
			<h3><a href="<?php echo U('Active/index');?>">巡禮活動</a></h3>
		</div>
		<div class="swiper-container swiper-con-activity">
			<ul class="thumbnails swiper-wrapper ulc">
				<?php if(is_array($active)): $i = 0; $__LIST__ = $active;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active_row): $mod = ($i % 2 );++$i;?><li class="swiper-slide" link="<?php echo U('Active/detail',array('id'=>$active_row['id']));?>">
						<div class="thumbnail-style" style="">
							<div class="thumbnail-img">
								<img style="width: 100%;" src="<?php echo ($active_row['cover']); ?>" alt="" />
								<a class="btn-more hover-effect" href="<?php echo U('Active/detail',array('id'=>$active_row['id']));?>">查看詳情+</a>
							</div>
							<h3 style=" white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
								<a class="hover-effect" href="<?php echo U('Active/detail',array('id'=>$active_row['id']));?>"><?php echo ($active_row['title']); ?></a>
							</h3>
							<?php if($active_row['time']): ?><p id="index_overflow" title="<?php echo ($active_row['time']); ?>">活動時間：<?php echo ($active_row['time']); ?></p>
								<?php else: ?>
								<p>活動時間：暫無</p><?php endif; ?>
							<?php if($active_row['address']): ?><p id="index_overflow" title="<?php echo ($active_row['address']); ?>">活動地點：<?php echo ($active_row['address']); ?></p>
								<?php else: ?>
								<p>活動地點：暫無</p><?php endif; ?>
							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="swiper-button-prev">&lt;</div>
			<div class="swiper-button-next">&gt;</div>
		</div>
	</div>
	<!--/thumbnails-->
	<!-- //End Recent Works -->


	<div class="index-activity">
		<div class="headline">
			<h3><a href="<?php echo U('News/index');?>">新聞資訊</a></h3>
		</div>
		<div class="swiper-container swiper-con-activity">
			<ul class="thumbnails swiper-wrapper ulc">
				<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li class="swiper-slide" link="<?php echo U('News/detail',array('id'=>$new['id']));?>">
						<div class="thumbnail-style">
							<div class="thumbnail-img">
								<img style="width: 100%;" src="<?php echo ($new['cover']); ?>" alt="" />
								<a class="btn-more hover-effect" href="<?php echo U('News/detail',array('id'=>$new['id']));?>">查看詳情+</a>
							</div>
							<h3 id="index_overflow" title="<?php echo ($new['title']); ?>">
								<a class="hover-effect" href="<?php echo U('News/detail',array('id'=>$new['id']));?>"><?php echo ($new['title']); ?></a>
							</h3>
							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="swiper-button-prev">&lt;</div>
			<div class="swiper-button-next">&gt;</div>
		</div>
	</div>


	<div class="index-activity">
		<div class="headline">
			<h3><a href="<?php echo U('StreetHistory/index');?>">街道故事</a></h3>
		</div>
		<div class="swiper-container swiper-con-activity">
			<ul class="thumbnails swiper-wrapper ulc">
				<?php if(is_array($streetHistory)): $i = 0; $__LIST__ = $streetHistory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$streetHistory_row): $mod = ($i % 2 );++$i;?><li class="swiper-slide" link="<?php echo U('streetHistory/detail',array('id'=>$streetHistory_row['id']));?>">
						<div class="thumbnail-style">
							<div class="thumbnail-img">
								<img style="width: 100%;" src="<?php echo ($streetHistory_row['cover']); ?>" alt="" />
								<a class="btn-more hover-effect" href="<?php echo U('streetHistory/detail',array('id'=>$streetHistory_row['id']));?>">查看詳情+</a>
							</div>
							<h3 id="index_overflow" title="<?php echo ($streetHistory_row['title']); ?>">
								<a class="hover-effect" href="<?php echo U('StreetHistory/detail',array('id'=>$streetHistory_row['id']));?>"><?php echo ($streetHistory_row['title']); ?></a>
							</h3>

							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="swiper-button-prev">&lt;</div>
			<div class="swiper-button-next">&gt;</div>
		</div>
	</div>
	<!--/thumbnails-->
	<!-- //End Recent Works -->
	<div class="index-activity ">
		<!-- Recent Works -->
		<div class="headline">
			<h3><a href="<?php echo U('Posts/index');?>">特色景點</a></h3>
		</div>
		<div class="swiper-container swiper-con-activity">
			<ul class="thumbnails swiper-wrapper ulc">
				<?php if(is_array($post)): $i = 0; $__LIST__ = $post;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p_row): $mod = ($i % 2 );++$i;?><li class="swiper-slide" link="<?php echo U('Posts/detail',array('id'=>$p_row['id']));?>">
						<div class="thumbnail-style">
							<div class="thumbnail-img">
								<a href="<?php echo U('Posts/detail',array('id'=>$p_row['id']));?>">
									<em class="">
										<img style="width: 100%;" src="<?php echo ($p_row['cover']); ?>" alt="" />
									</em>
								</a>
							</div>

							<!-- <span>
								<strong id="index_overflow" title="<?php echo ($p_row['title']); ?>" ><?php echo ($p_row['title']); ?></strong>
							</span> -->
							<h3 id="index_overflow" title="<?php echo ($p_row['title']); ?>">
								<a class="hover-effect" href="<?php echo U('Posts/detail',array('id'=>$p_row['id']));?>"><?php echo ($p_row['title']); ?></a>
							</h3>
							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="swiper-button-prev">&lt;</div>
			<div class="swiper-button-next">&gt;</div>
		</div>
		<!--/row-->
		<!-- //End Recent Works -->
	</div>
	<div class="index-activity ">
		<!-- Recent Works -->
		<div class="headline">
			<h3><a href="<?php echo U('Shop/index');?>">特色店鋪</a></h3>
		</div>
		<div class=" swiper-container swiper-con-scenic">
			<ul class="thumbnails swiper-wrapper ulc">
				<?php if(is_array($shop)): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s_row): $mod = ($i % 2 );++$i;?><li class="swiper-slide" link="<?php echo U('Shop/detail',array('id'=>$s_row['id']));?>">
						<div class="thumbnail-style">
							<div class="thumbnail-img">
								<a href="<?php echo U('Shop/detail',array('id'=>$s_row['id']));?>">
									<em class="">
										<img style="width: 100%;" src="<?php echo ($s_row['cover']); ?>" alt="" />
									</em>
								</a>
							</div>
							<!-- <span>
								<strong id="index_overflow" title="<?php echo ($s_row['title']); ?>" ><?php echo ($s_row['title']); ?></strong>
							</span> -->
							<h3 id="index_overflow" title="<?php echo ($s_row['title']); ?>">
								<a class="hover-effect" href="<?php echo U('Shop/detail',array('id'=>$s_row['id']));?>"><?php echo ($s_row['title']); ?></a>
							</h3>
							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="swiper-button-prev">&lt;</div>
			<div class="swiper-button-next">&gt;</div>
		</div>
		<!--/row-->
		<!-- //End Recent Works -->
	</div>
</div>



<!--/container-->

<!-- Information Blokcs -->
<!-- 	<div class="container">
		<div class="headline">
			<h3>地圖</h3>
		</div>

		<div id="map"></div>
	</div> -->
<!--/container-->
<!-- End Content Part -->


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