<?php
session_start();
require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "tedxceg";
$notweets = 30;
$consumerkey = "SeLbxEMbUf7YTFunUZb7w";
$consumersecret = "LKG8E99J67q1Bz710kUMcg8QYUwPw1R8woZQU3AC08";
$accesstoken = "430724573-IN7aHvUs7GK9V8IfLXEYYwMZDxo9kY16i6yZIkUQ";
$accesstokensecret = "qZL5yFcLPifVAiWYNpfN7VM37LI1oAwixjPe5n6DyQ";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>