<?php
    function sanitizeInput($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
    // var_dump($_POST);
    $name = $email = '';
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);

    echo 'User Name is '.$name.'<br>';
    echo 'User Email is '.$email.'<br>';
?>