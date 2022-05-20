<?php

echo htmlspecialchars($_SERVER["PHP_SELF"]);

$fname = $lname = $age= $PhoneNumber = "";

if (empty($_POST["fname"])) {

    $nameErr = "first Name is required";

} else {

    $name = test_input($_POST["fname"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

        $nameErr = "Only letters and white space allowed";

    }

}

if (empty($_POST["lname"])) {

    $nameErr = "last Name is required";

} else {

    $name = test_input($_POST["lname"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

        $nameErr = "Only letters and white space allowed";

    }

}

function validate_number($PhoneNumber){

    $valid_phone_number = filter_var($PhoneNumber, FILTER_SANITIZE_NUMBER_INT);

    echo $valid_phone_number."<br>";

}

function validateAge($age) {

    if (preg_match("/^[0-9]+$/", $age)) {

        return true;

    }

    return false;

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["fname"]);

    $age = test_input($_POST["age"]);

    $PhoneNumber= test_input($_POST["phone"]);



}

function test_input($data) {

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

}

?>
