<?php

require_once 'model2.php';
require_once 'user2.php';

// $model = new Model();

// $all = Model::all();
// print_r($all);

// $oneUser = Model::find(4);
// print_r($oneUser);

$user = new User();

$all = User::all();
print_r($all);

$oneUser = User::find(4);
print_r($oneUser);


// Now test your new User model.

// Create a new user using the User model
// $user->id = 6;
// $user->name = "New Guy";
// $user->email = "newguy0012@gmail.com";
// $user->save();

$user2 = new User();
$user2->id = 7;
$user2->name = "Im Getting Added";
$user2->email = "Imadded07@gmail.com";
$user2->save();
// Retrieve the user by id
// Update the user
// Verify update in DB
// Create another user
// Retrieve all users
// Add a method to delete a record in teh Model class.
// Delete a user using the new method added to the base class.