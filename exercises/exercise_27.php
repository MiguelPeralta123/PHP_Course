<!-- 27. Forms -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>
    <body>
        <h1>Print name</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="type your name" />
            <input type="submit" value="Send" />
        </form>
        <?php
            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
                echo '<h3>Hello ' . $name . '!</h3>';
            }
            else {
                echo '<h3>Hello strange!</h3>';
            }
        ?>
    </body>
</html>