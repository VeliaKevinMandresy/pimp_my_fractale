<?php
if (isset($_POST["Julia"]))
{
   if (empty($_POST["Re"]))
       echo '<center>Remplissez tous les champs please</center>';
   if (empty($_POST["Im"]))
       echo '<center>Remplissez tous les champs please</center>';
   if (isset($_POST["Re"]))
    $constR = $_POST["Re"];
   if (isset($_POST["Im"]))
    $constI = $_POST["Im"];
$xNeg = -1.99;
$xPos = 2;
$yNeg = -2;
$yPos = 2;
$nIter = 50;
$image_x = ($xPos - $xNeg)*200;
$image_y = ($yPos - $yNeg)*200;
$image = imagecreatetruecolor($image_x, $image_y);
$blanc = imagecolorallocate($image, 255, 255, 255);
$noir = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0 ,0 , $blanc); //image vide

$iter = 0;
while($iter < $nIter)
{   
    $color = array();
    $randColor = $iter*rand(2000, 3000);

    $colors[$iter] = imagecolorallocate($image, 0, 0, $randColor);
    $iter++;
}

    for($x = 0; $x < $image_x; $x++)
    {
        for($y = 0; $y < $image_y; $y++)
        {
            $constR = $_POST['Re']; /* le 200 correspond a l'agrandissement de la fractale */
            $constI = $_POST['Im'];/* le 200 correspond a l'agrandissement de la fractale */
            $Re = $x/200+$xNeg;
            $Im = $y/200+$yNeg;
            $iter = 0;
            $k = 2;

            $tmp = pow(pow($Re, 2) + pow($Im, 2),$k/2) * cos($k * atan2($Im, $Re))+ $constR;
            $Im = pow(pow($Re, 2) + pow($Im, 2),$k/2) * sin($k * atan2($Im, $Re)) + $constI;
            $Re = $tmp;
            while($Re*$Re + $Im*$Im < 4 AND $iter < $nIter)
            {
                $tmp = pow(pow($Re, 2) + pow($Im, 2),$k/2) * cos($k * atan2($Im, $Re))+ $constR;
                $Im = pow(pow($Re, 2) + pow($Im, 2),$k/2) * sin($k * atan2($Im, $Re)) + $constI;
                $Re = $tmp;
                $iter++;
            }
            if($iter == $nIter)
                imagesetpixel($image, $x, $y, $noir);
            else
                imagesetpixel($image, $x, $y, $colors[$iter]);
        }
    }

header('Content-type: image/png');
imagepng($image);
}