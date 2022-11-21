<html>
<body>
<!--Your code goes here-->
$_GET:
<br>
First Number to Add:
<br>
<?= $_GET["firstNumberAdd"]?>
<br>
Second Number to Add:
<br>
<?= $_GET["secondNumberAdd"]?>
<br>
<?php 
$first_number = $_GET["firstNumberAdd"];
$second_number = $_GET["secondNumberAdd"];
$addition = $first_number + $second_number;
echo "The first number (" . $first_number . ") plus the second number (" . $second_number . ") results in = " .$addition;
?>
<br>

<a href="index.php">Reset</a>
</body>
</html>
