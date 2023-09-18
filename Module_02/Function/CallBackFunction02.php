<?php
//filter people by gender
$people =[
        ['name'=>'A','gender'=>'M'],
        ['name'=>'B','gender'=>'M'],
        ['name'=>'C','gender'=>'F'],
        ['name'=>'D','gender'=>'F'],
        ['name'=>'F','gender'=>'M'],
];

function isMale($person){
    if($person['gender'=='M']){
        return true;
    }
    else{
        return false;
    }
}

function isFemale($person){
    if($person['gender'=='M']){
        return true;
    }
    else{
        return false;
    }
}

$male = array_filter($people,'isMale');

print_r($male);
?>