<?php

require __DIR__ . '/../vendor/autoload.php';

use App\User;

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $user = new User($email, $pass);

    $res = $user->checkUser($email, $pass);

    if($res) {
        session_start();
        $_SESSION['email'] = $email;
        echo 'Congrats! You have been logged in with ' . $email . '<br />';
//        var_dump($_SESSION);
        echo '<a href="index.php">Go to the beginning</a>';
    } else {
        echo 'Error logging you in.';
    }

}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <h4>Please enter correct email and password</h4>
        <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Email: <input type="email" name="email"><br />
            Password: <input type="password" name="password"><br />
            <input type="submit" name="login" title="Login">
        </form>
    </body>
</html>

