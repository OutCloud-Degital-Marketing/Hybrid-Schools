<?php


function printSelectedSocials($socials, $selected=[]) {
    // foreach ($socials as $key => $value) {
    //     if (!in_array($key, $selected))
    //         echo "<a href='".$value['link']."' class='img-ctn ".$key."-btn'><img src='".$value['image']."' alt='".$key." Icon'></a>"; 
    // }

    foreach ($selected as $key) {
        $value = $socials[$key];
        echo "<a href='".$value['link']."' class='img-ctn ".$key."-btn'><img src='".$value['image']."' alt='".$key." Icon'></a>"; 
    }
}
 
function printOnlySelectedSocials($socials, $selected=[]) {
    // foreach ($socials as $key => $value) {
    //     if (in_array($key, $selected))
    //         echo "<a href='".$value['link']."' class='img-ctn ".$key."-btn'><img src='".$value['image']."' alt='".$key." Icon'></a>";
    // }

    foreach ($selected as $key) {
        $value = $socials[$key];
        echo "<a href='".$value['link']."' class='img-ctn ".$key."-btn'><img src='".$value['image']."' alt='".$key." Icon'></a>"; 
    }
}

