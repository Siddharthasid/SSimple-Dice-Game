    <center>
    <h1>Dice Game</h1>
    

<?php

    $btn1 = "enabled";
    $btn2 = "enabled";
    //if we put @ before a line it will not generate an error
    //akhane error hoba karon prothom bar .html file a hidden tag nai so akhane kichu get korta parba naa.
    @$score1 = $_POST['score1'];
    @$score2 = $_POST['score2'];

    if(isset($_POST['player1'])){
        $rand1 = rand(1,6);
        echo "Player 1 : </br>";
        echo "<img src='$rand1.png' height=300px width=300px>";
        $score1 = ($score1 + $rand1);
        echo "</br></br></br></br>";
        echo "Score of player 1 is : ".$score1;
        $btn1 = "disabled";
        $btn2 = "enabled";

        if($rand1 == 6){
            $btn1 = "enabled";
            $btn2 = "disabled";
        }
    }

    if(isset($_POST['player2'])){
        $rand2 = rand(1,6);
        echo "Player 2 : </br>";
        echo "<img src='$rand2.png' height=300px width=300px>";
        @$score2 = ($score2 + $rand2);
        echo "</br></br></br></br>";
        echo "Score of player 2 is : ".$score2;
        $btn2 = "disabled";
        $btn1 = "enabled";

        if($rand2 == 6){
            $btn2 = "enabled";
            $btn1 = "disabled";
        }
    }

    if($score1 >= 50){
        echo "</br></br></br>";
        die("Player 1 has won the game.");
    }elseif($score2 >=50){
        echo "</br></br></br>";
        die("Player 2 has won the game.");
    }


?>
</center>
    <br><br><br>
    <center>
        
        <form action="game.php" method="POST">
            <input type="submit" name="player1" value="player1" <?=$btn1?>>
            <input type="hidden" name="score1" value="<?=$score1?>">
            <input type="submit" name="player2" value="player2" <?=$btn2?>>
            <input type="hidden" name="score2" value="<?=$score2?>">
        </form>
    </center>