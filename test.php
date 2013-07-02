<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $xml=simplexml_load_file("http://ws.audioscrobbler.com/1.0/user/uniquerockrz/recenttracks.rss");
            echo $xml->channel->item->title . "<br />";
            echo $xml->channel->item->link;
        ?>
    </body>
</html>