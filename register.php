<?php

require_once ('Forms/registration.form.class.php');
require_once ('db.php');
require_once ('password.class.php');

$msg = '';

$form = new RegistrationForm($_POST);


if ($_POST) {
    if($form->validate()){

        жопа

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