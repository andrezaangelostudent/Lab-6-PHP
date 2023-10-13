<!DOCTYPE html>
<html>
<head>
    <title>User form</title> <!--title of the page-->
</head>
<body>
    
    <?php

    function updateName($newName) { // function that updates the user name
    return   $newName; // print the new name 
    }

    $newName = updateName("Updated name: Nataly"); // function that will update the name
    echo "<p>" . $newName . "</p>"; //print the new name

    $forms = array("user1", "user2", "user3", "user4"); //create an array with values

    echo "Hostnames: <br> "; // print Hostname
    foreach ($forms as $form) { // creat a foreach loop with the array values
        echo $form . "<br>"; // print the array values
    }

    include_once("Form.php"); // include once in php
    include_once("Display.php"); // include once display php

    ?>
</body>
</html>