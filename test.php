
    <script src="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <link href="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Chartist.js - Simple line chart</title>


<div class="ct-chart"></div>
<script>
    new Chartist.Line('.ct-chart', {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
        series: [
            [2, 3, 2, 4, 5],
            [0, 2.5, 3, 2, 3],
            [1, 2, 2.5, 3.5, 4]
        ]
    }, {
        width: 500,
        height: 300
    });
</script>