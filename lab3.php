<?php
include 'functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 2: SILVERJACK</title>
        
        <style>
            @import url('./css/style.css');
        </style>
    </head>
    <body>
        
        <div class="outerlayer">
            <h1>SILVERJACK</h1>
            <span class="playerImage">
                 <?=displayImage()?>
             
                </span>
            <div class="innerlayer">
                 
             <?=getHand()?>
         <div class="displaySum">
            <?php
            echo $sum1 . "<br/><br/><br/>";
            echo $sum2 . "<br/><br/><br/>";
            echo $sum3 . "<br/><br/><br/>";
            echo $sum4 . "<br/><br/><br/>";
            ?>
        </div>
        <?=displayHand()?>
        </div>
        <br />
        <div>
            <h3>DISPLAY WINNER HERE</h3>
            <!-- Function for displaying winner -->
            <?=displayWinner()?>
        </div>
        
        <div>
            <form>
                <input type="Submit" value="Play Again"/>
            </form>
        </div>
        
        </div>
        
        
        
        

    </body>
</html>