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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/third.css">
    <title>Interests</title>

</head>
<style>

</style>
<body>

<hr>


    <table  class="mytable">
        <h1>In-door Interest</h1>

     <form action="last.php" method="GET">




         <td><label>
                 <input type="checkbox" name="info" value="TV">
             </label>TV</input></td>
         <td><label>
                 <input type="checkbox" name="info" value="Movies">
             </label>Movies</input></td>

         <td><label>
                 <input type="checkbox" name="info" value="Cooking">
             </label>Cooking</input></td>
         <td><label>
                 <input type="checkbox" name="info" value="Boardgame">
             </label>Board Game</input></td>
         <tr>

      <td><label>
              <input type="checkbox" name="info" value="Puzzels">
          </label>Puzzels</input></td>
        <td><label>
                <input type="checkbox" name="info" value="Reading">
            </label>Reading</input></td>

        <td><label>
                <input type="checkbox" name="info" value="Playing Cards">
            </label>Playing Cards</input></td>
        <td><label>
                <input type="checkbox" name="info" value="VideoGame">
            </label>Video Game</input></td>
    </tr>

     <tr>
         <title>out-door Interest</title>
     </tr>


         <tr>
             <td><label>
                     <input type="checkbox" name="info" value="hiking">
                 </label>hiking</input></td>
             <td><label>
                     <input type="checkbox" name="info" value="biking">
                 </label>biking</input></td>

             <td><label>
                     <input type="checkbox" name="info" value="swimming">
                 </label>swimming</input></td>
             <td><label>
                     <input type="checkbox" name="info" value="collecting">
                 </label>collecting</input></td>
         </tr>
         <tr>
             <td><label>
                     <input type="checkbox" name="info" value="climbing">
                 </label>climbing</input></td>
             <td><label>
                     <input type="checkbox" name="info" value="walking">
                 </label>walking</input></td>

         </tr>


         <tr>
        <td colspan="4"><button type="submit">Next</button></td>
    </tr>

</form>
    </table>
</body>
</html>