<?php
  function notNull($input){
    foreach ($input as $field) {
      if(empty($field)){
        return true;
      }
    }
  }
?>
  