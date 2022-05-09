
<!--
name and last name : zahra madhar

class: sdev 328

project: creating a dating website

<link rel="stylesheet" href="../styles/second.css">
 --->
<?php
include 'Navbar.php';

if($_SERVER["REQUEST_METHOD"]=="GET")
{
 
    session_start();
    $_SESSION['firstname']=$_GET['fname'];
    $_SESSION['lastname']=$_GET['lname'];
    $_SESSION['Age']=$_GET['age'];
    $_SESSION['phone']=$_GET['pnumber'];



}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/second.css">


</head>

<body>

<hr>

<div class="container">
         <h1>Profile</h1>
        <hr class="hr1">
        <div id="Information">
`            <div class="box">

                <form action="third.php" method="GET">
                
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                
                    <label for="text">State</label>
                    <input type="text" name="state" id="">
              

                    <label for="radio">Seeking</label>
                
                    <input type="radio"  ><p>Male</p> 
                    <input type="radio"><p>Female</p> 
                

                    <button type="submit"> Next</button>
                </form>

               </div>
               <div class="box1">

<h2>Biography</h2>
<textarea name="" id="" cols="30" rows="10"></textarea>

               </div>
 </div>


</body>

</html>