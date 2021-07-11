<?php
/*
;==========================================
; Title:  Guess Game
; Author: Walid BEREHIL
; Date:   6 Jul 2021
;==========================================
*/
$choose=0;
while ($choose!=3) {

    echo "\e[1;33m***************************\n";
    echo "Guess the number game\n";
    echo "***************************\n";
    echo "Choose : \n";
    echo "1-You Play vs AI\n";
    echo "2-AI play vs You\n";
    echo "3-Exit\n";
    echo "***************************\e[0m\n";
    $choose = intval(readline(">> "));

    switch ($choose) {
        case 1:
            YouVsAI();
            break;
        case 2:
            AIVsYou();
            break;
        case 3:
            echo "Exit \n";
            break;
        
        default:
            echo "Choose a valid number \n";
            break;
    }
}

function YouVsAI() {
echo "\e[33m***************************\n";
echo "Choose difficulty : \n";
echo "1-Easy\n";
echo "2-Medium\n";
echo "3-Hard\n";
echo "4-Impossible\n";
echo "***************************\e[0m\n";
$difficulty = 0;
while ($difficulty<1 || $difficulty>4) {
    $difficulty = intval(readline(">> "));
    switch ($difficulty) {
        case 1:
            $max = 10;
            break;
        case 2:
            $max = 100;
            break;
        case 3:
            $max = 1000;
            break;
        case 4:
            $max = 1000000;
            break;
        default:
            echo "Choose a valid number \n";
            break;
    }
}
echo "\e[33m***************************\e[0m\n";
    $countTry=0;
    $guess=0;
    $random_number = rand(1,$max);
    while($guess!=$random_number){
        echo "Guess a number between 1 and $max\n";
        $guess = intval(readline(">> "));
        if($guess < $random_number)
        {
        echo "\e[31m$guess : Sorry guess again. Too low. \e[0m\n";
        $countTry++;
        }
        if($guess > $random_number)
        {
        echo "\e[31m$guess : Sorry guess again. Too high. \e[0m\n";
        $countTry++;
        }
    }
    $countTry++;
    echo "\e[32m$guess : Congrat. You have guessed the number after $countTry try.\e[0m\n\n";
  }

  function AIVsYou() {
    echo "\e[33m***************************\n";
    echo "Choose difficulty : \n";
    echo "1-Easy\n";
    echo "2-Medium\n";
    echo "3-Hard\n";
    echo "4-Impossible\n";
    echo "***************************\e[0m\n";
    $difficulty = 0;
    while ($difficulty<1 || $difficulty>4) {
        $difficulty = intval(readline(">> "));
        switch ($difficulty) {
            case 1:
                $max = 10;
                break;
            case 2:
                $max = 100;
                break;
            case 3:
                $max = 1000;
                break;
            case 4:
                $max = 1000000;
                break;
            default:
                echo "Choose a valid number \n";
                break;
        }
    }
    echo "\e[33m***************************\e[0m\n";
    echo "Choose a number in your mind between 1 and $max\n";
    $countTry=0;
    $low = 1;
    $high = $max;
    $result="";
    while ($result != "c") {
        if($low!=$high)
        $guess=rand($low,$high);
        else
        $guess=$high;
        echo "\e[33mIs $guess too high (H), too low (L), or correct (C) ?\e[0m\n";
        $result = readline(">> ");
        if($result == "h")
        {
            $high = $guess - 1;
            $countTry++;
        }
        if($result == "l")
        {
            $low = $guess + 1;
            $countTry++;
        }
    }
    $countTry++;
    echo "\e[32m$guess : AI guessed your number correctly after $countTry try.\e[0m\n\n";
  }
?>