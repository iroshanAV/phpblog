<?php
//function to format the date type
function formatDate($date){
  return date('F j, Y, g:i a', strtotime($date));
}

?>
