<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--引入js css 文件-->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/Public/css/main.css">
    <script src="/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <!--缩放-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
</head>
<body>
<!--引入也页头-->
<header>
    <!--登陆按钮-->
    <button type="button" class="btn btn-default btn-1g" id="login_btn" >
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>登陆
    </button>
</header>
<div id="main_body" class="container-fluid">
    
<div class="row">
    <div class="col-xs-4 col-sm-5 col-md-3 col-lg-2 myphoto" >
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





    <!--弹出窗口-->
<div class="panel panel-default" id="windows_wrap">
<div class="panel-heading" id="windows_ico">
    标题
    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>
    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
</div>
<div class="panel-body">
    人生的成败往往就在一念之差,失败者并不比成功者逊色,只是他们缺少了斗志.那叫做奋斗.
    　　上帝是公平的,他给予我们每个人奋斗,只是有些人没有彻悟,没有好好利用.奋斗也是一种生命物质,会随着经历挫折而越长越大,越动荡,越勇敢,奋斗在推动我们前进.俗话说,逆境出人才,逆境中奋斗才会爆发,才会不停地在逆境中寻找生的希望.黑暗的深渊中,奋斗是微光；干涸的土地中,奋斗是水滴；严寒的肃冬中,奋斗是热量.
    　　成功从来不是偶然,中国上下五千年没有一个伟人是巧合成功,他们有奋斗的证据,他们的成长足迹中有付出过心血,他们一路走过来的脚印中,没有完完整整的,有膝盖的磕印,有摔倒的血迹,有汗水浸湿的泥沙.他们从哪里摔倒就从哪里爬起来,生命的卑微因奋斗而变得精彩.奋斗会伴随着我们一生,但奋斗中的艰辛并不会持续着,历经艰辛,后面的路会渐渐平坦.
    　　我们奋斗的目标也许不一样,但动力源泉是一样的.有些人奋斗着为了考上好的学校；有些人奋斗着找到好的工作职位；有些人奋斗着为国家做出贡献······有些人一生在奋斗.奋斗,有辛酸的泪水,有误解,有难舍难分之处,但这一切,无法阻挠我们的前进.
    　　奋斗过,才会懂,会坚强,会前进.
    人生的成败往往就在一念之差,失败者并不比成功者逊色,只是他们缺少了斗志.那叫做奋斗.
    　　上帝是公平的,他给予我们每个人奋斗,只是有些人没有彻悟,没有好好利用.奋斗也是一种生命物质,会随着经历挫折而越长越大,越动荡,越勇敢,奋斗在推动我们前进.俗话说,逆境出人才,逆境中奋斗才会爆发,才会不停地在逆境中寻找生的希望.黑暗的深渊中,奋斗是微光；干涸的土地中,奋斗是水滴；严寒的肃冬中,奋斗是热量.
    　　成功从来不是偶然,中国上下五千年没有一个伟人是巧合成功,他们有奋斗的证据,他们的成长足迹中有付出过心血,他们一路走过来的脚印中,没有完完整整的,有膝盖的磕印,有摔倒的血迹,有汗水浸湿的泥沙.他们从哪里摔倒就从哪里爬起来,生命的卑微因奋斗而变得精彩.奋斗会伴随着我们一生,但奋斗中的艰辛并不会持续着,历经艰辛,后面的路会渐渐平坦.
    　　我们奋斗的目标也许不一样,但动力源泉是一样的.有些人奋斗着为了考上好的学校；有些人奋斗着找到好的工作职位；有些人奋斗着为国家做出贡献······有些人一生在奋斗.奋斗,有辛酸的泪水,有误解,有难舍难分之处,但这一切,无法阻挠我们的前进.
    　　奋斗过,才会懂,会坚强,会前进.
    人生的成败往往就在一念之差,失败者并不比成功者逊色,只是他们缺少了斗志.那叫做奋斗.
    　　上帝是公平的,他给予我们每个人奋斗,只是有些人没有彻悟,没有好好利用.奋斗也是一种生命物质,会随着经历挫折而越长越大,越动荡,越勇敢,奋斗在推动我们前进.俗话说,逆境出人才,逆境中奋斗才会爆发,才会不停地在逆境中寻找生的希望.黑暗的深渊中,奋斗是微光；干涸的土地中,奋斗是水滴；严寒的肃冬中,奋斗是热量.
    　　成功从来不是偶然,中国上下五千年没有一个伟人是巧合成功,他们有奋斗的证据,他们的成长足迹中有付出过心血,他们一路走过来的脚印中,没有完完整整的,有膝盖的磕印,有摔倒的血迹,有汗水浸湿的泥沙.他们从哪里摔倒就从哪里爬起来,生命的卑微因奋斗而变得精彩.奋斗会伴随着我们一生,但奋斗中的艰辛并不会持续着,历经艰辛,后面的路会渐渐平坦.
    　　我们奋斗的目标也许不一样,但动力源泉是一样的.有些人奋斗着为了考上好的学校；有些人奋斗着找到好的工作职位；有些人奋斗着为国家做出贡献······有些人一生在奋斗.奋斗,有辛酸的泪水,有误解,有难舍难分之处,但这一切,无法阻挠我们的前进.
    　　奋斗过,才会懂,会坚强,会前进.
    人生的成败往往就在一念之差,失败者并不比成功者逊色,只是他们缺少了斗志.那叫做奋斗.
    　　上帝是公平的,他给予我们每个人奋斗,只是有些人没有彻悟,没有好好利用.奋斗也是一种生命物质,会随着经历挫折而越长越大,越动荡,越勇敢,奋斗在推动我们前进.俗话说,逆境出人才,逆境中奋斗才会爆发,才会不停地在逆境中寻找生的希望.黑暗的深渊中,奋斗是微光；干涸的土地中,奋斗是水滴；严寒的肃冬中,奋斗是热量.
    　　成功从来不是偶然,中国上下五千年没有一个伟人是巧合成功,他们有奋斗的证据,他们的成长足迹中有付出过心血,他们一路走过来的脚印中,没有完完整整的,有膝盖的磕印,有摔倒的血迹,有汗水浸湿的泥沙.他们从哪里摔倒就从哪里爬起来,生命的卑微因奋斗而变得精彩.奋斗会伴随着我们一生,但奋斗中的艰辛并不会持续着,历经艰辛,后面的路会渐渐平坦.
    　　我们奋斗的目标也许不一样,但动力源泉是一样的.有些人奋斗着为了考上好的学校；有些人奋斗着找到好的工作职位；有些人奋斗着为国家做出贡献······有些人一生在奋斗.奋斗,有辛酸的泪水,有误解,有难舍难分之处,但这一切,无法阻挠我们的前进.
    　　奋斗过,才会懂,会坚强,会前进.
    人生的成败往往就在一念之差,失败者并不比成功者逊色,只是他们缺少了斗志.那叫做奋斗.
    　　上帝是公平的,他给予我们每个人奋斗,只是有些人没有彻悟,没有好好利用.奋斗也是一种生命物质,会随着经历挫折而越长越大,越动荡,越勇敢,奋斗在推动我们前进.俗话说,逆境出人才,逆境中奋斗才会爆发,才会不停地在逆境中寻找生的希望.黑暗的深渊中,奋斗是微光；干涸的土地中,奋斗是水滴；严寒的肃冬中,奋斗是热量.
    　　成功从来不是偶然,中国上下五千年没有一个伟人是巧合成功,他们有奋斗的证据,他们的成长足迹中有付出过心血,他们一路走过来的脚印中,没有完完整整的,有膝盖的磕印,有摔倒的血迹,有汗水浸湿的泥沙.他们从哪里摔倒就从哪里爬起来,生命的卑微因奋斗而变得精彩.奋斗会伴随着我们一生,但奋斗中的艰辛并不会持续着,历经艰辛,后面的路会渐渐平坦.
    　　我们奋斗的目标也许不一样,但动力源泉是一样的.有些人奋斗着为了考上好的学校；有些人奋斗着找到好的工作职位；有些人奋斗着为国家做出贡献······有些人一生在奋斗.奋斗,有辛酸的泪水,有误解,有难舍难分之处,但这一切,无法阻挠我们的前进.
    　　奋斗过,才会懂,会坚强,会前进.
    人生的成败往往就在一念之差,失败者并不比成功者逊色,只是他们缺少了斗志.那叫做奋斗.
    　　上帝是公平的,他给予我们每个人奋斗,只是有些人没有彻悟,没有好好利用.奋斗也是一种生命物质,会随着经历挫折而越长越大,越动荡,越勇敢,奋斗在推动我们前进.俗话说,逆境出人才,逆境中奋斗才会爆发,才会不停地在逆境中寻找生的希望.黑暗的深渊中,奋斗是微光；干涸的土地中,奋斗是水滴；严寒的肃冬中,奋斗是热量.
    　　成功从来不是偶然,中国上下五千年没有一个伟人是巧合成功,他们有奋斗的证据,他们的成长足迹中有付出过心血,他们一路走过来的脚印中,没有完完整整的,有膝盖的磕印,有摔倒的血迹,有汗水浸湿的泥沙.他们从哪里摔倒就从哪里爬起来,生命的卑微因奋斗而变得精彩.奋斗会伴随着我们一生,但奋斗中的艰辛并不会持续着,历经艰辛,后面的路会渐渐平坦.
    　　我们奋斗的目标也许不一样,但动力源泉是一样的.有些人奋斗着为了考上好的学校；有些人奋斗着找到好的工作职位；有些人奋斗着为国家做出贡献······有些人一生在奋斗.奋斗,有辛酸的泪水,有误解,有难舍难分之处,但这一切,无法阻挠我们的前进.
    　　奋斗过,才会懂,会坚强,会前进.
    人生的成败往往就在一念之差,失败者并不比成功者逊色,只是他们缺少了斗志.那叫做奋斗.
    　　上帝是公平的,他给予我们每个人奋斗,只是有些人没有彻悟,没有好好利用.奋斗也是一种生命物质,会随着经历挫折而越长越大,越动荡,越勇敢,奋斗在推动我们前进.俗话说,逆境出人才,逆境中奋斗才会爆发,才会不停地在逆境中寻找生的希望.黑暗的深渊中,奋斗是微光；干涸的土地中,奋斗是水滴；严寒的肃冬中,奋斗是热量.
    　　成功从来不是偶然,中国上下五千年没有一个伟人是巧合成功,他们有奋斗的证据,他们的成长足迹中有付出过心血,他们一路走过来的脚印中,没有完完整整的,有膝盖的磕印,有摔倒的血迹,有汗水浸湿的泥沙.他们从哪里摔倒就从哪里爬起来,生命的卑微因奋斗而变得精彩.奋斗会伴随着我们一生,但奋斗中的艰辛并不会持续着,历经艰辛,后面的路会渐渐平坦.
    　　我们奋斗的目标也许不一样,但动力源泉是一样的.有些人奋斗着为了考上好的学校；有些人奋斗着找到好的工作职位；有些人奋斗着为国家做出贡献······有些人一生在奋斗.奋斗,有辛酸的泪水,有误解,有难舍难分之处,但这一切,无法阻挠我们的前进.
    　　奋斗过,才会懂,会坚强,会前进.
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
        <!--通知栏-->
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2" id="windows_inform">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span><!--刷新-->
            <span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span><!--音量-->
            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span><!--消息-->
            <div id="windows_time"><!--通知栏时间日期-->
                <p>10:10</p>
                   <p>2016/1/11</p>
            </div>


        </div>
</div>

</footer>
<!--引入窗口弹框-->

</body>
</html>