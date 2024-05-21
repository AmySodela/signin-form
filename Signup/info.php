<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (isset($_SESSION["username"])) { 
?>
    <a href="logout.php" style="position: absolute; top: 10px; right: 10px;">Logout</a>
<?php
}
?>

       <div>
        <form action = "db.php" method = "post">
        <h1>WELCOME STUDENT INFORMATION SYSTEM</h1>
     
    
        <input type = "submit" class = "field" name = "Get Started" value = "Gets Started">

        </form> 
       </div>
</body>
</html>
<style>
body {
    background-image: url(image3.png);
    font-family: Customs;
    background-size: cover;
    background-repeat: no-repeat;
    text-align: center;
    margin-top: 0;
    padding: 10%;
    display: right;
    justify-content: right; /* Align content to the right side */
}

.container {
    max-width: 250px;
    margin: auto;
    padding: 120px; /* Adjust padding for content spacing */
    background-color: black;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    color: white;
    font-family: Customs;
    font-size: 50px;
    margin-top: 150px;
    margin: 150px 150px; /* Adjust margin for better alignment */
}

form {
    margin-top: 100px;
}

.field {
    margin: 150px;
    padding: 8px 50px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.field[type="submit"] {
    margin: 150px 150px; /* Adjust margin for better alignment */
    padding: 10px 200px;
    background-color: blue;
    color: white;
    cursor: pointer;
}

.field[type="submit"]:hover {
    background-color: blue;
}
</style>
