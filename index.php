<?php 
session_start();

	include('includes/dbconnection.php');
	include('includes/functions.php');

	//$user_data = check_login($con);

?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Intelivest</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    
    

    <header>    
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">Intelivest</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">

            <li class="nav-item">
                <a class="nav-link" href="finTrack.php">Tracker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stock.php">Stocks</a>
            </li>
            <li class="nav-item">
                <a class = "nav-link" href="logout.php">Logout</a>
            </li>
            </ul>
        </div>
        </nav>


         <div class ="mid">
            <video autoplay muted loop>
                <source class="embed-responsive" src="networkvid.mov" type="video/mp4">
            </video>    
            <div class="hero text-center">
                <h2 class = "text-light display-4 font-weight-bold">Take control of your future</h2>
                <p class="text-light mx-auto">Financial fitness is not pipe dream or a state of mind, it’s a reality if you are willing to pursue it and embrace it.</p>
                <a class="text-dark" href="#">Get Started</a>
            </div>
        </div>



    </header>

    <section class="about py-5">
        <div class="row align-items-center container my-5 mx-auto">
            <div class = "text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <h6>FINANCES MADE EASY</h6>
                <h2>Monitor expenses with ease</h2>
                <p>Intelivest provides a quick and easy way to monitor your finances.
                    The built in tool allows you to track purchases to better undertsand your 
                    spending habits.
                </p>
                <a class="text-dark" href="finTrack.php">Learn More</a>
            </div>
            <div class = "img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <img class = "img-fluid"  src="saving2.png">
            </div>
        </div>
    </section>


    <section class="discovery py-5">
        <div class="row align-items-center container my-5 mx-auto">
            <div class = "img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <img class = "img-fluid"  src="stocks.jpg">
            </div>
            <div class = "text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <h6>Let your money grow</h6>
                <h2>Stock Suggestions catered to you!</h2>
                <p>Stocks could be very difficult to approach without the proper knowledge
                    and research. With our stock suggestion algorithm, we recomend stocks that 
                    are suited for your financial situation.
                </p>
                <a href="#">Learn More</a>
            </div>
        </div>
    </section>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>