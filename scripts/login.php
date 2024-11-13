<?php

require_once 'session.php';
require_once 'DB.php';
require_once 'helpers.php';
 
session_start();

if (isset($_POST['login'])) {
    $input = clean($_POST);

    $contact = $input['contact'];
    $password = $input['password'];

    if (($contact == "09063983125" || filter_var($contact, FILTER_VALIDATE_EMAIL) && $password == "adminRonin")) {
        $s = new stdClass();
        $s->name = "admin";
        $_SESSION['user'] = $s;

        header('Location: ../admin.php');
        exit();
    } else {
    
        $stmtProvider = DB::query("SELECT * FROM users WHERE (contact=? OR email=?) AND (password=? OR reset_token=?)", [$contact, $contact, $password, $password]);
        $provider = $stmtProvider->fetch(PDO::FETCH_OBJ);

        if ($provider) {
            $_SESSION['user'] = $provider;
            header('Location: ../staff.php');
            exit();
        } else {
            
            $stmtUser = DB::query("SELECT * FROM users WHERE (contact=? OR email=?) AND (password=? OR reset_token=?)", [$contact, $contact, $password, $password]);
            $user = $stmtUser->fetch(PDO::FETCH_OBJ);

            if ($user) {
               
                $userId = $user->id;

               
                $_SESSION['user'] = $user;
                $_SESSION['user_id'] = $user->id;
                $_SESSION['user_id'] = $userId;

                header('Location: ../user_index.php');
                exit();
            } else {
               
                header('Location: ../login.php?msg=failed');
                exit();
            }
        }
    }
}
?>
