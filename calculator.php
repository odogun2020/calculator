<html>
<body>
<Title>SIMPLE CALCULATOR</Title>

<h1>SIMPLE CALCULATOR</h1>

<form action="calculator.php" method="post">
Enter number1 : <input type=”text” name="num1">
<br>
<br>
Enter Operator: <input type="text" name="op">
<br>
<br>
Enter number2 : <input type="text" name="num2">
<br>
<br>
<button type="submit" name="Calculate">Calculate</button>
</form>
</body>
</html>
<?php

if (isset($_POST["Calculate"])){
$num1=$_POST["num1"];
$num2=$_POST["num2"];
global $result;

switch($_POST["op"]){

case "+":
    $result=  $num1+$num2;
    echo $result;
break;

case "-":
    $result=$num1-$num2;
    echo $result;
break;

case "*":
$result= $num1*$num2;
echo $result;
break;

case "/":
$result=$num1/$num2;
echo $result;
break;

case "=":
if ($num1==$num2){
echo "Yes They are equal: enter a  valid operator ";
}
else
echo "No They are not equal :enter a  valid operator:";
break;

default:
echo "Plz Enter a valid operator";
}
}

?>