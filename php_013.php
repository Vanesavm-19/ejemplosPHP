<?php
//unset: Elimina una variable o array respetando el ámbito de dicha variable.
$var1 = 4;
if (isset($var1)){
    print("La varibale var1 está configurada y vale: ".$var1);
}else{
    print("La variable var1 no está configurada");
}

unset($var1); //elimino la varibale
echo "<br>";
if (isset($var1)){
    print("La varibale var1 está configurada y vale: ".$var1);
}else{
    print("La variable var1 no está configurada");
}