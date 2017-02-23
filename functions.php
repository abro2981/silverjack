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
    
    print_r($player1);
    echo "<br/>";
    
     print_r($player2);
    echo "<br/>";
    
     print_r($player3);
    echo "<br/>";
    
     print_r($player4);
    echo "<br/>";
    
    echo $sum1.$sum2.$sum3.$sum4;
    
}


function displayHand(){
    //get image file per card and show scores
    
}

function displayWinner(){
    //adds up scores and picks winner + points
    
    
}






?>