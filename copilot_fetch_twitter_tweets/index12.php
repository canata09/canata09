<?php

    //generate a function the fetch twitter tweets
    function get_tweets($username, $count) {
        $url = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=$username&count=$count";
        $tweets = json_decode(file_get_contents($url));
        return $tweets;
    }

    //get the tweets
    function get_tweet($username, $count) {
        $tweets = get_tweets($username, $count);
        foreach ($tweets as $tweet) {
            echo $tweet->text;
        }
    }

    //generate a function the give me random password with 32 characters
    function generate_password($length = 32) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $password;
    }





?>