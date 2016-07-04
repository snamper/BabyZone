<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--引入js css 文件-->
    <?php if(IS_AJAX == false): ?><link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/Public/css/main.css">
    <script src="/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="/Public/js/jquery-ui.min.js"></script><?php endif; ?>
    <meta charset="UTF-8">
    <!--缩放-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
</head>
<body>
<script type="text/javascript">
  var gurl=  "<?php echo U('index/index');?>";
</script>
<!--引入也页头-->
<header>
    <!--登陆按钮-->
    <button type="button" class="btn btn-default btn-1g" id="login_btn" >
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>登陆
    </button>
</header>
<div id="main_body" class="container-fluid">
    
<div class="row" id="sortable">
    <div class="col-xs-4 col-sm-5 col-md-3 col-lg-2 mainIco" windowsName="photo" >
        <div class="mainIco_wrap">
        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
        </div>
        <span>相册</span>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2  mainIco" windowsName="file" style="background-color: rgb(178,26,65)">
            <div class="mainIco_wrap">
                <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
            </div>
            <span>文件夹</span>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 mainIco" windowsName="music" style="background-color: rgb(210,71,38)">
        <div class="mainIco_wrap">
            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
        </div>
        <span>音乐</span>
    </div>

    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 mainIco" windowsName="ridio" style="background-color: rgb(255,190,0)">
        <div class="mainIco_wrap">
            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
        </div>
        <span>视频</span>
    </div>

    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 mainIco" windowsName="config" style="background-color: rgb(81,51,171)">
        <div class="mainIco_wrap">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </div>
        <span>设置</span>
    </div>

    <div class="col-xs-2 col-sm-4 col-md-3 col-lg-2 mainIco" windowsName="upload" style="background-color: rgb(0,138,0)">
        <div class="mainIco_wrap">
            <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
        </div>
        <span>上传</span>
    </div>

    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 mainIco" windowsName="login" style="background-color: rgb(159,0,166)">
        <div class="mainIco_wrap">
            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
        </div>
        <span>注册</span>
    </div>
</div>





    <!--相册弹出窗口-->
<div class="panel panel-default  windows_wrap" windowsName="photo">
    <div class="panel-heading  windows_ico">
        相册
        <span class="glyphicon glyphicon-remove close_window " aria-hidden="true"></span>
        <span class="glyphicon glyphicon-modal-window mid_window" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-minus small_window" aria-hidden="true"></span>
    </div>
    <div class="panel-body">
    </div>
</div>


<div class="panel panel-default  windows_wrap" windowsName="file">
    <div class="panel-heading  windows_ico">
        文件
        <ol class="breadcrumb crumb ">
            <li><a href="javascript:location.reload();">Home</a></li>
            <li>文件</li>
        </ol>
        <span class="glyphicon glyphicon-remove close_window " aria-hidden="true"></span>
        <span class="glyphicon glyphicon-modal-window mid_window" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-minus small_window" aria-hidden="true"></span>
    </div>
    <div class="panel-body">
        <table class="table ">
    <tr class="tableHead">
        <th>名称<span class="glyphicon glyphicon-plus add_file"></span></th>
        <th>修改时间</th>
        <th>大小</th>
        <th>类型</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($dirTable)): foreach($dirTable as $key=>$item): ?><tr>
            <td class="dir_name_wrap"> <span class="glyphicon glyphicon-folder-open" aria-hidden="true" style="color: rgb(255,255,200)">
            </span>&nbsp&nbsp&nbsp<span class="dir_name"><?php echo ($item["name"]); ?></span>
            </td>
            <td><?php echo ($item["attr"]["mtime"]); ?></td>
            <td><?php echo ($item["attr"]["size"]); ?></td>
            <td>文件夹</td>
            <td>11111</td>
        </tr><?php endforeach; endif; ?>
    <?php if(is_array($fileTable)): foreach($fileTable as $key=>$vo): ?><tr>
            <td><span class="glyphicon glyphicon-file" aria-hidden="true" style="color: rgb(255,255,200)"></span>&nbsp&nbsp&nbsp<?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["attr"]["mtime"]); ?></td>
            <td><?php echo ($vo["attr"]["size"]); ?></td>
            <td>文件</td>
            <td>11111</td>
        </tr><?php endforeach; endif; ?>

