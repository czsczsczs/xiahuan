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

<link rel="stylesheet" type="text/css" href="/xiahuan/2020/Public/Static/Admin/css/dropzone.min.css"/>
<link href="/xiahuan/2020/Public/Static/Admin/css/app.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="/xiahuan/2020/Public/Static/Admin/css/imageHotAreaStyle.css">
<!-- Custom CSS -->
<link href="/xiahuan/2020/Public/Static/Admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/xiahuan/2020/Public/Static/Admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/xiahuan/2020/Public/Static/Admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/xiahuan/2020/Public/Static/Admin/js/jquery.min.js"></script>

<script src="/xiahuan/2020/Public/Static/Admin/js/app.min.js"></script>
<!-- Nav CSS -->
<link href="/xiahuan/2020/Public/Static/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/xiahuan/2020/Public/Static/Admin/js/metisMenu.min.js"></script>
<script src="/xiahuan/2020/Public/Static/Admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/xiahuan/2020/Public/Static/Admin/js/d3.v3.js"></script>
<script src="/xiahuan/2020/Public/Static/Admin/js/rickshaw.js"></script>
<script type="text/javascript" language="javascript" src="/xiahuan/2020/Public/Static/Admin/js/jquery.image-maps5.0.js"></script>
<!-- <script src="/xiahuan/2020/Public/Static/Admin/js/bootstrap.min.js"></script> -->
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
               
                <a class="navbar-brand" href="<?php echo U('Index/index',array('token'=>$token));?>">後台管理系統2020</a>
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
                            <a href="<?php echo U('Slide/index');?>"></i>圖片管理<span class="fa arrow"></span></a>
                            
                        </li>
                        <li>
                            <a href="<?php echo U('Shop/index',array('type'=>'cate'));?>"></i>店鋪管理<span class="fa arrow"></span></a>
                            
                        </li>
                        <li>
                            <a href="<?php echo U('Posts/index');?>"></i>景點管理<span class="fa arrow"></span></a>
                           
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
                        

                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
            <div id="page-wrapper">
            <div class="graphs">
            <div class="xs">
             <h3 id="title">巡禮活動</h3>
            </div>
            <div class="col-md-12">
                <div class="mailbox-content">

                   <div class="mail-toolbar clearfix">
                        
                        <div class="dropdown" style="padding-left:20px; ">
                          <a href="<?php echo U('Active/add');?>"><button type="button" class="btn btn-info">新增</button></a>
                          <a href="<?php echo U('Active/index');?>"><button type="button" class="btn btn-info">列表</button></a>
                        </div>
                        <div class="clearfix"> </div>
                        <br/>
                        <form class="bs-docs-example" novalidate="novalidate" ng-submit="submit()" action="<?php echo U('Active/index');?>" method="get">
                        <div class="col-md-2">
                          
                          <select name="status" class="form-control select2">
                            <option selected="selected" value="">狀態</option>
                            <option <?php if($status == 'published'): ?>selected="selected"<?php endif; ?> value="published">發佈</option>
                            <option <?php if($status == 'draft'): ?>selected="selected"<?php endif; ?> value="draft">草稿</option>
                            <option <?php if($status == 'recommend'): ?>selected="selected"<?php endif; ?> value="recommend">推薦</option>
                          </select>
                          
                        </div>
                        
                        <div class="col-md-4"><input type="text" class="form-control1" name="keyword" value="<?php echo ($keyword); ?>" placeholder="請輸入關鍵字進行搜索"></div>
                        <div class="col-md-3"><button type="submit" class="btn btn-info">篩選</button>&nbsp;&nbsp;<a class="btn btn-info" href="<?php echo U('Active/index');?>">撤銷</a></div>
                        <div class="col-md-3">共 <span style="color: blue;"><?php echo ($count); ?> </span>條記錄</div>

                      
                    </form>
                    

                    
                   </div>
                   

                    <table class="table">
                        <thead>
                            <tr class="unread checked">
                                <td id="thead_td">編號</td>
                                <td id="thead_td">封面圖</td>
                                <td id="thead_td">標題</td>
                                <td id="thead_td">狀態</td>
                                <td id="thead_td">是否推薦</td>
                                <td id="thead_td">活動時間</td>
                                <td id="thead_td">創建時間</td>
                                <td id="thead_td">操作</td>
                            </tr>
                        </thead>
                        <tbody>
                          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr class="unread checked">
                                <td class="hidden-xs"><?php echo ($row['id']); ?></td>
                                <td class="hidden-xs">
                                  <?php if($row['cover']): ?><img width="150" src="<?php echo ($row['cover']); ?>">
                                  <?php else: endif; ?>
                                </td>
                                <td class="hidden-xs"><?php echo ($row['title']); ?></td>
                                
                                <td class="hidden-xs"><?php echo ($row['status'] == 'published' ? '發佈':'草稿'); ?></td>
                                <td class="hidden-xs" id="recommend_<?php echo ($row['id']); ?>">
                                  <?php if($row['recommend']): ?><i onclick="recommend(<?php echo ($row['id']); ?>)" class="fa fa-check text-red" title="推薦"></i>
                                    <?php else: ?>
                                    <i onclick="recommend(<?php echo ($row['id']); ?>)" class="fa fa-close text-muted" title="未推薦"></i><?php endif; ?>
                                </td>
                                <td><?php echo ($row['time']); ?></td>
                                <td><?php echo (date("Y-m-d H:i:s",$row['created'])); ?></td>
                                <td>
                                <div class="dropdown">
                                 
                                  <a href="<?php echo U('Active/edit',array('id'=>$row['id']));?>"><button type="button" class="btn btn-warning warning_22">修改</button></a>
                                  <a onclick="deleted(<?php echo ($row['id']); ?>)"><button type="button" class="btn btn-danger">刪除</button></a>
                                  <!-- <a href="<?php echo U('Active/add_en',array('id'=>$row['id']));?>" title="編輯英文信息"><button type="button" class="btn btn-info">編輯英文信息</button></a> -->
                                </div>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                   </div>
                  <ul class="paginList pager"><?php echo ($page); ?></ul>
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
<link href="/xiahuan/2020/Public/Static/Admin/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/xiahuan/2020/Public/Static/Admin/js/metisMenu.min.js">
    </script>
    <script src="/xiahuan/2020/Public/Static/Admin/js/custom.js">
    </script>
</link>
        </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<!-- Metis Menu Plugin JavaScript -->
<script>

    function deleted(id) {
        //弹出提示，是否确定删除
        if (confirm("确定要删除吗？")) {
            $.ajax({
                url: "<?php echo U('Active/destroy');?>",
                type: "post",
                dataType: "json",
                data: {id: id},
                success: function (msg) {
                    //ajax成功返回数据要执行的代码
                    if(msg.status == 403){
                      alert('删除失败');
                      return false
                    }else{
                      location.reload(true);
                    }
                    
                }
            });
        }
    }
    //推薦/取消推薦
    function recommend(id) {

            $.ajax({
                url: "<?php echo U('Active/recommend');?>",
                type: "post",
                dataType: "json",
                data: {id: id},
                success: function (msg) {
                    //ajax成功返回数据要执行的代码
                    console.dir(msg);
                    if(msg.status == 'recommend'){
                      $('#recommend_'+id).html('<i onclick="recommend('+id+')" class="fa fa-check text-red" title="推薦"></i>');
                    }
                    if(msg.status == 'cancel'){
                      $('#recommend_'+id).html('<i onclick="recommend('+id+')" class="fa fa-close text-muted" title="未推薦"></i>');
                    }
                    
                }
            });
        
    }
</script>
</body>
</html>