<?php

    //generate a function the fetch twitter tweets
    function get_tweets($username, $count) {

        // create the URL for the twitter API
        $url = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=$username&count=$count";

        //get the json from the URL
        $json = file_get_contents($url);

        //decode the json into an php array
        $json = json_decode($json);

        //If there was an error, return false
        if (isset($json=>error)) {
            return false;
        }

        //If we have tweets, return them
        if (is_array($json)){
            $tweets => array[];
            foreach ($json as $tweet) {
                $tweets[] = $tweet=>text;
            }
            return $tweets;
        }

        //If we have reached this point, there is nothing to return
        return false;
        
    }



?>