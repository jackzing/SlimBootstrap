<?php
require __DIR__ . "/../../include/init.php";

echo $container['twig']->render("contact/index.twig", [
       'key' => 'contact',
//    'text' => 'index',
]);
