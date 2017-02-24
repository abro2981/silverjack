<?php

function getHand(){
    //pick cards
    //add picked card to array and make sure not picked twice
    //php pop
    global $deck;
    global $sum1 , $sum2, $sum3, $sum4;
    global $scores;
    $scores = array();
    $sum1 = 0;
    $sum2 = 0;
    $sum3 = 0;
    $sum4 = 0;
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
    $scores = array($sum1,$sum2,$sum3,$sum4);
    
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

 //get image file per card and show for each player 1-4
function displayHand(){
    global $player1, $player2, $player3, $player4;
    global $sum1, $sum2, $sum3, $sum4;
    for($i = 0; $i < count($player1); $i++){
        
    echo "<img src='./img/cards/$player1[$i].png'/>";
    }
    
    echo "<br/>";
    
    
    for($i = 0; $i < count($player2); $i++){
        
    echo "<img src='./img/cards/$player2[$i].png'/>";
    }
   echo "<br/>";
    
    for($i = 0; $i < count($player3); $i++){
        
    echo "<img src='./img/cards/$player3[$i].png'/>";
    }
   echo "<br/>";
    
    
    for($i = 0; $i < count($player4); $i++){
        
    echo "<img src='./img/cards/$player4[$i].png'/>";
    }
   echo "<br/>";
    
}

//display image of player in random position
//feel free to change the images; they are just placeholders
function displayImage(){
    $playerImages = array("Miguel" => "miguel", "SpongeBob" => "spong","Brian" => "confuse", "Tao" => "tao");
    global $name;
    $name = array();
    $index = 0;
   while(count($playerImages) > 0){
        $key = array_rand($playerImages); //get random key position
        $value = $playerImages[$key]; //get value associated with key
       
     echo $key. "    ". "<img style='align: left'src='./img/$value.jpg'/>" . " <br/>"; //print player image
    unset($playerImages[$key]); //remove key/value from playerImages
    $name[$index] = $key; //store key into name array
    $index++;
}
}


function displayWinner(){
    //adds up scores and picks winner + points
    //$name contains names of players 
    //take max of all scores
    global $players,$winner,$scores;
    global $sum1, $sum2, $sum3, $sum4;
    $players = array("Miguel","Brian","Tao","SpongeBob");
    $scores = array($sum1,$sum2,$sum3,$sum4);
    $max = 0;
    $distance;
    $maxDistance;
        //set scores
    $distance = 42 -$scores[0];    
        for($i = 0; $i < 3; $i++){
            if($scores[$i]>$max){
               $max = $scores[$i];//set max of scores array to 
            }
        }
         for($i = 0; $i < 3; $i++){
            if($scores[$i]==$max){//if the current array score equals the max then winner
               
               echo "the winner is ". $players[0] . $scores[$i] ." points.";
               echo "<br/>";
            }
         }
    }



?>