<?php require __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html>
 <head prefix=
    "og: http://ogp.me/ns#
     fb: http://ogp.me/ns/fb#
     product: http://ogp.me/ns/product#">
    <meta property="og:type"                   content="og:product" />
    <meta property="og:title"                  content="100 Test Game Coins" />
    <meta property="og:description"            content="100 Coins To Buy and Enjoy!" />
    <meta property="og:image"                  content="<?= $serverUrl ?>/payments/coin.png" />
    <meta property="og:url"                    content="<?= $serverUrl ?>/payments/100coins.php" />
    <meta property="product:price:amount"      content="0.99"/>
    <meta property="product:price:currency"    content="USD"/>
    <meta property="product:price:amount"      content="0.93"/>
    <meta property="product:price:currency"    content="EUR"/>
 </head>
</html>
