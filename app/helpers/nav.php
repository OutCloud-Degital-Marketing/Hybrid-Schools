<?php

function printSelectedNav($nav, $selected=[], $dropdown=false) {
    foreach ($nav as $key => $value) {
        if (!in_array($key, $selected)){
            $icon = $value['type'] === "dropdown" && $dropdown ? " <img src='./images/icons/down-arrow.svg'>" : "";
            $key .= $icon;
            echo "<li><a class='page-link ".$value['class']." fw600' href='".$value['link']."'>".$key."</a>"; 
            if ($value['type'] === "dropdown" && $dropdown) {
                echo "<ul class='sub-nav'>";
                printSelectedNav($value['children']);                
                echo "</ul>";
            }
            echo "</li>";
        } 
    }
}
 
function printOnlySelectedNav($nav, $selected=[]) {
    foreach ($nav as $key => $value) {
        if (in_array($key, $selected)) {
            echo "<li><a class='page-link ".$value['class']." fw600' href='".$value['link']."'>".$key."</a>"; 
            if ($value['type'] === "dropdown") {
                echo "<ul class='sub-nav'>";
                printSelectedNav($value['children']);                
                echo "</ul>";
            }
            echo "</li>";
        }
    }
}