<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php

include('database_connection.php');

session_start();


?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
        <style type="text/css">
      .chat a:visited{
        color:white;
      }
      .chat a:link{
        color:white;
      }
      
    </style>
    <title>Dashboard</title>

  </head>
  <body>
    <div class="display-1 text">Anxiety Allayer</div>
    <nav  class="navbar navbar-expand-md navbar-light bg-light nav1 py-0 my-0">
      <div class="container">
      <a class="navbar-brand" href="#">AA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="HOME.php">Home <span class="sr-only"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events_mentee.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testkit.php">Quiz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mentors</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="dashboard_youtube.php">Inspirational Videos</a>
             <a class="dropdown-item" href="#">Peaceful Music</a></li>
             <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $_SESSION['username']; ?></a>
          </li>
         <li class="nav-item dropdown icon">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i>
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="#">My Profile</a>
             <a class="dropdown-item" href="#">Change Password</a>
         
          </li>
          
        </ul>

    </div>
  </div>
  
</nav>
<div class="chat">
<div class="container ">
    <div class="row">

      <div class="col-9">

        
      </div>
      <div class="col-2 blurb mb-5 mt-5  d-flex justify-content-end">
        <button type="button" class="btn btn-info btn-lg"><a href="index.php" class="chat">Chat with your favourite mentor and make yourself comfortable</a></button>
        
      </div>
  </div>
  <div class="row">
      <div class="col-9 thought">
        Thought Of The Day
       
      </div>
      <div class="col-2 blurb mb-5 mt-5  d-flex justify-content-end ml-4 ">
         <button type="button" class="btn btn-warning btn-lg">Wanna chat with the social community? Click here!</button>

      </div>
      
  </div>
  
    </div>
    
    </div>
    
    
</div>
 

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
