<?php

function redirect_test() {

    $ex_indps = ['9859', '8654', '8655', '2959', '2961', '1487']; //post_id

    $newBaseURL = '{root domain}'; //home_url();
    $r_url = $_SERVER["REQUEST_URI"];
    $url = str_replace('/dir_nameA', '', $r_url);

    foreach ($ex_indps as $ex) {
        if ($url == '/dir_nameB'.'/'.$ex) {
            $url = str_replace('dir_nameB', 'dir_nameC', $url);
        }
    }

    wp_redirect($newBaseURL.$url, 301);
    exit;
    //echo 'your request is「'.$url.'」!';
}
add_action('template_redirect', 'redirect_test', 11);