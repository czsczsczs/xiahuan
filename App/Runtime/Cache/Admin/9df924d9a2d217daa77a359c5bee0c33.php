<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($title); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->

<link rel="stylesheet" type="text/css" href="/xiahuan/Public/Static/Admin/css/dropzone.min.css"/>
<link href="/xiahuan/Public/Static/Admin/css/app.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="/xiahuan/Public/Static/Admin/css/imageHotAreaStyle.css">
<!-- Custom CSS -->
<link href="/xiahuan/Public/Static/Admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/xiahuan/Public/Static/Admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/xiahuan/Public/Static/Admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/xiahuan/Public/Static/Admin/js/jquery.min.js"></script>

<script src="/xiahuan/Public/Static/Admin/js/app.min.js"></script>
<!-- Nav CSS -->
<link href="/xiahuan/Public/Static/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/xiahuan/Public/Static/Admin/js/metisMenu.min.js"></script>
<script src="/xiahuan/Public/Static/Admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/xiahuan/Public/Static/Admin/js/d3.v3.js"></script>
<script src="/xiahuan/Public/Static/Admin/js/rickshaw.js"></script>
<script type="text/javascript" language="javascript" src="/xiahuan/Public/Static/Admin/js/jquery.image-maps5.0.js"></script>
<!-- <script src="/xiahuan/Public/Static/Admin/js/bootstrap.min.js"></script> -->
</head>
<script type="text/javascript">
    $(document).ready(function(e) {
        var title = $('.navbar-brand').html();

        var title_ = $('title').html();
        if(title_ == ''){
            $('title').html(title);
        }
    });
</script>
<style>
    .pager span {
        background: #00c0ef;
        color: #fff;
        border: 1px solid #00c0ef;
        margin-left: 8px;
        display: inline-block;
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .pager a {
        border: 1px solid #666666;
        padding: 6px 12px;
        margin-left: 8px;
        text-decoration: none;
        color: #333;
        outline: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
    }
</style>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="<?php echo U('Index/index',array('token'=>$token));?>">後台管理系統</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" aria-expanded="false"><button class="btn btn-info"><?php echo ($community_user['username']); ?></button></a>
                    <ul class="dropdown-menu">
                        <li class="m_2"><a href="<?php echo U('Login/edit');?>"><i class="fa fa-wrench"></i> 修改信息</a></li> 
                        <li class="m_2"><a href="<?php echo U('Login/reset_password');?>"><i class="fa fa-user"></i> 修改密碼</a></li> 
                        <li class="m_2"><a href="<?php echo U('Login/loginOut');?>"><i class="fa fa-lock"></i> 退出登錄</a></li>
                    </ul>
                </li>
            </ul>
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?php echo U('Active/index');?>"></i>活動管理<span class="fa arrow"></span></a>
                            
                        </li>
                        <li>
                            <a href="#"></i>街道管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Street/index');?>">街道列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('StreetHistory/index');?>">街道故事</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo U('News/index');?>"></i>資訊管理<span class="fa arrow"></span></a>
                            
                        </li>
                        <li>
                            <a href="<?php echo U('PCbanner/index');?>"></i>PC端圖片管理<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="<?php echo U('Slide/index');?>"></i>小程序圖片管理<span class="fa arrow"></span></a>
                            
                        </li>
                        <li>
                            <a href="<?php echo U('Shop/index',array('type'=>'cate'));?>"></i>店鋪管理<span class="fa arrow"></span></a>
                            
                        </li>
                        <li>
                            <a href="<?php echo U('Posts/index');?>"></i>景點管理<span class="fa arrow"></span></a>
                           
                        </li>
                        <li>
                            <a href="#"></i>精彩瞬間管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Media/index');?>">圖片管理</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Media2/index');?>">視頻管理</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo U('CultureHeritage/index');?>"></i>文化遺產<span class="fa arrow"></span></a>
                           
                        </li>
                        <li>
                            <a href="<?php echo U('Category/index');?>"></i>系統管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/index');?>">管理员管理</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo U('Links/index');?>"></i>友情鏈接管理<span class="fa arrow"></span></a>

                        </li>

                        

                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
        <div class="graphs">
        
      <div class="col_1">
        <div class="col-md-4 span_7">   
            <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
           </div>
