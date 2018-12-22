<?php
require __DIR__ . "/../../include/init.php";

echo $container['twig']->render("aboutus/index.twig", [
       'key' => 'aboutus',
//    'text' => 'index',
]);
