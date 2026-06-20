<?php
    $names = ["Hello","Hi","Hai","Ho","Vanakkam"];
    $txt= $_POST["$txt"];
    if($txt!=""){
        foreach ($names as $name) {
            if(stripos($name,$txt)!==false){
                echo $name."<br>";
            }
        }
    }
    
?>
