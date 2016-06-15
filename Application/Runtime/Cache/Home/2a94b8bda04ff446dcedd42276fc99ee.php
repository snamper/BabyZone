<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/Public/css/main.css">
    <script src="/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
</head>
<body>
<header>
    <button type="button" class="btn btn-default btn-1g" id="login_btn" >
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>登陆
    </button>
</header>
<div id="main_body" class="container-fluid">
    
<div class="row">
    <div class="col-xs-4 col-sm-5 col-md-3 col-lg-2 myphoto">
        <div class="myphoto_wrap">
        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
        </div>
        <span>相册</span>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2  myphoto" style="background-color: rgb(178,26,65)">
            <div class="myphoto_wrap">
                <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
            </div>
            <span>文件夹</span>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 myphoto" style="background-color: rgb(210,71,38)">
        <div class="myphoto_wrap">
            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
        </div>
        <span>音乐</span>
    </div>

    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 myphoto" style="background-color: rgb(255,190,0)">
        <div class="myphoto_wrap">
            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
        </div>
        <span>视频</span>
    </div>

    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 myphoto" style="background-color: rgb(81,51,171)">
        <div class="myphoto_wrap">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </div>
        <span>设置</span>
    </div>

    <div class="col-xs-2 col-sm-4 col-md-3 col-lg-2 myphoto" style="background-color: rgb(0,138,0)">
        <div class="myphoto_wrap">
            <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
        </div>
        <span>上传</span>
    </div>

    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 myphoto" style="background-color: rgb(159,0,166)">
        <div class="myphoto_wrap">
            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
        </div>
        <span>注册</span>
    </div>
</div>





</div>
<footer>
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 ">
            <button type="button" id="start_btn" class="btn btn-default btn-1g">
                <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>开始
            </button>
        </div>
        <div   class="col-xs-7 col-sm-8 col-md-9 col-lg-9 ">
            <div id="windows_btn_wrap">
                <button type="button"  class="btn btn-primary btn-1g windows_btn"  >
                    <span class="glyphicon glyphicon-picture " aria-hidden="true" ></span>相册
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn">
                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>文件夹
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn">
                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>音乐
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn">
                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>视频
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>设置
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn">
                    <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>上传
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>注册
                </button>
             </div>
            </div>
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2" id="windows_inform">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
            <div id="windows_time">
                <p>10:10</p>
                   <p>2016/1/11</p>
            </div>


        </div>
</div>

</footer>
</body>
</html>