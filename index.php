<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

//autoload file
require_once('vendor/autoload.php');
require_once('model/data-layer.php');
require_once('model/validation.php');

//Create an instance of the Base class

$f3 = Base::instance();


//Define a default route

$f3->route('GET|POST /', function(){

    $view = new Template();
    echo $view->render('views/Dating.html');
});

$f3->route('GET|POST /first', function($f3){

    if($_SERVER['REQUEST_METHOD'] == 'POST') {


        $fname = $_POST['fname'];
        $f3->set('fname', $fname);

        $lname = $_POST['lname'];
        $f3->set('lname', $lname);

        $age = $_POST['age'];
        $f3->set('age', $age);

        $PhoneNumber = $_POST['PhoneNumber'];
        $f3->set('phone', $PhoneNumber);

        if (validFirst($fname)) {
            $_SESSION['fname'] = $fname;
        } else {
            $f3->set('errors["fname"]', 'please enter a valid first name');
        }


        if (validLast($lname)) {
            $_SESSION['lname'] = $lname;
        } else {
            $f3->set('errors["lname"]', 'Please enter a valid last name');
        }


        if (validAge($age)) {
            $_SESSION['age'] = $age;
        } else {
            $f3->set('errors["age"]', 'Please enter an age above 18');
        }


        if (validPhone($PhoneNumber)) {
            $_SESSION['PhoneNumber'] = $PhoneNumber;
        } else {
            $f3->set('errors["PhoneNumber"]', 'Please enter a valid phone number');
        }

        if (empty($f3->get('errors'))) {
            header('location: second');
        }
    }
    $_SESSION['gender'] = $_GET['gender'];
    $f3->set('gender', getGender());



    $view = new Template();
    echo $view->render('views/first.html');
});



$f3->route('GET|POST /second', function($f3){


    if  ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $f3->set('email', $email);

        //if seeking is set
        $seeking = isset($_POST['seeking']) ? $_POST['seeking'] : "";

        //state
        $state = $_POST['state'];


        if (validEmail($email)){
            $_SESSION['email'] = $email;
        }

        else{
            $f3->set('errors["email"]', 'Please enter a valid email');
        }


        if (validSeeking($seeking)){
            $_SESSION['seeking'] = $seeking;
        }

        else{
            $f3->set('errors["seeking"]', 'Please select a valid option');
        }

        if (validState($state)){
            $_SESSION['state'] = $state;
        }

        else{
            $f3->set('errors["state"]', 'Please select a valid state');
        }


        $_SESSION['biography'] = $_POST['biography'];

        //Redirect to profile route if there are no errors
        if (empty($f3->get('errors'))) {
            header('location: third');
        }
    }


    $f3->set('seeking', getseeking());
    $f3->set('state', getState());

    $view = new Template();
    echo $view->render('views/second.html');
});


$f3->route('GET|POST /third', function($f3){


    if  ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $indoor = [];
        $f3->set('indoor', $indoor);

        $outdoor = [];
        $f3->set('outdoor', $outdoor);

        //if seeking is set
       if (isset($_POST['indoor'])){

           $indoor= $_POST['indoor'];

           $f3 ->set ('indoor',$indoor);
       }
        if (isset($_POST['outdoor'])){

            $outdoor= $_POST['outdoor'];

            $f3 ->set ('outdoor',$outdoor);
        }

        //state


        if (validIndoor($indoor)|| empty($indoor)){
            $_SESSION['indoor'] = $indoor;
        }

        else{
            $f3->set('errors["indoor"]', 'Please select a valid option');
        }


        //if seeking is set
        $outdoor = isset($_POST['outdoor']) ? $_POST['outdoor'] : "";

        //state


        if (validOutdoor($outdoor)|| empty($outdoor)){
            $_SESSION['outdoor'] = $outdoor;
        }

        else{
            $f3->set('errors["outdoor"]', 'Please select a valid option');
        }



        //Redirect to profile route if there are no errors
        if (empty($f3->get('errors'))) {
            header('location: last');
        }
    }


    $f3->set('indoor', getIndoor());
    $f3->set('outdoor', getOutdoor());

    $view = new Template();
    echo $view->render('views/third.html');
});




$f3->route('GET|POST /last', function() {



    $view = new Template();
    echo $view->render('views/last.html');
});

//fat free
$f3->run();



