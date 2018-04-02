<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $this->s["404"]["title"] ?></title>
    <link rel="icon" href="<?php echo new URL("img/logos/domisep_mini.png"); ?>">
    <style type="text/css">
        html, body {
            height: 100%;
            padding: 0;
            margin: 0;
            text-align: center;
            font-family: roboto, sans-serif;
        }

        .center {
            margin-top: 50vh;
            transform: translateY(-50%);
            display: inline-block;
            padding: 40px;
            color: black;
        }

        .error404, .error-msg {
            text-align: center;
        }

        .error404 {
            font-size: 150px;
        }

        .error-msg {
            font-size: 50px;
            padding-left: 20px;
        }

        .quote {
            text-align: right;
            line-height: 25px;
        }

        .quote-author, .quote-movie, .quote-hyphen {
            display: inline-block;
        }

        .quote-hyphen, .quote-author {
            padding-left: 7px;
        }

        .quote-author {
            font-weight: 700;
            margin-right: -20px;
        }

        .quote-movie {
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="center">
        <div class="error">
            <span class="error404">404</span>
            <span class="error-msg"><?php echo $this->s["404"]["not_found"] ?></span>
        </div>
        <?php
        require 'quote.php';
        ?>
    </div>
</body>
</html>