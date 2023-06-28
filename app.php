<?php

// Punto 19 Namespace
use App\Detalles;

function my_autoload($clase)
{
  $fileClass = explode('\\', $clase);
  require __DIR__ . '/clases/' . $fileClass[1] . '.php';
}
spl_autoload_register('my_autoload');
$detalles = new Detalles();
