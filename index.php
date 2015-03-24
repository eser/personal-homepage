<?php

    date_default_timezone_set('Pacific/Easter');
    mb_internal_encoding('utf-8');

    require(__DIR__ . '/includes/FileCache.php');
    require(__DIR__ . '/includes/BlogFeed.php');

    $file = FileCache::get('http://eser.ozvataf.com/blog/feed/');
    $blogposts = BlogFeed::get($file);

    $languages = array('turkish', 'english');

    $queryString = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
    $language = trim($queryString);

    if (!in_array($language, $languages, true)) {
        $language = 'english'; // by default
    }

    ob_start();
    ob_implicit_flush(false);
    include(__DIR__ . '/content/' . $language . '.php');
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