<!--             <div class="col-md-4 span_8">
               <div class="activity_box">
                <div class="scrollbar" id="style-2">
                    <div class="activity-row">
                     <div class="col-xs-1"><i class="fa fa-comment text-info"></i> </div>
                     <div class="col-xs-3 activity-img"><img src='/xiahuan/Public/Static/Admin/images/3.png' class="img-responsive" alt=""/></div>
                     <div class="col-xs-8 activity-desc">
                        <h5><a href="#">simply random</a> liked <a href="#">passages</a></h5>
                        <p>Lorem Ipsum is simply dummy</p>
                        <h6>8:03</h6>
                     </div>
                     <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row">
                     <div class="col-xs-1"><i class="fa fa-check text-info icon_11"></i></div>
                     <div class="col-xs-3 activity-img"><img src='/xiahuan/Public/Static/Admin/images/1.png' class="img-responsive" alt=""/></div>
                     <div class="col-xs-8 activity-desc">
                        <h5><a href="#">standard chunk</a> liked <a href="#">model</a></h5>
                        <p>Lorem Ipsum is simply dummy</p>
                        <h6>8:03</h6>
                     </div>
                     <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row1">
                     <div class="col-xs-1"><i class="fa fa-user text-info icon_12"></i></div>
                     <div class="col-xs-3 activity-img"><img src='/xiahuan/Public/Static/Admin/images/4.png' class="img-responsive" alt=""/></div>
                     <div class="col-xs-8 activity-desc">
                        <h5><a href="#">perspiciatis</a> liked <a href="#">donating</a></h5>
                        <p>Lorem Ipsum is simply dummy</p>
                        <h6>8:03</h6>
                     </div>
                     <div class="clearfix"> </div>
                     </div>
                    </div>
                  </div>
            </div> -->
            <!-- <div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">統計</h4>
                </div> -->
                <!-- <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>參展商<div class="text-success pull-right"><?php echo ($exhibitor_count); ?></div></li>
                        <li>演講嘉賓<div class="text-success pull-right"><?php echo ($speakers_count); ?></div></li>
                        <li>會議<div class="text-success pull-right"><?php echo ($session_count); ?></div></li>
                        <li>頁面<div class="text-success pull-right"><?php echo ($page_count); ?></div></li>
                        <li>參與者<div class="text-success pull-right"><?php echo ($user_count); ?></div></li>
                        <li>動態<div class="text-success pull-right"><?php echo ($dynamic_count); ?></div></li>
                    </ul>
                </div> -->
            <!-- </div> -->
            <div class="clearfix"> </div>
      </div>
      <div class="span_11">
        <div class="col-md-6 col_4">
          <!----Calender -------->
            <link rel="stylesheet" href="/xiahuan/Public/Static/Admin/css/clndr.css" type="text/css" />
            <script src="/xiahuan/Public/Static/Admin/js/underscore-min.js" type="text/javascript"></script>
            <script src="/xiahuan/Public/Static/Admin/js/moment-2.2.1.js" type="text/javascript"></script>
            <script src="/xiahuan/Public/Static/Admin/js/clndr.js" type="text/javascript"></script>
            <script src="/xiahuan/Public/Static/Admin/js/site.js" type="text/javascript"></script>
            <!----End Calender -------->
        </div>
        <div class="col-md-6 col_5">
       </div>
       <div class="clearfix"> </div>
    </div>
        <div class="copy_layout">
<p>
    Copyright © 2018 All rights reserved 
    <a href="//www.macautech.net" target="_blank" title="普及科技">
        普及科技
    </a>
    
</p>
</div>
<script type="text/javascript">
	if($('.select2').length > 0) {
        $('.select2').select2();
    }
</script>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="/xiahuan/Public/Static/Admin/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/xiahuan/Public/Static/Admin/js/metisMenu.min.js">
    </script>
    <script src="/xiahuan/Public/Static/Admin/js/custom.js">
    </script>
</link>
        </div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->

    <script type="text/javascript">

    </script>  
</body>
</html>