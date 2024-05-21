<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_SESSION["username"])) { 
?>
    <a href="logout.php" style="position: absolute; top: 10px; right: 10px;">Logout</a>
<?php
}
?>
<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'signindb') or die('Unable to connect');
?>



       <h2>LOGIN</h2>
       <div>
        <form action="process.php" method = "post">
            <input type="text" class="field" name="email" placeholder="email" required= ""><br>
            <input type="password" class="field" name="password" placeholder="password" required= ""><br>
            <input type="submit" class="field" name="LOGIN" value="LOGIN">

        </form> 
       </div>
</body>
</html>

</form>
    <?php
    if (isset($_POST['db'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
       

        $select = mysqli_query($conn, "SELECT * FROM signin_table WHERE  username ='$username'  password = '$password'");
        if (!$select) {
            die('Error: ' . mysqli_error($conn));
        }
        if(mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_array($select);
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid username or password!")';
            echo 'window.location.href = "db.php"';
            echo '</script>';
        }
        if(isset($_SESSION["name"])){
            header("location:bd.php");
        }
    }
    ?>

</body>
</html>
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
    font-family:Customs;
    background-color: #f0f0f0;
    padding: 20px;
}

/* Header styles */
h2 {
    text-align: center;
    margin-bottom: 20px;
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