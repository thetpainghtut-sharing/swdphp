<!-- // If/Else: Write a script that checks if a number is even or odd. -->
<?php
  $number = 5;
  if($number % 2 == 0) {
    echo "$number is even";
  } else {
    echo "$number is odd";
  }
?>

<!-- // Switch: Create a simple calculator using switch for operations (+, -, *, /). -->
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

<!-- // function default value -->
<?php
  function greetting($name = "Guest") {
    return "Hello, $name";
  }
  $result = greetting();
  echo "<br>";
  echo $result;

  // default value, 
  // type restriction
  // scope (local, global)


  // Project Start
  // PO - Product Owner | PCo - Project Coordinator, 
  // BA - Business Analyst, 
  // PM - Project Manager, 
  // QA - Quality Assurance, 
  // FE - Front End, 
  // BE - Back End 

  // Array
  // 1. Indexed Array
  // 2. Associative Array
  // 3. Multidimensional Array

  // 1. Indexed Array - eg
  $fruits = array("Apple", "Orange", "Banana");
  // foreach
  foreach ($fruits as $fruit) {
    echo "<br>";
    echo $fruit;
  }


  // 2. Associative Array - eg
  $person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
  );
  // foreach loop
  foreach ($person as $key => $value) {
    echo "<br>";
    echo $key . ": " . $value;
  }

  // Ex
  $mark = array(
    "Aung" => 80,
    "Kyaw Kyaw" => 40,
    "Hla Hla" => 70
  );

  foreach ($mark as $key => $value) {
    if ($value >= 50) {
      echo "<br>";
      echo $key . " Passed";
    } else {
      echo "<br>";
      echo $key . " Failed";
    }
  }


  // Todo
  // create new file - form.php
  // HTML form (name - text, age - number, city - text, submit - button)
?>