<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'entitiesdb') or die('Unable to connect');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Information Form</title>
</head>
<body>
<?php
if (isset($_SESSION["username"])) { 
?>
    <a href="submit.php" style="position: absolute; top: 10px; right: 10px;">Logout</a>
<?php
}
?>
    <h2>Student Information Form</h2>
    <form action="logout.php" method = "post">
            <input type="text" class="field" name="name" placeholder="name" required = ""><br>
            <input type="age" class="field" name="age" placeholder="age" required = ""><br>
            <input type="id" class="field" name="id" placeholder="id" required = ""><br>
            <input type="gender" class="field" name="gender" placeholder="gender" required = ""><br>
            <input type="contact" class="field" name="contact" placeholder="contact" required = ""><br>
            <input type="course" class="field" name="course" placeholder="course" required = ""><br>
            <input type="birthdate" class="field" name="birthdate" placeholder="birthdate" required = ""><br>
            <form action="logout.php" method="Information Form">
            <input type="submit" class="field" name="next" value="next">
             <br>
    </form>
        

        </form>
    <?php
    if (isset($_POST['process'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $id = $_POST['id'];
        $course = $_POST['course'];
        $bitrhdate = $_POST['bitrhdate'];

        $select = mysqli_query($conn, "SELECT * FROM entities_table WHERE  username ='$username'  password = '$password' name = '$name' age = '$age' id = '$id' course = '$course' birthdate = '$birthdate'");
        if (!$select) {
            die('Error: ' . mysqli_error($conn));
        }
        if(mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_array($select);
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
            $_SESSION["name"] = $row['name'];
            $_SESSION["age"] = $row['age'];
            $_SESSION["id"] = $row['id'];
            $_SESSION["course"] = $row['course'];
            $_SESSION["birthdate"] = $row['birthdate'];
            
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid username or password!")';
            echo 'window.location.href = "process.php"';
            echo '</script>';
        }
        if(isset($_SESSION["name"])){
            header("location:process.php");
        }
    }
    ?>

</body>
</html>
<style>
    /* Resetting default margin and padding */
* {
    margin: 10px;
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