<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's PHP Museum Pass Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Museum Pass in PHP - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Museum Pass in PHP</h1>"; ?>
    <?php
      echo "<h3>Welcome!</h3>";
      echo "<p>Welcome! This web page will help you plan for your visit to the museum by determining if you are eligible for discounted pricing. Please enter your information in the form below:</p>";
    ?>
    <!-- Form for user input -->
    <form action="./check.php" method="post" target="results">
      <label for="age">How old are you?</label>
      <!-- Max is 120 because it is highly unlikely that anyone who lives older than this age will visit the museum -->
      <input type="number" step="1" min="1" max="120" name="user-age" placeholder="Your age..."><br><br>
      <label for="day">What day of the week will you visit the museum?</label>
      <select id="day" name="day">
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
      </select><br><br>
      <input type="submit" id="button" value="Check">
    </form>
    <iframe id="results" name="results"></iframe>
  </body>
</html>