<?php

    require __DIR__ . '/local/bootstrap.php';

    $queryString = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
    $segments = explode('/', $queryString);

    if (strncasecmp($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'tr', 2) === 0) {
        $defaultLanguage = 'turkish';
    } else {
        $defaultLanguage = 'english';
    }

    $languages = array('turkish', 'english');
    if (isset($segments[0])) {
        $language = trim($segments[0]);
        if (!in_array($language, $languages, true)) { // failsafe
            $language = $defaultLanguage;
        }
    } else { // by default
        $language = $defaultLanguage;
    }

    $pages = array('home', 'resume', 'contact');
    if (isset($segments[1])) {
        $page = trim($segments[1]);
        if (!in_array($page, $pages, true)) { // failsafe
            $page = 'home';
        }
    } else { // by default
        $page = 'home';
    }

    ob_start();
    ob_implicit_flush(false);
    include(BASE_DIR . 'content/' . $language . '/' . $page . '.php');
    $contents = ob_get_contents();
    ob_end_clean();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />

    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="<?= $keywords ?>" />

    <link href="assets/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="assets/styles/main.min.css" rel="stylesheet" media="all" />
</head>
<body id="body">

    <?= $contents ?>

    <script data-cfasync="false" src="assets/scripts/main.min.js"></script>

</body>
</html>
