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
    //array for every player
    $player1 = array();
    $player2 = array();
    $player3 = array();
    $player4 = array();
    
    //for player i
    //loop for palyers and one for points (nested)
    for($i = 1; $i < 5;$i++){//players getting cards
    
    
        //while sum is score parameters
    }
    
    
    
    
    
    
    
    $suitArray = array("clubs","diamonds","hearts","spades");
    $randomIndex  = rand(0,3);
    $randomSuit = $suitArray[$randomIndex];
}


function displayHand(){
    //get image file per card and show scores
    
}

function displayWinner(){
    //adds up scores and picks winner + points
    
    
}






?>