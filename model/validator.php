<?php
function validfname($fname)
{
    if (strlen(trim($fname)) >=2){

    return true;

    }
    else{

        return false;
    }
}
