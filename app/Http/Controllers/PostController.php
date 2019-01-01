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
class PostController {
    
    public function __construct()
    {
        
    }
    
    public function index()
    {
        return view('post.index');
    }
}
