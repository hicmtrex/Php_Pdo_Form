<?php
require('database.php');

// Get ID
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

// Delete the city from the database
if ($id) {
    $query = 'DELETE FROM city  
              WHERE ID = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

$deleted = true;

// Display the initial page
include('index.php');
