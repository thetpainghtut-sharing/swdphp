<?php 
  session_start();
  if(!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Page</title>
</head>
<body>
  Welcome to Dashboard!
  <!-- Logout -->
  <!-- Theme Switch -->
  <?php 
    $students = [
      ["name" => "John", "grade" => 50],
      ["name" => "Jane", "grade" => 80],
      ["name" => "Bob", "grade" => 33],
    ];
  ?>

  <table>
    <tr>
      <th>Name</th>
      <th>Grade</th>
    </tr>
    <?php foreach($students as $student): ?>
      <tr>
        <td><?= $student["name"] ?></td>
        <td><?= $student["grade"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>  
</body>
</html>