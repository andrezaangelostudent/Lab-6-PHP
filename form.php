<!DOCTYPE html>
<html>
<head>
    <title>User form</title> <!--title of the page-->
</head>
<body>
    <h1>Form</h1> <!--heading of the page-->
    <form method="post" action="display.php"> <!--link display.php in my index-->
        <label for="name">Name</label> <!--Name of the field-->
        <input type="text" name="name"><!--declare that is a text field-->
        <br><br> <!--space between text-->

        <label for="password">Password</label> <!--Name of the field-->
        <input type="password" name="password"> <!--declare that is a password field-->
        <br><br> <!--space between text-->

        <label for="action">Action</label> <!--create an action to the form, so when the user select login/ register an action can be done-->
        <select name="action">
            <option value="login">Login</option> <!--create the select option to login-->
            <option value="register">Register</option> <!--create the select option to register-->
        </select>
        <br><br> <!--space between text-->

        <input type="submit" value="Submit"> <!--create an input to submit the form-->
    </form>
</body>
</html>