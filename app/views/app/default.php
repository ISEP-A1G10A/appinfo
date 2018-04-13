<!doctype html>
<html lang="<?php echo $this->s["main"]["language"] ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->displayCssFiles(); ?>
    <title><?php echo ucfirst($this->s[$this->page]["title"]) ?></title>
</head>
<body>
    <?php
    if (isset($_SESSION["user"]["id"]) && isset($_SESSION["user"]["role"])) {
        echo "USER CONNECTED WITH ID <b>" . $_SESSION["user"]["id"] . "</b> AND ROLE <b>" . $_SESSION["user"]["role"] . "</b><br>";
    }
    $this->renderNav();
    $this->renderContent();
    $this->displayJsFiles();
    ?>
</body>
</html>