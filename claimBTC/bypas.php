<?php
function bypas($hasil){
$input = preg_replace("/[^a-zA-Z0-9!-? ]/", "", $hasil);
return $input; 
}
?>