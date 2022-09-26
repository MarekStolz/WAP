<?php

require "LIFO.php";

$stacks = new LIFO();
$stacks->push('A');
$stacks->push('B');
$stacks->push('C');
echo $stacks-> pop();
echo $stacks-> pop();
$stacks -> push('D');
echo $stacks-> pop();
echo $stacks -> pop();
echo $stacks -> pop();