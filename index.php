<?php

// Prevents random visitors from being tracked
if($_GET['key'] !== 'password')
    die;

// Credit: http://itman.in/en/how-to-get-client-ip-address-in-php/
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
} ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <p><strong>Please return to Adam Privette if found.</strong></p>
    <p>123 Sesame Street, New York, New York 12345</p>
    <p>(123) 456-7890</p>
    <p>aprivette@gmail.com</p>
    <script>
        var info={
        
            timeOpened:new Date(),
            timezone:(new Date()).getTimezoneOffset()/60,
            
            browser: navigator.appName,
            browserEngine: navigator.product,
            browserVersion1a: navigator.appVersion,
            browserVersion1b: navigator.userAgent,
            browserLanguage: navigator.language,
            browserPlatform: navigator.platform,
            dataCookiesEnabled: navigator.cookieEnabled,
            dataCookies1: document.cookie,
            dataCookies2: decodeURIComponent(document.cookie.split(";")),
        
            sizeScreenW: screen.width,
            sizeScreenH: screen.height,
            sizeDocW: document.width,
            sizeDocH: document.height,
            scrColorDepth: screen.colorDepth,
            scrPixelDepth: screen.pixelDepth,
        
        };
        
        $.ajax({
            url: '/1337.php',
            type: 'POST',
            data: { leet: info, ip: "<?php echo getRealIpAddr(); ?>" }
        });
        
    </script>
</body>
</html>