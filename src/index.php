<html>
   <body>
      <form action="/" method="post" autocomplete="off">
         <p>Riddle answer: <input type="text" name="answer" /></p>
         <p><input type="submit" /></p>
      </form>
      <br>
      <?php
      $answerOne = 'eye';
      $answerTwo = 'two';
      $answerThree = 'three';

      if (stripos($_POST["answer"], $answerOne) !== false){
         echo '<a href="http://www.exampleone.com">http://www.exampleone.com</a>';
      } elseif (stripos($_POST["answer"], $answerTwo) !== false){
         echo '<a href="http://www.exampletwo.com">http://www.exampletwo.com</a>';
      } elseif (stripos($_POST["answer"], $answerThree) !== false){
         echo '<a href="http://www.examplethree.com">http://www.examplethree.com</a>';
      }
      ?>
   </body>
</html>
