<?php 


function randomPassword($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?" ;
    $password = array(); 
    
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, strlen($chars) - 1);
        $password[] = $chars[$n];
    }
    return implode($password);
}