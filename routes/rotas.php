<?php

include "./controller/controlador.php";

$URL = $_SERVER ['REQUEST_URI'];
echo $URL;

if($URL == "/canillsenai/"){
    mainPage();
}
else if ($URL == "/canillsenai/gatos"){
    gatosPage();

}

else if ($URL == "/canillsenai/cachorros"){
    cachorrosPage();
    
}


else if ($URL == "/canillsenai/peixes"){
    peixesPage();
    
}

else if ($URL == "/canillsenai/pesquisa"){
    echo "rota de pesquisa";
}

else {
    echo "NOT FOUND!!!";
}
?>




