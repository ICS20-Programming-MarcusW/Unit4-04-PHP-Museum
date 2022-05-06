<?php
  // get the users age input + get the users day input
  $age = $_POST['userAge'];
  $day = $_POST['day'];
  $cost = "";

  if ($age < 5 || $age > 95)
  {
    	// display if they get in free
      $cost = "<h4>The cost is FREE for you.</h4>";
  }
  
  elseif ( ($day == "Tuesday") || ($day == "Thursday") || ($age >=12) && ($age <=21) )
  {
  	// display if they get a student discount
      $cost = "<h4>You get a student discount.</h4>";
  }
  
  elseif (($age > 0) || ($day != ""))
  {
      	// display if they have to pay regular price
      $cost = "<h4>You have to pay regular price.</h4>";
  }

  // print the cost
  echo $cost;
?>
