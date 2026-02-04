<?php

include "./controller/controlador.php";

$URL =  parse_url ($_SERVER ['REQUEST_URI'], PHP_URL_PATH);


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
    pesquisaPage();
}

else {
    echo "NOT FOUND!!!";
}
?>




