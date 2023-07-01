<?php

namespace App\Lib;

class MyFunc
{
    public static function isCurrentUser($current_user, $post_user_id)
    {
        return $current_user == $post_user_id;
    }
}
