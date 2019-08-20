<?php
    $img=imagecreatetruecolor(500, 500);

    $white=imagecolorallocate($img,255,255,255);
    $black=imagecolorallocate($img,0,0,0);
    $red=imagecolorallocate($img,255,0,0);
    $green=imagecolorallocate($img,0,255,0);
    $blue=imagecolorallocate($img,0,0,255);
    $gray=imagecolorallocate($img,200,200,200);
    $yellow=imagecolorallocate($img,255,255,0);

    imagefill($img, 1, 1, $gray);
    imagefilledarc($img,250,250,500,500,0,360,$black,IMG_ARC_PIE);
    imageFilledArc($img,250,250,500,500,90,270,$white,IMG_ARC_PIE);

    imagefilledarc($img,250,375,250,250,0,360,$white,IMG_ARC_PIE);
    imagefilledarc($img,250,125,250,250,0,360,$black,IMG_ARC_PIE);

    imagefilledarc($img,250,375,50,50,0,360,$black,IMG_ARC_PIE);
    imagefilledarc($img,250,125,50,50,0,360,$white,IMG_ARC_PIE);
    
    header('content-type: image/jpeg');
    imagejpeg($img);

    imagedestroy($img);
