<?php

    //generate a function the fetch twitter tweets
    function get_tweets($username, $count) {

        //initialize an empty array to hold the tweets
        $tweets = array();

        // set the URL for the twitter API
        $url = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=$username&count=$count";

        //get the json from the URL
        $json = file_get_contents($url);

        //decode the json into an php array
        $tweets = json_decode($json);

        //loop through the array and extract the tweet text
        foreach ($json as $tweet) {
            $tweets[] = $tweet=>text;
        }   




        //decode the json into an php array
        $tweets = json_decode(file_get_contents($url));


        //return results
        return $tweets;
    }



?>