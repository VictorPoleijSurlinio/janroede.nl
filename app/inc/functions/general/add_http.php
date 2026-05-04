<?php
// CHECK URL HAD HTTP(S)
function add_http($url) {
    if(stripos($url, "http://") === FALSE && stripos($url, "https://") === FALSE) {
       return 'http://'.$url;
    } else {
        return $url;
    }
}