<?php

function getHand(){
    //pick cards
    //add picked card to array and make sure not picked twice
    global $deck;
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