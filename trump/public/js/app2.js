var App = function(){
    'use strict';

    var app = {
        initTag: function(){
            app.BODY 			= $(document);

            return this;
        },
        initEvent: function(){
            app.BODY.find('.menu_icon').on('click',function(){
                if($(this).hasClass('clicked')) {
                    app.BODY.find('.side_nav').animate({'width':'80px'},300);
                    app.BODY.find('.menu_icon > div > div').eq(0).animate({'opacity':'1'},300);
                    app.BODY.find('.menu_icon > div > div').eq(1).css({'transform':'rotate(0) translateY(-50%)','transition':'0.3s'});
                    app.BODY.find('.menu_icon > div > div').eq(2).css({'transform':'rotate(0) translateY(-50%)','transition':'0.3s'});
                    app.BODY.find('.menu_icon > div > div').eq(3).animate({'opacity':'1'},300);
                    $(this).removeClass('clicked');
                    app.BODY.find('.side_menu').css({'z-index':'-1'},300);
                    app.BODY.find('.side_menu').animate({'opacity':'0'},300);
                    app.BODY.find('.side_menu ul li').eq(1).css({'transform':'translateY(-100%)','transition':'0.5s'});
                    app.BODY.find('.side_menu ul li').eq(2).css({'transform':'translateY(-200%)','transition':'1s'});
                    app.BODY.find('.side_menu ul li').eq(3).css({'transform':'translateY(-300%)','transition':'1.5s'});
                    app.BODY.find('.side_menu ul li').eq(4).css({'transform':'translateY(-400%)','transition':'1.5s'});
                }else {
                    app.BODY.find('.side_nav').animate({'width':'250px'},300);
                    app.BODY.find('.menu_icon > div > div').eq(0).animate({'opacity':'0'},300);
                    app.BODY.find('.menu_icon > div > div').eq(1).css({'transform':'rotate(45deg)','transition':'0.3s'});
                    app.BODY.find('.menu_icon > div > div').eq(2).css({'transform':'rotate(-45deg)','transition':'0.3s'});
                    app.BODY.find('.menu_icon > div > div').eq(3).animate({'opacity':'0'},300);
                    $(this).addClass('clicked');
                    app.BODY.find('.side_menu').css({'z-index':'1000000'},300);
                    app.BODY.find('.side_menu').animate({'opacity':'1'},300);
                    app.BODY.find('.side_menu ul li').eq(1).css({'transform':'translateY(0)','transition':'0.5s'});
                    app.BODY.find('.side_menu ul li').eq(2).css({'transform':'translateY(0)','transition':'1s'});
                    app.BODY.find('.side_menu ul li').eq(3).css({'transform':'translateY(0)','transition':'1.5s'});
                    app.BODY.find('.side_menu ul li').eq(4).css({'transform':'translateY(0)','transition':'1.5s'});
                }
            });
        },
        start: function(){
            console.log('start');

            return this
                .initTag()
                .initEvent();
        }
    }

    return app;
}