<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$oP = $_POST['opr'];
$result = 0.0;
switch($oP)
{
	case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
	default: echo "Error";
}
echo $result;
?>