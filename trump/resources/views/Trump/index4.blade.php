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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/billboard.js/1.1.1/billboard.css">
</head>
<body style="min-height: 1400px;">
<div class="col-2 side_menu">
    <ul>
        <li><a href="/">Main</a></li>
        <li><a href="/gallary">Gallary</a></li>
        <li><a href="/usTweets">US-Tweets</a></li>
        <li><a href="/feelGraph">Feel-Graph</a></li>
        <li><a href="/keyWord">Why-Trump</a></li>
    </ul>
</div>
<div class="container-fluid green trump_graph">
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
                <div class="main_txt2 green_txt">기분이 이상해요</div>
            </div>
        </div>
        <div class="col-12">
            <div class="container">
                <div id="StepChart" style="margin-top: 180px;"></div>
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
        var DATA = null;
        $.post('/getGraphData',function(data){
            DATA = data;
            // Script
            var chart = bb.generate({
                "data": {
                    "columns": [
                        ["최근 트럼프 긍정 수치", DATA[0].sentiment , DATA[1].sentiment , DATA[2].sentiment, DATA[3].sentiment, DATA[4].sentiment, DATA[5].sentiment , DATA[6].sentiment]
                    ],
                    "types": {
                        "최근 트럼프 긍정 수치": "area-step",
                    }
                },
                "bindto": "#StepChart"
            });
            console.log(DATA);
        });

    }
</script>

<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/billboard.js/1.1.1/billboard.js"></script>

<script>


</script>
</body>
</html>