<?php
require "Gif.php";

$f = [
    ["image" => file_get_contents("images/a1.jpg"), "duration" => 40],
    ["image" => file_get_contents("images/a2.jpg"), "duration" => 80],
    ["image" => file_get_contents("images/a3.jpg"), "duration" => 40],
    ["image" => file_get_contents("images/a4.jpg"), "duration" => 20],

//    ["image" => imagecreatefrompng("/../images/pic1.png"), "duration" => 20],
//    ["image" => "/../images/pic2.png", "duration" => 20],
//    ["image" => "http://thisisafakedomain.com/images/pic4.jpg", "duration" => 20],
];
$g = new Gif($f, 2);
$g->save("save.gif");
