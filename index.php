<!DOCTYPE html>
<html>
    <head>
        <title>Bolyston Club</title>
		<meta charset="utf-8">
    </head>
    <body>
        <h1>LOGIN</h1>
        <form action="index.php" method="post">
            <label>Username</label><br>
            <input type="text" name="username">
            <br>
            <label>Email</label><br>
            <input type="text" name="email">
            <br>
            <label>Password</label><br>
            <input type="password" name="password">
            <br>
            <input type="submit">
        </form>
        <br>
        <h1>PIZZA ORDER</h1>
        <form action="index.php" method="get">
            <label>Pizza type</label><br>
            <input type="text" name="type">
            <br>
            <label>Pizza quantity</label><br>
            <input type="number" name="amount">
            <br>
            <label>Special instructions</label><br>
            <input type="text" name="special">
            <br>
            <label>Adress</label><br>
            <input type="text" name="adres">
            <br>
            <input type="submit">
        </form>
        <br>
    </body>
</html>
<?php
    echo $_POST["username"] . "<br>";
    echo $_POST["email"] . "<br>";
    echo $_POST["password"]. "<br>";
?>
<?php
    echo $_GET["type"]. "<br>";
    echo $_GET["amount"]. "<br>";
    echo $_GET["special"]. "<br>";
    echo $_GET["adres"]. "<br>";
?>