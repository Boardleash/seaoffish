<?php

require_once "../../php/db-connect.php";

$confirm = filter_input(INPUT_POST, "confirm", FILTER_VALIDATE_BOOL);
$date = $_POST["date"];
$review = $_POST["review"];
$sardine_id= $_POST["sardine_id"];
$rating = $_POST["rate"];

if (! $confirm) {
  die("You must confirm if you want to submit your review.");
}

//Verify values that are output from the HTML file
//var_dump($confirm, $date, $review, $sardine_tin);

//Verify if mysqli exists on the server
//var_dump(function_exists('mysqli_connect'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  //Set up an SQL query
  $sql = "insert into sardine_ratings(sardine_id,review,rating,date) values(?,?,?,?)";
  $stmt = mysqli_stmt_init($dbConnection);

  if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($dbConnection));
  }

  mysqli_stmt_bind_param($stmt, "isis", $sardine_id, $review, $rating, $date);
  mysqli_stmt_execute($stmt);
  header('Location: ../../success.html');
  $dbConnection->close();
  exit();
}
