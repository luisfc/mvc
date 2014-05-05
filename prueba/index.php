<?php
class A
{
	private $a;

    function A()
    {
        echo "Constructor A.<br />\n";
    }
    
    function B()
    {
        echo "I am a regular function named B in class A.<br />\n";
        echo "I am not a constructor in A.<br />\n";
    }
}

class B extends A
{
	
}

// Esto invocará a B() como un constructor
//$b = new B;


$num = "207-2321-07";
$num2 = "207232107";

echo $num . "<br>" . $num2 . "<br>";
/*
$nuevo = "";
for($x=0; $x < strlen($num2); $x++){
    echo $num2[$x]."<br>";
    $nuevo.=$num2[$x];
    if($x==2 || $x==6){
        $nuevo.="-";
    }
}

echo "nuevo: " . $nuevo;

*/

$num = "cajuela carro";

$search_arr = explode(' ', $num);
$search = "";

foreach($search_arr as $i){
    //(preg_match('/(\d+)-(\d+)-(\d+)/', $i))? $search.= '+"' . $i . '" ' : $search.= '+'. $i . ' ';
    if(preg_match('/(\d+)-(\d+)-(\d+)/', $i)) {
        $search.= '+"' . $i . '" ' 
    else if(preg_match('/\d+/', $i)) {
        $n = '';
        for($x=0; $x < strlen($i); $x++){
            echo $num2[$x]."<br>";
            $nuevo.=$i[$x];
            if($x==2 || $x==6){
                $n.="-";
            }
        }
        $search.= '+"' . $n . '" ' 
    }
    else {
        $search.= '+'. $i . ' ';
    }
}

echo $search;

?>