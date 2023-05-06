<?php

require "config.php";

use App\PetRecord;

try {
	PetRecord::register('Sam', 'male', '2019-04-23', 'Lloyd', 'sure@gmail.com','Sampaloc Manila','0934534224' );
	echo "<li>Added 1 pet";
	$pets = [
		[
			'pet_name' => 'Fin',
			'pet_gender' => 'male',
			'birthdate' => '2019-12-25',
			'owner_name' => 'Albert',
			'email' => 'fjekd@@gmail.com',
			'address' => 'bulacan',
			'contact_number' => '09192979729'
		],
		[
			'pet_name' => 'Ash',
			'pet_gender' => 'female',
			'birthdate' => '2018-01-18',
			'owner_name' => 'Josh',
			'email' => 'rfewrh@gmail.com',
			'address' => 'pampanga',
			'contact_number' => '09630484339'
		]
	];
	
	PetRecord::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

