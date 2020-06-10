<?php
require "sub.php";
use Test1\TestClass;
use Test1\TestClass2;
function f(){
    echo 'ho<br>';
    $data = new TestClass();
    $data2 = new TestClass2();
    var_dump($data2);
    echo "<br>1<br>";
}
f();