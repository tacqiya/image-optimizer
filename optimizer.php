<?php 
function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}

$source_img = 'source.png';
$destination_img = 'destination.png';

$d = compress($source_img, $destination_img, 1);

$info = getimagesize($d);



echo '<pre>'; print_r($info); echo '</pre>';
?>

<img src="<?= $d ?>" alt="<?= $d ?>" style="width: 100%;" />