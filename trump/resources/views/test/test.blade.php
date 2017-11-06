<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/billboard.js/1.1.1/billboard.css">
</head>
<body>
<div id="StepChart"></div>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/billboard.js/1.1.1/billboard.js"></script>

<script>
    // Script
    var chart = bb.generate({
        "data": {
            "columns": [
                ["data1", 130, 100, 140, 200, 150, 50]
            ],
            "types": {
                "data1": "area-step",
            }
        },
        "bindto": "#StepChart"
    });
</script>
</body>
</html>