<?php

    date_default_timezone_set('Pacific/Easter');
    mb_internal_encoding('utf-8');

    require(__DIR__ . '/includes/FileCache.php');
    require(__DIR__ . '/includes/BlogFeed.php');

    $file = FileCache::get('http://eserozvataf.wordpress.com/feed/');
    $blogposts = BlogFeed::get($file);

    $languages = array('turkish', 'english');

    $queryString = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
    $language = trim($queryString);

    if (!in_array($language, $languages, true)) {
    	$language = 'english'; // by default
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />

    <title>Eser 'Laroux' Özvataf - eser.ozvataf.com</title>
    <meta name="description" content="Eser 'Laroux' Özvataf Personal Homepage" />
    <meta name="keywords" content="" />

    <link href="assets/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="all" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <link href="assets/css/fonts.css" rel="stylesheet" media="all" />
    <link href="assets/css/style.css" rel="stylesheet" media="all" />
</head>
<body id="body">

	<?php
		include(__DIR__ . '/content/' . $language . '.php');
	?>

    <script type="text/javascript" src="assets/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
