<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of HomeController
 *
 * @author Arif Budiman
 */
class HomeController {
    
    public function __construct()
    {
        
    }
    
    public function index()
    {
        return view('home');
    }
}
