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
    $_SESSION['email']=$_GET['email'];
    $_SESSION['state']=$_GET['state'];

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/third.css">

</head>
<style>

</style>
<body>

<hr>

<h1>Interest</h1>
<table  class="mytable">
    <h2>In-door Interest</h2>
    <form action="last.php" method="GET">



        <tr>

            <td><input type="checkbox" name="info" value="TV">TV</input></td>
            <td><input type="checkbox" name="info" value="Movies">Movies</input></td>

            <td><input type="checkbox" name="info" value="Cooking">Cooking</input></td>
            <td><input type="checkbox" name="info" value="Boardgame">Board Game</input></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="info" value="Puzzels">Puzzels</input></td>
            <td><input type="checkbox" name="info" value="Reading">Reading</input></td>

            <td><input type="checkbox" name="info" value="Playing Cards">Playing Cards</input></td>
            <td><input type="checkbox" name="info" value="VideoGame">Video Game</input></td>
        </tr>

        <tr>
            <td colspan="4"><button type="submit">Next</button></td>
        </tr>

    </form>
</table>
</body>
</html>