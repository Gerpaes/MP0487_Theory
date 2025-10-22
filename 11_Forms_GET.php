<!DOCTYPE html>
<html>
<body>
<?php
// GET
// get information, parameters in url -> SELECT DATA
// non sensitive data
// limit input data
// possible bookmark page
?>
<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    $surname = htmlspecialchars($_GET['surname']);
    echo "<h3>Hello, $name . $surname!</h3>";
}
?>

<h2>Simple Greeting Form</h2>
<form method="get">
  Name: <input type="text" name="name">
  SurName: <input type="text" name="surname">
  num1: <input type="number" name="number1">
  num2: <input type="number" name="number2">
  <input type="submit" value="Submit">
</form>


</body>
</html>
