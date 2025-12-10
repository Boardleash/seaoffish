<?php

require_once "../../php/db-connect.php";

$confirm = filter_input(INPUT_POST, "confirm_two", FILTER_VALIDATE_BOOL);
$anchovy_index = filter_input(INPUT_POST, "other", FILTER_VALIDATE_INT);

if (! $confirm) {
  die("You must confirm if you want to submit your review.");
}

//Verify values that are output from the HTML file
//var_dump($confirm, $anchvoy_index);

//Verify if mysqli exists on the server
//var_dump(function_exists('mysqli_connect'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  //Set up an SQL query
  $sql = "update other set consumed=consumed+1 where id=?";
  $stmt = mysqli_stmt_init($dbConnection);

  if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($dbConnection));
  }

  mysqli_stmt_bind_param($stmt, "i", $anchovy_index);
  mysqli_stmt_execute($stmt);
  header('Location: ../../success.html');
  $dbConnection->close();
  exit();
}
