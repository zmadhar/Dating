<!--
name and last name : zahra madhar

class: sdev 328

project: creating a dating website


 --->
<?php

include 'Navbar.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap 4 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/Dating.css">
</head>
<body>
<!-- Here is the navbar -->

<!-- The container to hold both the image and text -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron text-center">
                <h1 class="display-6">My Dating Website</h1>
                <p class="text-left">Welcome to the web's most successful dating website. At My Dating
                    Website you'll meet another like-minded individuals. We have the
                    highest success rate of couples on the web. Users are matched by
                    interest and location. Find out why so many others have found love on
                    our site!</p>
                <h3>Hear what our users are saying about us.</h3>
                <hr class="my-4">
                <!-- Quotes -->
                <blockquote class="blockquote text-right">
                    <p class="mb-0 text-left"><i>"I met my love of my life only after a month" ~ <strong>Andrea</strong></i></p>
                </blockquote>
                <blockquote class="blockquote text-right">
                    <p class="text-left"><i>"I met the love of my life after only a month!" - Andrea
                        "It was so easy to set up and profile and start meeting people.
                        I didn't realize how many others were looking for love in my
                        area." -John Smith ~ <strong>John Smith</strong></i></p>
                </blockquote>
                <blockquote class="blockquote text-right">
                    <p class="text-left"><i>"Just try it. You'll never be the same." ~ <strong>Sarah</strong></i></p>
                </blockquote>
                <hr class="my-4">
                <!-- button -->
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="first.php" role="button">Create my Profile!</a>
                </p>
            </div>
        </div>
        <!-- image -->
        <div class="col">
            <img src="../images/dating.jpg" class="rounded float-right" alt="dating couple image">
        </div>
    </div>
</div>
</body>
</html>
