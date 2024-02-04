<!-- 28. Project 6.- Contact form -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact form</title>
    </head>
    <body>
        <h1>Contact form</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="name" />
            <input type="text" name="email" placeholder="email" />
            <input type="text" name="message" placeholder="message" />
            <input type="submit" value="Submit" />
        </form>
        <?php
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                $array = [
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "message" => $_POST['message'],
                    "date" => date('d-m-y h:i:s')
                ];
                $json = json_encode($array);
                echo $json;
            }
            else {
                echo 'All fields are required';
            }
        ?>
    </body>
</html>