<?php

function intToRoman($int){
    $roman = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
    $res = '';
    while($int > 0){
        foreach($roman as $roman_int => $int_value){
            if($int >= $int_value){
                $int -= $int_value;
                $res .= $roman_int;
                break;
            }
        }
    }
    return $res;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yusuf Hafidz - 120140234 Int To Roman</title>
</head>
<body>
    <form name="romanInput" action=".">
        <input type="text" name="input_int">
        <button type="submit">Convert</button>
    </form>
    <p style="max-width: 90%; word-wrap: break-word;">
        <?php
        if(isset($_GET["input_int"])){
            echo (intToRoman($_GET["input_int"]));
        }
        ?>
    </p>
</body>
</html>