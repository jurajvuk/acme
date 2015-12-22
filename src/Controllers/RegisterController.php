<?php

namespace Acme\Controllers;

use Acme\Models\User;
use Acme\Validation\Validator;

class RegisterController extends BaseController
{
	
	public function getShowRegisterPage()
    {
        echo $this->blade->render("register", ['title' => 'Register']);
    }

    public function getShowLoginPage()
    {
        echo $this->blade->render("login", ['title' => 'Login']);
    }

    public function postShowRegisterPage()
    {
        // validate data

        $validation_data = [
            "first_name" => "min:3",
            "last_name" => "min:3",
            "email" => "email|equalTo:verify_email",
            "verify_email" => "email",
            "password" => "min:3|equalTo:verify_password",
            ];

        $validation = new Validator();
        
        $errors = $validation->isValid($validation_data);

        if (sizeof($errors) > 0) {
        	$_SESSION['msg'] = $errors;
        	//header("Location: /register");
        	echo $this->blade->render('register', ['title' => 'Register']);
        	unset($_SESSION['msg']);
        	exit();
        } else {
        	$user = new User;
	        $user->first_name = $_POST["first_name"];
	        $user->last_name = $_POST["last_name"];
	        $user->email = $_POST["email"];
	        $user->password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	        $user->save();

	        echo "Posted!";
        }

        
    }
}