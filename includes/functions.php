<?php

require 'dbh.inc.php';

function add_post($userid, $body){
    global $conn;
    $sql = "INSERT into posts (user_id, body, stamp) 
           values ($userid, '". mysqli_real_escape_string($conn, $body). "',now())";
 
    $result = mysqli_query($conn, $sql);
   
}

function show_posts($userid){
	global $conn;
    $posts = array();
 
    $sql = "select body, stamp from posts
     where user_id = '$userid' order by stamp desc";
    $result = mysqli_query($conn, $sql);
 
    while($data = mysqli_fetch_object($result)){
        $posts[] = array(   'stamp' => $data->stamp, 
                            'userid' => $userid, 
                            'body' => $data->body
                    );
    }
    return $posts;
 
}

?>