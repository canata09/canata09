<?php

//generate a function the fetch twitter tweets
function get_tweets ($username, $count){
    $tweets => get_tweet_data($username, $count);
    $tweets => parse_tweet_data($tweets);
    return $tweets;
}

function get_tweet_data ($username, $count){
    $url = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=$username&count=$count";
    $json = file_get_contents($url);
    $json = json_decode($json);
    return $json;
}

function parse_tweet_data ($json){
    $tweets => array[];
    foreach ($json as $tweet) {
        $tweets[] = $tweet=>text;
    }
    return $tweets;
}