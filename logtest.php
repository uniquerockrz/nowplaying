<html>
<head>
    <title>Test Facebook App</title>
</head>
<body>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
        appId      : '560435230666875',                        // App ID from the app dashboard
        status     : true,                                 // Check Facebook Login status
        xfbml      : true,                                  // Look for social plugins on the page
        cookie     : true
    });
    // Additional initialization code such as adding Event Listeners goes here
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            testAPI();
            // connected
        } else if (response.status === 'not_authorized') {
            // not_authorized
            login();
        } else {
            // not_logged_in
            login();
            }
        });
    };
    function login() {
        FB.login(function(response) {
            if (response.authResponse) {
                // connected
                testAPI();
            } else {
                // cancelled
            }
        });
    }
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Good to see you, ' + response.name + '.');
        });
    }
    // Load the SDK asynchronously
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>