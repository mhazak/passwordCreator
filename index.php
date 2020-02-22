<!DOCTYPE html>
<html>
<head>
    <style>
        .inputs{
            margin-top:10px;
        }
        .display-1{
            color: white;
            font-weight: bold;
            text-align: center;
        }
    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Password creator</title>
</head>
<body>

<?php
$numbOfPass = 10; // number of passwords generated

// function for counter of character in one word in array
function charLength($arrName, $position){

    return $totLength = strlen((string)$arrName[$position]) - 1;
}

//function for generating password
function generatePassword(){
    $lengthOfPass = 9;
    // array for characters, which we want in our pass
   $chars = array("abcdefghijklmnopqrstuvwxyz", "ABCDEFGHJKLMNOPQRSTUVWXYZ", "123456789", ".-:!");

   // array, where we will add our password
   $final = array();


   /* as we have just 4 words in our array, we will need maybe longer password than that. This will repeat the cycle until we will fill
    to length as is needed
   */

    $j = 0;

    while($j !== $lengthOfPass){

        // loop, which will go through every word in array
     for($i = 0; $i < count($chars); $i++){

         //we will put random character to this variable and push it to the new array
        $symbol = $chars[$i][rand(0, charLength($chars,$i))];
        array_push($final, $symbol);
        $j++;

        //if we will reach final word in our array, we will start once again
        if($i === count($chars)) $i = 0;
        if($j === $lengthOfPass) break;
        }
    }

    //mixing of characters in array to make password more difficult
    shuffle($final);

    //print out our final password by loop
    for($k = 0; $k <= count($final); $k++)
        echo $final[$k];
    echo "\n";
}

function writePass($numbOfPass){
//loop for print as many password as needed
for ($x = 0; $x < $numbOfPass; $x++){
    generatePassword();
    }
}

writePass(10);
?>
</body>
</html>