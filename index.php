<html>
    <body>
        <h1><?php echo "Hello world!"; ?></h1>
        <form action="" method="get"> 
            <p>Your name:<input type="text" name="name"/> </p>
            <p>Your age:<input type="text" name="age"/> </p>
            <p><input type="submit"/></p>
        </form>
        Hello, <?php echo htmlspecialchars($_GET['name']);?><br>
        Age: <?php echo htmlspecialchars($_GET['age']); ?> old.
    </body>
</html>
