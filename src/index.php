<html>
   <body style="background-image:url(http://wallpapercave.com/wp/80MQNXF.png)">
      <form action="/" method="post" autocomplete="off">
         <p>Password: <input type="text" name="answer" /></p>
         <p><input type="submit" /></p>
      </form>
      <br>
      <?php
      $answerOne = 'eye';
      $answerTwo = 'two';
      $answerThree = 'three';

      if (stripos($_POST["answer"], $answerOne) !== false){
         echo '<h1><a href="http://imgur.com/Sx3cXPG">http://imgur.com/Sx3cXPG</a></h1>';
      } elseif (stripos($_POST["answer"], $answerTwo) !== false){
         echo '<a href="http://www.exampletwo.com">http://www.exampletwo.com</a>';
      } elseif (stripos($_POST["answer"], $answerThree) !== false){
         echo '<a href="http://www.examplethree.com">http://www.examplethree.com</a>';
      }
      ?>
   </body>
</html>
