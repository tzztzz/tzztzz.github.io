<?php

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

$color = "#".random_color();

?>
<!doctype html>
<html>
    <head>
<title>tzztzz</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Lora&amp;subset=cyrillic" rel="stylesheet">
    </head>
    
    <body>
    <div id="placeholder"></div>
    <h1 style="color: <?php echo $color;?>;">tzztzz</h1>
    <div id="placeholder"></div>
    <a href="o/1.php">#1&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;Ein kurzer Gedankengang zum Thema &bdquo;Nichtstun als Mittel der Karthasis&ldquo;</a>
    
    <div id="placeholder" style="height: 100px;"></div>  
    <p>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</p>
    <img src="pic.gif" title="denken denken..." width="220" height="118">
    </body>
</html>
    