<?php

function getHand(){
    //pick cards
    //add picked card to array and make sure not picked twice
    //php pop
    global $deck;
    global $sum1, $sum2, $sum3, $sum4;
    $deck = array();
    //create deck
    for($i = 1; $i < 52;$i ++){
     $deck[] = $i;
    }
    
    shuffle ($deck);
    
    $tempValue;
    
    //array for every player
    global $player1;
    $player1 = array();
    
    while($sum1 < 38){
    $tempValue = array_pop($deck);
    if($tempValue%13 == 0)
    {
        $sum1 += 13;
    }
    
    else{
        $sum1 += $tempValue%13;
    }
    
    $player1[] = $tempValue;
    }
    
    global $player2;
    $player2 = array();
    
    while($sum2 < 38){
    $tempValue = array_pop($deck);
    
    if($tempValue%13 == 0)
    {
        $sum2 += 13;
    }
    
    else{
        $sum2 += $tempValue%13;
    }
    
    $player2[] = $tempValue;
    }
    global $player3;
    $player3 = array();
     
    while($sum3 < 38){
    $tempValue = array_pop($deck);
    
   if($tempValue%13 == 0)
    {
        $sum3 += 13;
    }
    
    else{
        $sum3 += $tempValue%13;
    }
    
    $player3[] = $tempValue;
    }
    
    global $player4;
    $player4 = array();
    
    while($sum4 < 38){
    $tempValue = array_pop($deck);
    
   if($tempValue%13 == 0)
    {
        $sum4 += 13;
    }
    
    else{
        $sum4 += $tempValue%13;
    }
    
    $player4[] = $tempValue;
    }
    
    // print_r($player1);
    // echo "<br/>";
    
    //  print_r($player2);
    // echo "<br/>";
    
    //  print_r($player3);
    // echo "<br/>";
    
    //  print_r($player4);
    // echo "<br/>";
    
    //echo $sum1. " " .$sum2. " " .$sum3. " " .$sum4;
    //4 if statements if between 1-13 first suit etc
    
}


function displayHand(){
    //get image file per card and show 
    global $player1, $player2, $player3, $player4;
    global $sum1, $sum2, $sum3, $sum4;
    for($i = 0; $i < count($player1); $i++){
        
    echo "<img src='./img/cards/$player1[$i].png'/>";
    }
    
    echo "&nbsp" . $sum1 . "<br/>";
    
    
    for($i = 0; $i < count($player2); $i++){
        
    echo "<img src='../img/cards/$player2[$i].png'/>";
    }
    echo "&nbsp" . $sum2 . "<br/>";
    
    for($i = 0; $i < count($player3); $i++){
        
    echo "<img src='../img/cards/$player3[$i].png'/>";
    }
    echo "&nbsp" . $sum3 . "<br/>";
    
    
    for($i = 0; $i < count($player4); $i++){
        
    echo "<img src='../img/cards/$player4[$i].png'/>";
    }
    echo "&nbsp" . $sum4 . "<br/>";
    
}

function displayWinner(){
    //adds up scores and picks winner + points
    
    
}

?>