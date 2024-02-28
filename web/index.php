<?php
$path = $_SERVER["REQUEST_URI"];

if($path == "/app/feedback"){
  $nome = $_POST["name"];
  $email = $_POST["email"];
  $feedback = $_POST["feedback"];

  echo "\nNome: " . $nome; 
  echo "\nEmail: " . $email;
  echo "\nFeedback: " . $feedback;

}
if($path == "/app"){
  echo "OLa mundo!";
}
?>
