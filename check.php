<?php
  //initializing variables
  $cost = "Please make a selection above.";
  //declaring and defining variables
  $userAge = intval($_POST["user-age"]);
  $day = $_POST["day"];
  //setting constants for age thresholds
  //I learned that I'm supposed to put quotation marks around the constant name after a Super Linter error 
  //Learned from https://www.w3schools.com/php/php_constants.asp
  define("CHILD_FREE", 5);
  define("ELDERLY_FREE", 95);
  define("STUDENT_MINIMUM", 12);
  define("STUDENT_MAXIMUM", 21);
  //using compound if statements to determine cost
  if (($userAge < CHILD_FREE) || ($userAge > ELDERLY_FREE)) {
    $cost = "You get in for free!";
  }
  //Added extra brackets around all conditions to fix error - the computer was not processing the || (or) symbol when it was outside of brackets
  else if ((($userAge >= STUDENT_MINIMUM) && ($userAge <= STUDENT_MAXIMUM)) || (($day == "Thursday") || ($day == "Tuesday"))) {
    $cost = "You get a discount with student pricing!";
  }
  else {
    $cost = "You have to pay the regular price to visit the museum.";
  }
  //displaying the appropriate cost to the screen
  echo "$cost";
?>
