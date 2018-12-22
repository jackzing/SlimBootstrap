<?php
require __DIR__ . "/../../include/init.php";
use app\base\Util;

$banner = ['banner-1.jpg', 'banner-3.jpg', 'banner-2.jpg'];

$imgPrefix = Util::conf("img.banner.path");

$list = array_map(function($item) use($imgPrefix) {
    return $imgPrefix . $item;
}, $banner);

echo $container['twig']->render("home/index.twig", [
       'key' => 'index',
       'banners' => $list,
//    'text' => 'index',
]);
