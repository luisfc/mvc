<style>
.msj {
border: 1px solid rgb(0, 61, 255);
background: rgb(212, 241, 241);
padding: 1px 10px;
margin: 4px 2px;
font-family: arial;
color: blue;
display: table;
}
</style>
<?php

function imp($msj){
  $msj = (!empty($msj)) ? $msj : "Mensaje";
  return "<span class='msj'>$msj</span>"; 
}

function check(){
    $a =  __FILE__;
    $c =  dirname(__FILE__);
    echo imp($a);
    echo imp($c);
}

?>


     




