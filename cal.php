<!DOCTYPE html>
<html>
<head> </head>
<body>
<div style = "margin-top:50px">
<?php
//definimng of parameters
//$a = 20;
//$b = 10;
//addition operation
//$c = $a + $b;
//echo "addition operation: $c <br/>";
// subtraction operation
//$c = $a - $b;
//echo "subtraction operation: $c <br/>";
//division operation
//$c = $a / $b;
//echo "division operation: $c <br/>";
//multiplication operation
//$c = $a * $b;
//echo "multiplication operation: $c <br/>";
//modulus operation
//$c = $a % $b;
//echo "modulus operation: $c <br/>"
// building a calculator
if(isset($_POST['submit']))
{
if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
//check number values
{
    if($_POST['operation'] == 'plus')
    {
        $total = $_POST['number1'] + $_POST['number2'];
    }
    if($_POST['operation'] == 'minus')
    {
        $total = $_POST['number1'] - $_POST['number2'];
    }
    if($_POST['operation'] == 'times')
    {
        $total = $_POST['number1'] * $_POST['number2'];
    }
    if($_POST['operation'] == 'divided by')
    {
        $total = $_POST['number1'] / $_POST['number2'];

    }
if($_POST['operation'] == 'modulus')
    {
        $total = $_POST['number1'] % $_POST['number2'];
    }
    //print total to the browser
    echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";

} else {
    //print error message
    echo "numeric values are required";
}

}
?>
 <form method = "post" action="cal.php">
 <input name = "number1" type="text" style = "width: 150px; display inline"/>
 <select name = "operation">
 <option value = "plus"> + </option>
 <option value = "minus"> - </option>
 <option value = "times"> * </option>
 <option value = "divided by"> / </option>
 <option value = "modulus"> % </option>
 </select>
 <input name = "number2" type="text" style = "width: 150px; display inline"/>
 <input name = "submit" type="submit" value = "calculate" style = "width: 150px; display inline"/>
 </form>