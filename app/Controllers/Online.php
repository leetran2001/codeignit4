<?php
namespace App\Controllers;
 
//use App\Libraries\Larry\Login\Login;
//use App\Libraries\Login;

class Online extends BaseController {
    public function index() {
         helper('form');
         echo view('Online/form');    
     }
}
 
