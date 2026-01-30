<?php
include "./data/animais.php";

function mainPage(){
    global $items;
    $banner = "./images/allanimals.jpg";
    $title = "todos os animais";
    $content = $items;

    include "./include/layout.php";
}

function gatosPage(){
    $banner = "./mages/allanimals.jpg";
    $title = "todos os animais";
    $content = $items;

    include "./include/layout.php";
}
function cachorrosPage(){
    $banner = "./mages/allanimals.jpg";
    $title = "todos os animais";
    $content = $items;

    include "./include/layout.php";
}

function peixesPage(){
    $banner = "./mages/allanimals.jpg";
    $title = "todos os animais";
    $content = $items;

    include "./include/layout.php";
}


?>