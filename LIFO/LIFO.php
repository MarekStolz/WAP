<?php
class LIFO
{
    private $data;
   
    public function __construct()
    {
        $this->data = [];
    }

    public function push($value){
        array_push($this->data, $value);
    }

    public function pop()
    {
        return array_pop($this->data);
    }

};

    /*$array =[];
    $array->push(A);
    $array->push(B);
    $array->push(C);
    
/*
$array = new life()
$array->push(A);
$array->push(B);
$array->push(C);
$array->echo pop();
$array->echo top();
$array-> echo pop();
$array -> push(D);
$array -> pop();
*/
?>