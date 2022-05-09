<!--zahra madhar




 --->
<?php

include 'Navbar.php';


?>
<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../styles/first.css">

    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
 
<!-- <h2>My Dating Website</h2> -->
<hr>
<div class="container">
         <h1>Personal Information</h1>
        <hr class="hr1">
        <div id="Information">
`            <div class="box">

                <form action="second.php" method="GET">
                
                    <label for="text">First Name</label>
                    <input type="text" name="fname" id="">
                
                    <label for="text">Last Name</label>
                    <input type="text" name="lname" id="">
              
                    <label for="text">Age</label>
                    <input type="text" name="age" id="">
                    
                    <label for="radio">Gender</label>
                    
                    <input type="radio" name="male" ><p>Male</p> 
                    <input type="radio"  name="female"><p>Female</p> 
                
                    <input type="radio" value="Java" name="Java"><p>Non Binary</p> 
               
                    <label for="text">Phone Number</label>
                    <input type="text" name="pnumber" id="">

                    

                    <button type="submit"> Next</button>
                </form>

               </div>
               <div class="box1">


<p>                Note:All Information entered in protected by our privacy policy Profile information can only be viewed by others </p>

               </div>
 </div>


</body>

</html>