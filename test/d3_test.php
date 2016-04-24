<html>
<head>

</head>

<body>
<script src="../bootstrap-3.3.6-dist/js/d3.min.js"></script>
<script>
    var margin = {top: 20, right: 20, bottom: 30, left: 50};
    var = width = document.body.clientWidth - margin.left - margin.right;
    var height = 500 - margin.top - margin.bottom;

    var data = Array.apply(0,Array(31)).map(function(item,i){
        i++;
        return {x: i, y:parseInt(Math.random()*100)};
    });
    var x = d3.scale().linear()
        .domain(d3.extent(data, function(d){return d.x;}));
    var y = d3.scale().linear()
        .domain([0,d3.max(data, function(d){return d.y;})]);
</script>
</body>
</html>