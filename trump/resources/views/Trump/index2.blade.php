<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>우리 트럼프는...</title>
        <link rel="stylesheet" href="/css/css.css">
        <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="col-2 side_menu">
        <ul>
                <li><a style="color: #fff;" href="/">Main</a></li>
                <li><a style="color: #fff;" href="/gallary">Gallary</a></li>
                <li><a style="color: #fff;" href="/usTweets">US-Tweets</a></li>
                <li><a style="color: #fff;" href="/feelGraph">Feel-Graph</a></li>
                <li><a href="/keyWord">Why-Trump</a></li>
        </ul>
</div>
<div class="container-fluid black trump_gallery">
        <div class="container h">
                <div class="menu_icon">
                        <div>
                                <div style="background: #fff"></div>
                                <div style="background: #fff"></div>
                                <div style="background: #fff"></div>
                                <div style="background: #fff"></div>
                        </div>
                </div>
                <div class="col-12 h">
                        <div class="main_txt" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%)">
                                <div class="main_txt1 white_txt">우리 트럼프는</div>
                                <div class="main_txt2 grey_txt">정말 멋져요</div>
                        </div>
                </div>
                <div class="col-12 gall">
                        <div class="gall_row col-12">
                                <div class="col-2"><img src="/img/gallery1.png" alt="img"></div>
                                <div class="col-2"><img src="/img/gallery2.png" alt="img"></div>
                                <div class="col-2"><img src="/img/gallery3.png" alt="img"></div>
                        </div>
                        <div class="gall_row col-12">
                                <div class="col-2"><img src="/img/gallery4.png" alt="img"></div>
                                <div class="col-2"><img src="/img/gallery5.png" alt="img"></div>
                                <div class="col-2"><img src="/img/gallery6.png" alt="img"></div>
                        </div>
                        <div class="gall_row col-12">
                                <div class="col-2"><img src="/img/gallery7.png" alt="img"></div>
                                <div class="col-2"><img src="/img/gallery8.png" alt="img"></div>
                                <div class="col-2"><img src="/img/gallery9.png" alt="img"></div>
                        </div>
                </div>
        </div>
</div>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/app2.js"></script>
<script>
    window.onload = function(){
        var app = new App();

        app.start();
    }
</script>
<script>
    $(window).scroll(function(){
        if($(window).scrollTop() < $('.gall').offset().top) {
            $('.menu_icon > div > div').css({'background':'#fff'});
            $('.side_menu  * ').css({'color':'#fff'});
        }else {
            $('.menu_icon > div > div').css({'background':'#222'});
            $('.side_menu  * ').css({'color':'#222'});
        }
    });
</script>
</body>
</html>