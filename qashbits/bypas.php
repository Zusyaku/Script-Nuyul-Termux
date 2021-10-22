<?php

function bypas($hasil){
$com = preg_replace("/[^a-zA-Z0-9]/", "", $hasil);
return $com; 
}


?>