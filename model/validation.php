<?php


//validate firstname
function validFirst($fname): bool
{

    return strlen(trim($fname))>=2;
}


//validate lastname
function validLast($lname): bool
{

    return strlen(trim($lname))>=2;
}

//validate age
function validAge($age){
    return trim($age) >=18;
}

// validate phone
function validPhone($phone){
    return filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
}


// validate email
function validEmail($email){
    return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
}



function validseeking($seeking){

    if (in_array($seeking,getseeking())){

        return true;
    }


    return false;


}

function validState($state){

    if (in_array($state,getState())){

        return true;
    }


    return false;

}

function validIndoor($indoor){

    if (in_array($indoor,getIndoor())){

        return true;
    }


    return false;

}

function validOutdoor($outdoor){

    if (in_array($outdoor,getOutdoor())){

        return true;
    }


    return false;

}
















