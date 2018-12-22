<?php
require __DIR__ . "/../../include/init.php";
use app\base\Util;

$list = ['Button Head Socket Screws.jpg', 'Drop In Anchors 2.jpg', 'Drop In Anchors.jpg', 'Fasteners.jpg', 'Flange Nuts.jpg', 'Flat Washers.jpg', 'Hex Head Bolts.jpg', 'Hex Head Wood Screws.jpg', 'Hex Nuts.jpg', 'Nylon Insert Lock Nuts.jpg', 'Pan Head Screws.jpg', 'Self Tapping Screws.jpg', 'Self Tapping Wood Screws.jpg', 'Socket Screws 2.jpg', 'Socket Screws.jpg', 'Spring Washers.jpg', 'Stainless Steel Fasteners.jpg', 'Threaded Rods.jpg', 'Wedge Anchors 2.jpg', 'Wedge Anchors.jpg', 'Wedge Lock Washers  Nord Lock Washers.jpg', 'Xylan Blue Coated Stud Bolts.jpg', 'Xylan Coated  PTFE Coated Stud Bolts.png',];

$imgPrefix = Util::conf("img.prod.path");
$list = array_map(function($item) use($imgPrefix) {
        $name = explode('.', $item);
        return [
                'title' => $name[0],
                'url' => $imgPrefix . $item,
            ];
}, $list);

echo $container['twig']->render("list/index.twig", [
       'key' => 'list',
       'products' => $list,
//    'text' => 'index',
]);
