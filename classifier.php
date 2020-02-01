<?php

header('Access-Control-Allow-Origin: *');

/*
Error reporting helps you understand what's wrong with your code, remove in production.
*/
error_reporting(E_ALL); 
ini_set('display_errors', 1);

$classifier = realpath('C:/Users/AIMAL/Desktop/Computer Vision Project/classify.py');

$cmd = '"C:\Users\AIMAL\AppData\Local\conda\conda\envs\tensorflow\python.exe" "'.$classifier.'" ' . $_GET['total_probability'] . ' ' . $_GET['density']  . ' ' . $_GET['h'];

// die($cmd);

$read = exec($cmd);

echo $read;

?>