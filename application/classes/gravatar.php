<?php

class Gravatar {

    public static function image($email, array $attributes = NULL, $protocol = NULL, $index = FALSE) {

        $query = array();

        $query["s"] = min(Arr::get($attributes, "height", 128), Arr::get($attributes, "width", 128), 128);

        $hash = md5(strtolower(trim($email)));

        return HTML::image("http://www.gravatar.com/avatar/$hash" . URL::query($query), $attributes, $protocol, $index);
    }

    public static function profile() {
        
    }

}
?>
