
<html>
   <head>
      <style>
         body {
            background-image: url("http://orig13.deviantart.net/2a48/f/2013/195/3/f/unicorn_galaxy_by_petitemodevil-d6dhd9t.png");
         }

         form {
           position: absolute;
           top: 50%;
           left: 50%;
           margin-right: -50%;
           transform: translate(-50%, -50%)
         }
      </style>
   </head>
   <body>
      <div id="form">
         <form action="/" method="post" autocomplete="off">
            <h3 style="position: absolute; top: -40%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)">PASSWORD</h3>
            <p><input type="text" name="answer" /></p>
         </form>
         <br>
      </div>

         <?php
         $answerOne = 'eye';
         $answerTwo = '80';
         $answerThree = 'silence';

         if (stripos($_POST["answer"], $answerOne) !== false){
            echo '<h1><a href="http://imgur.com/Sx3cXPG" target="_blank"
                  style="position: fixed; top: 60%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)">http://imgur.com/Sx3cXPG</a></h>';
         } elseif (stripos($_POST["answer"], $answerTwo) !== false){
            echo '<h1><a href="http://imgur.com/zKnp3aT" target="_blank"
                  style="position: fixed; top: 60%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)">http://imgur.com/zKnp3aT</a></h>';
         } elseif (stripos($_POST["answer"], $answerThree) !== false){
            echo '<h1><a href="http://imgur.com/73qBBoN" target="_blank"
                  style="position: fixed; top: 60%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)">http://imgur.com/73qBBoN</a></h>';
         }
      ?>
   </body>
</html>
