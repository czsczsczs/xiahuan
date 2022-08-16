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
<script src="/xiahuan/2020/Public/Static/Admin/ueditor/ueditor.config.js"></script>
<script src="/xiahuan/2020/Public/Static/Admin/ueditor/ueditor.all.js"></script>
<style>
  #start_tip{
    display: none;
  }
  #end_tip{
    display: none;
  }
  </style>
            <div id="page-wrapper">
                <div class="graphs">
                    <div class="xs">
                        <h3>
                            新增活動
                        </h3>
                        <div class="tab-content">
                            <div class="tab-pane active" id="horizontal-form">
                                <form class="form-horizontal" action="<?php echo U('Active/create');?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">標題*</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="title" name="title" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">
                                               
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">簡介</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="description" name="description" type="text">
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group" id="editor">
                                        <label class="col-sm-2 control-label" for="focusedinput">內容</label>
                                        <div class="col-sm-8">
                                             <script type="text/javascript">
                                                var ue = UE.getEditor('content',{
                                                    initialFrameHeight: 500,//设置编辑器高度
                                                    scaleEnabled: true//设置不自动调整高度
                                                });
                                               
                                            </script>

                                            <!-- 编辑器容器 -->
                                            <script id="content" name="content" type="text/plain" style="height: 500px"></script>   
                                        </div>
                                        <!-- 实例化编辑器 -->
                                        
                                    </div>
                                    <div class="form-group filled">
                                        <label class="col-sm-2 control-label" for="focusedinput">活動時間</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" name="time" type="text">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group filled">
                                        <label class="col-sm-2 control-label" for="focusedinput">地址</label>
                                        <div class="col-sm-8">
                                                <input class="form-control1" id="address" name="address" type="text">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">latitude(緯度)</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="latitude" name="latitude" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">
                                               
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">longitude(經度)</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="longitude" name="longitude" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">
                                               
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group filled">
                                        <label class="col-sm-2 control-label" for="focusedinput">其他信息</label>
                                        <div class="col-sm-8">
                                                <input class="form-control1" id="other" name="other" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            封面圖
                                        </label>
                                        <div class="col-md-2">
                                            <div class="cover-box">
                                                <div class="c-box"></div>
                                            </div>
                                            <input type="hidden" name="cover" id="cover" value="">
                                            <button type="button" class="btn btn-box btn-success btn-flat" data-toggle="modal" data-target="#upload-modal"><i class="fa fa-upload"></i>上傳</button>
                                            <button type="button" id="btn-clear-file" class="btn btn-box btn-danger btn-flat">
                                            <i class="fa fa-reply"></i>
                                            清空
                                            </button>
                                        </div>
                                        
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            其他圖片
                                        </label>
                                        <div class="col-md-6">
                                            <div class="row" id="imagesPanel">
                                            </div>
                                            <div class="dropzone" id="dropzoneImg" style="border: 2px dashed #d2d6de;">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">
                                               選擇多個圖像文件（JPEG，PNG等）。
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">狀態</label>
                                        <div class="col-sm-8">
                                            發佈&nbsp;&nbsp;<input name="status" type="radio" checked="checked" value="published">&nbsp;&nbsp;&nbsp;&nbsp;草稿&nbsp;&nbsp;<input name="status" type="radio" value="draft">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">是否推薦</label>
                                        <div class="col-sm-8">
                                            是&nbsp;&nbsp;<input name="recommend" type="radio" value="1">&nbsp;&nbsp;&nbsp;&nbsp;否&nbsp;&nbsp;<input name="recommend" type="radio" checked="checked" value="0">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group filled">
                                        <label class="col-sm-2 control-label" for="focusedinput">優先級</label>
                                        <div class="col-sm-8">
                                                <input class="form-control1" id="grade" name="grade" type="text">
                                        </div>
                                        
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <button class="btn btn-info">
                                                  提交
                                              </button>
                                              <button type="button" class="btn btn-warning warning_22" onclick="javascript:history.back(-1);">返回列表</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
 <div class="modal" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">上傳文件</h4>
            </div>
            <div class="modal-body">
                <form class="dropzone" id="dropzone" style="border: 2px dashed #d2d6de;">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal" id="upload-finished">確定</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        $('#start_time').daterangepicker({
            autoUpdateInput: false,
            timePicker: true,
            timePicker24Hour: true,
            locale: {
              format: 'YYYY-MM-DD',
              cancelLabel: 'Clear', 
            },
            "singleDatePicker": true,
            

        });
        var daysOfWeek = new Array('日', '一', '二', '三', '四', '五', '六');
        $('#start_time').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD'));
           
        });

        $('#start_time').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            $('#start_tip').css('display','block').html('');
        });

        $('#end_time').daterangepicker({
            autoUpdateInput: false,
            timePicker: true,
            timePicker24Hour: true,
            locale: {
              format: 'YYYY-MM-DD',
              cancelLabel: 'Clear',
            },
            "singleDatePicker": true,
            function(chosen_date) {
              $('#end_time').val(chosen_date.format('YYYY-MM-DD'));
            }
        });
        $('#end_time').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.endDate.format('YYYY-MM-DD'));
            
        });

        $('#end_time').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            $('#end_tip').css('display','block').html('');

        });
        
