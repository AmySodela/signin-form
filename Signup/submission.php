<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
</head>
<body>
<div class="user-form">
    <h2>Login Form</h2>
    <form action="submission.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" class="submit-button" value="Submit">
    </form>
</div>

<?php
if (isset($_SESSION["login_successful"])) { 
?>
    <form action="logout.php" method="post">
        <input type="submit" class="logout-button" value="Logout">
    </form>
<?php
}
?>

<style>
body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
    text-align: center;
}

h2 {
    color: #333;
}

.user-form {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

input {
    padding: 8px;
    margin: 5px;
}

.submit-button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.logout-button {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #dc3545;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>

</body>
</html>