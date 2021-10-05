<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>

    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
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

        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo $_POST["name"];
        }
    ?>
</body>

</html>