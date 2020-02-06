<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/x-icon" href="../jayswanme.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="DDCC.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web|Zilla+Slab&display=swap" rel="stylesheet">
  <title>Kent Creator | Homepage</title>
</head>
<body>
  <div id="block">
  <h1>Welcome to Jason's D&D Character Creator</h1>
  <?php 
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      
      
      require "dbConnect.php";
      $db = get_db();

      $characterInfo = $db->prepare("SELECT * FROM character;");
      $characterInfo->execute();

      while($cRow = $characterInfo->fetch(PDO::FETCH_ASSOC)) {
          $characterName = $cRow["character_name"];
          $characterRace = $cRow["race"];
          $characterClass = $cRow["class"];
          $characterLevel = $cRow["character_level"];

          echo "<p>$characterName is a $characterRace $characterClass and is level $characterLevel.
          <a href=\"information.php\">view $characterName's inventory here</a></p>";
      }

      // echo "<p>$characterName is a $characterRace $characterClass and is level $characterLevel.
      // <a href=\"information.php\">view $characterName's inventory here</a></p>";
  ?>
  <a href="../landingPage.php">Back to Landing Page</a>
  </div>
</body>
</html>