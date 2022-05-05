<?php
  //initializing variables
  $cost = "Please make a selection above.";
  //declaring and defining variables
  $userAge = intval($_POST["user-age"]);
  $day = $_POST["day"];
  //using compound if statements to determine cost
  if (($userAge < 5) || ($userAge > 95)) {
    $cost = "You get in for free!";
  }
  //Added extra brackets around all conditions to fix error - the computer was not processing the || (or) symbol when it was outside of brackets
  else if ((($userAge >= 12) && ($userAge <= 21)) || (($day == "Thursday") || ($day == "Tuesday"))) {
    $cost = "You get a discount with student pricing!";
  }
  else {
    $cost = "You have to pay regular price to visit the museum.";
  }
  //displaying the appropriate cost to the screen
  echo "$cost";
?>
