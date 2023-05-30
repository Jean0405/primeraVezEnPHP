<?php
// punto 5
    echo 'hola mundo';

// punto 6
    $texto = "Mundo";
    $mensaje = printf(" %s Hola", $texto);
    echo $mensaje;

// punto 7
    // declarmaos una variable de númerica
    $edad = 20;

    // declaramos una variable de texto
    $nombre = "Jean";

    //declaramos una variable booleana
    $es_valido = true;
    // echo var_dump($nombre);

// punto 8
    //Boolean
    $logueado = true;
    var_dump($logueado);
    //Enteros 
    $numeros = 200;
    var_dump($numeros);
    //Float
    $float = 200.5;
    var_dump($float);
    //String
    $nombre = "Juanes";
    var_dump($nombre);
    //Arrays
    $array = [];
    var_dump($array);


//punto 9

/**
 * TODO: OPERADORES ARITMETICOS
 * * + = Suma
 * * - = Resta
 * * * = Multiplicación
 * * / = División
 * * % = Modulo
 * * ** = Exponenciación
 */

 /**
  * TODO: OPERADORES DE ASIGNACIÓN
  * * = Asignación
  * TODO: OPERADORES DE ARRAYS
  * * + = Union
  * * == = Igualdad
  * * === = Identico / Estrictamente iguales
  * * != = Diferente
  * * <br> = Diferente 
  * * !== = No identicos / No estrictamente iguales
  */

  /**
   * * && = AND
   * * || = OR
   * * ! = NOT
   * * and = AND
   * * xor = XOR
   * * or = OR
   */

   $numero1 = 20;
   $numero2 = 30;
   $numero3 = 30;
   $numero4 = "30";

   echo "<br/>";
   echo "<br/>";

   var_dump($numero1 > $numero2);
   echo "<br/>";
   
   var_dump($numero1 < $numero2);
   echo "<br/>";
   
   var_dump($numero1 >= $numero2);
   echo "<br/>";

   var_dump($numero1 <= $numero2);
   echo "<br/>";

   var_dump($numero2 == $numero3);
   echo "<br/>";

   var_dump($numero2 == $numero4);
   echo "<br/>";

   var_dump($numero2 === $numero4);
   echo "<br/>";
    /**
     * * -1 Si IZQUIERDA es menor
     * * 0 Si AMBOS son iguales
     * * 1 Si IZQUIERDA es mayor
     */
    var_dump($numero1 <=> $numero4);
    echo "<br/>";

    var_dump($numero2 <=> $numero3);
    echo "<br/>";

    var_dump($numero2 <=> $numero1);
    echo "<br/>";


    $nombreCliente = "Campers Campuslands";

    //Conocer extensión de un string
    echo strlen($nombreCliente);
    var_dump($nombreCliente);

    //Eliminar espacios en blanco
    $texto = trim($nombreCliente);
    echo strlen($texto);
    echo "<br/>";

    //Convertir a mayusculas
    echo strtoupper($nombreCliente);
    echo "<br/>";

    //Convertir a minusculas
    echo strtolower($nombreCliente);

    $mail1 = "correo@correo.com";
    $mail2 = "Correo@correo.com";

    var_dump(strtolower($mail1) === strtolower($mail2));
    echo str_replace('Jean','J', $nombreCliente);

    //Revisar si un string existe o no
    echo strpos($nombreCliente, 'Pedro');
    $tipoCliente = "Premium - Empresarial";

    echo "<br/>"
    
?>
