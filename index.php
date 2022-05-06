<!DOCTYPE html>
<html lang="en-ca">
   <head>
      <!-- Metadata -->
      <meta charset="utf-8">
      <meta name="description" content="Compound if statements, with PHP">
      <meta name="keywords" content="immaculata, ics2o">
      <meta name="author" content="Marcus Wehbi">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Code for the favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
      <link rel="manifest" href="./favicon/site.webmanifest">
      <!-- Link to CSS file -->
      <link rel="stylesheet" href="./css/style.css">
      <!-- Webpage Title -->
      <title>Museum Admission in JS</title>
   </head>
   <body>
      <!-- php echo to print the html to the page -->
      <?php 
         echo "<h1>Museum Admission in JS</h1>";
         echo "<h3>This program will tell the user the admission cost depending on their age and day of the week:</h3>";
      ?>
      <!-- form to get the users age -->
      <form action="./results.php" method="post" target="results">
         <label for="userAge">Age (years old):</label>
         <input type="number" id="userAge" step="1" min="0" placeholder="0 Years Old" name="userAge"><br><br>
         <!-- Select element to get day of the week -->						
					<label for="day">Day:</label>
					<select name="day" id="day">
						  <option value="">--Day of the Week--</option>
						  <option value="Sunday">Sunday</option>
						  <option value="Monday">Monday</option>
						  <option value="Tuesday">Tuesday</option>
						  <option value="Wednesday">Wednesday</option>
						  <option value="Thursday">Thursday</option>
						  <option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
					</select>
					<br><br>
         <input type="submit" value="Display Cost">
      </form>
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results"></iframe>
   </body>
</html>