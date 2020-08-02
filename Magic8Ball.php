<?php

function magic8Ball(){
    echo "Ask any Yes/No Question about your future???\n";
    $questionYN = readline(">> ");

    echo "So.... you would like to know: {$questionYN}\n";
    echo "         _...._
       .`      `.
      / ***      \         The Crystal Ball
     : **         :         says.........
     :            :
      \          /
       `-.,,,,.-'
        _(    )_
       )        (
      (          )
       `-......-`lc\n";

    $magicAnswerRandom = rand(0,19);
    // echo $magicAnswerRandom;
    echo "\n";

    $answersArray = ["It is certain.",
        "It is decidedly so.",
        "Without a doubt.",
        "Yes – definitely.",
        "You may rely on it.",
        "As I see it, yes.",
        "Most likely.",
        "Outlook good.",
        "Yes.",
        "Signs point to yes.",
        "Reply hazy, try again.",
        "Ask again later.",
        "Better not tell you now.",
        "Cannot predict now.",
        "Concentrate and ask again.",
        "Don't count on it.",
        "My reply is no.",
        "My sources say no.",
        "Outlook not so good.",
        "Very doubtful."];

    echo $answersArray[$magicAnswerRandom]."\n";

}

magic8Ball();