<?php
  function notNull($input){
    foreach ($input as $field) {
      if(empty($field)){
        return true;
      }
    }
  }
?>

  $input 0,1,2,3
  $field 1
  $file 2
  
  