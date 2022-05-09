

<!--
name and last name : zahra madhar

class: sdev 328

project: creating a dating website


 --->


<?php
include 'Navbar.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='GET')
{
    $_SESSION['info']=$_GET['info'];
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/last.css">

</head>

<body>

<hr>

<table>

<tr>
    <td>    <table>
    <tr>
        <td>

            <tr><td>Name :   <?php  echo $_SESSION['firstname']  ?> </td></tr>
        <tr><td>Gender : Male <td></tr>
        <tr><td>Phone :<?php  echo $_SESSION['phone']  ?> </td></tr>
        <tr><td>Email  :  <?php  echo $_SESSION['email']  ?> </td></tr>
    
        <tr><td>State :  <?php  echo $_SESSION['state']  ?>  <td></tr>
        <tr><td>Seeking :Male </td></tr>
        <tr><td>Interest   <?php  echo $_SESSION['info']  ?></td></tr>
    
    </td>

    </tr>

    
    </table></td>
    <td><img src="../images/person.jpg" alt=""><h1>BioGraphy</h1>


</td>
</tr>


</table>

  <button type="submit"> Next</button>


</body>
</html>
