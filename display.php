<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $url = $_POST['rss_url'];
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $feed = simplexml_load_file($url);
            $feed = json_decode(json_encode($feed), true);

            if (isset($feed['channel'])) {
                if (isset($feed['channel']['item'])) {
                    echo "<div class='container'>";

                    foreach ($feed['channel']['item'] as $list) {
                        echo "<div class='item'>";
                        echo "<a href='" . $list['link'] . "' target='_blank'><h2 class = 'heading'>" . $list['title'] . "</h2></a>";
                        echo "<div class='desc'>" . $list['description'] . "</div>";
                        echo "</div>";
                    }

                    echo "</div>";
                } else {
                    echo "Invalid Item Link!";
                }
            } else {
                echo "Invalid Link!";
            }
        } else {
            echo "Please enter a valid URL.";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>