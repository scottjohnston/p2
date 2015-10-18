<!DOCTYPE html>
<!--index.html Project 2 Scott Johnston dwa15-->
<html>
   <head>

      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <link rel="stylesheet" type="text/css" href="css/scottsCss.css">

      <!-- A bit of customization-->
      <title>Scott Johnston P2 Dynamic Web Apps</title>

   </head>
   <body>
      <div class="container" >

         <!-- This is the jumbotron for the site************************* -->
         <header class="jumbotron">
            <h1 class="centerHeading">Project 2 Password Generator<br><small>Scott Johnston</small></h1>
         </header>

         <!-- Links to the other projects-->
         <div class="row">
            <div class="center-block ">

               <nav class="navbar navbar-default  " role="navigation">
                <div class="navbar-header">

               <button type="button" class="navbar-toggle " data-toggle="collapse" data-tog="tooltip" title="Links" data-target="#example-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

               </button>


               </div>


               <div class="collapse navbar-collapse" id="example-navbar-collapse">

               <ul class="list-inline nav nav-tabs nav-justified ">
                  <li><a href="http://p1.scottvjohnston.me" data-tog="tooltip" title="Project 1"> Project 1</a></li>
                  <li><a href="https://github.com/scottjohnston/p1" data-tog="tooltip" title="Github P1">Git project 1</a></li>
                  <li><a href="http://p2.scottvjohnston.me" data-tog="tooltip" title="Project 2">Project 2</a></li>
                  <li><a href="https://github.com/scottjohnston/p2" data-tog="tooltip" title="Github P2">git project 2</a></li>
                  <li><a href="http://p3.scottvjohnston.me" data-tog="tooltip" title="Project 3">Project 3</a></li>
                  <li><a href="https://github.com/scottjohnston/p3" data-tog="tooltip" title="Github P3">git project 3</a></li>
                  <li><a href="#" data-tog="tooltip" title="Project 4">Project 4</a></li>
                  <li><a href="#" data-tog="tooltip" title="Github P4">git project 4</a></li>
               </ul>

            </div>
            </nav>



            </div>
         </div>


         <!-- instructions -->
         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6 form-group text scottsSection">
               <h2>Generate a password</h2>
               <p>
                  Select the number of words to include in your password.
                  Also select to have a space, a hyphen or camel case capitalization used as a separator between the words supplied.
                  Add in between 1 and 9 special characters between the words and any number you may have selected. Select if you want
                  a random number between 1 and 1000 added to the end.
               </p>
               <p>
                  If the number of words is not selected 4 words will be used
               </p>
            </section>


            <!--Where all the action is displayed -->
            <section id="#passwordSection" class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6 scottsSection">
                  <h3>Your password is below</h3>
                  <!--//here is where the logic for the password generator is called and displayed-->
                  <?php require_once "logic.php"; ?>
            </section>
         </div>


         <!--Where the form to select everything begins-->
         <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">

               <form action="index.php" method="get" class="form-horizontal" >

                  <div class="form-group">
                     <label for="numberOfWords">Number of words between 1 and 9
                        <input maxlength="1" min="0" type="number" name="numberOfWords" id="numberOfWords" value="" class="form-control scottsTextBox">
                     </label>
                  </div>
                  <div class="form-group radio">
                     <label>
                        <input type="radio" name="separator" value=" ">Use a space as a separator
                     </label>


                  </div>
                  <div class="form-group radio">
                     <label>
                        <input type="radio" name="separator" value="-">Use a - as a separator between the words
                     </label>
                  </div>

                  <div class="form-group radio">
                     <label>
                        <input type="radio" name="separator" value="camel">Use camel case as a separator between the words
                     </label>
                  </div>

                  <div class="form-group scottsPadding">
                     <label for="numSpecChar">Number of random special Characters between 1 and 9
                        <input maxlength="1" min="0" type="number" name="numSpecChar" id="numSpecChar" value="" class="form-control scottsTextBox">
                     </label>
                  </div>

                  <div class="form-group checkbox">
                     <label>
                        <input type="hidden" name="numberInc" value="">
                        <input type="checkbox" name="numberInc" value="1">Include a number between 1 and 1000?
                     </label>
                  </div>

                  <div class="form-group scottsPadding">
                     <label for="maximumLength ">Maximum character length
                        <input maxlength="3" min="0" type="number" name="maximumLength" id="maximumLength" value="" class="form-control scottsTextBox">
                     </label>
                  </div>

                  <p>
                     <input type="submit" value="Generate Password" class="btn btn-primary">
                  </p>
               </form>
            </div>
            <!-- end of the form-->

         </div>
      </div>
      <footer class="text-center">
         <a href="http://dwa15.com/" data-toggle="tooltip" title="Course web site">dwa 15</a>
      </footer>


      <!-- Jquery for the tool tip from w3c tutorials-->
      <script>
         $(document).ready(function(){
             $('[data-tog="tooltip"]').tooltip();
         });
      </script>

   </body>
</html>
