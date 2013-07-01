<?php require_once("facebook.php");
    $app_id = "560435230666875";
    $app_secret = "394c373ae4c61d8c6e2062798513170e";
    $my_url = "http://beta.sauravmodak.com/nowplaying/phplogin.php";

session_start();

$code = $_REQUEST["code"];

if(empty($code)) {
    $_SESSION['state'] = md5(uniqid(rand(), TRUE)); // CSRF protection
    $dialog_url = "https://www.facebook.com/dialog/oauth?client_id="
        . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
        . $_SESSION['state'] . "&scope=publish_stream,status_update,offline_access";

    header("Location: " . $dialog_url);
}
if($_SESSION['state'] && ($_SESSION['state'] === $_REQUEST['state'])) {
    $token_url = "https://graph.facebook.com/oauth/access_token?"
        . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
        . "&client_secret=" . $app_secret . "&code=" . $code;

    $response = file_get_contents($token_url);
    $params = null;
    parse_str($response, $params);

    $_SESSION['access_token'] = $params['access_token'];

    $graph_url = "https://graph.facebook.com/me?access_token="
        . $params['access_token'];

    $user = json_decode(file_get_contents($graph_url));

    echo("Hello " . $user->name."<br />");
    $config = array(
        'appId' => '560435230666875',
        'secret' => '394c373ae4c61d8c6e2062798513170e',
    );
    $facebook = new Facebook($config);
    $facebook_id = $facebook->getUser();
    $facebook_access_token = $facebook->getAccessToken();
    echo "Your user id. ".$facebook_id."<br />";
    echo "Your access token. ".$facebook_access_token."<br />";
    $xml=simplexml_load_file("http://ws.audioscrobbler.com/1.0/user/uniquerockrz/recenttracks.rss");
    $song_title = $xml->channel->item->title;
    $song_link = $xml->channel->item->link;
    $status = "is listening to ".$song_title." #nowplaying";
    $params = array('access_token'=>$facebook_access_token, 'message'=>$status, 'link'=>$song_link);
    $url = "https://graph.facebook.com/$facebook_id/feed";
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_POSTFIELDS => $params,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_VERBOSE => true
    ));
    $result = curl_exec($ch);
    echo $result;
}
else {
    echo("The state does not match. You may be a victim of CSRF.");
}
?>