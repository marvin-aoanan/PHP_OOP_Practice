<?php
    require('user_validator.php');

    if(isset($_POST['submit'])) {
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();

        // save data in db if no errors.
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Form with Validator</title>
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <label>Username: </label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>">
            <div class="error"><?php echo $errors['username'] ?? '' ?></div>

            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">
            <div class="error"><?php echo $errors['email'] ?? '' ?></div>

            <input type="submit" value="submit" name="submit">
        </form>

    </div>
    
</body>
</html>