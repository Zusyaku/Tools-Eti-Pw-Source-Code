<?php

    if(isset($_GET['text'])){
        // get string
        $text = $_GET['text'];
    }else{
        // set default
        $text = 'liame';
    };

    $text = htmlentities($text);
    $textLength = strlen($text);
    $textHeight = 10;

    // create image handle
    $image = ImageCreate($textLength*($textHeight-1),20);
    
    // set colours
    $backgroundColour = ImageColorAllocate($image,255,255,255); // white
    $textColour = ImageColorAllocate($image,0,0,0);    //black 

    // set text
    ImageString($image,$textHeight,0,0,$text,$textColour);

    // set correct header    
    header('Content-type: image/png');

    // create image
    ImagePNG($image);
?>
