<?php
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];
echo $email."<br>".$pass;