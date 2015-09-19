<!DOCTYPE html>
<html>
   <head>
      <?php
         //require_once "functions.php";
         
         //$wordLilst = readTextFile("wordList.txt");
      ?>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <title>Scott Johnston P2 Dynamic Web Apps</title>

   </head>
   <body>
      <div class="container" >

         <!-- This is the jumbotron for the site************************* -->
         <header class="jumbotron">
            <h1>Project 2<br><small>Scott Johnston</small></h1>
         </header>

         <!-- Links to the other projects-->
         <div class="row">
            <div class="center-block">
               <ul class="list-inline nav nav-tabs nav-justified col-md-12  col-xs-12 col-sm-8 coll-sm-offset-1 col-lg-12 ">
                  <li><a href="../p1/index.php" data-toggle="tooltip" title="Project 1"> Project 1</a></li>
                  <li><a href="https://github.com/scottjohnston/p1" data-toggle="tooltip" title="Github P1">Git project 1</a></li>
                  <li><a href="index.php" data-toggle="tooltip" title="Project 2">Project 2</a></li>
                  <li><a href="https://github.com/scottjohnston/p2" data-toggle="tooltip" title="Github P2">git project 2</a></li>
                  <li><a href="#" data-toggle="tooltip" title="Project 3">Project 3</a></li>
                  <li><a href="#" data-toggle="tooltip" title="Github P3">git project 3</a></li>
                  <li><a href="#" data-toggle="tooltip" title="Project 4">Project 4</a></li>
                  <li><a href="#" data-toggle="tooltip" title="Github P4">git project 4</a></li>
               </ul>
            </div>
         </div>




         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">
               <h3>Put the form in here</h3>
               <p>
                  Explanation of the site
               </p>
            </section>
         </div>
         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">
               <h3>more stuff</h3>
               <p>
                  <?php
                     require_once "logic.php";
                  ?>
               </p>


               <form action="index.php" method="get" class="form-horizontal">
                  <label for="numberOfWords">Number of words</label>
                  <input maxlength="1" type="text" name="numberOfWords" id="numberOfWords" value="4"> <br>

                  <input type="checkbox" name="numberInc" value="1">Include a number?<br>

                  <input type="radio" name="separator" value=" ">Use a space as a separator<br>
                  <input type="radio" name="separator" value="-">Use a - as a separator<br>
                  <input type="radio" name="separator" value="1">Use a camel case as a separator<br>

                  <label for="specChar">Number of special Characters</label>
                  <input maxlength="1" type="text" name="specChar" id="specChar" value="0"><br>

                  <label for="maximumLength">Maximum Length</label>
                  <input maxlength="2" type="text" name="maximumLength" id="maximumLength" value=""> <br>
                 
                  <p>
                     <input type="submit" value="Generate Password">
                  </p>
               </form>
            
            </section>
         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">   


            </section>
            </div>





           <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">    
               <p>
                  This is the function test
               </p>
               <?php
                    $pass = selectWords($wordLilst, 4, "-");

                    $pass = addSpecialChar($pass, "@", 2);

                  
                  echo "<br>"."omg"." add numbers </br>";

                  $pass = addNumbers($pass, 3);

                  echo $pass;

                  echo "<br>"."omg max length </br>";

                  $pass = maxLength($pass, 20);

                  echo $pass;

                   echo "<br>"."camel case </br>";


                  echo $pass;

               ?>
            </section>
         </div>
         </div>
      <footer class="text-center">
         <a href="http://dwa15.com/" data-toggle="tooltip" title="Course web site">dwa 15</a>
      </footer>


      <!-- Jquery for the tool tip-->
      <script>
         $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();   
         });
      </script>
   </body>
</html>