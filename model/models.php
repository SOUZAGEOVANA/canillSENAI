<?php

function pegartodos($item) {
    return $item ;

  


}

function pegarpelotipo($items, $tipo){
    return array_filter ($items, function($animal) USE($tipo){
        return $animal['type'] == $tipo;



   });
    
}

function pelonome($items,$nome){
return array_filter ($items, function($animal) use($nome){
    return $animal['name'] == $nome;

});
}

?>