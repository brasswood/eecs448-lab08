<?php

  $correctAnswers = 0;

  function printQuestion($qnum, $question, $correctAnswer)
  {
    echo "<p>Question " . $qnum . ": " . $question . "</p>";
    echo "<p style=\"margin-left: 40px\">You answered: " . $_POST["q" . $qnum] . "</p>";
    echo "<p style=\"margin-left: 40px\">Correct answer: " . $correctAnswer . "</p>";

    if ($_POST["q" . $qnum] == $correctAnswer)
    {
      echo "<p>You answered correctly.</p>";
      global $correctAnswers;
      $correctAnswers++;
    }
    echo "<br>";
  }

  echo "<html><body>";
  printQuestion(1, "What is the capital of Belize?", "Belmopan");
  
  printQuestion(2, "Where is KU located?", "Lawrence");
  
  printQuestion(3, "Who came up with the idea of Nondeterministic Finite Automata?", "Michael Rabin");
  
  printQuestion(4, "What was the world's busiest airport by passenger traffic in 2019?", "Atlanta International");
  
  printQuestion(5, "What is the Ultimate Question of Life, The Universe, and Everything?", "It cannot be known in a universe where the answer to the Question is known.");

  echo "<p>Total correct: " . $correctAnswers . "</p>";
  echo "<p>Score: " . sprintf("%.0f%%", $correctAnswers / 5 * 100) . "</p>";
  echo "</body></html>";

?>