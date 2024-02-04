<!-- 11. PHP loop and conditional inside HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP inside HTML</title>
    </head>
    <body>
    <?php $names = ['Pratham', 'Simon', 'Amir', 'Vitto', 'Oliver'] ?>
        <h1>Names</h1>
        <ul>
            <?php foreach ($names as $name) : ?>
                <?php if ($name != 'Simon') : ?>
                    <li>
                        <?php echo $name ?>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </body>
</html>