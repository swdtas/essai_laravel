<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function methode1($userName){
        return'bonjour'.' '.$userName;
    }
    public function example(){
        echo'ceci est un exemple';
    }
}
