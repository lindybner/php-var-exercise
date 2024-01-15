<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable Exercise</title>
</head>

<body>
    <h1>PHP Variable Exercise</h1>
    <h2>Instructions</h2>
    <p>$var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.</p>

    <?php
    $var = 'PHP Tutorial';
    ?>

    <h3><?= $var ?></h3>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
    <p><a href="https://www.w3resource.com/php/php-home.php">Go to the <?= $var ?>.</a></p>

</body>

</html>