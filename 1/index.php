<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
    <style>
        img{
            width: 100%;
            height: 640px;
            padding: 0 !important;
        }
        .col-md-3{
            padding: 0;
        }
    </style>
<body>
    <?php
    $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";    
    $response = file_get_contents($url);
    $result = json_decode($response);
    echo "<div class='container'>";
    echo "<div class='row'>";
    foreach ($result->tracks->items as $track){
        echo "<div class='col-md-3' style='height: 800px; margin: 47.5px; border:1px solid black;'>";
        echo "<img src=".$track->album->images[0]->url.">";
        echo "<br>";
        echo "<br>";
        echo "<div style='margin-left: 15px;'>";
        echo "<b>";
        echo  $track->album->name;
        echo "</b>";
        echo "<br>";
        echo "Artist: ".$track->artists[0]->name;
        echo "<br>";
        echo  "Release date: ".$track->album->release_date;
        echo "<p> Avaliable: ".count($track->album->available_markets) ." countries</p>";
        echo "</div>";
        echo "</div>";
        
    }
    ?>
</body>
</html>