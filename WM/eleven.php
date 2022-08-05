<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
</head>
<body>
    <style>
        body{
            background-color: #111;
            color: #eee;
        }
    </style>
    <form action="./eleven.php" method="post">
<?php
//if a game has concluded (loaded from post and a hidden tickbox says so)
    //congrats [winner]
    //here's the scores
if($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['winner'] ?? 0))
{
    $P1Name = $_POST['P1Name'] ?? 'Blank 1';
    if($P1Name == '')
        $P1Name = 'Blank 1';
    $P2Name = $_POST['P2Name'] ?? 'Blank 2';
    if($P2Name == '')
        $P2Name = 'Blank 2';
    $P1Score = $_POST['P1Score'] ?? 0;
    $P2Score = $_POST['P2Score'] ?? 0;

    echo "Congratulations ";
    if($_POST['winner'] == 1)
    {
        echo $P1Name . '!';
        echo "<br>Winning score: $P1Score";
    }
    else
    {
        echo $P2Name . '!';
        echo "<br>Winning score: $P2Score";
    }
    echo '<br><br>';
}

//if no game is running
    //enter names
    //submit button
if(!($_POST['gameRunning'] ?? false))
{
    echo '<label for="P1Name">Player 1 name:</label><br>
    <input type="text" name="P1Name"><br><br>
    <label for="P2Name">Player 2 name:</label><br>
    <input type="text" name="P2Name"><br><br>
    <input type="checkbox" name="gameRunning" style="display:none" checked>
    <input type="submit" value="Play">';
}

//if a game is running
    //extract values from POST
    //display scores
    //generate rand(1, 6)
    //if player 1 turn
        //add the number to the player's score in the background
        //>player one go
        //roll button
    //if player 2 turn
        //add the number to the player's score in the background
        //>player two go
        //roll button
    //prepare values for posting
    //if either score has reached 30, tick the winner box
if($_POST['gameRunning'] ?? false)
{
    //extract values
    $P1Name = $_POST['P1Name'] ?? 'Blank 1';
    if($P1Name == '')
        $P1Name = 'Blank 1';
    $P2Name = $_POST['P2Name'] ?? 'Blank 2';
    if($P2Name == '')
        $P2Name = 'Blank 2';
    $P1Score = $_POST['P1Score'] ?? 0;
    $P2Score = $_POST['P2Score'] ?? 0;
    $P1Turn = $_POST['P1Turn'] ?? true;
    
    //score display and roll generation
    echo "Score:<br>
    $P1Name - $P1Score<br>
    $P2Name - $P2Score<br><br>";
    $dieRoll = rand(1, 6);

    //turn logic
    if($P1Turn)
    {
        $P1Score += $dieRoll;
        echo "$P1Name's turn:<br>";
        echo '<input type="submit" value="Roll a d6">';
    }
    else
    {
        $P2Score += $dieRoll;
        echo "$P2Name's turn:<br>";
        echo '<input type="submit" value="Roll a d6">';
    }

    
    //echo posting forms
    echo "<input type='text' style='display:none' name='P1Name' value='$P1Name'>";
    echo "<input type='text' style='display:none' name='P2Name' value='$P2Name'>";
    echo "<input type='number' style='display:none' name='P1Score' value='$P1Score'>";
    echo "<input type='number' style='display:none' name='P2Score' value='$P2Score'>";
    if($P1Score > 29)
    {
        echo '<input type="number" name="winner" value="1" style="display:none">';
    }
    else if($P2Score > 29)
    {
        echo '<input type="number" name="winner" value="2" style="display:none">';
    }
    else
    {
        if ($P1Turn)
            echo '<input type="number" name="P1Turn" style="display:none" value="0">';
        echo '<input type="checkbox" name="gameRunning" style="display:none" checked>';
    }
    //player turn
    //game state
}


?>
    </form>
</body>
</html>