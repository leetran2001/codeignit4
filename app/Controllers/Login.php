<?php
namespace App\Controllers;
 
//use App\Libraries\Larry\Login\Login;
//use App\Libraries\Login;

class login extends BaseController {
    public function index() {
         helper('form');
         helper('url');
        echo view('Form/index');    
     }
}
 
