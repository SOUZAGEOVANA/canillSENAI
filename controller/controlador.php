<?php
include "./data/animais.php";

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
    $content = $items;

    include "./include/layout.php";
}

function gatosPage(){
    global $items;$active;
      $active['gatos'] = "active";
    $banner = "./images/banner_cat.jpg";
    $title = "gatos";
    $content =  array_filter ($items, function($animal){
         return $animal['type'] == "gato";

    });
       

    

    include "./include/layout.php";
}
function cachorrosPage(){
     global $items,$active;
       $active['cachorro'] = "active";
    $banner = "./images/banner_dog.jpg";
    $title = "cachorros"; 
    $content =  array_filter ($items, function($animal){
         return $animal['type'] == "cachorro";

        

    });

    

    include "./include/layout.php";
}

function peixesPage(){
     global $items,$active;
       $active['peixe'] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "peixes";
     $content =  array_filter ($items, function($animal){
         return $animal['type'] == "peixe";

        

    });

    include "./include/layout.php";
}



    function coelhoPage(){

        global $items,$active;
       $active['coelho'] = "active";
       $banner ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8ll6Eqqd84m2NCFY5xwIa7vODF8KV7w4fHw&s";
       $title = "coelho";
        $content =  array_filter ($items, function($animal){
            return $animal['type'] == "coelho";
            
    
     
    });

    include "./include/layout.php";


}
    

function pesquisaPage(){
     global $items;
     $nome = $_GET['nome'] ?? "";
     $content =  array_filter ($items, function($animal) use($nome){
         return $animal['name'] == $nome;

    });

    include "./include/layout.php";
}


?>