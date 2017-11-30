<?php

echo 'Hello new world.';

$access_token = 'nLV5oqCjlBiKJsoV9HASlhX4lyNkfi5ZcfiCRS+o0hDJ0LdS6Da0SvVIgLYvgnbu4Ughe1v6PCRVxRyNdlw5uq53R5QehyWx2VBGuv/bL+WwTZRsBL2mORUjiZ+F5CMUnUe3Jp8QmSgHEc2cMW6rNQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
