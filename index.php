<style>
    body{
        background-color: black;
        color:#e3a617;
        font-size: 1.5rem;
    }
    hr{
        border: 1px solid green;
    }
</style>dd
<?php

echo 'A-R-R-A-Y-S';
echo '<hr>'; 
$data= ['Daniel','trejo',1234567890];
$data2= ['name' => 'Daniel','lastname' => 'trejo', 'phone' => 1234567890];
 var_dump($data);
 for ($i=0; $i  < count($data) ; $i++) { 
     echo $data[$i].'<hr>';
     
 } 
 var_dump($data2);
 echo '<hr>'; 
foreach ($data2 as $key => $value) {
    echo 'data: '.$key.' value: '.$value.'<hr>';    
}

// ORDENAR ARREGLO
asort($data2);
// sort($data2);
var_dump($data2);

// agregar datos a un arreglo
array_push($data2,'address');
echo '<hr>'; 
var_dump($data2);


