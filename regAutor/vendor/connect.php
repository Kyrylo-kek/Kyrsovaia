<?php
$connect = mysqli_connect('localhost', 'root', '', 'dbgadget');
    if(!$connect){
        die('Error');
    }