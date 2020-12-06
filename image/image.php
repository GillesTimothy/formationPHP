<?php
/*
header ("Content-type: image/jpeg");
$image = imagecreatefromjpeg("couchersoleil.jpg");
imagejpeg($image);
*/

header ("Content-type: image/png");
$image = imagecreate(400,100);

$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 8, 70, 30, "Salut les zeros !", $blanc);
ImageRectangle ($image, 20, 10, 300, 60, $blanc); 

imagecolortransparent($image, $orange); // On rend le fond orange transparent

imagepng($image);

?>
