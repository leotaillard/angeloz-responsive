<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['nom']))
		$errors['nom'] = 'Le nom est requis.';
	if (empty($_POST['nom']))
		$errors['prenom'] = 'Le prénom est requis.';

	if (empty($_POST['email']))
		$errors['email'] = 'L\'email est requis.';

	if (empty($_POST['telephone']))
		$errors['telephone'] = 'Le numéro de téléphone est recquis.';


// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors process our form, then return a message

		// DO ALL YOUR FORM PROCESSING HERE
		// THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

		// show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = '<img class="border" src="img/ronnie-dance.gif" alt="Ronnie dance" />';
		$data['message'] .= '<p>Oh my fucking god, it will be legendary!</p>';

		$content = "";
		$content .= "Prénom : ".$_POST['prenom'].'<br>';
		$content .= "Nom : ".$_POST['nom'].'<br>';
		$content .= "Email : ".$_POST['email'].'<br>';
		$content .= "Message : ".$_POST['message'].'<br>';
		$content .= "Game 1 : ".$_POST['game-1'].'<br>';
		$content .= "Game 2 : ".$_POST['game-2'].'<br>';
		$content .= "Game 3 : ".$_POST['game-3'].'<br>';
		$content .= "Game 4 : ".$_POST['game-4'].'<br>';
		$content .= "Game 5 : ".$_POST['game-5'].'<br>';



		// Envoi du mail
		mail('leo.taillard@gmail.com', 'Invitation Brazil the way', $content);
	}

	// return all our data to an AJAX call
	echo json_encode($data);