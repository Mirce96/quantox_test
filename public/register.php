<?php

require __DIR__ . '/../vendor/autoload.php';

use App\User;


if(isset($_POST['register'])) {

    $name = null;
    $surname = null;
    $email = null;
    $password = null;
    $repeatPassword = md5(trim($_POST['repeat_password']));

    if(strlen(trim($_POST['name'])) > 1) {
        global $name;
        $name = trim($_POST['name']);
    } else {
        echo 'Name must be longer than 2 characters<br />';
        echo 'Please enter correct name<br />';
    }

    if(strlen(trim($_POST['surname'])) > 1) {
        global $surname;
        $surname = trim($_POST['surname']);
    } else {
        echo 'Surname must be longer than 2 characters<br />';
        echo 'Please enter correct surname<br />';
    }

    if(filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) == trim($_POST['email'])) {
        global $email;
        $email = trim($_POST['email']);
    } else {
        echo 'Entered email does not have valid format!<br />';
        echo 'Please enter correct email<br />';
    }

    if(strlen($_POST['password']) > 0 && strlen($_POST['repeat_password']) > 0) {
        if ($_POST['password'] == $_POST['repeat_password']) {
            global $password;
            $password = md5(trim($_POST['password']));
        } else {
            echo 'Passwords do not match<br />';
            echo 'Please enter same passwords in both fields<br />';
        }
    } else {
        echo 'You must enter value for password<br />';
    }

    if(!is_null($name) &&
        !is_null($surname) &&
        !is_null($email) &&
        !is_null($password)
        ) {
        $newUser = new User($email, $password, $name, $surname);

        $res = $newUser->registerUser();
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h4>Please enter registration details.</h4>
        <h5>All fields are required</h5>
        <form name="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Name: <input type="text" name="name"><br />
            Surname: <input type="text" name="surname"><br />
            Email: <input type="email" name="email"><br />
            Password: <input type="password" name="password"><br />
            Repeat Password: <input type="password" name="repeat_password"><br />
            <input type="submit" name="register" value="Register">
        </form>
    </body>
</html>
