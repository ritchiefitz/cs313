<?php

//  Register New User!
	$options = [
	    'cost' => 11,
	];

	// Get the password from post
	$passwordFromPost = "cs313";

	$hash = password_hash($passwordFromPost, PASSWORD_BCRYPT, $options);

	echo $hash;

//  Check Login!
	$passwordFromPost = "cs313";
	$hashedPasswordFromDB = $hash;

	if (password_verify($passwordFromPost, $hashedPasswordFromDB)) {
	    echo 'Password is valid!';
	} else {
	    echo 'Invalid password.';
	}
?>