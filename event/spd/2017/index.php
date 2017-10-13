<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>SPD2017</title>
    <link rel="stylesheet" href="./style/style.css" style="text/css">
</head>

<body>
    <div id="header">
        
    </div>

    <div id="main">
        <p class="mainSubTitle">Special Presentation Day 2017</p>
        <p class="mainTitle">Surf this wave.</p>
        
        <div id="siri-container"></div>
       
        <script src="./script/siriwavejs/siriwave.js"></script>
            <script>
                var random = Math.floor( Math.random() * 1.1 ) ;
                var siriWave = new SiriWave({
                    container: document.getElementById('siri-container'),
                    height: 100,
                    speed: 0.05,
                    amplitude: 0.8,
                    autostart: true,
                    frequency: 10,
                    style: "ios9"
                    
                });
            </script>
        
    </div>

    <div id="footer">

    </div>

</body>

</html>