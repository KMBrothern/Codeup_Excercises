<?php

require_once 'model2.php';
require_once 'user2.php';

$model = new Model();

$all = Model::all();
print_r($all);

$oneUser = Model::find(4);
print_r($oneUser);
// Now test your new User model.

// Create a new user using the User model

// Retrieve the user by id
// Update the user
// Verify update in DB
// Create another user
// Retrieve all users
// Add a method to delete a record in teh Model class.
// Delete a user using the new method added to the base class.