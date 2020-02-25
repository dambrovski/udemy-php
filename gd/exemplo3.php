<?php



$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$fontBevan = dirname(__FILE__) . DIRECTORY_SEPARATOR ."fonts". DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";
$fontPlayball = dirname(__FILE__) . DIRECTORY_SEPARATOR ."fonts". DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf";

imagettftext($image, 32, 0, 320, 250, $titlecolor, $fontBevan, "Certificado");

imagettftext($image, 32, 0, 375, 350, $titlecolor, $fontPlayball ,"Airton Dambrovski");

imagestring($image, 3, 440, 370, utf8_decode("Concluido em: ").date("d/m/Y"), $titlecolor);
header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>