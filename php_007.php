<?php
    //int(var): convertir una variable a entero
    // el operador "=" es asignar
    // el operador "==" es igual
    $var1 = 5.9; 
    $var2 = (int)$var1;
    //echo $var1. "<br>"; // el "." concatena
    //echo '$var1 <br>'; //las comillas simples no detectan el valor de una variable
    echo "$var1<br>"; //las comillas dobles si lo hacen
    echo $var2;