<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $title ?></h1>
        <p>User logged in as <?= $username ?> using <?= $password ?></p>
 
        <!-- Expressions -->
        <h3>Temperature</h3>
        <p>Fahrenheit: <?= $temp ?> degrees</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
        <p>Temp Total: <?= $temp + $temp2 ?></p>
        
        <!-- Looping over arrays -->
        <h3>Bookmarks</h3>
        <p>First bookmark: <a href="<?= $bookmarks[0] ?>"><?= $bookmarks[0] ?></a></p>
        <?php foreach (($bookmarks?:[]) as $bookmark): ?>
            <li><a href="<?= $bookmark ?>"> <?= str_replace('http://', '', $bookmark); ?></a></li>
        <?php endforeach; ?>
        
        <h3>Dessert Options</h3>
        <?php foreach (($desserts?:[]) as $key=>$value): ?>
            <input type='checkbox' value='<?= $key ?>'/><?= $value ?></br>
        <?php endforeach; ?>
    </body>
</html>