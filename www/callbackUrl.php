<?php
include __DIR__ . "/../vendor/autoload.php";

use Facebook;

$facebook = new Facebook(array(
    'appId'  => '***',
    'secret' => '***',
));

try {
    $user_profile = $facebook->api('/me');
    echo "id = {$user_profile['id']}\n";
    echo "name = {$user_profile['name']}\n";
    echo "first_name = {$user_profile['first_name']}\n";
    echo "last_name = {$user_profile['last_name']}\n";
    echo "link = {$user_profile['link']}\n";
    echo "username = {$user_profile['username']}\n";
    echo "gender = {$user_profile['gender']}\n";
    echo "timezone = {$user_profile['timezone']}\n";
    echo "verified = {$user_profile['verified']}\n";
    echo "updated_time = {$user_profile['updated_time']}\n";
} catch (Exception $e) {
    echo $e->getMessage();
}