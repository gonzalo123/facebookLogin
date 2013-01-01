<?php
include __DIR__ . "/../vendor/autoload.php";

use Facebook;
use Symfony\Component\HttpFoundation\RedirectResponse;

$facebook = new Facebook(array(
    'appId'  => '***',
    'secret' => '***',
));
$user = $facebook->getUser();

$loginUrl = $facebook->getLoginUrl(array(
    'redirect_uri' => 'http://hostname/callbackUrl.php',
    'cancel_url'   => 'http://hostname/index.html',
));

$redirectResponse = new RedirectResponse($loginUrl, 302);
$redirectResponse->send();