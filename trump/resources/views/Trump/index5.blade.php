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
<div class="container-fluid neg trump_why" style="height: 100%;">
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
                <div class="main_txt2"><span class="neg_txt">화를</span> 추스릴 수 없어요</div>
                <div class="bar_txt">트럼프를 화나게 하는 것들</div>
                <div style="width: 500px;float: left">
                    @foreach($keywords as $keyword)
                        @foreach($keyword as $key)
                            <p style="float: left;padding: 0 10px;font-size: 20px;color: #fff">{{ $key }}</p>
                        @endforeach
                    @endforeach
                </div>
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