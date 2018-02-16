<?php

require_once ('Forms/registration.form.class.php');
require_once ('db.php');
require_once ('password.class.php');

$db_host = "127.0.0.1";
$db_user = "root";
$db_password = "56584978";
$db_name = "RegistrationOOP";


$msg = '';
$db = new DB($db_host, $db_user, $db_password, $db_name);
$form = new RegistrationForm($_POST);


if ($_POST) {
    if($form->validate()){
        $email = $db->escape($form->getEmail());


    }

} else {
    $msg = $form->passwordMatch()?  'Please fill in fields' : 'Password don\'t match';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h1>Register new user</h1>

<br/>
<form method="post">
    Email: <input type="email" name="email" /> <br/><br/>
    Username: <input type="text" name="username" /> <br/><br/>
    Password: <input type="password" name="password"/> <br/><br/>
    Confirm password: <input type="password" name="passwordConfirm"/> <br/><br/>
    <input type="submit"/>
</form>

</body>
</html>