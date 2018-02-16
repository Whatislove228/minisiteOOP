<?php
require_once ('register.php');
if ($_POST) {
    // something
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
    Email: <input type="email" name="email" value = "<?= $form->getEmail() ?>" /> <br/><br/>
    Username: <input type="text" name="username" value = "<?= $form->getUsername()?>" /> <br/><br/>
    Password: <input type="password" name="password"/> <br/><br/>
    Confirm password: <input type="password" name="passwordConfirm"/> <br/><br/>
    <input type="submit"/>
</form>

</body>
</html>

