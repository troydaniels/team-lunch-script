<html>
   <body>
      <form action="/" method="post">
         <p>Riddle answer: <input type="text" name="answer" /></p>
         <p><input type="submit" /></p>
      </form>
      <br>
      <?php
      $answerOne = 'one';
      $answerTwo = 'two';
      $answerThree = 'three';

      if (strpos($_POST["answer"], $answerOne) !== false){
         echo '<a href="http://www.exampleone.com">http://www.exampleone.com</a>';
      } elseif (strpos($_POST["answer"], $answerTwo) !== false){
         echo '<a href="http://www.exampletwo.com">http://www.exampletwo.com</a>';
      } elseif (strpos($_POST["answer"], $answerThree) !== false){
         echo '<a href="http://www.examplethree.com">http://www.examplethree.com</a>';
      }
      ?>
   </body>
</html>
