<!DOCTYPE html>
<html>
<head>
    <title>User form</title> <!--title of the page-->
</head>
<body>
      <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // check if the post method was used 
        $name = $_POST['name']; //check the information of the name field
        $action = $_POST['action']; // check which action the user selected register/login

        echo "Welcome! $name<br>"; //Show what the user filled in the form and display the Welcome message

        echo "Your age is: $name<br>"; // display a text + name of the user
    }
    ?>
</body>
</html>