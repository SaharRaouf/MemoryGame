<?php
$maxNumberOfImages = 36;

$images = array();

if( isset($_GET['i']) ) {
    $i = min( $maxNumberOfImages*2, max( 12, intval($_GET['i']) ) );
    $numberOfImages = floor($i/2);
    $cols = ceil(sqrt($i));
    $rows = ceil($i/$cols);
    while( count($images)<$numberOfImages ) {
        $rand = rand(1,$maxNumberOfImages);
        if( !in_array($rand,$images) )
            array_push( $images, $rand );
    }
    $images = array_merge($images,$images);
    shuffle($images);
}
echo '<!doctype html>'
        .'<html>'
        .'<head>'
        .'<meta charset="utf-8">'
        .'<title>Memory</title>'
        .'<meta name="author" content="Sahar Rouf">'
        .'<link rel="stylesheet" href="css/memory.css" />'
        .'<link rel="stylesheet" href="css/ui-lightness/jquery-ui.css" />'
        .'<script src="js/jquery.js"></script>'
        .'<script src="js/jquery-ui.js"></script>'
        .'<script src="js/memory.js"></script>'
        .'</head>'
        .'<body>'
        .' @include('partial.nav')';
if( !empty($images) ) {
    echo '<div id="memory">';
    for( $r=0; $r<$rows; $r++ ) {
        echo '<ul>';
        for( $c=0; $c<$cols; $c++ ) {
            $i = $r*$cols+$c;
            if( isset($images[$i]) )
                echo '<li><div><img src="images/'.$images[$i].'.png"/></div></li>';
        }
        echo '</ul>';
    }
    echo 	'<br class="clear" />'
            .'<p>Pairs found: <span id="s">0</span> of '.$numberOfImages.'</p>'
            .'<p>Attempts: <span id="a">0</span></p>'
            .'<p>Time elapsed: <span id="t">0</span></p>'
            .'</div>';
}
else {
    echo '<form id="memory" action="." method="get">'
            .'<fieldset>'
            .'<strong>Memory Game</strong>'
            .'<p>'
            .'<label for="i">Cards:</label>'
            .'<input type="text" id="i" name="i" value="" />'
            .'<div id="iSlider"></div>'
            .'</p><p>'
            .'<label for="c">Cols:</label>'
            .'<span id="c"></span>'
            .'</p><p>'
            .'<label for="r">Rows:</label>'
            .'<span id="r"></span>'
            .'</p><p class="center">'
            .'<input class="ui-button" type="submit" value="Start game" />'
            .'</p>'
            .'</fieldset>'
            .'</form>';
}
echo '</body>'
        .'</html>';
?>