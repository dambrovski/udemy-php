<?php



$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $titlecolor);
imagestring($image, 5, 440, 350, "Airton Silva", $titlecolor);
imagestring($image, 3, 440, 370, "Concluido em: " . date("d/m/Y"), $titlecolor);
header("Content-Type: image/jpg");

imagejpeg($image, "certificado-".date("Y-m-d") . ".jpg", 10);

imagedestroy($image);

?>