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
                <li><a href="/">Main</a></li>
                <li><a href="/gallary">Gallary</a></li>
                <li><a href="/usTweets">US-Tweets</a></li>
                <li><a href="/feelGraph">Feel-Graph</a></li>
                <li><a href="/keyWord">Why-Trump</a></li>
        </ul>
</div>
<div class="container-fluid {{ $Feel }} trump_{{ $Feel }}">
        <div class="container h">
                <div class="menu_icon">
                        <div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                        </div>
                </div>
                <div class="col-12 h">
                        <div class="main_txt">
                                <div class="main_txt1">우리 트럼프는</div>
                                <div class="main_txt2">지금 기분이 <span class="{{ $Feel }}_txt">{{ $FeelText }}</span>예요</div>
                                <div class="bar_txt">트럼프의 분노 게이지</div>
                                <div class="bar_wrap">
                                        <div class="bar_value" style="width:{{ $BarWidth }}%">{{ $BarWidth }}%</div>
                                </div>
                        </div>
                </div>
                <div class="col-12">
                        <div class="container">
                                <a class="twitter-timeline" href="https://twitter.com/realDonaldTrump?ref_src=twsrc%5Etfw">Tweets by realDonaldTrump</a>
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
<script>window.twttr = (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function (f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));
</script>
</body>
</html>