/**
 * Created by zhaoge on 2016/6/15.
 * 主体js
 */

(function($){
    $.extend({
        main:{
            init:function(){
                this.mainTap();
                this.footWindowsTap();
                this.windowsIcoTap();


            },
            /*主菜单tap事件*/
            mainTap:function(){
                $(".mainIco").on("tap",function(){
                    var winName=$(this).attr('windowsName');//获取与底部窗口对应的name
                    $(".windows_wrap[windowsName="+winName+"]").show(300);
                    var windows_btn_obj=$(".windows_btn[windowsName="+winName+"]");//获取对应的底部窗口
                    windows_btn_obj.show(300);//底部窗口显示
                    windows_btn_obj.addClass('btn-warning');//底部窗口背景色变色（按钮增加class）
                    return false;
                });

            },

            /*底部窗口*/
           footWindowsTap:function(){
               $('.windows_btn').on("tap",function(){
                   var winName=$(this).attr('windowsName');//获取底部窗口name
                   var windows_wrap_obj=  $(".windows_wrap[windowsName="+winName+"]");//获取name对应的弹窗对象
                   if(windows_wrap_obj.css('display')=='none'){ //判断弹窗状态 点击显示和隐藏 自身背景色变化
                       windows_wrap_obj.show(300);
                       $(this).addClass('btn-warning')
                   }else{
                       windows_wrap_obj.hide(200);
                       $(this).removeClass('btn-warning')
                   }
                   return false;

               })

           },
            /*弹出框头部图标点击*/
          windowsIcoTap:function(){
              /*窗口最小化按钮点击事件*/
              $(".small_window").on('tap',function(){
                  var thisWin=$(this).parents(".windows_wrap"); //获取自身整个窗口
                  var winName=thisWin.attr('windowsName'); //获取窗口name
                  var this_window_btn=  $(".windows_btn[windowsName="+winName+"]"); //获取对应的底部窗口
                  thisWin.hide(200);//点击隐藏模拟最小化
                  this_window_btn.removeClass('btn-warning');//底部窗口背景色改变

              });

              /*窗口放大缩小窗口事件*/
              $(".mid_window").on('tap',function(){
                  var thisWin=$(this).parents(".windows_wrap"); //获取自身整个窗口
                  var thisWinHead=$(this).parents(".windows_ico");
                  var winWidth=thisWin.css('width');
                  var maxWidth=$(window).width()+"px";
                  if(winWidth==maxWidth){
                      thisWin.css({"height":"60%","width":"60%","left":"20%","top":"20%"});
                      thisWinHead.css({"width":"60%","left":"20%","top":"20%"});

                  }else{
                      thisWin.css({"height":"90%","width":"100%","left":"0","top":"0"});
                      thisWinHead.css({"width":"100%","left":"0","top":"0"});

                  }

              });



          }


        }

    });
    $.main.init();
})(jQuery);

/*
$(function(){
    $('body').on("tap",function(){
        alert(123);
    })
});*/
