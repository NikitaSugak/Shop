<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Product list</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class='container'>
        <h1>Product list</h1>
        <a href="/addproduct"><input type="button" value="ADD" /></a>
        <form method="POST">
            <button name="button">MASS DELETE</button>
        </form>
        <hr>
        <?php
        include_once "controller/showListItems.php";
        ?>
    </div>
    <div class='footer'>
        <footer>
            <hr>
            <p>Scandiweb Test Assigment</p>
        </footer>
    </div>
</body>
</html>