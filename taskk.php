<!DOCTYPE html>
<html>
<head>
<title>task</title>
</head>
<body>
    <?php
    $name = $email =  "";
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $name = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        if (empty($_POST["email"])) {
            $email = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["password"])) {
            $password = "password is required";
        } else {
            $name = test_input($_POST["password"]);

    }
}
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<p><span class="error">* required field</span></p>
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <fieldset>
        <legend>REGISTRATION</legend>
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $name;?></span><br><hr>
        E-mail: <input type="email" name="email">
        <span class="error">* <?php echo $email;?></span><br><hr>
        Password:<input type="password" name="password">
        <span class="error">* <?php echo $password;?></span><br><hr>
        Your Image:<input type="file" id="myFile" name="filename"><br><hr>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

<?php
extract($_REQUEST);
$file=fopen("new.txt", "w");

fwrite($file,"Name :");
fwrite($file, $name ."/n");
fwrite($file,"Email :");
fwrite($file, $email ."/n");
fwrite($file,"password :");
fwrite($file, $password ."/n");
fclose($file);
?>

</body>
</html>