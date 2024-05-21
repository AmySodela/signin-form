<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'entitiesdb') or die('Unable to connect');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logout Page</title>
</head>
<body>
    <div class="logout-form">
        <h2>Logout</h2>
        <form action="info.php" method="post">
            <p>Are you sure you want to log out?</p>
            <input type="submit" name="confirm" value="Yes" class="logout-button"><br>
            <form action="info.php" method="post">
            <input type="submit" name="confirm" value="No" class="cancel-button"><br>
        
        </form>
    </div>
    <?php

if (isset($_POST['process'])) {
    if ($_POST['process'] === 'Yes') {
        // User confirmed to logout
        // Perform logout actions
        // Unset all session variables
        $_SESSION = array();
        // Destroy the session
        session_destroy();
        // Redirect to a page after logging out
        header("Location: process.php");
        exit;
    } else if ($_POST['confirm'] === 'No') {
        // User canceled the logout
        // Redirect to a different page or display a message
        header("Location:process.php");
        exit;
    }
}
?>

<style>

    /* Resetting default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    background-image: url(image3.png);
    background-size: cover;
    background-repeat: no-repeat;
    font-family: Customs;
    background-color: #f0f0f0;
    padding: 20px;

}

.p{
    text-align: center;
}
/* Header styles */
h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 50px;
}

/* Form styles */
form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.field {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Submit button styles */
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Logout link styles */
a.logout {
    position: absolute;
    top: 10px;
    right: 10px;
    text-decoration: none;
    color: #333;
}

a.logout:hover {
    color: #000;
}
</style>

</body>
</html>