<?php
require('libs/Smarty.class.php');

$animales = ["Perro", "Gato", "Panda", "Pajaro", "Oso", "Cocodrilo", "Vaca", "Elefante","Perro", "Gato", "Panda", "Pajaro", "Oso", "Cocodrilo", "Vaca", "Elefante","Perro", "Gato", "Panda", "Pajaro", "Oso", "Cocodrilo", "Vaca", "Elefante","Perro", "Gato", "Panda", "Pajaro", "Oso", "Cocodrilo", "Vaca", "Elefante","Perro", "Gato", "Panda", "Pajaro", "Oso", "Cocodrilo", "Vaca", "Elefante","Perro", "Gato", "Panda", "Pajaro", "Oso", "Cocodrilo", "Vaca", "Elefante"];
$elegido_indice = rand(0, count($animales)-1);

$animal = $animales[$elegido_indice];
$titulo = "Super Pagina de Smarty";
//echo "El animal elegido es: ".$animal;
$smarty = new Smarty;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign('animalElegido', $animal);
$smarty->assign('titulo',$titulo);
$smarty->assign('animales',$animales);
$smarty->display('animales.tpl');

?>
