<!DOCTYPE html>
<html>
<head>
<title>Image Manipulation Test</title>
</head><body>
<h1>The uploaded image:</h1>
<?php
$file = $_FILES['picture']['tmp_name'];
$picture = file_get_contents($file);
$sourceImage = imagecreatefromstring($picture);

$width = imageSX($sourceImage);
$height = imageSY($sourceImage);

$newheight = 400;
$newwidth = $newheight * ($width / $height);

$newImage = imagecreatetruecolor($newwidth, $newheight);
$result = imagecopyresampled($newImage, $sourceImage,
        0, 0, 0, 0,
        $newwidth, $newheight, $width, $height);
imagejpeg($newImage, "newimage.jpg");
?>
<img src="newimage.jpg">
</body>
</html>