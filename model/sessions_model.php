<?php


function startSession(){
    session_start();

}


function removeSession(){
    session_unset();
    session_destroy();
}

?>