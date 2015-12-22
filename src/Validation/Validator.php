<?php 

namespace Acme\Validation;

use Respect\Validation\Validator as Valid;

class Validator 
{
	
	public function isValid($validation_data) {
		
		$errors = "";

		foreach ($validation_data as $name => $value) {
			
			$rules = explode("|", $value);


			foreach ($rules as $rule) {
				
				$exploded = explode(":", $rule);

				if (isset($_POST[$name])) {
					switch ($exploded[0]) {
						case 'min':
							$min = $exploded[1];
							if (Valid::alpha()->length($min)->Validate($_POST[$name]) == false) {
								$errors[] = $name . " must be at least " . $exploded[1] . " characters long!";
							}
							break;
						
						case 'email':
							if (Valid::email()->validate($_POST[$name]) == false) {
								$errors[] = $name . " must be a valid email address!";
							}
							break;

						case 'equalTo':
							if (Valid::equals($_POST[$name])->validate($_POST[$exploded[1]]) == false) {
								$errors[] = $name . "'s don't match!";
							}
							
							
							break;

						default:
							# code...
							break;
					}
				} else {
					$errors[] = "No value found!";
				}

			
			
			}

		}
		
		return $errors;
		

	}

}