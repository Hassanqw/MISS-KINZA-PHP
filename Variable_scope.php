<?php 
function staticScopeFunction(){
    static $num = 1; 
    echo $num;
    $num++;
}
staticScopeFunction();
echo "<br>";
staticScopeFunction();
echo "<br>";
staticScopeFunction();

?>