</script>
<script type="text/javascript" src="/xiahuan/2020/Public/Static/Admin/js/dropzone.min.js"></script>
<script type="text/javascript">
    file_input = 'cover';
    $('#upload-finished').click(function () {
        // window.location.reload();
    });

    if(typeof(file_success_object) == 'undefined'){
        file_success_object = '.cover-box .c-box';
    }

    $("#btn-clear-file").click(function(event) {
        $("#"+file_input).val('');
        $(file_success_object).html('');
    });


    Dropzone.options.dropzone = {

        url: "<?php echo U('Upload/upload');?>",
        method: "post",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        },
        maxFiles: 1,
        paramName: "file",
        maxFilesize: 10,
        addRemoveLinks:true,
        dictFileTooBig: "上傳文件太大，無法上傳！",
        dictResponseError: "上傳文件出錯，請聯繫管理員！",
        dictDefaultMessage: "拖動文件到此或點擊上傳",
        dictRemoveFile:"刪除",
        accept: function (file, done) {
            done();
        },
        success: function (file, done) {
            // alert(done);
            // console.dir(done);
            if(done.code == 1){
                if(file_input){
                    $("#"+file_input).val(done.savepath);
                }
                
                $(file_success_object).html('<img src="'+done.photo+'">');
            }else{
                console.dir(done);
                // alert(done.message);
            }
            
        }
    };
</script>
    <script type="text/javascript">
        Dropzone.options.dropzoneImg = {
            url: "<?php echo U('Upload/upload');?>",
            method: "post",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            paramName: "file",
            maxFilesize: 10,
            
            addRemoveLinks:true,
            dictFileTooBig: "上傳文件太大，無法上傳！",
            dictResponseError: "上傳文件出錯，請聯繫管理員！",
            dictDefaultMessage: "拖動文件到此或點擊上傳",
            dictRemoveFile:"刪除",
            accept: function (file, done) {
                done();
            },
            success: function (file, done) {
                 console.dir(done);
                if(done.code == 1){
                    var imageTxt = "<div class='col-xs-3 col-md-4'>";
                    imageTxt += "<span class='deletePanel'><i class='fa fa-lg fa-trash'></i></span>";
                    imageTxt += "<div class='item'>";
                    imageTxt += "<div class='i-box'><img src='"+ done.photo +"'></div>";
                    imageTxt += "</div>";
                  
                    // /* 圖片id */
                    imageTxt += '<input type="hidden" name="files[file_id][]" value="'+ done.file_id +'">';
                    // /* 圖片地址 */
                    imageTxt += '<input type="hidden" name="files[file_url][]" value="'+ done.savepath +'">';
                    imageTxt += '<input type="hidden" name="files[post_to_image_id][]" value="0">';
                    imageTxt += "</div>";
                    $("#imagesPanel").append(imageTxt);
                    load_act();
                    resize_box();
                }else{
                    // alert(done.message);
                } 
            }
        };

        
        /* 刪除 */
        load_act();
        function load_act(){
            $("#imagesPanel>div").hover(function() {
                $(this).find('.deletePanel').fadeIn();
            }, function() {
                $(this).find('.deletePanel').fadeOut();
            });

            $(".deletePanel").each(function(index, el) {
                $(this).click(function(event) {
                    $(this).parent().fadeOut(1000, function() {
                        $(this).remove();     
                    });
                });
            }); 
        }

        resize_box();
        /* 動態改變大小 */
        function resize_box(){
            var css_w = $("#imagesPanel>div").css('width');
            if(css_w){
                if(css_w.indexOf('px') > -1){
                var w = $("#imagesPanel>div").width() - 5;
                }else{
                    var w = $("#imagesPanel>div").width() / 100 * $(".box-body").width() - 30;
                }
                
                console.log($("#imagesPanel>div").css('width') + "===" + w + "====" +$(".box-body").width() );
                $(".col-xs-3.col-md-2 .item,.col-xs-3.col-md-2 .i-box").width(w);
                $(".col-xs-3.col-md-2 .item,.col-xs-3.col-md-2 .i-box").height(w);
            }
            
        }

        $(function() {
            $(window).resize(function(){
                resize_box();
            })
        });
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
    </body>
</html>