<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once __DIR__ . "/../../../routes/people.php";
require_once __DIR__ . "/../../../routes/hero.php";
use People;
use Hero;

class Dodocontroller extends Controller
{
    public $people;

    public function __construct(People $people){
        $this->people = $people;
    }

    public function index(){
        dump(app());
        return "dodo";
    }
}
