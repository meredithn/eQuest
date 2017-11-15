<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
   $_SESSION['message'] = "User with that email doesn't exist!";
}
?>