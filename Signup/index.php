<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'fitnessdb') or die('Unable to connect');
?>
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
    <a href="inedx.php" style="position: absolute; top: 10px; right: 10px;">Logout</a>
<?php
}
?>
<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'signindb') or die('Unable to connect');
?>


       <h2>LOGIN</h2>
       <div>
        <form action="index.php" method = "post">
        <input type="text" class="field" name="name" placeholder="name" required= ""><br>
            <input type="text" class="field" name="email" placeholder="email" required= ""><br>
            <input type="password" class="field" name="password" placeholder="password" required= ""><br>
            <input type="submit" class="field" name="LOGIN" value="LOGIN">

        </form> 
       </div>
        

<?php
    if (isset($_POST['index'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $id = $_POST['id'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $course = $_POST['course'];
        $birthdate = $_POST['birthdate'];

       

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
            echo 'window.location.href = "index.php"';
            echo '</script>';
        }
}
    if(isset($_SESSION["name"])){
        header("location:info.php");
    }
?>


</body>
</html>
<style>
  body {
      background-image: url(image3.png);
      font-family: Customs;
      background-size: cover;
      background-repeat: no-repeat;
      text-align: center;
      margin: 0;
      padding: 0;

  }
  
  .container {
      max-width: 150px;
      margin: 150px auto;
      padding: 150px;
      background-color: black;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
  }
  
  h2 {
      color: black;
      margin-top: 150px;
      font-family: Customs;
      font-size: 70px;
  }
  
  form {
      margin-top: 50px;
  }
  
  .field {
      margin: 10px;
      padding: 8px 50px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
  }
  
  .field[type="submit"] {
      margin: 150px;
      padding: 10px 100px;
      background-color: #fff;
      color: #000;
      cursor: pointer;
  }
  
  .field[type="submit"]:hover {
      background-color: #0056b3;
  }
</style>