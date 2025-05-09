// If/Else: Write a script that checks if a number is even or odd.

<?php
  $number = 5;
  if($number % 2 == 0) {
    echo "$number is even";
  } else {
    echo "$number is odd";
  }
?>

// Switch: Create a simple calculator using switch for operations (+, -, *, /).
<?php
  $num1 = 10;
  $num2 = 5;
  $action = "+";

  switch ($action) {
    case "+":
      echo $num1 + $num2;
      break;
    case "-":
      echo $num1 - $num2;
      break;
    case "*":
      echo $num1 * $num2;
      break;
    case "/":
      echo $num1 / $num2;
      break;
    default:
      echo "Error";
      break;
  }
?>

