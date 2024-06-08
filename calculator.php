<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Error: Division by zero";
    }
    return $num1 / $num2;
}

function exponent($num1, $num2) {
    return pow($num1, $num2);
}

function percentage($num1, $num2) {
    return ($num1 / 100) * $num2;
}

function sqrt($num) {
    return sqrt($num);
}

function log($num) {
    return log($num);
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

$result = 0;
$errorMessage = "";

switch ($operation) {
    case 'add':
        $result = add($num1, $num2);
        break;
    case 'subtract':
        $result = subtract($num1, $num2);
        break;
    case 'multiply':
        $result = multiply($num1, $num2);
        break;
    case 'divide':
        $result = divide($num1, $num2);
        break;
    case 'exponent':
        $result = exponent($num1, $num2);
        break;
    case 'percentage':
        $result = percentage($num1, $num2);
        break;
    case 'sqrt':
        $result = sqrt($num1);
        break;
    case 'log':
        $result = log($num1);
        break;
    default:
        $errorMessage = "Error: Invalid operation selected.";
        break;
}

if ($errorMessage) {
    echo $errorMessage;
} else {
    echo "Result: " . $result;
}
?>
