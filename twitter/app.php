<?php
require_once('TwitterAPIExchange.php');
$settings = array(
    'oauth_access_token' => "1517890854-M3KSvLUrlT4pYKc5ftehmTuCS9ukRexYnIbg9rT",
    'oauth_access_token_secret' => "cYMY5Pehr2mKXdpmPn3K7J3xUI4Ifnfsssctdch8nsQv2",
    'consumer_key' => "8btgkkENoxJGVPFhuhzWg3QDz",
    'consumer_secret' => "ay88Z9Wqf7QFL6vDm1CLa7LpAt55EipE3ndoFlzslHuN25pfKW"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = 'GET';
$getfield = '?screen_name=shredder2351&count=20';

$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
foreach($string as $items)
    {
        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
    }
?>
