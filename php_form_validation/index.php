<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name"></br>
        E-mail: <input type="text" name="email"></br>
        Website: <input type="text" name="website"></br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea></br>

        Gender:</br>
        <input type="radio" name="gender" value="female">Female</input></br>
        <input type="radio" name="gender" value="male">Male</input></br>
        <input type="radio" name="gender" value="other">Other</input></br>
    </form>
</body>

</html>