</table>
    </div>
</div>


<div class="panel panel-default  windows_wrap" windowsName="ridio">
    <div class="panel-heading  windows_ico">
        视频
        <span class="glyphicon glyphicon-remove close_window " aria-hidden="true"></span>
        <span class="glyphicon glyphicon-modal-window mid_window" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-minus small_window" aria-hidden="true"></span>
    </div>
    <div class="panel-body">
    </div>
</div>


<div class="panel panel-default  windows_wrap" windowsName="music">
    <div class="panel-heading  windows_ico">
        音乐
        <span class="glyphicon glyphicon-remove close_window " aria-hidden="true"></span>
        <span class="glyphicon glyphicon-modal-window mid_window" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-minus small_window" aria-hidden="true"></span>
    </div>
    <div class="panel-body">
    </div>
</div>


<div class="panel panel-default  windows_wrap" windowsName="config">
    <div class="panel-heading  windows_ico">
        设置
        <span class="glyphicon glyphicon-remove close_window " aria-hidden="true"></span>
        <span class="glyphicon glyphicon-modal-window mid_window" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-minus small_window" aria-hidden="true"></span>
    </div>
    <div class="panel-body">
    </div>
</div>


<div class="panel panel-default  windows_wrap" windowsName="upload">
    <div class="panel-heading  windows_ico">
        上传
        <span class="glyphicon glyphicon-remove close_window " aria-hidden="true"></span>
        <span class="glyphicon glyphicon-modal-window mid_window" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-minus small_window" aria-hidden="true"></span>
    </div>
    <div class="panel-body">
    </div>
</div>


<div class="panel panel-default  windows_wrap" windowsName="login">
    <div class="panel-heading  windows_ico">
        注册
        <span class="glyphicon glyphicon-remove close_window " aria-hidden="true"></span>
        <span class="glyphicon glyphicon-modal-window mid_window" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-minus small_window" aria-hidden="true"></span>
    </div>
    <div class="panel-body">
    </div>
</div>
</div>
<!--引入页脚-->
<footer>
    <div class="row">
        <!--开始按钮-->
        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 ">
            <button type="button" id="start_btn" class="btn btn-default btn-1g">
                <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>开始
            </button>
        </div>
        <!--任务栏窗口-->
        <div   class="col-xs-7 col-sm-8 col-md-9 col-lg-9 ">
            <div id="windows_btn_wrap">
                <button type="button"  class="btn btn-primary btn-1g windows_btn" windowsName="photo" >
                    <span class="glyphicon glyphicon-picture " aria-hidden="true" ></span>相册
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn"windowsName="file">
                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>文件夹
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn" windowsName="music">
                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>音乐
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn" windowsName="ridio">
                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>视频
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn" windowsName="config">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>设置
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn"windowsName="upload">
                    <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>上传
                </button>
                <button type="button"  class="btn btn-primary btn-1g windows_btn" windowsName="login">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>注册
                </button>
             </div>
            </div>
        <!--通知栏-->
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2" id="windows_inform">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span><!--刷新-->
            <span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span><!--音量-->
            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span><!--消息-->
            <div id="windows_time"><!--通知栏时间日期-->
                <p id="time_h_m">10:10</p>
                   <p id="time_y_m_d">2016/1/11</p>
            </div>
        </div>

</div>

</footer>
<?php if(IS_AJAX == false): ?><script src="/Public/js/main.js"></script><?php endif; ?>
<!--引入窗口弹框-->
</body>
</html>