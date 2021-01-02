<?php
namespace App\Libraries;

class Login{
	public static function theform() {
		echo 'This is login form';
        echo form_open('email/send');

	}
}
