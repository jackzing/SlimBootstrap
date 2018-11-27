<?php
require __DIR__ . "/../../include/init.php";

echo $container['twig']->render("home/index.twig", [
//    'text' => 'index',
]);
