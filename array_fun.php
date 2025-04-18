<?php
        $arry = [ "Hassan" , "is" , "Good" , "Boy"];
        echo implode(" " , $arry);
        echo "<br>";

        echo sort($arry);
        echo "<br>";

        for($i = 0 ; $i<count($arry) ; $i++){
                echo $arry[$i] . "<br>";
        }

        if (in_array("banana", $arry)) {
                echo "Banana mil gaya!";
            }
            else{
                echo "Mujahe banana do";
            }
            

?>