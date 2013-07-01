<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>nowplaying - Your Last.fm activity on Facebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 20px;
            padding-bottom: 60px;
        }

            /* Custom container */
        .container {
            margin: 0 auto;
            max-width: 1000px;
        }
        .container > hr {
            margin: 60px 0;
        }

            /* Main marketing message and sign up button */
        .jumbotron {
            margin: 80px 0;
            text-align: center;
        }
        .jumbotron h1 {
            font-size: 100px;
            line-height: 1;
        }
        .jumbotron .lead {
            font-size: 24px;
            line-height: 1.25;
        }
        .jumbotron .btn {
            font-size: 21px;
            padding: 14px 24px;
        }

            /* Supporting marketing content */
        .marketing {
            margin: 60px 0;
        }
        .marketing p + h4 {
            margin-top: 28px;
        }


            /* Customize the navbar links to be fill the entire space of the .navbar */
        .navbar .navbar-inner {
            padding: 0;
        }
        .navbar .nav {
            margin: 0;
            display: table;
            width: 100%;
        }
        .navbar .nav li {
            display: table-cell;
            width: 1%;
            float: none;
        }
        .navbar .nav li a {
            font-weight: bold;
            text-align: center;
            border-left: 1px solid rgba(255,255,255,.75);
            border-right: 1px solid rgba(0,0,0,.1);
        }
        .navbar .nav li:first-child a {
            border-left: 0;
            border-radius: 3px 0 0 3px;
        }
        .navbar .nav li:last-child a {
            border-right: 0;
            border-radius: 0 3px 3px 0;
        }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://twitter.github.io/bootstrap/assets/ico/favicon.png">
    <script>
        function notifyScript() {     var evt = document.createEvent("Event");     evt.initEvent("notify", false, false);     if (document.getElementById("addthis-extension-script") == null) {        var d=document.createElement("div"); d.setAttribute("style", "display:none"); d.setAttribute("id", "addthis-extension-script");         if (window._ate)             d.textContent=_ate.pub();         else if(window.addthis_config && addthis_config.pubid)    d.textContent= addthis_config.pubid;        else if(window.addthis_config && addthis_config.username)    d.textContent= addthis_config.username;        else if(window.addthis_pub)    d.textContent= addthis_pub;        else             d.textContent="";         document.body.appendChild(d);     }    document.documentElement.dispatchEvent(evt); }notifyScript()</script><script>function notifyScript() {     var evt = document.createEvent("Event");     evt.initEvent("notify", false, false);     if (document.getElementById("addthis-extension-script") == null) {        var d=document.createElement("div"); d.setAttribute("style", "display:none"); d.setAttribute("id", "addthis-extension-script");         if (window._ate)             d.textContent=_ate.pub();         else if(window.addthis_config && addthis_config.pubid)    d.textContent= addthis_config.pubid;        else if(window.addthis_config && addthis_config.username)    d.textContent= addthis_config.username;        else if(window.addthis_pub)    d.textContent= addthis_pub;        else             d.textContent="";         document.body.appendChild(d);     }    document.documentElement.dispatchEvent(evt); }notifyScript()
</script>
</head>
<body>
<div class="container">
    <div class="masthead">
        <h3 class="muted">nowplaying</h3>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Scrobble To Facebook</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.navbar -->
    </div>