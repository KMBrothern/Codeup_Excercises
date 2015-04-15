<?php

require_once 'model2.php';
require_once 'user2.php';

// Now test your new User model.

// Step 1: Create a new user using the User model
$user = new User();
$user->name = "New Guy";
$user->email = "newguy0012@gmail.com";
$user->save();

// Step 2: Update a user using the User model
$updatedPerson = User::find(13);
var_dump($updatedPerson);
$updatedPerson->name = "Whoever this guy is";
$updatedPerson->email = "Shadowguys@gmail.com";
$updatedPerson->save();

// Step 3: Delete a user using the User model
$deletePerson = User::find(13);
$deletePerson->delete();


// Retrieve the user by id -- Done ; someId would be replaced by the id 
// you're actually trying to find
$findUser = User::find(someId);
// Will print the found user's array info to the screen
print_r($findUser);

// Retrieve all users from table--Done
$findAll = User::all();
// Will print all user's info found in table and print to the screen
print_r($findAll)