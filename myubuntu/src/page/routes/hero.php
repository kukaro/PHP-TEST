<?php
require_once 'people.php';

class Hero{
    public $people;
    public function __construct(People $people){
        $this->people = $people;
    }
}