<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>

    <meta property="og:type" content="websiite" />
    <meta property="og:title" content="Hi, from og-title" />
    <meta property="og:image" content="https://leffo.online/80141-01.jpg?msg=123456" />
    <meta property="og:description" content="Hi, og-meta-description" />
    <meta charset="UTF-8">
    <title>From title</title>
</head>
<body>
<h1>Hi, csocial!</h1>
<p>Share:</p>
<div class="ya-share2"
     data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp,moimir"
></div>
<img src="https://leffo.online/80141-01.jpg" alt="hij">
<?php
    echo ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http');
?>

<script src="https://yastatic.net/share2/share.js"></script>
</body>
</html>
