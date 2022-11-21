<html>
<body>
<!--Your code goes here-->
$_GET:
<br>
First Number to Divide:
<br>
<?= $_GET["firstNumberDivide"]?>
<br>
Second Number to Divide:
<br>
<?= $_GET["secondNumberDivide"]?>
<br>
<?php 
$first_number = $_GET["firstNumberDivide"];
$second_number = $_GET["secondNumberDivide"];
$division = $first_number / $second_number;
echo "The first number (" . $first_number . ") plus the second number (" . $second_number . ") results in = " .$division;
?>
<br>

<a href="index.php">Reset</a>
</body>
</html>
