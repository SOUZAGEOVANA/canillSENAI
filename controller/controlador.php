<?php
include "./data/animais.php";

include "./model/models.php";

$active =[
    "main" => "",
    "gatos" => "",
    "cachorros" =>"",
    "peixes" => "",
     "coelho" => "",

];

function mainPage(){
    global $items, $active;
    $active['main'] = "active";
    $banner = "./images/allanimals.jpg";
    $title = "todos os animais";
    $content = pegartodos($items);

    include "./include/layout.php";
}

function gatosPage(){
    global $items,  $active;
      $active['gatos'] = "active";
    $banner = "./images/banner_cat.jpg";
    $title = "gatos";
    $lista = pegartodos($items);
    $content = pegarpelotipo($lista,"gatos");
    
       

    

    include "./include/layout.php";
}
function cachorrosPage(){
     global $items,$active;
       $active['cachorro'] = "active";
    $banner = "./images/banner_dog.jpg";
    $title = "cachorros"; 
    $lista = pegartodos($items);
    $content = pegarpelotipo($lista,"cachorros");
 

    

    include "./include/layout.php";
}

function peixesPage(){
     global $items,$active;
       $active['peixe'] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "peixes";
    $lista = pegartodos($items);
    $content = pegarpelotipo($lista,"peixe");


    include "./include/layout.php";
}



    function coelhoPage(){

        global $items,$active;
       $active['coelho'] = "active";
       $banner ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8ll6Eqqd84m2NCFY5xwIa7vODF8KV7w4fHw&s";
       $title = "coelho";
       $lista = pegartodos($items);
       $content = pegarpelotipo($lista,"coelho");

       
    include "./include/layout.php";

    
    
     
    }


function pesquisaPage(){
     global $items;
     $nome = $_GET['nome'] ?? "";
    $lista = pegartodos($items);
    $content = pelonome($lista,$nome);



    include "./include/layout.php";
}


?>