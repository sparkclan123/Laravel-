<?php
function radioHelpers($databaseValue, $checkValue){
  
 return ($databaseValue == $checkValue) ? 'checked' : null;


}

function oldHelper($old,$value){
if (isset($old)){
    return $old == $value ? 'checked' : '';
} 
else{
    return $value == 'M' ? 'checked' : '';
}


}

