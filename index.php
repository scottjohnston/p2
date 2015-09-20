<!DOCTYPE html>
<html>
   <head>

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
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6 form-group text ">
               <h2>Password generator</h2>
               <p>
                  yada yad here is how it works!!!
               </p>
               <h4>

               <?php
                     //here is where the logic for the password generator is
                     require_once "logic.php";
               ?>
                  </h4>
               <br>
            </section>
         </div>
         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">
               

               <form action="index.php" method="get" class="form-horizontal" role="form">

                  <div class="form-group">
                     <label for="numberOfWords">Number of words
                        <input maxlength="1" type="text" name="numberOfWords" id="numberOfWords" value="" class="form-control"> 
                     </label>
                  </div>

                  <div class="form-group checkbox">
                     <label for="numberInc">
                        <input type="checkbox" name="numberInc" value="1">Include a number?
                     </label>
                  </div>

                  <div class="form-group radio">
                     <label>
                        <input type="radio" name="separator" value=" ">Use a space as a separator
                     </label>
                  </div>

                  <div class="form-group radio">
                     <label>
                        <input type="radio" name="separator" value="-">Use a - as a separator
                     </label>
                  </div>

                  <div class="form-group radio">
                     <label>
                        <input type="radio" name="separator" value="camel">Use camel case as a separator
                     </label>
                  </div>

                  <div class="form-group">
                     <label for="numSpecChar">Number of special Characters
                        <input maxlength="1" type="text" name="numSpecChar" id="numSpecChar" value="" class="form-control">
                     </label>
                  </div>

                  <div class="form-group">
                     <label for="maximumLength">Maximum Length
                        <input maxlength="2" type="text" name="maximumLength" id="maximumLength" value="" class="form-control">
                     </label>
                  </div>
                 
                  <p>
                     <input type="submit" value="Generate Password" class="btn btn-primary">
                  </p>
               </form>
            
            </section>


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